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

    <!-- Menampilkan Tabel Akademik-->
    <div class="card mb-3">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success')}}
        </div>
        @endif
        <div class="card-header">
            <i class="fa fa-table"></i> Tabel Akademik</div>
        <div class="" align="right" style="padding:15px;">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Akademik</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm" id="dataTable">
                    <thead>
                        <tr>
                            <th style="text-align:center">Id</th>
                            <th style="text-align:center">Matakuliah</th>
                            <th style="text-align:center">Dosen</th>
                            <th style="text-align:center">Kelas</th>
                            <th style="text-align:center">Semester</th>
                            <th style="text-align:center">Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($a as $aka)
                        <tr>
                            <td>{{$aka->id_akademik}}</td>
                            <td>{{$aka->nama_matakuliah}}</td>
                            <td>{{$aka->nama_dosen}}</td>
                            <td style="text-align:center">{{$aka->nama_kelas}}</td>
                            <td style="text-align:center">{{$aka->semester}}</td>
                            <td><a href="/matakuliah/{{$aka->id_akademik}}/edit" class="btn btn-info btn-sm" data-toggle="modal">Edit</a>&nbsp;&nbsp;
                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tambah Akademik-->
    <div class="modal" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Akademik</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/akademik/create" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="text">Matakuliah:</label>
                            <select class="form-control" name="semester" id="exampleformControlSelect1"></select>
                            {{-- <input type="text" class="form-control" name="nama_matakuliah" placeholder="Nama Matakuliah"> --}}
                        </div>
                        <div class="form-group">
                            <label for="text">Dosen:</label>
                            <select class="form-control" name="semester" id="exampleformControlSelect1"></select>
                            {{-- <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen"> --}}
                        </div>
                        <div class="form-group">
                            <label for="text">Kelas:</label>
                            <select class="form-control" name="semester" id="exampleformControlSelect1"></select>
                            {{-- <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas"> --}}
                        </div>
                        <div class="form-group">
                            <label for="text">Semester:</label>
                            <select class="form-control" name="semester" id="exampleformControlSelect1"></select>
                                {{-- <option value="1">GANJIL</option>
                                <option value="2">GENAP</option> --}}
                        </div>
                        <button class="btn btn-info" type="submit">Simpan</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal"
                            aria-label="Close">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
