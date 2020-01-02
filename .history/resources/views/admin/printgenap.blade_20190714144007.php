<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" border="1">
    <h1 style="text-align:center">Rekapitulasi Hasil Kuesioner Semester Genap</h1>
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
        @foreach ($data2 as $p)
        <tr>
            <td>{{ $p['nama_matakuliah'] }}</td>
            <td>{{ $p['nama_dosen'] }}</td>
            <td style="text-align:center">{{ $p['nama_kelas'] }}</td>
            <td style="text-align:center">{{ $p['semester'] }}</td>
            <td style="text-align:center">{{ $p['z'] }}</td>
            <td style="text-align:center">{{ $p['hasil'] }}</td>
            <td style="text-align:center">{{ $loop->iteration }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    window.print()

</script>
