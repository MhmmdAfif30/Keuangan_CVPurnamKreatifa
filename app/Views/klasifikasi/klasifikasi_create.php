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
                        Tambah Klasifikasi
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
                    <form action="<?= base_url('klasifikasi/tambah_proses') ?>" method="POST">
                        <div class="form-group">
                            <label for="id_sub_klasifikasi">Nama Sub Klasifikasi</label>
                            <select id="id_sub_klasifikasi" name="id_sub_klasifikasi" class="form-control">                
                                <?php foreach ($sub_klasifikasi as $row) : ?>
                                <option value="<?= $row['id_sub_klasifikasi'] ?>"><?= $row['nama_sub_klasifikasi'] ?></option>
                                <?php endforeach; ?>                        
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_klasifikasi">Nama Klasifikasi</label>
                            <input id="nama_klasifikasi" type="text" class="form-control" name="nama_klasifikasi" placeholder="Masukkan Nama Klasifikasi">
                        </div>
                        <div class="form-group">
                            <label for="kode_klasifikasi">Kode Klasifikasi</label>
                            <input id="kode_klasifikasi" type="number" class="form-control" name="kode_klasifikasi" placeholder="Masukkan Kode Klasifikasi">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>                                                        
    </div>
</div>
<?= $this->endSection(); ?>