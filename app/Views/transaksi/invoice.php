<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000000;
            text-align: center;
        }
    </style>
    <title>Online Shop</title>
</head>

<body>

    <h2>Invoice</h2>
    <p>
        <i>Diar Ardiansyah</i><br>
        Depok, Jawa Barat, Indonesia <br>
        081229891289
    </p>
    <hr>
    <hr>
    <p>
        Pembeli : <?= $pembeli->username; ?><br>
        Alamat: <?= $transaksi->alamat; ?><br>
        Transaksi No : <?= $transaksi->id; ?> <br>
        Tanggal : <?= date('Y-m-d', strtotime($transaksi->created_date)); ?>
    </p>
    <table cellpadding="8">
        <tr>
            <th><strong>Nama Barang</strong></th>
            <th><strong>Harga Harga</strong></th>
            <th><strong>Jumlah</strong></th>
            <th><strong>Ongkir</strong></th>
            <th><strong>Total Harga</strong></th>
        </tr>
        <tr>
            <td><?= $barang->nama; ?></td>
            <td><?= "Rp. " . number_format($barang->harga); ?></td>
            <td><?= $transaksi->jumlah; ?></td>
            <td><?= "Rp. " . number_format($transaksi->ongkir); ?></td>
            <td><?= "Rp. " . number_format($transaksi->total_harga); ?></td>
        </tr>
    </table>
</body>

</html>