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
            {{-- <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tambah Semester</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="modal-body">
                            <form action="/semester/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_semester"
                                        placeholder="Nama Semester">
                                </div>
                                <button class="btn btn-info btn-sm" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tabel Semester</div>
                    <div class="" align="right" style="padding:15px;">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Id</th>
                                        <th style="text-align:center">Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($semester as $smstr)
                                    <tr>
                                        <td style="text-align:center">{{$loop->iteration}}</td>
                                        <td style="text-align:center">{{$smstr->semester}}</td>
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

    @endsection
