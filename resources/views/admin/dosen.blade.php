@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/dashboard">Dashboard</a>
        </li>
        {{-- <li class="breadcrumb-item active">My Dashboard</li> --}}
    </ol>

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success')}}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tambah Dosen</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="modal-body">
                            <form action="/dosen/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen">
                                </div>
                                <button class="btn btn-info btn-sm" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tabel Dosen</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="table-responsive">
                            <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Id</th>
                                        <th style="text-align:center">Dosen</th>
                                        <th style="text-align:center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosen as $dsn)
                                    <tr>
                                        <td style="text-align:center">{{$loop->iteration}}</td>
                                        <td>{{$dsn->nama_dosen}}</td>
                                        <td style="text-align:center">
                                            <a href="/dosen/{{$dsn->id_dosen}}/edit" class="btn btn-info btn-sm"
                                                data-toggle="modal" data-target="#edit{{$dsn->id_dosen}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#hapus{{$dsn->id_dosen}}"><i class="fa fa-trash-o"></i>
                                                Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Edit Dosen-->
                                    <div class="modal" id="edit{{$dsn->id_dosen}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Dosen</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/dosen/{{$dsn->id_dosen}}/update" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="text">Id:</label>
                                                            <input type="text" name="id_dosen" class="form-control"
                                                                readonly value="{{$dsn->id_dosen}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="text">Dosen:</label>
                                                            <input type="text" name="nama_dosen" class="form-control"
                                                                value="{{$dsn->nama_dosen}}">
                                                        </div>
                                                        <button class="btn btn-info" type="submit">Simpan</button>
                                                        <button class="btn btn-danger" type="button"
                                                            data-dismiss="modal" aria-label="Close">Batal</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Peringatan Hapus Dosen-->
                                    <div class="modal" id="hapus{{$dsn->id_dosen}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin ingin menghapus data {{$dsn->nama_dosen}} ?
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/dosen/{{$dsn->id_dosen}}/delete"
                                                        class="btn btn-primary">Ya</a>
                                                    <button class="btn btn-danger" type="button" data-dismiss="modal"
                                                        aria-label="Close">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection
