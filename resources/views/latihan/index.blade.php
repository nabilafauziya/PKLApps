<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Post
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
    
    </fieldset>
</body>
</html>