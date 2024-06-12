<?php 
 
 class Gallerys extends Controller {
    public function __construct(){
        
     // $this->userModel = $this->model('User');

    }

public function index(){
// $data = [];
//     $this->view('gallery/index',$data);
}

public function classx(){
    $data = [];
        $this->view('gallerys/classx',$data);
    }
    
    public function pupils(){
        $data = [];
            $this->view('gallerys/pupils',$data);
        }
        
}