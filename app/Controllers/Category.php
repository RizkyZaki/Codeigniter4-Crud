<?php

namespace App\Controllers;
use App\Models\KategoriModel;

class Category extends BaseController
{

    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index(){

        $data = [
            'kategori' => $this->kategoriModel->findAll(),
        ];
        return view('Category/list-category', $data);
    }

    public function add()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Category/add', $data);
    }

    public function addCategory()
    {
        if (!$this->validate([
            'nama_kat' => [
                'rules' => 'required|is_unique[kategori.nama_kat]',
                'errors' => [
                    'required' => 'Kategori Harus Diisi',
                    'is_unique' => 'Kategori Sudah Ada'
                ]
            ],
            ])) {
                return redirect()->back()->withInput();
            }
        
            $this->kategoriModel->save([
                'nama_kat' => $this->request->getVar('nama_kat')
            ]);

        session()->setFlashdata('Kategori-masuk', 'Kategori baru telah ditambahkan.');
        return redirect()->to('list-category');
    }

    public function delete($id_kat)
    {
        $this->kategoriModel->delete($id_kat);
        return redirect('list-category')->with('terhapus', 'kategori berhasil dihapus');
    }
}
