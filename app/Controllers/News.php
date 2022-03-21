<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\KategoriModel;

class News extends BaseController
{
    protected $newsModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->newsModel = new NewsModel();
        $this->kategoriModel = new KategoriModel();
    }
    public function dashboard(){
        
        $data = [
            'news' => $this->newsModel->getCountNews(),
            'user' => $this->newsModel->getCountUser(),
            'cat' => $this->newsModel->getCountCat()
        ];
        echo view('News/dashboard', $data);
    }

    public function create(){
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'kategori' => $this->kategoriModel->findAll(),
        ];
        return view('News/create', $data);
    }

    public function save(){

        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'deskripsi Harus diisi',
                ]
            ],
            'foto' => [
                'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'Yang dipilih bukan gambar',
                    'mime_in' => 'Yang dipilih bukan gambar'
                ] 
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('create')->withInput()->with('validation', $validation);
            return redirect()->to('create')->withInput();
        }

        // Kelola Gambar
        $fileFoto = $this->request->getFile('foto');
        // Tidak Ada Gambar Yg di upload
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            // Ada Gambar di upload
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('img', $namaFoto);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->newsModel->save([
            'judul' => $this->request->getVar('judul'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'slug' => $slug,
            'isi' => $this->request->getVar('isi'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('Pesan', 'Berita baru telah ditambahkan.');
        

        return redirect()->to('create');
    }
    
    public function list(){
        $data['news'] = $this->newsModel->getRelasi();
                
        return view('News/list', $data);
    }

    public function detail($slug)
    {
        $data['news'] = $this->newsModel->getNews($slug);
        if(empty($data['news']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita ' . $slug . ' tidak ditemukan.');
        }
        return view('News/detail', $data);
    }

    public function delete($id)
    {
        $news = $this->newsModel->find($id);

        if($news['foto'] != 'default.png') {
            unlink('img/' . $news['foto']);
        }


        $this->newsModel->delete($id);
        return redirect('list')->with('success', 'berita berhasil dihapus');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'form ubah data Berita',
            'validation' => \Config\Services::validation(),
            'news' => $this->newsModel->getNews($slug),
            'kategori' => $this->kategoriModel->findAll()
        ];
        return view('News/edit', $data);
    }
    public function update($id)
    {
        
        // $newsLama = $this->newsModel->getNews($this->request->getVar('slug'));
        // if($newsLama['judul'] == $this->request->getVar('judul')) 
        // {
        //     $rule_judul = 'required';
        // } else {
        //     $rule_judul = 'required';
        // }

        // // Validation
        if (!$this->validate([
            'judul' => [
                'errors' => [
                    'required' => '{field} harus Diisi'
                ]
                ],
                'foto' => [
                    'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'is_image' => 'Yang dipilih bukan gambar',
                        'mime_in' => 'Yang dipilih bukan gambar'
                    ] 
                ]
        ])) {
            return redirect()->to('/edit' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('img', $namaFoto);
            if ($this->request->getVar('fotoLama') != 'default.png') 
            {
                unlink('img/' . $this->request->getVar('fotoLama'));
            }
        }
        

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->newsModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'slug' => $slug,
            'isi' => $this->request->getVar('isi'),
            'foto' => $namaFoto
        ]);

        
        // $data = $this->request->getPost();
        // $this->newsModel->update($id, $data);
        session()->setFlashdata('Ubah', 'Data Berita baru saja di ubah.');

        return redirect()->to('list');
    }
}
