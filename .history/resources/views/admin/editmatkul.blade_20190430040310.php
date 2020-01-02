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
            <i class="fa fa-table"></i> Edit Matakuliah</div>
        <div class="card-body">
            <form action="/matakuliah/create" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="nama_matakuliah" placeholder="Nama Matakuliah">
                </div>
                <button class="btn btn-info" type="submit">Simpan</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal" aria-label="Close">Batal</button>
            </form>
        </div>
    </div>
</div>
@endsection
