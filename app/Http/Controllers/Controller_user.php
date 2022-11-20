<?php

namespace App\Http\Controllers;

use App\Models\Pemesan;
use App\Models\Terminal;
use Illuminate\Http\Request;

class Controller_user extends Controller
{
    public function index(){
        $ter = Terminal::all();
        $no = 1;
        return view('user/landingpage',compact('ter','no'),["title"=>"Home"]);
    }
    public function insertUserpemesan(Request $request) {
        Pemesan::create($request->all());
        return redirect()->route('reservasipage');
    }
    public function reservasipage(){
        return view('user/reservasipage',['title'=>'Booking tiket']);
    }
}
