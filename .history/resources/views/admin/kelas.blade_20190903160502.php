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
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tambah Kelas</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="modal-body">
                            <form action="/kelas/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas">
                                </div>
                                <button class="btn btn-info btn-sm" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tabel Kelas</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="table-responsive">
                            <table class="table table-sm" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Id</th>
                                        <th style="text-align:center">Kelas</th>
                                        <th style="text-align:center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelas as $kls)
                                    <tr>
                                        <td style="text-align:center">{{$loop->iteration}}</td>
                                        <td style="text-align:center">{{$kls->nama_kelas}}</td>
                                        <td style="text-align:center">
                                            <a href="/kelas/{{$kls->id_kelas}}/edit" class="btn btn-info btn-sm"
                                                data-toggle="modal" data-target="#edit{{$kls->id_kelas}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#hapus{{$kls->id_kelas}}"><i class="fa fa-trash-o"></i>
                                                Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Edit Kelas-->
                                    <div class="modal" id="edit{{$kls->id_kelas}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/kelas/{{$kls->id_kelas}}/update" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="text">Id:</label>
                                                            <input type="text" name="id_kelas" class="form-control"
                                                                readonly value="{{$kls->id_kelas}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="text">Kelas:</label>
                                                            <input type="text" name="nama_kelas" class="form-control"
                                                                value="{{$kls->nama_kelas}}">
                                                        </div>
                                                        <button class="btn btn-info" type="submit">Simpan</button>
                                                        <button class="btn btn-danger" type="button"
                                                            data-dismiss="modal" aria-label="Close">Batal</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Peringatan Hapus Kelas-->
                                    <div class="modal" id="hapus{{$kls->id_kelas}}" tabindex="-1" role="dialog"
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
                                                    Yakin ingin menghapus data {{$kls->nama_kelas}} ?
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/kelas/{{$kls->id_kelas}}/delete"
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
