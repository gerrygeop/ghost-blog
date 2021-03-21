<?php

class Blog extends Controller {

    public function index()
    {
        $data['judul'] = 'Blogs';
        $data['blogs'] = $this->model('BlogModel')->getAllBlogs();

        $this->view('templates/header', $data);
        $this->view('blogs/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('BlogModel')->getMahasiswaById($id);

        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = 'Tulis';

        $this->view('templates/header', $data);
        $this->view('blogs/create');
        $this->view('templates/footer');
    }

    public function store()
    {
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

            date_default_timezone_set("Asia/Singapore");
            $dt = date("Y-m-d");

            $data = [
                'userId' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'content' => $_POST['content'],
                'createdAt' => $dt,
                'coverError' => '',
                'titleError' => '',
                'contentError' => '',
            ];

            // Validasi Name
            if ( empty($data['title']) ) {
                $data['titleError'] = 'Judul nya tolong diisi';
            }

            // Validasi content
            if ( empty($data['content']) ) {
                $data['contentError'] = 'Tulisan nya tolong diisi';
            }

            // Validasi Avatar
            if ( !empty($_FILES['cover']) ) {
                $img_name = $_FILES['cover']['name'];
                $img_size = $_FILES['cover']['size'];
                $tmp_name = $_FILES['cover']['tmp_name'];
                $img_error = $_FILES['cover']['error'];
    
                if ( $img_error === 0 ) {
                    if ( $img_size > 5500000 ) {
                        $data['coverError'] = 'Gambar anda oversize max 5 mb';
                    } else {
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);
                        $allowed_ex = array("jpg", "jpeg", "png");
    
                        if ( in_array($img_ex_lc, $allowed_ex) ) {
                            $data['cover'] = $new_img_name = uniqid("CO-", true). '.' .$img_ex_lc;
                            $img_path = PATH. 'covers/' .$new_img_name;
                            move_uploaded_file($tmp_name, $img_path);
                        } else {
                            $data['coverError'] = 'Format gambar adalah jpg, jpeg, png';
                        }
                    }
                } else {
                    $data['coverError'] = 'Error saat upload gambar!';
                }
            } else {
                $data['coverError'] = 'cover harus diiisi';
            }


            // Pastikan semua error kosong
            if ( empty($data['titleError']) && empty($data['coverError']) & empty($data['contentError']) ) {
                if ($this->model('BlogModel')->insertBlog($data) > 0) {
                    // Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
                    header('Location: ' . BASEURL . '/blog/create');
                    exit;
                } else {
                    // Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
                    header('Location: ' . BASEURL . '/blog/create');
                    exit;
                }
            } else {
                die(var_dump($data['titleError'], $data['coverError'], $data['contentError']));
            }
        }
        
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Blog';
        // $data['mhs'] = $this->model('BlogModel')->getMahasiswaById($id);

        $this->view('templates/header', $data);
        $this->view('blogs/edit', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        if ($this->model('BlogModel')->updateMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Diupdate', 'success');
            header('Location: ' . BASEURL . '/profile');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diupdate', 'danger');
            header('Location: ' . BASEURL . '/profile');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('BlogModel')->deleteBlog($id) > 0) {
            // Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/profile');
            exit;
        } else {
            // Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/profile');
            exit;
        }
    }
}