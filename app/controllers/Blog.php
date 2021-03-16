<?php

class Blog extends Controller {

    public function index()
    {
        $data['judul'] = 'Blogs';
        // $data['mhs'] = $this->model('MahasiswaModel')->getAllMahasiswa();

        $this->view('templates/header', $data);
        $this->view('blogs/index');
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('MahasiswaModel')->getMahasiswaById($id);

        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Mahasiswa';
        $data['mhs'] = $this->model('MahasiswaModel')->getMahasiswaById($id);

        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        if ($this->model('MahasiswaModel')->updateMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Diupdate', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diupdate', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function create()
    {
        $data['judul'] = 'Tambah Tulisan';

        $this->view('templates/header', $data);
        $this->view('blogs/create');
        $this->view('templates/footer');
    }

    public function store()
    {
        if ($this->model('MahasiswaModel')->tambahMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('MahasiswaModel')->hapusMahasiswa($id) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}