<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-7 mt-4">

            <h3>Form Tambah Data Barang</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" id="harga" name="harga">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Barang</label>
                    <input type="number" class="form-control" id="stok" name="stok">
                </div>
                <div class="input-group mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar Barang</label>
                    <div class="col-sm-2">
                        <img src="" class="img-thumbnail img-preview">
                    </div>
                    <input type="file" class="custom-file-input" id="gambar" onchange="previewImg()" name="gambar">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>