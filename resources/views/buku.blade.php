<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Prices</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $buku)
        <tr>
            <td>{{ $buku->id }}</td>
            <td>{{ $buku->title }}</td>
            <td>{{ $buku->author }}</td>
            <td>{{ $buku->genre }}</td>
            <td>{{ $buku->year }}</td>
            <td>{{ "Rp. ".number_format($buku->prices, 2, ',', '.') }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th colspan="1" class="text-end">Jumlah Buku</th>
            <th>{{ $jumlah_buku }}</th>

            <th colspan="3" class="text-end">Jumlah Harga</th>
            <th>{{ "Rp. ".number_format($jumlah_harga, 2, ',', '.') }}</th>
        </tr>
    </tfoot>
</table>

</body>
</html>