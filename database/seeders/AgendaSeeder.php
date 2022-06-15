<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Agendas')->insert([
            'kelas' => 'XI RPL 2', 
            'nama' => 'Agus Diana',
            'matapelajaran' => 'PWPB',
            'materi' => 'Presentasi ',
            'mulai' => '07.00',
            'selesai' => '12.20',
            'absen' => 'Hanan Raisa(sakit)',
            'jenispembelajaran' => 'offline',
            'link' => 'http://meet.google.com/xqo-kwab-wbk',
            'dokumentasi' => 'foto',
            'keterangan' => 'tidak ada keterangan'
        ]);
    }
}
