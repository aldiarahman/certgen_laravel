@extends('layout/main')
@section('title','Daftar Peserta')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Daftar Peserta</h1>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peserta as $pst)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pst->nama }}</td>
                            <td>{{ $pst->email }}</td>
                            <td>{{ $pst->username }}</td>
                            <td>{{ $pst->role }}</td>
                            <td>{{ $pst->is_active }}</td>
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
