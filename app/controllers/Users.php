<?php 
 
 class Users extends Controller {
    public function __construct(){
        
      $this->userModel = $this->model('User');

    }




public function login(){

$data = [

'welcome' => 'High school', 
];

$this->view('users/login', $data );

}


  }