<?php

class Auth extends Controller {

    // Menampilkan halaman login
    public function index()
    {
        $data['judul'] = 'Login';

        $this->view('templates/header', $data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }


    // Menampilkan halaman registrasi
    public function register()
    {
        $data = [
            'judul' => 'Register',
            'name' => '',
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'avatar' => '',
            'nameError' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'avatarError' => ''
        ];

        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $data = [
                'name' => trim($_POST['name']),
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'nameError' => '',
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'avatarError' => ''
            ];

            $nameValidation = "/^[a-zA-Z]*$/";
            // $passwordValidation = "/^(.{0,4}|[^a-z]*|[^\d]*)$/i";

            // Validasi Name
            if ( empty($data['name']) ) {
                $data['nameError'] = 'Please Enter Name';
            }

            // Valiadasi Username
            if ( empty($data['username']) ) {
                $data['usernameError'] = 'Please Enter username';
            } elseif ( !preg_match($nameValidation, $data['username']) ) {
                $data['usernameError'] = 'Username can only contain letters and number';
            } else {
                if ( $this->model('UserModel')->findUserByUsername($data['username']) ) {
                    $data['usernameError'] = 'Username is already taken';
                }
            }

            // Validasi Email
            if ( empty($data['email']) ) {
                $data['emailError'] = 'Please enter email';
            } elseif ( !filter_var($data['email'], FILTER_VALIDATE_EMAIL) ) {
                $data['emailError'] = 'Please enter the correct format email';
            }

            // Validasi Password
            if ( empty($data['password']) ) {
                $data['passwordError'] = 'Please enter password';
            } elseif ( strlen($data['password']) < 4 ) {
                $data['passwordError'] = 'Password must be at least 5 characters';
            }

            // Validasi Confirm Password
            if ( empty($data['confirmPassword']) ) {
                $data['confirmPasswordError'] = 'Please enter confirm Password';
            } elseif ( $data['password'] != $data['confirmPassword'] ) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again';
            }

            // Validasi Avatar
            if ( !empty($_FILES['avatar']) ) {
                $img_name = $_FILES['avatar']['name'];
                $img_size = $_FILES['avatar']['size'];
                $tmp_name = $_FILES['avatar']['tmp_name'];
                $img_error = $_FILES['avatar']['error'];
    
                if ( $img_error === 0 ) {
                    if ( $img_size > 250000 ) {
                        $data['avatarError'] = 'Avatar anda terlalu besar';
                    } else {
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);
                        $allowed_ex = array("jpg", "jpeg", "png");
    
                        if ( in_array($img_ex_lc, $allowed_ex) ) {
                            $data['avatar'] = $new_img_name = uniqid("AVA-", true). '.' .$img_ex_lc;
                            $img_path = PATH. 'avatars/' .$new_img_name;
                            move_uploaded_file($tmp_name, $img_path);
                        } else {
                            $data['avatarError'] = 'Format gambar adalah jpg, jpeg, png';
                        }
                    }
                } else {
                    $data['avatarError'] = 'Error saat upload gambar!';
                }
            } else {
                $data['avatarError'] = 'Avatar harus diiisi';
            }


            // Pastikan semua error kosong
            if ( empty($data['nameError']) && empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError']) && empty($data['avatarError']) ) {

                //Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Kirim data ke model user
                if ( $this->model('UserModel')->insert($data) > 0) {
                    header('Location: '. BASEURL .'/auth/login');
                } else {
                    die('Terjadi kesalah bung');
                }
            }
        }

        $this->view('templates/header', $data);
        $this->view('auth/register', $data);
        $this->view('templates/footer');
    }


    // Proses login user
    public function login()
    {
        $data = [
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        // Cek method post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];

            // Validasi Username
            if ( empty($data['username']) ) {
                $data['usernameError'] = 'Username lo ape cuk!';
            }

            // Validasi Password
            if ( empty($data['password']) ) {
                $data['passwordError'] = 'Password nye ape tong!?';
            }

            // Cek kalo error nya dah bersih
            if ( empty($data['usernameError']) && empty($data['passwordError']) ) {
                $loginUser = $this->model('UserModel')->loginUser($data['username'], $data['password']);

                if ($loginUser) {
                    $this->createUserSession($loginUser);
                } else {
                    // die('Gagal Login');
                    $data['passwordError'] = 'Username / Password nye kagak bener.';
                }
            }
        }

        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }


    // Session
    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: '. BASEURL .'/profile');
    }


    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        header('Location: '. BASEURL .'/auth/login');
    }
}