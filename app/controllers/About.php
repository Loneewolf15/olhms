<?php 
 
 class About extends Controller {
    public function __construct(){
        
     // $this->userModel = $this->model('User');

    }

public function aboutUs($token){
$data = [];
    $this->view('about/aboutus',$data);
}

public function foundersMessage($token){
    $data = [];
    $this->view('about/foundersmessage',$data);

}

public function ourHistory($token){
    $data = [];
    $this->view('about/ourhistory',$data);

}
public function principalsWelcome($token){
    $data = [];
    $this->view('about/principalswelcome',$data);

}

public function management($token){
    $data = [];
    $this->view('about/management',$data);

}

public function ourPolicies($token){
    $data = [];
    $this->view('about/ourpolicies',$data);

}

public function careers($token){
    $data = [];
    $this->view('about/careers',$data);

}
}