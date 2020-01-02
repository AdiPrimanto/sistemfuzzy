<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
    <h1>Semester Ganjil</h1>
    <thead>
        <tr>
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
        <tr>
            <td>{{ $p['nama_matakuliah'] }}</td>
            <td>{{ $p['nama_dosen'] }}</td>
            <td>{{ $p['nama_kelas'] }}</td>
            <td>{{ $p['semester'] }}</td>
            <td>{{ $p['z'] }}</td>
            <td>{{ $p['hasil'] }}</td>
            <td>{{ $loop->iteration }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    window.print()

</script>
