<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesan;
use PhpParser\Node\Stmt\Return_;

class Controller_pemesan extends Controller
{
    public function index() {
        $data = Pemesan::all();
        $no = 1;
        return view('pemesan/datapemesan',compact('data'), ['no'=> $no,'title'=>'Data Pemesan']);
    }

    public function tambahpemesan() {
        return view('pemesan/tambahpemesan',["title"=>"Tambah Data Pemesan"]); //balikin tampilan
    }

    public function insertpemesan(Request $request) {
        Pemesan::create($request->all());
        return redirect()->route('pemesan');
    }

    public function edit_pemesan(Request $request, $id) {
        $data=Pemesan::find($id);
        return view ('pemesan/edit_pemesan',compact('data'),["title"=>"Edit Data Terminal"]);
    }
    public function update_pemesan(Request $request, $id){
        $data = Pemesan::find($id);
        $data->update($request->all());
        return redirect()->route('pemesan');
    }

    public function delete_pemesan($id){
        $data = Pemesan::find($id);
        $data->delete();
        return redirect()->route('pemesan');
    }

}

