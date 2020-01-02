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
                <td>{{ $p['nama_dosen'] }}</td>
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