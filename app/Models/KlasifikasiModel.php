<?php

namespace App\Models;

use CodeIgniter\Model;

class KlasifikasiModel extends Model
{
    protected $table            = 'klasifikasi';
    protected $primaryKey       = 'id_klasifikasi';
    protected $allowedFields    = [
        'id_sub_klasifikasi',
        'nama_klasifikasi',
        'kode_klasifikasi'
    ];
}
