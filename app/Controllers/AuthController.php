<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{

    public function home(){
        return view('layout/header')
            .view('home')
            .view('layout/footer');
    }

    public function login()
    {
        return view('layout/header')
            .view('login')
            .view('layout/footer');
    }

    public function register(){
        return view('layout/header')
            .view('register')
            .view('layout/footer');
    }

    public function dashboard(){
        return view('layout/header')
            .view('dashboard')
            .view('layout/footer');
    }

    public function newtasks(){
        return view('layout/header')
            .view('newtasks')
            .view('layout/footer');
    }

    public function profile()
    {
        $data = array();

        $data['nama'] = "Maateesh";
        $data['username'] = "Matesh";
        $data['email'] = "maateesh04@gmail.com";
        $data['password'] = "Matesh1353";

        return view('layout/header')
            .view('profile', $data)
            .view('layout/footer');
    }

}