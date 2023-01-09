<?php

namespace App\Controllers;

use App\Models\PlaylistModel;

class playlist extends BaseController
{
    protected $playlistModel;
    public function __construct()
    {
        $this->playlistModel = new PlaylistModel();
    }
    public function index()
    {
        $playlist = $this->playlistModel->findAll();

        $data = [
            'title' => 'Daftar Playlist',
            'playlist' => $playlist
        ];



       return view('playlist/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Form Tambah Playlist',
            'validation' => \Config\Services::validation()
        ];

        return view('playlist/tambah', $data);
    }

    public function simpan()
    {
        //validasi input
        if(!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[playlist.nama]',
                'errors' => [
                    'required' => '{field} playlist harus diisi.',
                    'is_unique' => '{field} playlist sudah ada.'
                ]
                ],
            'sampul' => [
                'rules' => 'max_size[sampul,2048]|is_image[sampul]|mime_in[sampul,image/png,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2 MB',
                    'is_image' => 'Yang anda pilih bukan format gambar',
                    'mime_in' => 'Yang anda pilih bukan format gambar'
                ]
            ]
        ])) {
            return redirect()->to('/playlist/tambah')->withInput();
        }

        //ambil gambar
        $filesampul = $this->request->getFile('sampul');
        //cek gambar diupload
        if($filesampul->getError() == 4) {
            $namasampul = 'default.jpg';
        } else {
            //generate nama sampul random
            $namasampul = $filesampul->getRandomName();
            //pindahkan file ke folder img
            $filesampul->move('img', $namasampul);
        }

        $this->playlistModel->save([
            'sampul' => $namasampul,
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesan', 'Playlist berhasil ditambahkan.');

        return redirect()->to('/playlist');
    }

    public function hapus($id)
    {
        // //cari gambar berdasarkan id
        // $playlist = $this->playlistModel->find($id);
        // //hapus gambar
        // if ($playlist['sampul'] != 'default.jpg') {
        //     unlink('img/' . $playlist['sampul']);
        // }


        $this->playlistModel->delete($id);
        session()->setFlashdata('pesan', 'Playlist berhasil dihapus.');
        return redirect()->to('/playlist');
    }

    public function ubah($id)
    {
        $data = [
            'title' => 'Form Ubah Playlist',
            'validation' => \Config\Services::validation(),
            'playlist' => $this->playlistModel->getIdValue($id)
        ];

        return view('playlist/ubah', $data);
    }
}