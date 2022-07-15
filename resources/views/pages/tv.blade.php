<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            <h2>Jadwal Acara TV`</h2>
        </legend>
        <br><br>
        <table border="1" cellpadding="15" cellspacing="0">
            <tr>
                <th colspan="4"><h2>Jadwal Tayang Acara TV</h2></th>
            </tr>
        @foreach ($tv as $televisi)
            <tr>
                <th>Channel</th>
                <th>Acara</th>
                <th>Jam Tayang</th>
                <th>Tanggal Penayangan</th>
            </tr>
            <tr>
                    <td>{{$televisi ['channel'] }}</td>
                    <td>{{$televisi ['acara'] }}</td>
                    <td>{{$televisi ['jam'] }}</td>
                    <td>{{$televisi ['tanggal'] }}</td>
            </tr>
            @endforeach
        </table>
        <br><br>
    </fieldset>
</body>
</html>