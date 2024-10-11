<?= $this->extend('templates/main_layout'); ?>

<?= $this->section('content'); ?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>
                        Ubah Admin
                    </div>
                </div>
            </div>
        </div>            
        <div class="row mx-auto mb-5">
            <?php if(isset($validation)) { ?>
                <div class="alert alert-danger" role="alert" style="width: 1000px">
                    <?= $validation->listErrors() ?>
                </div>
            <?php } ?>
            <div class="card" style="width: 1000px">
                <div class="card-body">
                    <form action="<?= base_url('admin/ubah_proses/' . $admin['id_admin']) ?>" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?= $admin['username'] ?>">
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
                    </form>
                </div>
            </div>
        </div>                                                        
    </div>
</div>
<?= $this->endSection(); ?>