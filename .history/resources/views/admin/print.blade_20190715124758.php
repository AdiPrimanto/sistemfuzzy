<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" border="1">
        <h1 style="text-align:center">Hasil Kuesioner</h1>
        <thead>
            <tr>
                <th>No</th>
                <th >Matakuliah</th>
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
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p['matakuliah'] }}</td>
                <td>{{ $p['dosen'] }}</td>
                <td style="text-align:center">{{ $p['kelas'] }}</td>
                <td>{{ $p['semester'] }}</td>
                <td>{{ $p['hasil1'] }}</td>
                <td>{{ $p['hasil2'] }}</td>
                <td>{{ $p['hasil3'] }}</td>
                <td>{{ $p['max'][0][0] }}</td>
                {{-- <td>{{ $p['max'][0][1] }}</td> --}}
                <td>{{ $p['max'][1] }}</td>
                <td style="text-align:center">{{ $p['max'][2] }}</td>
                {{-- <td>{{ $p['max']['index'] }}</td> --}}
                {{-- <td><a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target=""><i class="fa fa-trash-o"></i> Print</a></td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        window.print()
    </script>