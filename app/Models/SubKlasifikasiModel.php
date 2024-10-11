<?php

namespace App\Models;

use CodeIgniter\Model;

class SubKlasifikasiModel extends Model
{
    protected $table            = 'sub_klasifikasi';
    protected $primaryKey       = 'id_sub_klasifikasi';
    protected $allowedFields    = [
        'nama_sub_klasifikasi',
        'kode_sub_klasifikasi'
    ];
}
