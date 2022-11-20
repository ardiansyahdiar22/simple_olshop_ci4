<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h3>Data Transaksi</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Pembeli</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($model as $index => $transaksi) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $transaksi->nama; ?></td>
                            <td><?= $transaksi->username; ?></td>
                            <td><?= $transaksi->alamat; ?></td>
                            <td><?= $transaksi->jumlah; ?></td>
                            <td><?= "Rp. " . number_format($transaksi->total_harga); ?></td>
                            <td>
                                <a href="<?= site_url('transaksi/view/' . $transaksi->id); ?>" class="btn btn-primary">View</a>
                                <a href="<?= site_url('transaksi/invoice/' . $transaksi->id); ?>" target="_blank" class="btn btn-warning">invoice</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>