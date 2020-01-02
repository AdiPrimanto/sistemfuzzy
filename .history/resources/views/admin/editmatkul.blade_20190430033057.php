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
        <div class="card-body">
            
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
                            <select class="form-control" name="matakuliah" id="dropdown">
                                <option value="">Pilih Matakuliah</option>
                                @foreach($b as $matkul)
                                <option value="{{$matkul->id_matakuliah}}">{{$matkul->nama_matakuliah}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="text">Dosen:</label>
                            <select class="form-control" name="dosen" id="dropdown">
                                <option value="">Pilih Dosen</option>
                                @foreach($c as $dsn)
                                <option value="{{$dsn->id_dosen}}">{{$dsn->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="text">Kelas:</label>
                            <select class="form-control" name="kelas" id="dropdown">
                                <option value="">Pilih Kelas</option>
                                @foreach($d as $kls)
                                <option value="{{$kls->id_kelas}}">{{$kls->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="text">Semester:</label>
                            <select class="form-control" name="semester" id="dropdown">
                                <option value="">Pilih Semester</option>
                                @foreach($e as $smstr)
                                <option value="{{$smstr->id_semester}}">{{$smstr->semester}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-info" type="submit">Simpan</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal" aria-label="Close">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
