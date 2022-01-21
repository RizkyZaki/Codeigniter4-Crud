<?php

namespace App\Controllers;

use App\Models\FilmModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Validation\Rules;

class Film extends BaseController
{
    protected $filmModel;

    public function __construct()
    {
        $this->filmModel = new FilmModel();
    }

    
    public function index()
    {
        // $film = $this->filmModel->findAll();
        $data = [
            'title' => 'Daftar Film',
            'film'  => $this->filmModel->getFilm()
        ];
        
        return view('Film/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Film',
            'film'  => $this->filmModel->getFilm($slug)
        ];
        if(empty($data['film']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul film ' . $slug . ' tidak ditemukan.');
        }
        return view('film/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'form tambah list',
            'validation' => \Config\Services::validation()
        ];
        return view('film/create', $data);
    }

    public function save()
    {
        // Validation
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[film.judul]',
                'errors' => [
                    'required' => '{field} Harus diisi cok',
                    'is_unique' => '{field} Film udah ada blok lu lupa?'
                ]
            ],
            'poster' => [
                'rules' => 'max_size[poster,1024]|is_image[poster]|mime_in[poster,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran filenya terlalu besar',
                    'is_image' => 'Yang dipilih bukan gambar',
                    'mime_in' => 'Yang dipilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/film/create')->withInput()->with('validation', $validation);
            return redirect()->to('/film/create')->withInput();
        }

        // Kelola Gambar
        $filePoster = $this->request->getFile('poster');
        // Tidak Ada Gambar Yg di upload
        if ($filePoster->getError()== 4) {
            $namaPoster = 'default.jpg';
        } else {
            // Ada Gambar di upload
            $namaPoster = $filePoster->getRandomName();
            $filePoster->move('img', $namaPoster);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->filmModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sutradara' => $this->request->getVar('sutradara'),
            'rilis' => $this->request->getVar('rilis'),
            'poster' => $namaPoster
        ]);

        session()->setFlashdata('Pesan', 'List baru telah ditambahkan.');

        return redirect()->to('/film');
    }

    public function delete($id)
    {
        $this->filmModel->delete($id);
        return redirect()->to('/film');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'form ubah data film',
            'validation' => \Config\Services::validation(),
            'film' => $this->filmModel->getFilm($slug)
        ];
        return view('film/edit', $data);
    }

    public function update($id)
    {
        // cek judul
        $filmLama = $this->filmModel->getFilm($this->request->getVar('slug'));
        if($filmLama['judul'] == $this->request->getVar('judul')) 
        {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[film.judul]';
        }

        // Validation
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} harus Diisi anjing',
                    'is_unique' => '{field} Film udah ada blok lu lupa?'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/film/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->filmModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sutradara' => $this->request->getVar('sutradara'),
            'rilis' => $this->request->getVar('rilis'),
            'poster' => $this->request->getVar('poster')
        ]);

        session()->setFlashdata('Pesan', 'Data film baru saja di ubah.');

        return redirect()->to('/film');
    }
}