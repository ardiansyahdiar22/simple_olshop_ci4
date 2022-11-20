<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Hello Welcome To This Website</h2>
            <br>
            <h3>
                <?= session()->get('username'); ?>
            </h3>
        </div>
    </div>
</div>

<?= $this->endSection() ?>