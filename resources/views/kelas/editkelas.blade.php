@extends('template')

@section('content')
<div class="container">
    <h1>Edit Data Kelas</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form method="POST" action="/updatedatakelas/{{$data->id}}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{$data -> namakelas}}" name="namakelas">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{$data -> walikelas}}" name="walikelas">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection