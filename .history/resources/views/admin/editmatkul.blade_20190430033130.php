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
                    
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
