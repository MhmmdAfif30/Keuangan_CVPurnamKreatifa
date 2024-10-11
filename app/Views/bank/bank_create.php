<?= $this->extend('templates/main_layout'); ?>

<?= $this->section('content'); ?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph2 icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>
                        Tambah Bank
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
                    <form action="<?= base_url('bank/tambah_proses') ?>" method="POST">
                        <div class="form-group">
                            <label for="nama_bank">Nama Bank</label>
                            <input id="nama_bank" type="text" class="form-control" name="nama_bank" placeholder="Masukkan Nama Bank">
                        </div>
                        <div class="form-group">
                            <label for="pemilik_rekening">Pemilik Rekening</label>
                            <input id="pemilik_rekening" type="text" class="form-control" name="pemilik_rekening" placeholder="Masukkan Pemilik Rekening">
                        </div>
                        <div class="form-group">
                            <label for="nomor_rekening">Nomor Rekening</label>
                            <input id="nomor_rekening" type="number" class="form-control" name="nomor_rekening" placeholder="Masukkan Nomor Rekening">
                        </div>
                        <div class="form-group">
                            <label for="kode_rekening">Kode Rekening</label>
                            <input id="kode_rekening" type="number" class="form-control" name="kode_rekening" placeholder="Masukkan Kode Rekening">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>                                                        
    </div>
</div>
<?= $this->endSection(); ?>