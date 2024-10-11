<?php

namespace App\Controllers;
use App\Models\ProjectModel;
use App\Models\BankModel;
use App\Models\KlasifikasiModel;
use App\Models\SubKlasifikasiModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $projectModel = new ProjectModel();
        $bankModel = new BankModel();
        $klasifikasiModel = new KlasifikasiModel();
        $subKlasifikasiModel = new SubKlasifikasiModel();

        $data = [
            'project' => $projectModel->countAll(),
            'bank' => $bankModel->countAll(),
            'klasifikasi' => $klasifikasiModel->countAll(),
            'sub_klasifikasi' => $subKlasifikasiModel->countAll(),
        ];
        return view('dashboard', $data);
    }

    public function logout()
    {
        // $session = session();
        // $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
