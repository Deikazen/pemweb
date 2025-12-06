<h2>Data Mahasiswa</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Dosen Pembimbing</th>
    </tr>

    @foreach ($data as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->dosen->nama }}</td>
        </tr>
    @endforeach
</table>
