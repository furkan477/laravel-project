<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Flight;

class FlightController extends Controller
{
    public function home()
    {
        $flight = Flight::all();
        return view('home',compact('flight'));  
    }
    public function flightAdd_()
    {
        return view('flightadd');  }

    public function flightAdd(Request $request)
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;  
            Flight::create([
                "user_id" => $user_id,
                "nereden" => $request->nereden,
                "nereye" => $request->nereye,
                "gidis_tarihi" => $request->gidis_tarihi,
                "gelis_tarihi" => $request->gelis_tarihi,
                "progress" => $request->progress,
                "status" => $request->status,
            ]);
    
            return redirect('/home');
        } 
    }

    public function flightUpdate_()
    {  $flights = Flight::all();
       return view('flightUpdate',compact('flights'));  }

    public function flightUpdate($id,Request $request)
    {
        Flight::where("id",$id)->update([
            "nereden" => $request->nereden,
            "nereye" => $request->nereye,
            "gidis_tarihi" => $request->gidis_tarihi,
            "gelis_tarihi" => $request->gelis_tarihi,
            "progress" => $request->progress,
            "status" => $request->status,
        ]);

        return redirect('/home');
    }

    public function delete($id)
    {
        Flight::findOrFail($id)->delete();
        return redirect('/home');
    }

}
