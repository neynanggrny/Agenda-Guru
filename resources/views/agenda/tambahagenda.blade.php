@extends('template')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h3>Agenda</h3>
                </div>
            <form method="POST" action="/insertdataagenda">
                @csrf
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="exampleFormControlInput1"
                            placeholder="masukkan kelas">
                            @error('kelas')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Nama Guru</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                            placeholder="masukkan nama">
                            @error('nama')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Mata Pelajaran</label>
                        <input type="text" name="matapelajaran" class="form-control" id="exampleFormControlInput1"
                            placeholder="masukkan mata pelajaran">
                            @error('matapelajaran')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Materi</label>
                        <input type="text" name="materi" class="form-control" id="exampleFormControlInput1"
                            placeholder="masukkan materi">
                            @error('materi')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                    </div>

                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Mulai</label>
                        <input type="text" name="mulai" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukan Waktu">
                            @error('mulai')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Selesai</label>
                        <input type="text" name="selesai" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                            @error('selesai')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Absen</label>
                        <input type="text" name="absen" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                            @error('selesai')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Siswa Yang Tidak Hadir</label>
                        <input type="text" name="absen" class="form-control" id="exampleFormControlInput1"
                            placeholder="sertakan keterangan">
                            @error('absen')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Pembelajaran</label>
                        <div class="input-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" name="jenispembelajaran" type="checkbox" value="daring" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Daring
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="jenispembelajaran" type="checkbox" value="offline" id="flexCheckChecked"
                                    style="margin-left: 10px" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Luring
                                </label>
                            </div>
                            @error('jenispembelajaran')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Link Pembelajaran</label>
                        <input type="link" name="link" class="form-control" id="exampleFormControlInput1"
                            placeholder="">
                            @error('link')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                    <div class="mb-3" style="padding: 15px">
                            <label for="formFile" class="form-label">Dokumentasi Poto</label>
                            <input name="dokumentasi" class="form-control" type="file" id="formFile">
                            @error('dokumentasi')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                    </div>

                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="exampleFormControlInput1"
                            placeholder="">
                            @error('keterangan')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror 
                    </div>

                    <button type="submit" value="submit" class="btn btn-info" style="width: 20%; margin-left: 15px">Simpan</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    @endsection