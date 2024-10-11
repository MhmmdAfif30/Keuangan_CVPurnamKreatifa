<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProjectModel;

class Project extends Controller
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $projectModel = new ProjectModel();

        $data['project'] = $projectModel->orderBy('id_project', 'DESC')->findAll();
        return view('project/project_data', $data);
    }

    public function create()
    {
        return view('project/project_create');
    }

    /**
     * store function
     */
    public function store()
    {           
        //define validation
        $validation = $this->validate([
            'nama_project' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Project.'
                ]
            ],
            'tgl_awal'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Tanggal Awal.'
                ]
            ],
            'tgl_akhir'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Tanggal Akhir.'
                ]
            ],
            'tahun_project'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Tahun Project.'
                ]
            ],
            'deskripsi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Deskripsi.'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('project/project_create', [
                'validation' => $this->validator
            ]);

        } else {

             //model initialize
            $projectModel = new ProjectModel();
            
            //insert data into database
            $projectModel->insert([
                'nama_project'   => $this->request->getPost('nama_project'),
                'tgl_awal' => $this->request->getPost('tgl_awal'),
                'tgl_akhir' => $this->request->getPost('tgl_akhir'),
                'tahun_project' => $this->request->getPost('tahun_project'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Project Berhasil Disimpan');

            return redirect()->to(base_url('project'));
        }
    }

    public function edit($id)
    {
        //model initialize
        $projectModel = new ProjectModel();

        $data = array(
            'project' => $projectModel->find($id)
        );

        return view('project/project_edit', $data);
    }

    /**
     * update function
     */
    public function update($id)
    {           
        //define validation
        $validation = $this->validate([
            'nama_project' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Project.'
                ]
            ],
            'tgl_awal'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Tanggal Awal.'
                ]
            ],
            'tgl_akhir'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Tanggal Akhir.'
                ]
            ],
            'tahun_project'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Tahun Project.'
                ]
            ],
            'deskripsi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Deskripsi.'
                ]
            ],
        ]);

        if(!$validation) {

            //model initialize
            $projectModel = new ProjectModel();

            //render view with error validation message
            return view('project/project_edit', [
                'project' => $projectModel->find($id),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $projectModel = new ProjectModel();
            
            //insert data into database
            $projectModel->update($id, [
                'nama_project'   => $this->request->getPost('nama_project'),
                'tgl_awal' => $this->request->getPost('tgl_awal'),
                'tgl_akhir' => $this->request->getPost('tgl_akhir'),
                'tahun_project' => $this->request->getPost('tahun_project'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Project Berhasil Diupdate');

            return redirect()->to(base_url('project'));
        }
    }

    /**
     * delete function
     */
    public function delete($id)
    {
        //model initialize
        $projectModel = new ProjectModel();

        $project = $projectModel->find($id);

        if($project) {
            $projectModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Project Berhasil Dihapus');

            return redirect()->to(base_url('project'));
        }
    }
}