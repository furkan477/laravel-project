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
        Task::where('id',$id)->where('user_id', auth()->user()->id)->delete;
        return redirect('/home');
    }
    public function taskAdd_()
    {
        return view('taskAdd');  
    }
    public function taskAdd(FormTaskAddRequest $request)
    {
        auth()->user()->tasks()->create($request->validated());

        return redirect('/home');
    }
    public function taskEdit(Task $task)
    {
        return view('taskUpdate', compact('task'));
    }
    public function taskUpdate(FormTaskUpdateRequest $requesst, Task $task)
    {
        $task->update($requesst->validated());
        return redirect('/home');
    }
    
}
