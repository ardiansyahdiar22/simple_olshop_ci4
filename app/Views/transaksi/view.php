<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <h4>Transaksi No <?= $transaksi->id; ?></h4>
            <table class="table">
                <tr>
                    <td>Barang</td>
                    <td><?= $transaksi->nama; ?></td>
                </tr>
                <tr>
                    <td>Pembeli</td>
                    <td><?= $transaksi->username; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?= $transaksi->alamat; ?></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><?= $transaksi->jumlah; ?></td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td><?= "Rp. " . number_format($transaksi->total_harga); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>