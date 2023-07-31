<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gorev;


class GorevController extends Controller
{
    public function home()
    {
        $users = gorev::all();

        return view('home', compact('users'));
    }

    public function update()
    {
        $kullanicilar = gorev::all(); 

        return view('update', compact('kullanicilar'));

    }

    public function add()
    {

        return view('taskAdd');

    }

    public function join(Request $request)
    {
            $title=$request->title;
            $description=$request->description;
            $progress=$request->progress;
            $status=$request->status;
            $start_date=$request->start_date;
            $end_date=$request->end_date;
            gorev::create([
                "title"=>$title,
                "description"=>$description,
                "progress"=>$progress,
                "status"=>$status,
                "start_date"=>$start_date,
                "end_date"=>$end_date
            ]);
            return redirect('/home');
    }

    public function delete($id)
    {
        gorev::findOrFail($id)->delete();
        return redirect('/home');
    }

    public function edit($id,Request $request)
    {
        $title=$request->title;
        $description=$request->description;
        $progress=$request->progress;
        $status=$request->status;
        $start_date=$request->start_date;
        $end_date=$request->end_date;
        gorev::where("id",$id)->update([
            "title"=>$title,
            "description"=>$description,
            "progress"=>$progress,
            "status"=>$status,
            "start_date"=>$start_date,
            "end_date"=>$end_date
        ]);
        return redirect('/home');
    }
}
