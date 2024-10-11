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
                        <i class="pe-7s-airplay icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>
                        Project
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="<?= base_url('project/tambah') ?>" type="button" class="btn-shadow mr-3 btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
        </div>            
        <div class="row mx-auto">
            <?php if(!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success mb-3" style="width: 100%">
                    <?php echo session()->getFlashdata('message');?>
                </div>
            <?php endif ?>

            <table class="table table-striped display nowrap" style="width: 100%" id="project">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Project</th>
                        <th>Tanggal Awal</th>
                        <th>Tanggal Akhir</th>
                        <th>Tahun Project</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($project): 
                        $no = 1;
                        foreach($project as $row): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_project']; ?></td>
                        <td><?= $row['tgl_awal']; ?></td>
                        <td><?= $row['tgl_akhir']; ?></td>
                        <td><?= $row['tahun_project']; ?></td>
                        <td><?= $row['deskripsi']; ?></td>
                        <td>
                            <a href="<?= base_url('project/ubah/'.$row['id_project']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('project/hapus/'.$row['id_project']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
        $('#project').DataTable({
            scrollX: true,
        });
    });
</script>
<?= $this->endSection(); ?>