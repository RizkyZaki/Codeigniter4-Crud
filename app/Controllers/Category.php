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
            'Kategori' => [
                'rules' => 'required|is_unique[kategori.nama_kategori]',
                'errors' => [
                    'required' => '{field} Harus Diisi',
                    'is_unique' => 'Kategori Sudah Ada'
                ]
            ],
            ])) {
                return redirect()->back()->withInput();
            }
        
            $data = [
                'nama_kategori' => $this->request->getPost('nama_kategori'),
            ];

            $this->kategoriModel->save($data);

        session()->setFlashdata('Kategori-masuk', 'Kategori baru telah ditambahkan.');
        return redirect()->to('list-category');
    }
}
