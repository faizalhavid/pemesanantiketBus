<?php

namespace App\Http\Controllers;

use illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Bus;


class Controller_bus extends Controller
{
    public function index() {
        $data = Bus::all();

        return view('bus/index', ['data' => $data,"title"=>"Data Bus"]);
    }

    public function tambahbus(){
        return view('bus/tambahbus',["title"=>"Tambah Data Bus"]);
    }

    public function insertbus(Request $request){
        Bus::create($request->all());
        return redirect()->route('bus');
    }

    public function edit_bus($id){
        $data = Bus::find($id);
        return view('bus/tampildata', compact('data'),["title"=>"Edit data bus"]);
    }

    public function updatedata(Request $request, $id){
        $data = Bus::find($id);
        $data->update($request->all());
        return redirect()->route('bus');
    }

    public function delete($id){
        $data = Bus::find($id);
        $data->delete();
        return redirect()->route('bus');
    }

    public $db;
    public function databulan(){
        $db = Bus::latest()->limit(50)->get();
        foreach($db as $item){
            $data['label'][] = $item->nama_bus;
            $data['data'][] = (int)$item->jumlah_bus;
        }
        $this->db = json_encode($data);
        // dd($this->db);
        return view('bus/databulan', ['db' => $this->db]);
    }
}