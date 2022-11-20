<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-7 mt-4">

            <?php $errors = session()->getFlashdata('errors'); ?>
            <h3>Form Register New User</h3>

            <?php if ($errors != null) : ?>
                <div class="alert alert-danger" role="alert">
                    <h3 class="alert-heading">Terjadi kesalahan!</h3>
                    <hr>
                    <p class="mb-0">
                        <?php
                        foreach ($errors as $err) {
                            echo $err . '<br>';
                        }
                        ?>
                    </p>
                </div>
            <?php endif; ?>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="repeatPassword" class="form-label">Repeat Password</label>
                    <input type="password" class="form-control" id="repeatPassword" name="repeatPassword">
                </div>
                <button type="submit" class="btn btn-primary">Register Now</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>