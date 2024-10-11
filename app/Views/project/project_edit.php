<?= $this->extend('templates/main_layout'); ?>

<?= $this->section('content'); ?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-airplay icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>
                        Ubah Project
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
                    <form action="<?= base_url('project/ubah_proses/' . $project['id_project']) ?>" method="POST">
                        <div class="form-group">
                            <label for="nama_project">Nama Project</label>
                            <input id="nama_project" type="text" class="form-control" name="nama_project" placeholder="Masukkan Nama Project" value="<?= $project['nama_project']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_awal">Tanggal Awal</label>
                            <input id="tgl_awal" type="date" class="form-control" name="tgl_awal" placeholder="Masukkan Tanggal Awal" value="<?= $project['tgl_awal']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_akhir">Tanggal Akhir</label>
                            <input id="tgl_akhir" type="date" class="form-control" name="tgl_akhir" placeholder="Masukkan Tanggal Akhir" value="<?= $project['tgl_akhir']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tahun_project">Tahun Project</label>
                            <input id="tahun_project" type="number" class="form-control" name="tahun_project" placeholder="Masukkan Tahun Project" value="<?= $project['tahun_project']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control" name="deskripsi" rows="4" placeholder="Masukkan Deskripsi"><?= $project['deskripsi']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>                                                        
    </div>
</div>
<?= $this->endSection(); ?>