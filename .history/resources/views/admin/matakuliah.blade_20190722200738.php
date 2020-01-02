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
                        <i class="fa fa-table"></i> Tambah Matakuliah</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="modal-body">
                            <form action="/matakuliah/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_matakuliah"
                                        placeholder="Nama Matakuliah">
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
                        <i class="fa fa-table"></i> Tabel Matakuliah</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="table-responsive">
                            <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Id</th>
                                        <th style="text-align:center">Matakuliah</th>
                                        <th style="text-align:center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matakuliah as $matkul)
                                    <tr>
                                        {{-- <td style="text-align:center">{{$matkul->id_matakuliah}}</td> --}}
                                        <td style="text-align:center">{{$loop->iteration}}</td>
                                        <td>{{$matkul->nama_matakuliah}}</td>
                                        <td style="text-align:center">
                                            <a href="/matakuliah/{{$matkul->id_matakuliah}}/edit"
                                                class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{$matkul->id_matakuliah}}"><i class="fa fa-edit"></i>
                                                Edit</a>
                                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#hapus{{$matkul->id_matakuliah}}"><i
                                                    class="fa fa-trash-o"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Edit Matakuliah-->
                                    <div class="modal" id="edit{{$matkul->id_matakuliah}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Matakuliah</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/matakuliah/{{$matkul->id_matakuliah}}/update"
                                                        method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="text">Id:</label>
                                                            <input type="text" name="id_matakuliah" class="form-control"
                                                                readonly value="{{$matkul->id_matakuliah}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="text">Matakuliah:</label>
                                                            <input type="text" name="nama_matakuliah"
                                                                class="form-control"
                                                                value="{{$matkul->nama_matakuliah}}">
                                                        </div>
                                                        <button class="btn btn-info" type="submit">Simpan</button>
                                                        <button class="btn btn-danger" type="button"
                                                            data-dismiss="modal" aria-label="Close">Batal</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Peringatan Hapus Matakuliah-->
                                    <div class="modal" id="hapus{{$matkul->id_matakuliah}}" tabindex="-1" role="dialog"
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
                                                    Yakin ingin menghapus data {{$matkul->nama_matakuliah}} ?
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/matakuliah/{{$matkul->id_matakuliah}}/delete"
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

</div>

@endsection
