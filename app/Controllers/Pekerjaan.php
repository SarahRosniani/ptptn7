<?php

namespace App\Controllers;


use App\Models\PekerjaanModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pekerjaan extends BaseController
{
    public $pekerjaanModel;

    public function __construct(){
        $this->pekerjaanModel = new PekerjaanModel();
    }
    
    public function pekerjaan()
    {
        $data = [
            'pekerjaan'     => $this->pekerjaanModel->getPekerjaan()
        ];
        return view('Admin/pekerjaan', $data);
    }

    public function store(){
        $this->pekerjaanModel->savePekerjaan([
            'pekerjaan'      => $this->request->getVar('pekerjaan'),
        ]);

        $pekerjaanModel = new PekerjaanModel();
        $pekerjaan = $this->request->getPost('pekerjaan');

        $data=[
            'pekerjaan' => $pekerjaan,
        ];

        return redirect()->to(base_url('/pekerjaan'));
    }

    public function update($id){
        // $id = $this->request->getVar('id');
        $data = [
            'pekerjaan'        => $this->request->getVar('pekerjaan'),
        ];

        $result = $this->pekerjaanModel->updatePekerjaan($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/pekerjaan'));
    }

    public function destroy($id){
        $result = $this->pekerjaanModel->deletePekerjaan($id);
        if (!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/pekerjaan'))
            ->with('success', 'Berhasil menghapus data');
    }
}
