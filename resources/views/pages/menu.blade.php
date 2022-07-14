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
            MENU
        </legend>
        @foreach ($post as $data)
            <ul type="disc">
                <li>{{ $data["beranda"] }}</li>
                <li>{{ $data["berita"] }}</li>
                @foreach ($data["kategori"] as $kategori)
                    <ul type="square">
                        <li>{{ $kategori["name"] }}</li>
                        @foreach ($kategori["data"] as $item)
                        <ul type="square">
                            <li>{{ $item }}</li>
                        </ul>
                        @endforeach
                    </ul>
                @endforeach
                <li>{{ $data["tentang"] }}</li>
            </ul>
        @endforeach
    </fieldset>
</body>