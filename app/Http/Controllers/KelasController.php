<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $data = Kelas::all();
        return view('kelas.datakelas', compact('data'));
    }

    public function create(){
        return view('kelas.tambahkelas');
    }

    public function store(Request $request){
        // dd($request);
        $this->validate($request, [
            'namakelas' => 'required',
            'walikelas' => 'required',
        ]);
        Kelas::create($request->all());
        return redirect()->route('kelas');
    }

    public function tampilankelas ($id){
        $data = Kelas::find($id);
        return view('kelas.editkelas', compact('data'));
    } 

    public function update(Request $request, $id){
        $data = Kelas::find($id);
        $data ->update($request->all());
        return redirect()->route('kelas');
    }

    public function destroy($id){
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas');
    }
}
