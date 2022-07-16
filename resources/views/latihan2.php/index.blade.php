<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>