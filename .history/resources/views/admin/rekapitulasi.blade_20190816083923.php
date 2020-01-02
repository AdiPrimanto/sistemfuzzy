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

    {{-- <div class="container"> --}}
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    {{-- style="width: 100rem;" --}}
                    <div class="card-header">
                        <i class="fa fa-table"></i> Rekapitulasi Hasil Semester GANJIL Tahun Ajaran 2017/2018</div>
                    <div class="card-body">
                        <canvas id="myChart2" width="5px"></canvas> 
                        <div style="width:100%; height:100%;">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        <th>Matakuliah</th>
                                        <th>Dosen</th>
                                        <th>Kelas</th>
                                        <th>Semester</th>
                                        <th>Nilai Z</th>
                                        <th>Hasil</th>
                                        <th>Ranking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data1 as $p)
                                    {{-- @if($p['semester'] == "GANJIL") --}}
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $p['nama_matakuliah'] }}</td>
                                        {{-- <td>{{ $p['nama_dosen'] }}</td> --}}
                                        <td>Dosen {{ $loop->iteration }}</td>
                                        <td>{{ $p['nama_kelas'] }}</td>
                                        <td>{{ $p['semester'] }}</td>
                                        <td>{{ $p['z'] }}</td>
                                        <td>{{ $p['hasil'] }}</td>
                                        <td>{{ $loop->iteration }}</td>
                                    </tr>
                                    {{-- @endif --}}
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Hasil</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chartGanjil as $p)
                                        <tr>
                                            <td>{{ $p['hasil'] }}</td>
                                            <td>{{ $p['jumlah'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Hasil</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <@php
                                                var_dump($chartGenap);
                                            @endphp 
                                            @foreach ($chartGenap as $p)
                                            <tr>
                                                <td>{{ $p['hasil'] }}</td>
                                                <td>{{ $p['jumlah'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table> --}}
                                    <br />
                        </div>
                        <a href="printganjil" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    {{-- style="width: 100rem;" --}}
                    <div class="card-header">
                        <i class="fa fa-table"></i> Rekapitulasi Hasil Semester GENAP</div>
                    <div class="card-body">
                        <canvas id="myChart" width="5px"></canvas>
                        <div style="width:100%; height:100%;">
                            <table class="table table-bordered text-center" id="dataTable2" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        <th>Matakuliah</th>
                                        <th>Dosen</th>
                                        <th>Kelas</th>
                                        <th>Semester</th>
                                        <th>Nilai Z</th>
                                        <th>Hasil</th>
                                        <th>Ranking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data2 as $p)
                                    {{-- @if($p['semester'] == "GENAP") --}}
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $p['nama_matakuliah'] }}</td>
                                        {{-- <td>{{ $p['nama_dosen'] }}</td> --}}
                                        <td>Dosen {{ $loop->iteration }}</td>
                                        <td>{{ $p['nama_kelas'] }}</td>
                                        <td>{{ $p['semester'] }}</td>
                                        <td>{{ $p['z'] }}</td>
                                        <td>{{ $p['hasil'] }}</td>
                                        <td>{{ $loop->iteration }}</td>
                                    </tr>
                                    {{-- @endif --}}
                                    @endforeach
                                </tbody>
                            </table>
                            <br />
                        </div>
                        <a href="printgenap" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
        </div>
        <br />
    {{-- </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var Label = [
                @foreach ($chartGenap as $genap)
                     "{{$genap["hasil"]}}",
                @endforeach
            ]
            var Jumlah = [
                @foreach ($chartGenap as $genap)
                    "{{$genap["jumlah"]}}" , 
                @endforeach
            ]
            console.log(Label)
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: Label,
                    datasets: [{
                        label: '# of Votes',
                        data: Jumlah,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                
            });
    </script>

<script>
        var ctx = document.getElementById('myChart2').getContext('2d');
        var Label = [
            @foreach ($chartGanjil as $ganjil)
                 "{{$ganjil["hasil"]}}",
            @endforeach
        ]
        var Jumlah = [
            @foreach ($chartGanjil as $ganjil)
                "{{$ganjil["jumlah"]}}" , 
            @endforeach
        ]
        console.log(Label)
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Label,
                datasets: [{
                    label: '# of Votes',
                    data: Jumlah,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            
        });
</script>

    @endsection
