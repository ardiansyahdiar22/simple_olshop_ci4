<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-4">
        <?php foreach ($model as $m) : ?>
            <div class="col-4 mt-3">
                <div class="card">
                    <img src="<?= base_url('uploads/' . $m->gambar); ?>" class="card-img-top" alt="..." width="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Barang : <?= $m->nama; ?></h5>
                        <p class="card-text">Stok : <?= $m->stok; ?></p>
                        <p class="card-text">Harga Barang : <?= "Rp. " . number_format($m->harga); ?></p>
                        <a href="<?= site_url('etalase/beli/' . $m->id) ?>" class="btn btn-primary">Beli Barang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>