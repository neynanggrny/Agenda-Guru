@extends('template')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h3>Data Kelas</h3>
                    <a type="button" href="/tambahkelas" class="btn btn-outline-success">Tambah+</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kelas</th>
                                        <th scope="col">Wali Kelas</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{$row->id }}</th>
                                        <td>{{$row->namakelas}}</td>
                                        <td>{{$row->walikelas}}</td>
                                        <td>
                                            <form action="/deletedatakelas/{{$row->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <a type="button" href="/tampilankelas/{{$row->id}}"
                                                class="btn btn-warning">Edit</a>
                                        </td>
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