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
        @php
            $rata = 0;
        @endphp
        <table border="1" cellpadding="15" cellspacing="0">
            @foreach ($dosen as $pengajar)
                <br>
                    <tr>
                        <td colspan="3"><b> Nama Dosen : {{$pengajar ['dosen'] }} </b><br></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b> Mata Kuliah : {{$pengajar ['kuliah'] }} </b><br></td>
                    </tr>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Nilai</th>
                        <th>Garde</th>
                    </tr>

                    @foreach ($pengajar['mahasiswa'] as $mahasiswa)
                        <tr>
                            <td>{{$mahasiswa['name']}}</td>
                            <td>{{$mahasiswa['nilai']}}</td>

                            <td>
                                @if ($mahasiswa['nilai'] >= 90)
                                    Grade A
                                @elseif ($mahasiswa['nilai'] >= 80)
                                    Grade B
                                @elseif ($mahasiswa['nilai'] >= 70)
                                    Grade C
                                @elseif ($mahasiswa['nilai'] >= 50)
                                    Grade D
                                @else
                                    Grade E
                                @endif
                            </td>
                        </tr>
                        @php
                            $tambah = $rata += $mahasiswa["nilai"];
                            $total = $tambah / count($pengajar["mahasiswa"]);
                        @endphp
                    @endforeach
            @endforeach
                        <tr>
                            <td><b> Total </b></td>
                            <td><b>:</b></td>
                            <td><b>{{ $tambah }}</b></td>
                        </tr>
                        <tr>
                            <td><b> Nilai Rata Rata </b></td>
                            <td><b>:</b></td>
                            <td><b>{{ $total }}</b></td>
                        </tr>
        </table>
        <br><br>


        @php
            $rata = 0;
        @endphp
        <table border="1" cellpadding="15" cellspacing="0">
            @foreach ($dosen as $pengajar)
                <br>
                    <tr>
                        <td colspan="3"><b> Nama Dosen : {{$pengajar ['pengajar'] }} </b><br></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b> Mata Kuliah : {{$pengajar ['matkul'] }} </b><br></td>
                    </tr>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Nilai</th>
                        <th>Garde</th>
                    </tr>

                    @foreach ($pengajar['siswa'] as $siswa)
                        <tr>
                            <td>{{$siswa['nama']}}</td>
                            <td>{{$siswa['nilai']}}</td>
                            <td>
                                @if ($siswa['nilai'] >= 90)
                                    Grade A
                                @elseif ($siswa['nilai'] >= 80)
                                    Grade B
                                @elseif ($siswa['nilai'] >= 70)
                                    Grade C
                                @elseif ($siswa['nilai'] >= 50)
                                    Grade D
                                @else
                                    Grade E
                                @endif
                            </td>
                        </tr>
                        @php
                            $tambah = $rata += $mahasiswa["nilai"];
                            $total = $tambah / count($pengajar["mahasiswa"]);
                        @endphp
                    @endforeach
            @endforeach
                        <tr>
                            <td><b> Total </b></td>
                            <td><b>:</b></td>
                            <td><b>{{ $tambah }}</b></td>
                        </tr>
                        <tr>
                            <td><b> Nilai Rata Rata </b></td>
                            <td><b>:</b></td>
                            <td><b>{{ $total }}</b></td>
                        </tr>
        </table>
        <br><br>


    </fieldset>
</body>
</html>