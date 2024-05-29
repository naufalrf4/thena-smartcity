<!DOCTYPE html>
<html>
<head>
    <title>Export Laporan Pelaporan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan Pelaporan</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Dibuat</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Status Penanganan</th>
                <th>Nama Laporan</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelaporan as $laporan)
            <tr>
                <td>{{ $laporan->id }}</td>
                <td>{{ $laporan->tgl_dibuat }}</td>
                <td>{{ $laporan->kecamatan->nama }}</td>
                <td>{{ $laporan->kelurahan->nama }}</td>
                <td>{{ $laporan->statusPenanganan->status }}</td>
                <td>{{ $laporan->nama_laporan }}</td>
                <td>{{ $laporan->deskripsi_laporan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
