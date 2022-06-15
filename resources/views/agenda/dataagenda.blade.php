@extends('template')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h3>Data Agenda</h3>
                    <a type="button" href="/tambahagenda" class="btn btn-outline-success" >Tambah+</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Nama Guru</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Materi Prlajaran</th>
                                        <th scope="col">Mulai</th>
                                        <th scope="col">Selesai</th>
                                        <th scope="col">Siswa Yang Tidak Hadir</th>
                                        <th scope="col">Jenis Pembelajaran</th>
                                        <th scope="col">Link Pembelajaran</th>
                                        <th scope="col">Dokumentasi Poto</th>
                                        <th scope="col">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                  @foreach($data as $row)
                                    <tr>
                                        <th scope="row">{{ $row->id }}</th>
                                        <td>{{$row->kelas}}</td>
                                        <td>{{$row->nama}}</td>
                                        <td>{{$row->matapelajaran}}</td>
                                        <td>{{$row->materi}}</td>
                                        <td>{{$row->mulai}}</td>
                                        <td>{{$row->selesai}}</td>
                                        <td>{{$row->absen}}</td>
                                        <td>{{$row->jenispembelajaran}}</td>
                                        <td>{{$row->link}}</td>
                                        <td>{{$row->dokumentasi}}</td>
                                        <td>{{$row->keterangan}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection