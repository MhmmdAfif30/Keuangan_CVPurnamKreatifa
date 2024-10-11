<?php

namespace App\Models;

use CodeIgniter\Model;

class BankModel extends Model
{
    protected $table            = 'bank';
    protected $primaryKey       = 'id_bank';
    protected $allowedFields    = [
        'nama_bank',
        'pemilik_rekening',
        'nomor_rekening',
        'kode_rekening'
    ];
}
