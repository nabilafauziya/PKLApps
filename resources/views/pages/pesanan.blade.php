<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>MAKANAN</h2>

            Hallo Pesanan Anda : <b>{{$a}}</b>
            @if ($a == 'Ayam Goreng')
                <br>
                Harga {{ $a }} Rp.15000
            @elseif ($a == 'Lobster')
                <br>
                Harga {{ $a }} Rp.20000
            @elseif ($a == 'Pizza')
                <br>
                Harga {{ $a }} Rp.50000
            @elseif ($a == 'Tiramisu')
                <br>
                Harga {{ $a }} Rp.30000
            @elseif ($a == 'Pasta')
                <br>
                Harga {{ $a }} Rp.25000
            @else
                <br>
                List harga tidak ada
            @endif
    

</body>
</html>