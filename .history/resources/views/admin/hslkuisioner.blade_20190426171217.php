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
        <div class="card-header">
            <i class="fa fa-table"></i> Hasil Kuisioner</div>
        <div class="card-body">
                    {{$hasil1}}</br>
                
                    Hasil rata-rata Parameter 1: {{$h1}}</br>
                    Hasil rata-rata Parameter 2: {{$h2}}</br>
                    Hasil rata-rata Parameter 3: {{$h3}}</br>
                    {{-- @foreach($fuzzifikasi as $fuzzifikasimamdani)
                
                    <tr>
                        <td>fuzzifikasi : {{$fuzzifikasimamdani}}</td></br>
                    </tr>
                    @endforeach --}}
        </div>
    </div>


</div>
@endsection
