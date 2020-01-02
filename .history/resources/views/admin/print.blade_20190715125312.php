<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" border="1">
        <h1 style="text-align:center">Hasil Kuesioner Kinerja Akademik Dosen</h1>
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
                <td>{{ $p['nama_matakuliah'] }}</td>
                <td>{{ $p['nama_dosen'] }}</td>
                <td style="text-align:center">{{ $p['nama_kelas'] }}</td>
                <td style="text-align:center">{{ $p['semester'] }}</td>
                <td style="text-align:center">{{ $p['parameter1'] }}</td>
                <td style="text-align:center">{{ $p['parameter2'] }}</td>
                <td style="text-align:center">{{ $p['parameter3'] }}</td>
                <td style="text-align:center">{{ $p['max'] }}</td>
                {{-- <td>{{ $p['max'][0][1] }}</td> --}}
                <td style="text-align:center">{{ $p['z'] }}</td>
                <td style="text-align:center">{{ $p['hasil'] }}</td>
                {{-- <td>{{ $p['max']['index'] }}</td> --}}
                {{-- <td><a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target=""><i class="fa fa-trash-o"></i> Print</a></td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        window.print()
    </script>