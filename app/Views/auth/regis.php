<?= $this->extend('templates/login_layout'); ?>

<?= $this->section('content'); ?>
    <div class="row mx-auto my-auto">            
        <div class="card p-3" style="width: 80vh">
            <h2 class="text-center mt-4">Registrasi</h2>
            <?php if(isset($validation)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                </div>
            <?php } ?>
            <div class="card-body">
                <form action="<?= base_url('regis/store') ?>" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="konfirm_password">Konfirmasi Password</label>
                        <input id="konfirm_password" type="password" class="form-control" name="konfirm_password" placeholder="Masukkan Konfirmasi Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    <p class="text-center mt-4">Sudah punya akun? <a href="<?= base_url('login') ?>">Login</a></p>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>