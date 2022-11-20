<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }
    public function register()
    {
        $data = [
            'title' => 'Form Register New User',
        ];

        if ($this->request->getPost()) {

            // Validasi input data
            $data1 = $this->request->getPost();
            $validate = $this->validation->run($data1, 'register');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $userModel = new \App\Models\UserModel();

                $user = new \App\Entities\User();

                $user->username = $this->request->getPost('username');
                $user->password = $this->request->getPost('password');

                $user->created_by = 0;
                $user->created_date = date('Y-m-d H:i:s');

                $userModel->save($user);

                return view('auth/login', $data);
            }

            session()->setFlashdata('errors', $errors);
        }

        return view('auth/register', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Form Login'
        ];

        if ($this->request->getPost()) {
            // Validasi input data
            $data1 = $this->request->getPost();
            $validate = $this->validation->run($data1, 'login');
            $errors = $this->validation->getErrors();

            if ($errors) {
                return view('auth/login', $data);
            }

            $userModel = new \App\Models\UserModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                $salt = $user->salt;

                if ($user->password !== md5($salt . $password)) {
                    session()->setFlashdata('errors', ['Password Salah!!']);
                } else {
                    $sessData = [
                        'username' => $user->username,
                        'id' => $user->id,
                        'role' => $user->role,
                        'isLoggedIn' => true
                    ];

                    session()->set($sessData);

                    return redirect()->to('/Home/index');
                }
            } else {
                $this->session->setFlashdata('errors', ['Username Tidak Ditemukan!']);
            }
        }

        return view('auth/login', $data);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('auth/login'));
    }
}
