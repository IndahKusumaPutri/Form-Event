<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            /* left; 3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Event</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Event Posyandu</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width; 95%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Layanan Kesehatan</th>
                    <th>Nama Event</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cetakevent as $i => $p)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $p->lakes->nama_layanan }} || {{ $p->lakes->jenis_layanan }}</td>
                        <td>{{ $p->nama_event }}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>{{ $p->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
