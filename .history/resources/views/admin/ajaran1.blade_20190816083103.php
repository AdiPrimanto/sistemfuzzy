@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/dashboard">Dashboard</a>
        </li>
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
                                    <th>Matakuliah</th>
                                    <th>Dosen</th>
                                    <th>Kelas</th>
                                    <th>Semester</th>
                                    <th>Parameter 1</th>
                                    <th>Parameter 2</th>
                                    <th>Parameter 3</th>
                                    <th>Nilai Max</th>
                                    <th>Nilai Z</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $p['nama_matakuliah'] }}</td>
                                    <td>Dosen {{ $loop->iteration }}</td>
                                    <td>{{ $p['nama_kelas'] }}</td>
                                    <td>{{ $p['semester'] }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                            </tbody>
                        </table>

                        <br />
                    </div>
                    <br />
                    <a href="print" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
