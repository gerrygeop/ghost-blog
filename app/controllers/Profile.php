<?php

class Profile extends Controller {

    public function index()
    {
        $data['judul'] = 'Profile';
        $data['user'] = $this->model('UserModel')->getUserById($_SESSION['user_id']);
        $data['blogs'] = $this->model('BlogModel')->getAllBlogByUserId($_SESSION['user_id']);

        $this->view('templates/header', $data);
        $this->view('profiles/index', $data);
        $this->view('templates/footer');
    }

}