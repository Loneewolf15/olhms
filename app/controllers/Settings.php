<?php
  class Settings extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->jobsModel = $this->model('Job');

        $this->settingsModel = $this->model('Setting');
        
      }

     
      
    
    ///proccess user coookie
    public function cookValid($liveToken){
 

        
        if(!($this->userModel->cookieChecker($liveToken))){
   
         redirect('users/login/8');
        
        }else{
   
           return true;
   
        }
   
    }
        


    public function edit($tokenX){

      $this->cookValid($tokenX);

//echo $_SERVER['REQUEST_METHOD'];

  if($_SERVER['REQUEST_METHOD'] == 'POST'){  ///post start
      
    //Sanitize POST data
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    // Process form
 
        // Init data
       
       
       
       
       
        $data = [
          'siteName' => trim($_POST['siteName']),
          'state' => trim($_POST['state']),
          'city' => trim($_POST['city']),
          'email' => trim($_POST['email']),
          'country' => trim($_POST['country']),
          'webAdd' => trim($_POST['webAdd']),
          'phone' => trim($_POST['phone']),          
          'officeAdd' => trim($_POST['officeAdd']),
          'pobox' => trim($_POST['pobox']),
          'zip' => trim($_POST['zip']),
          'slogan' => $_FILES['slogan'],
          'currentYear' => trim($_POST['currentYear']),
          'jobSession' => trim($_POST['jobSession']),
          'integrationKey' => trim($_POST['integrationKey']),
          'wallet1' => trim($_POST['wallet1']),
          'wallet2' => trim($_POST['wallet2']),
          'nisCost' => trim($_POST['nisCost']),
          'surconCost' => trim($_POST['surconCost']),   
          'logo' => $_FILES['logo'],
          'siteName_err' => '',
          'officeAdd_err' => '',
          'email_err' => '',
          'phone_err' => '',
          'state_err' => '',
          'city_err' => '',
          'country_err' => '',
          'webAdd_err' =>'',
             
        ];


        // Validate Name
        if(empty($data['siteName'])){
          $data['siteName_err'] = 'Please Enter Site Name';
        }
    
        // Validate Middle Name
        if(empty($data['officeAdd'])){
          $data['officeAdd_err'] = 'Please Enter Office Address';
        }
      
        // Validate Middle Name
        if(empty($data['email'])){
          $data['email_err'] = 'Please Enter Email Address';
        }
      
        // Validate phone
        if(empty($data['phone'])){
          $data['phone_err'] = 'Please Enter Phone Number';
        }

    
        // Validate Address
        if(empty($data['webAdd'])){
          $data['webAdd_err'] = 'Please Enter Web Address';
        }

         // Validate Address
         if(empty($data['country'])){
          $data['country_err'] = 'Please Enter Country';
        }


         // Validate Address
         if(empty($data['city'])){
          $data['city_err'] = 'Please Enter City Name';
        }

         // Validate state_err
         if(empty($data['state'])){
          $data['state_err'] = 'Please Enter State Name ';
        }

        
    
        //Make sure Errors are Empty
        if(empty($data['state_err']) && empty($data['city_err']) && empty($data['country_err'])  && empty($data['email_err']) && empty($data['webAdd_err']) && empty($data['phone_err']) && empty($data['siteName_err']) && empty($data['officeAdd_err'])){
          $this->settingsModel->save($data);
//echo "helo";
//exit;
//$id
         //

        }else{

     

          $propertyTypeData = $this->jobsModel->getAllPropertyType();
          $getAllSizeType = $this->jobsModel->getAllSizeType();
          $loginData = $this->userModel->findLoginByToken($tokenX);
          $userData = $this->userModel->findUserByEmail_det($loginData->email);
          $menuList = $this->userModel->fetchUserModule($loginData->roleID);
          $submoduleList = $this->userModel->getAllsubmodule();
          $getAppSettings = $this->settingsModel->getAppSettings();
     
          print_r($data);
          $data = [
          'submoduleList'=> $submoduleList,
          'menuList'=> $menuList,
          'loginData' => $loginData,
          'userData' => $userData,
          'wel'=> $wel,
          'propertyTypeData'=> $propertyTypeData,
          'getAllSizeType'=>$getAllSizeType,
          'getAppSettings'=>$getAppSettings,
          'datax'=>$data,

          ];
            
 //return error messages;
//Load view with errors
$this->view('settings/show', $data);

         
        }

        //////end

  }

      $wel = "general settings ";
   
     $propertyTypeData = $this->jobsModel->getAllPropertyType();
     $getAllSizeType = $this->jobsModel->getAllSizeType();
     $loginData = $this->userModel->findLoginByToken($tokenX);
     $userData = $this->userModel->findUserByEmail_det($loginData->email);
     $menuList = $this->userModel->fetchUserModule($loginData->roleID);
     $submoduleList = $this->userModel->getAllsubmodule();
     $getAppSettings = $this->settingsModel->getAppSettings();

     
     $data = [
     'submoduleList'=> $submoduleList,
     'menuList'=> $menuList,
     'loginData' => $loginData,
     'userData' => $userData,
     'wel'=> $wel,
     'propertyTypeData'=> $propertyTypeData,
     'getAllSizeType'=>$getAllSizeType,
     'getAppSettings'=>$getAppSettings,

     ];
       

     
         $this->view('settings/show', $data);

    }
    public  function show($tokenX){
        $this->cookValid($tokenX);

         $wel = "general settings ";
      
        $propertyTypeData = $this->jobsModel->getAllPropertyType();
        $getAllSizeType = $this->jobsModel->getAllSizeType();
        $loginData = $this->userModel->findLoginByToken($tokenX);
        $userData = $this->userModel->findUserByEmail_det($loginData->email);
        $menuList = $this->userModel->fetchUserModule($loginData->roleID);
        $submoduleList = $this->userModel->getAllsubmodule();
        $getAppSettings = $this->settingsModel->getAppSettings();

        
        $data = [
        'submoduleList'=> $submoduleList,
        'menuList'=> $menuList,
        'loginData' => $loginData,
        'userData' => $userData,
        'wel'=> $wel,
        'propertyTypeData'=> $propertyTypeData,
        'getAllSizeType'=>$getAllSizeType,
        'getAppSettings'=>$getAppSettings,

        ];
          

        
            $this->view('settings/show', $data);


        }


        ////end of class
        
    }
