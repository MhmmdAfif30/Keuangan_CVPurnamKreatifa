<?php namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    /**
     * table name
     */
    protected $table = "project";

    protected $primaryKey = 'id_project';

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'nama_project',
        'tgl_awal',
        'tgl_akhir',
        'tahun_project',
        'deskripsi'
    ];
}