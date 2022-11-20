<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-7 mt-4">

            <h3>Form Update Data Barang</h3>
            <form action="<?= '/barang/update/' . $barang->id; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $barang->id; ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang->nama; ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang->harga; ?>">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Barang</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang->stok; ?>">
                </div>
                <div class="input-group mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar Barang</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url('uploads/' . $barang->gambar); ?>" class="img-fluid rounded-start" alt="..." width="300">
                    </div>
                    <input type="file" class="custom-file-input" id="gambar" onchange="previewImg()" name="gambar" value="<?= $barang->gambar; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>