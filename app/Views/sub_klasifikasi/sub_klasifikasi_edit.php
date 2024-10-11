<?= $this->extend('templates/main_layout'); ?>

<?= $this->section('content'); ?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-display2 icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>
                        Ubah Sub Klasifikasi
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
                    <form action="<?= base_url('sub_klasifikasi/ubah_proses/' . $sub_klasifikasi['id_sub_klasifikasi']) ?>" method="POST">
                        <div class="form-group">
                            <label for="nama_sub_klasifikasi">Nama Sub Klasifikasi</label>
                            <input id="nama_sub_klasifikasi" type="text" class="form-control" name="nama_sub_klasifikasi" placeholder="Masukkan Nama Sub Klasifikasi" value="<?= $sub_klasifikasi['nama_sub_klasifikasi']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_sub_klasifikasi">Kode Sub Klasifikasi</label>
                            <input id="kode_sub_klasifikasi" type="number" class="form-control" name="kode_sub_klasifikasi" placeholder="Masukkan Kode Sub Klasifikasi" value="<?= $sub_klasifikasi['kode_sub_klasifikasi']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>                                                        
    </div>
</div>
<?= $this->endSection(); ?>