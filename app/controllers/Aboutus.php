<?php 
 
 class Aboutus extends Controller {
    public function __construct(){
        
     // $this->userModel = $this->model('User');

    }

    public function index(){
       
$data = [

    'title' => 'About us',];

            $this->view('aboutus/index',$data);
        }

public function ourStory(){
$data = [
    'title' => 'About OLHMS',
];
    $this->view('aboutus/ourstory',$data);
}

public function foundersMessage(){
    $data = [];
    $this->view('aboutus/foundersmessage',$data);

}

public function ourHistory(){
    $data = [];
    $this->view('aboutus/ourhistory',$data);

}
public function principalsWelcome(){
    $data = [];
    $this->view('aboutus/principalswelcome',$data);

}

public function management(){
    $data = [];
    $this->view('aboutus/management',$data);

}

public function ourPolicies(){
    $data = [];
    $this->view('aboutus/ourpolicies',$data);

}

public function careers(){
    $data = [];
    $this->view('aboutus/careers',$data);

}
}