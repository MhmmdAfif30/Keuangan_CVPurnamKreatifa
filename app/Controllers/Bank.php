<?php

namespace App\Controllers;
use App\Models\BankModel;

use App\Controllers\BaseController;

class Bank extends BaseController
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $bankModel = new BankModel();

        $data['bank'] = $bankModel->orderBy('id_bank', 'DESC')->findAll();
        return view('bank/bank_data', $data);
    }

    public function create()
    {
        return view('bank/bank_create');
    }

    /**
     * store function
     */
    public function store()
    {         
        //define validation
        $validation = $this->validate([
            'nama_bank' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Bank.'
                ]
            ],
            'pemilik_rekening'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Pemilik Rekening.'
                ]
            ],
            'nomor_rekening'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nomor Rekening.'
                ]
            ],
            'kode_rekening'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kode Rekening.'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('bank/bank_create', [
                'validation' => $this->validator
            ]);

        } else {

             //model initialize
            $bankModel = new BankModel();
            
            //insert data into database
            $bankModel->insert([
                'nama_bank'   => $this->request->getPost('nama_bank'),
                'pemilik_rekening' => $this->request->getPost('pemilik_rekening'),
                'nomor_rekening' => $this->request->getPost('nomor_rekening'),
                'kode_rekening' => $this->request->getPost('kode_rekening'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Bank Berhasil Disimpan');

            return redirect()->to(base_url('bank'));
        }
    }

    public function edit($id)
    {
        //model initialize
        $bankModel = new BankModel();

        $data = array(
            'bank' => $bankModel->find($id)
        );

        return view('bank/bank_edit', $data);
    }

    /**
     * update function
     */
    public function update($id)
    {         
        //define validation
        $validation = $this->validate([
            'nama_bank' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Bank.'
                ]
            ],
            'pemilik_rekening'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Pemilik Rekening.'
                ]
            ],
            'nomor_rekening'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nomor Rekening.'
                ]
            ],
            'kode_rekening'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kode Rekening.'
                ]
            ],
        ]);

        if(!$validation) {

            //model initialize
            $bankModel = new BankModel();

            //render view with error validation message
            return view('bank/bank_edit', [
                'bank' => $bankModel->find($id),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $bankModel = new BankModel();
            
            //update data into database
            $bankModel->update($id, [
                'nama_bank'   => $this->request->getPost('nama_bank'),
                'pemilik_rekening' => $this->request->getPost('pemilik_rekening'),
                'nomor_rekening' => $this->request->getPost('nomor_rekening'),
                'kode_rekening' => $this->request->getPost('kode_rekening'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Bank Berhasil Diupdate');

            return redirect()->to(base_url('bank'));
        }
    }

    /**
     * delete function
     */
    public function delete($id)
    {
        //model initialize
        $bankModel = new BankModel();

        $bank = $bankModel->find($id);

        if($bank) {
            $bankModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Bank Berhasil Dihapus');

            return redirect()->to(base_url('bank'));
        }
    }
}