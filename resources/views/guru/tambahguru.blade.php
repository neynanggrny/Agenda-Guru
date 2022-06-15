@extends('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mb-4">
                <h3 class="text-center mb-3 mt-5">Tambah Data Guru</h3>
                <div class="card-body" style="width: 90%">
                <div class="card-body px-0 pt-0 pb-2">
                    <form method="POST" action="/insertdata">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('name')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIK</label>
                            <input type="text" name="nik"class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('name')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                            <input type="text" name="matapelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                                @error('name')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div></div>
                
            </div>
        </div>
    </div>
</div>
@endsection
