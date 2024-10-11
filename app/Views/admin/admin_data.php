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
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>
                        Admin
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="<?= base_url('admin/tambah') ?>" type="button" class="btn-shadow mr-3 btn btn-primary">
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
                        <th>Username</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($admin): 
                        $no = 1;
                        $session = session();
                        foreach($admin as $row): 
                        if ($row['status'] == 1) {
                            $status = 'Aktif';
                            $warna = 'text-info';
                        } else {
                            $status = 'Banned';
                            $warna = 'text-danger';
                        }?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['username']; ?></td>
                        <td>                            
                                <a href="<?= base_url('admin/ubah/' . $row['id_admin']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <!-- <?php if ($row['id_admin'] == $session->get('id_admin')) : ?> -->
                                    <!-- <a class="btn btn-sm btn-danger opacity-5 text-light" disabled><i class="fa fa-trash"></i></a> -->

                            <td><div class='" <?= $warna; ?> " opacity-5' disabled><?= $status; ?></div></td>
                            <!-- <?php else : ?> -->
                                
                                <a href="<?= base_url('admin/hapus/' . $row['id_admin']) ?>" class="btn btn-sm btn-danger text-light"><i class="fa fa-trash"></i></a>
                                <td><?= anchor('admin/ubah_status/' . $row['id_admin'], '<div class="' . $warna . '">' . $status . '</div>') ?></td>
                            <!-- <?php endif; ?> -->
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