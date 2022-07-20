<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend>
            <h2>HOTEL</h2>
        </legend>
        <table border="1" >
            <tr>
                <td>ID</td>
                <td>Nama Pengunjung</td>
                <td>Alamat</td>
                <td>JK</td>
                <td>No Telp</td>
                <td>No KTP</td>
            </tr>
            <?php $no=1 ?>
            @foreach ($pengunjung as $a)
            <tr>
                <td>{{ $a['id'] }}</td>
                <td>{{ $a['nama'] }}</td>
                <td>{{ $a['alamat']}}</td>
                <td>{{ $a['jk']}}</td>
                <td>{{ $a['tlp']}}</td>
                <td>{{ $a['ktp']}}</td>
            </tr>
            @endforeach
        </table>
        <br><br>

        <table border="1" >
            <tr>
                <td>No</td>
                <td>ID Pengunjung</td>
                <td>ID Karyawan</td>
                <td>Jumlah Kamar</td>
                <td>Tanggal Masuk</td>
                <td>Tanggal Keluar</td>
                <td>Lama Menginap</td>
                <td>Total Harga</td>
            </tr>
            <?php $no=1 ?>
            @foreach ($transaksi as $b)
            <tr>
                <td>{{ $b['no'] }}</td>
                <td>{{ $b['pengunjung'] }}</td>
                <td>{{ $b['karyawan']}}</td>
                <td>{{ $b['kamar']}}</td>
                <td>{{ $b['masuk']}}</td>
                <td>{{ $b['keluar']}}</td>
                <td>{{ $b['inap']}}</td>
                <td>{{ $b['harga']}}</td>
            </tr>
            @endforeach
        </table>
        <br><br>

        <table border="1" >
            <tr>
                <td>ID Karyawan</td>
                <td>Nama Karyawan</td>
                <td>JK</td>
            </tr>
            <?php $no=1 ?>
            @foreach ($karyawan as $c)
            <tr>
                <td>{{ $c['id'] }}</td>
                <td>{{ $c['nama'] }}</td>
                <td>{{ $c['jk']}}</td>
            </tr>
            @endforeach
        </table>
        <br><br>

        <table border="1" >
            <tr>
                <td>ID Transaksi</td>
                <td>No Transaksi</td>
                <td>No Kamar</td>
            </tr>
            <?php $no=1 ?>
            @foreach ($detail as $d)
            <tr>
                <td>{{ $d['id'] }}</td>
                <td>{{ $d['noT'] }}</td>
                <td>{{ $d['noK']}}</td>
            </tr>
            @endforeach
        </table>
        <br><br>

        <table border="1" >
            <tr>
                <td>No Kamar</td>
                <td>Jenis Kamar</td>
                <td>Harga</td>
            </tr>
            <?php $no=1 ?>
            @foreach ($kamar as $e)
            <tr>
                <td>{{ $e['no'] }}</td>
                <td>{{ $e['jenis'] }}</td>
                <td>{{ $e['harga']}}</td>
            </tr>
            @endforeach
        </table>
        <br><br>

    </fieldset>
</body>
</html>