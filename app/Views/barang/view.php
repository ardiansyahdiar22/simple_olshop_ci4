<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col mt-4">
            <h3>Detail Barang</h3>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col mt-4">
                        <img src="<?= base_url('uploads/' . $barang->gambar); ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">Nama Barang : <?= $barang->nama; ?></p>
                            <p class="card-text">Harga Barang : <?= $barang->harga; ?></p>
                            <p class="card-text">Stok Barang : <?= $barang->stok; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>