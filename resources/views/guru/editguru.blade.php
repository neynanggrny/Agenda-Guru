@extends('template')

@section('content')
<div class="container">
    <h1>Edit Data Pegawai</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form method="POST" action="/updatedata/{{$data->id}}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{$data -> nama}}" nama="nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{$data -> nik}}" name="nik">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{$data -> matapelajaran}}" name="matapelajaran">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection