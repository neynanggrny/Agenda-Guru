<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $data = Guru::all();
        return view('guru.dataguru', compact('data'));
    }

    public function create(){
        return view('guru.tambahguru');
    }

    public function store(Request $request){
        // dd($request);
        $this->validate($request, [
            'nama' => 'required',
            'nik' => 'required',
            'matapelajaran' => 'required'
        ]);
        Guru::create($request->all());
        return redirect()->route('guru');
    }

    public function tampilan ($id){
        $data = Guru::find($id);
        return view('guru.editguru', compact('data'));
    } 

    public function update(Request $request, $id){
        $data = Guru::find($id);
        $data ->update($request->all());
        return redirect()->route('guru');
    }

    public function destroy($id){
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guru');
    }
}
