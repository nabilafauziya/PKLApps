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
            <h2>Data Dosen</h2>
        </legend>
        <table border="1" cellpadding="5">

            @foreach ($dosen as $pengajar)

                <br>
                    <tr>
                        <td colspan="2">Nama Dosen : {{$pengajar ['name'] }} <br></td>
                    </tr>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Nilai</th>
                    </tr>
                @foreach ($pengajar['mahasiswa'] as $mahasiswa)
                    <tr>
                        <td>{{$mahasiswa}}</td>
                        <td>
                            @if ($pengajar['nilai'] >= 90)
                                    Grade A
                                @elseif ($pengajar['nilai'] >= 80)
                                    Grade B
                                @elseif ($pengajar['nilai'] >= 70)
                                    Grade C 
                                @elseif ($pengajar['nilai'] >= 50)
                                    Grade D
                                @else 
                                    Grade E
                                @endif
                        <br>
                        </td>
                    </tr>
                @endforeach

            @endforeach

        </table>
        <br><br>
    </fieldset>
</body>
</html>