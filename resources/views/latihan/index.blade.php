<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<br>
    <fieldset>
        <legend>
            <h2>Data Post</h2>
        </legend>
        <table border="1" >
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>JK</td>
                <td>Jurusan</td>
            </tr>
            <?php $no=1 ?>
            @foreach ($siswa as $datasiswa)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $datasiswa['nama'] }}</td>
                <td>{{ $datasiswa['jk']}}</td>
                <td>{{ $datasiswa['jurusan']}}</td>
            </tr>
            @endforeach
        </table>
        <br>
    </fieldset>

<br>
    <fieldset>
        <legend>
            <h2>Peserta</h2>
        </legend>
        <table border="1" >
            <tr>
                <td>No Siswa</td>
                <td>Kode MP</td>
            </tr>
            <?php $no=1 ?>
            @foreach ($peserta as $datapeserta)
            <tr>
                <td>{{ $datapeserta['no'] }}</td>
                <td>{{ $datapeserta['kode']}}</td>
            </tr>
            @endforeach
        </table>
        <br>
    </fieldset>

<br>
    <fieldset>
        <legend>
            <h2>Mata Pelajaran</h2>
        </legend>
        <table border="1" >
            <tr>
                <td>Kode MP</td>
                <td>Nama MP</td>
                <td>SKS</td>
                <td>SEMESTER</td>
            </tr>
            <?php $no=1 ?>
            @foreach ($mapel as $datamapel)
            <tr>
                <td>{{ $datamapel['kode'] }}</td>
                <td>{{ $datamapel['nama']}}</td>
                <td>{{ $datamapel['sks']}}</td>
                <td>{{ $datamapel['semester']}}</td>
            </tr>
            @endforeach
        </table>
        <br>
    </fieldset>

</body>
</html>