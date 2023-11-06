<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormTaskAddRequest;
use App\Http\Requests\FormTaskUpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TaskController extends Controller
{
    public function home()
    {
        $User = auth()->user();
        $task = $User->tasks;

        return view('home',compact('task'));
 
    }

    public function delete($id)
    {
        Task::findOrFail($id)->delete();
        return redirect('/home');
    }
    public function taskAdd_()
    {
        return view('taskAdd');  
    }
    public function taskAdd(FormTaskAddRequest $request)
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;  
            Task::create([
                "user_id" => $user_id,
                "task_type" => $request->task_type,
                "task_description" => $request->task_description,
                "task_start_date" => $request->task_start_date,
                "task_end_date" => $request->task_end_date,
                "task_progress" => $request->task_progress,
                "task_status" => $request->task_status,
            ]);
    
            return redirect('/home');
        } 
    }
    public function taskEdit(Task $task)
    {
        return view('taskUpdate', compact('task'));
    }
    public function taskUpdate(FormTaskUpdateRequest $requesst, Task $task)
    {
        $task->update($requesst->all());
        return redirect('/home');
    }
 
}
