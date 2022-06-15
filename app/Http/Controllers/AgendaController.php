<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use DB;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(){
        $data = DB::table('agendas')->get();
        return view('agenda.dataagenda', compact('data'));
    }

    public function create(){
        return view('agenda.tambahagenda');
    }

    public function store(Request $request){
       
        // $this->validate($request, [
        //     'kelas' => 'required',
        //     'nama' => 'required',
        //     'matapelajaran' => 'required',
        //     'materi' => 'required',
        //     'mulai' => 'required',
        //     'selesai' => 'required',
        //     'absen' => 'required',
        //     'jenispembelajaran' => 'required',
        //     'link' => 'required',
        //     'dokumentasi' => 'required',
        //     'keterangan' => 'required',
        // ]);
        Agenda::create($request->all());
        return redirect()->route('agenda');
    }
}
