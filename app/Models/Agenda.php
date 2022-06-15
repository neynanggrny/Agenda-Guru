<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table ='agendas';
    protected $fillable = ['kelas', 'nama', 'matapelajaran', 'materi', 'mulai', 'selesai', 'absen', 'jenispembelajaran', 'link', 'dokumentasi', 'keterangan'];
}
