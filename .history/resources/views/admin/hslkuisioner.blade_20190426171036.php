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

    <div class="container">
        <div class="row">
            <div class="col">
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
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tabel Matakuliah</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Id</th>
                                        <th style="text-align:center">Matakuliah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matakuliah as $matkul)
                                    <tr>
                                        <td style="text-align:center">{{$matkul->id_matakuliah}}</td>
                                        <td>{{$matkul->nama_matakuliah}}</td>
                                    </tr>
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
