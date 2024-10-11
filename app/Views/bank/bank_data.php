<?= $this->extend('templates/main_layout'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

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
                        Bank
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="<?= base_url('bank/tambah') ?>" type="button" class="btn-shadow mr-3 btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
        </div>            
        <div class="row mx-auto">
            <?php if(!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success mb-4" style="width: 100%">
                    <?php echo session()->getFlashdata('message');?>
                </div>
            <?php endif ?>

            <table class="table table-striped display nowrap" style="width: 100%" id="bank">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Bank</th>
                        <th>Pemilik Rekening</th>
                        <th>Nomor Rekening</th>
                        <th>Kode Rekening</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($bank): 
                        $no = 1;
                        foreach($bank as $row): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_bank']; ?></td>
                        <td><?= $row['pemilik_rekening']; ?></td>
                        <td><?= $row['nomor_rekening']; ?></td>
                        <td><?= $row['kode_rekening']; ?></td>
                        <td>
                            <a href="<?= base_url('bank/ubah/'.$row['id_bank']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('bank/hapus/'.$row['id_bank']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; 
                        endif; ?>
                </tbody>
            </table>
        </div>                                                        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
        $('#bank').DataTable({
            scrollX: true,
        });
    });
</script>
<?= $this->endSection(); ?>