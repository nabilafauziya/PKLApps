<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>MENU</h2>

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
    <hr>
            Hallo Pesanan Anda : <b>{{$b}}</b>
            @if ($b == 'Ayam Goreng')
                <br>
                Harga {{ $b }} Rp.15000
            @elseif ($b == 'Lobster')
                <br>
                Harga {{ $b }} Rp.20000
            @elseif ($b == 'Pizza')
                <br>
                Harga {{ $b }} Rp.50000
            @elseif ($b == 'Tiramisu')
                <br>
                Harga {{ $b }} Rp.30000
            @elseif ($b == 'Pasta')
                <br>
                Harga {{ $b }} Rp.25000
            @else
                <br>
                List harga tidak ada
            @endif

</body>
</html>