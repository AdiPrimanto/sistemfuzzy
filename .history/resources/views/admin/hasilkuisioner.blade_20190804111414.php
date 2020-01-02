@extends('layouts.app')

@section('content')
<div class="container-fluid">
    {{-- <canvas id="myChart" width="400" height="400"></canvas> --}}

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/dashboard">Dashboard</a>
        </li>
        {{-- <li class="breadcrumb-item active">My Dashboard</li> --}}
    </ol>
    <div class="row">
        <div class="col">
            <div class="card mb-3 col-md-12" style="width: 100rem;">
                <div class="card-header">
                    <i class="fa fa-table"></i> Hasil Kuesioner</div>
                <div class="card-body">
                    <div style="width:100%; height:100%; overflow:auto;">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Matakuliah</th>
                                    <th>Dosen</th>
                                    <th>Kelas</th>
                                    <th>Semester</th>
                                    <th>Parameter 1</th>
                                    <th>Parameter 2</th>
                                    <th>Parameter 3</th>
                                    <th>Nilai Max</th>
                                    {{-- <th>Linier</th> --}}
                                    <th>Nilai Z</th>
                                    <th>Hasil</th>
                                    {{-- <th>Aturan</th> --}}
                                    {{-- <th>Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $p)
                                <tr>
                                    {{-- <td>{{ $p['id_akademik'] }}</td> --}}
                                    <td>{{ $p['nama_matakuliah'] }}</td>
                                    {{-- <td>{{ $p['nama_dosen'] }}</td> --}}
                                    <td>{{ xxx }}</td>
                                    <td>{{ $p['nama_kelas'] }}</td>
                                    <td>{{ $p['semester'] }}</td>
                                    <td>{{ $p['parameter1'] }}</td>
                                    <td>{{ $p['parameter2'] }}</td>
                                    <td>{{ $p['parameter3'] }}</td>
                                    <td>{{ $p['max'] }}</td>
                                    {{-- <td>{{ $p['max'][0][1] }}</td> --}}
                                    <td>{{ $p['z'] }}</td>
                                    <td>{{ $p['hasil'] }}</td>
                                    {{-- <td>{{ $p['max']['index'] }}</td> --}}
                                    {{-- <td><a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target=""><i class="fa fa-trash-o"></i> Print</a></td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <br />

                        {{-- @foreach($puyeng as $p)
            {{ $p['id_makul'] }}
                        <br />
                        {{ $p['id_kelas'] }}
                        <br />
                        {{ $p['hasil1'] }}
                        <br />
                        {{ $p['hasil2'] }}
                        <br />
                        {{ $p['hasil3'] }}
                        <br />
                        {{ $p['max'][0][0] }} <br />
                        {{ $p['max'][0][1] }} <br />
                        {{ $p['max'][1] }} <br />
                        {{ $p['max'][2] }} <br />
                        {{ $p['max']['index'] }} <br />
                        ---------------------------
                        @endforeach --}}
                    </div>
                    <br />
                    <a href="print" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
