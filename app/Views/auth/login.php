<?= $this->extend('templates/login_layout'); ?>

<?= $this->section('content'); ?>
    <div class="row mx-auto my-auto">            
        <div class="card p-3" style="width: 80vh">
            <h2 class="text-center mt-4">Login</h2>
            <?php if(session()->getFlashdata('msg')) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php } ?>
            <div class="card-body">
                <form action="<?= base_url('login/loginAuth') ?>" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    <p class="text-center mt-4">Belum punya akun? <a href="<?= base_url('regis') ?>">Registrasi</a></p>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>