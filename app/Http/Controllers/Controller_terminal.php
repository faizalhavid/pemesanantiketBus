<?php

namespace App\Http\Controllers;

use App\Models\Terminal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Controller_terminal extends Controller
{
    public function index(){
        $data=Terminal::all();
        return view ('terminal/dataterminal',compact('data'),["title"=>"Data Terminal"]);
    }
    public function tambah_terminal(){
        return view ('terminal/tambah_terminal',["title"=>"Tambah Data Terminal"]);
    }
    public function proses_tambah(Request $request){
        Terminal::create($request->all());
        return redirect()->route('terminal');
    }

    public function edit_terminal($id){
        $data=Terminal::find($id);
        return view ('terminal/edit_terminal',compact('data'),["title"=>"Edit Data Terminal"]);
    }
    public function proses_edit(Request $request,$id){
        $data = Terminal::find($id);
        $data->update($request->all());
        return redirect()->route('terminal');
    }
    public function delete($id){
        $data = Terminal::find($id);
        $data->delete();
        return redirect()->route('terminal');
    }
}
