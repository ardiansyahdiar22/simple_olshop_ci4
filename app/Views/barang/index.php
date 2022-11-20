<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col mt-3">
            <table class="table table-hover">
                <h3>List Data Barang</h3>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allBarang as $index => $brg) : ?>
                        <tr>
                            <th scope="row"><?= ($index + 1); ?></th>
                            <td><?= $brg->nama; ?></td>
                            <td>
                                <img src="<?= base_url('uploads/' . $brg->gambar); ?>" class="img-fluid rounded-start" alt="..." width="200">
                            </td>
                            <td><?= "Rp. " . number_format($brg->harga); ?></td>
                            <td><?= $brg->stok; ?></td>
                            <td>
                                <a href="<?= site_url('barang/view/' . $brg->id); ?>" class="btn btn-primary">View</a>
                                <a href="<?= site_url('barang/update/' . $brg->id); ?>" class="btn btn-warning">Update</a>
                                <a href="<?= site_url('barang/delete/' . $brg->id); ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus data ini ? ')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>