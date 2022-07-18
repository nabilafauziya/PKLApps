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
            Peserta
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
    </fieldset>
</body>
</html>