<?php

class Home extends Controller
{
    public function __construct()
    {
       // $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome - OLHMS',
        ];
        $this->view('home/index', $data);
    }
}
