<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    protected $newsModel;
    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }
    public function dashboard(){
        echo view('News/dashboard');
    }

    public function create(){
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('News/create', $data);
    }

    public function save(){

        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
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
            // return redirect()->to('/film/create')->withInput()->with('validation', $validation);
            return redirect()->to('create')->withInput();
        }

        // Kelola Gambar
        $fileFoto = $this->request->getFile('foto');
        // Tidak Ada Gambar Yg di upload
        if ($fileFoto->getError()== 4) {
            $namaFoto = 'default.png';
        } else {
            // Ada Gambar di upload
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('img', $namaFoto);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->newsModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'isi' => $this->request->getVar('isi'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('Pesan', 'Berita baru telah ditambahkan.');

        return redirect()->to('create');
    }
    
    public function list(){
        $data = [
            'news'  => $this->newsModel->getNews()
        ];
        
        return view('News/list', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Film',
            'news'  => $this->newsModel->getNews($slug)
        ];
        if(empty($data['news']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita ' . $slug . ' tidak ditemukan.');
        }
        return view('News/detail', $data);
    }

    public function delete($id)
    {
        $this->newsModel->delete($id);
        return redirect('list')->with('succes', 'berita berhasil dihapus');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'form ubah data film',
            'validation' => \Config\Services::validation(),
            'news' => $this->newsModel->getNews($slug)
        ];
        return view('News/edit', $data);
    }
    public function update($id)
    {
        // cek judul
        // $newsLama = $this->newsModel->getNews($this->request->getVar('slug'));
        // if($newsLama['judul'] == $this->request->getVar('judul')) 
        // {
        //     $rule_judul = 'required';
        // } else {
        //     $rule_judul = 'required';
        // }

        // // Validation
        // if (!$this->validate([
        //     'judul' => [
        //         'rules' => $rule_judul,
        //         'errors' => [
        //             'required' => '{field} harus Diisi'
        //         ]
        //     ]
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/edit' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        // }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->newsModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'isi' => $this->request->getVar('isi'),
            'foto' => $this->request->getVar('foto')
        ]);

        session()->setFlashdata('Pesan', 'Data film baru saja di ubah.');

        return redirect()->to('list');
    }
}
