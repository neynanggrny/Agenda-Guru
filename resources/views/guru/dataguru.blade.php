@extends('template')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h3>Data Guru</h3>
                    <a type="button" href="/tambahguru" class="btn btn-outline-success" >Tambah+</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Guru</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                  @foreach($data as $row)
                                    <tr>
                                        <th scope="row">{{ $row->id }}</th>
                                        <td>{{$row->nama}}</td>
                                        <td>{{$row->nik}}</td>
                                        <td>{{$row->matapelajaran}}</td>
                                        <td>
                                            <form action="/deletedata/{{$row->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td><a type="button" href="/tampilan/{{$row->id}}" class="btn btn-warning">Edit</a></td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection