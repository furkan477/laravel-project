<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function home_()
    { 
        return view('/home/home');
    }

    public function flightAdd(Request $request)
    {
        $nereden = $request->from_where;
        $nereye = $request->to_where;
        $yetiskin = $request->adult;
        $cocuk = $request->child;
        $bebek = $request->baby;
        $ogrenci = $request->student;
        $gidis = $request->departure_date;
        $gelis = $request->arrival_date;

        Flight::create([
            "from_where" => $nereden,
            "to_where" => $nereye,
            "adult" => $yetiskin,
            "child" => $cocuk,
            "baby" => $bebek,
            "student" => $ogrenci,
            "departure_date" => $gidis,
            "arrival_date" => $gelis,
            
        ]);

        return redirect('/login');

    }
}
