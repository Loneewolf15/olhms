<?php

class Academics extends Controller
{
  public function __construct()
  {

    // $this->userModel = $this->model('User');

  }
  public function academic()
  {
    $data = [
      'title' => 'Academics - OLHMS',
    ];
    $this->view('academics/academic', $data);
  }
  public function index()
  {

    $data = [
      'welcome' => 'Olhms school',
    ];
    $this->view('academics/index', $data);
  }
}
