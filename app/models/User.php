<?php 
class User {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    
    
    
    public function getSinglePaymentData($paymentID){
        $this->db->query('SELECT * FROM paymentdata WHERE paymentID= :paymentID');
        $this->db->bind(':paymentID', $paymentID);

        $row = $this->db->single();
      
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }

 
    public function getPaymentDataByUserID($user_id){
        $paymentStatus = 0;
    $this->db->query('SELECT * FROM paymentdata    WHERE paymentSentByID = :paymentSentByID and paymentStatus =:paymentStatus  ORDER BY id DESC  ');
    $this->db->bind(':paymentSentByID', $user_id ); 
    $this->db->bind(':paymentStatus', $paymentStatus ); 

    $row = $this->db->resultSet();
    return $row; 

  }


  

    //loadChatMsg($senderID,$receiverID);
    public function updatePayment($data){
        $paymentStatus = 0;
        $sentDate = date("d-m-Y");
        $sentTime = date("h:i:s A");
        $this->db->query('UPDATE paymentdata SET  paymentText= :paymentText, paymentUrl = :paymentUrl , paymentImage = :paymentImage ,  paymentContact= :paymentContact WHERE paymentID =:paymentID ');
        $this->db->bind(':paymentUrl', $data['paymentUrl'] );
        $this->db->bind(':paymentText', $data['paymentText'] );
        $this->db->bind(':paymentContact', $data['paymentContact'] );
        $this->db->bind(':paymentImage', $data['paymentImage'] );
         $this->db->bind(':paymentID', $data['paymentID'] );

        
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }



    //loadChatMsg($senderID,$receiverID);
    public function savePayment($data){
        $paymentStatus = 0;
        $sentDate = date("d-m-Y");
        $sentTime = date("h:i:s A");
        $this->db->query('INSERT INTO paymentdata SET sentDate = :sentDate , sentTime = :sentTime, paymentStatus = :paymentStatus, paymentText= :paymentText, paymentUrl = :paymentUrl , paymentImage = :paymentImage , paymentSentByID = :paymentSentByID, paymentContact= :paymentContact , paymentID =:paymentID ');
        $this->db->bind(':sentTime', $sentTime );
        $this->db->bind(':paymentStatus', $paymentStatus );
        $this->db->bind(':sentDate', $sentDate );
        $this->db->bind(':paymentUrl', $data['paymentUrl'] );
        $this->db->bind(':paymentText', $data['paymentText'] );
        $this->db->bind(':paymentContact', $data['paymentContact'] );
        $this->db->bind(':paymentImage', $data['paymentImage'] );
        $this->db->bind(':paymentSentByID', $data['paymentSentByID'] );
        $this->db->bind(':paymentID', $data['paymentID'] );

        
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }
    


    
    public function getSingleCaseData($caseID){
        $this->db->query('SELECT * FROM casedata WHERE caseID= :caseID');
        $this->db->bind(':caseID', $caseID);

        $row = $this->db->single();
      
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }

 
    public function getCaseDataByUserID($user_id){
        $caseStatus = 0;
    $this->db->query('SELECT * FROM casedata    WHERE caseSentByID = :caseSentByID and caseStatus =:caseStatus  ORDER BY id DESC  ');
    $this->db->bind(':caseSentByID', $user_id ); 
    $this->db->bind(':caseStatus', $caseStatus ); 

    $row = $this->db->resultSet();
    return $row; 

  }


  

    //loadChatMsg($senderID,$receiverID);
    public function updateCase($data){
        $caseStatus = 0;
        $sentDate = date("d-m-Y");
        $sentTime = date("h:i:s A");
        $this->db->query('UPDATE casedata SET  caseText= :caseText, caseUrl = :caseUrl , caseImage = :caseImage ,  caseContact= :caseContact WHERE caseID =:caseID ');
        $this->db->bind(':caseUrl', $data['caseUrl'] );
        $this->db->bind(':caseText', $data['caseText'] );
        $this->db->bind(':caseContact', $data['caseContact'] );
        $this->db->bind(':caseImage', $data['caseImage'] );
         $this->db->bind(':caseID', $data['caseID'] );

        
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }



    //loadChatMsg($senderID,$receiverID);
    public function saveCase($data){
        $caseStatus = 0;
        $sentDate = date("d-m-Y");
        $sentTime = date("h:i:s A");
        $this->db->query('INSERT INTO casedata SET sentDate = :sentDate , sentTime = :sentTime, caseStatus = :caseStatus, caseText= :caseText, caseUrl = :caseUrl , caseImage = :caseImage , caseSentByID = :caseSentByID, caseContact= :caseContact , caseID =:caseID ');
        $this->db->bind(':sentTime', $sentTime );
        $this->db->bind(':caseStatus', $caseStatus );
        $this->db->bind(':sentDate', $sentDate );
        $this->db->bind(':caseUrl', $data['caseUrl'] );
        $this->db->bind(':caseText', $data['caseText'] );
        $this->db->bind(':caseContact', $data['caseContact'] );
        $this->db->bind(':caseImage', $data['caseImage'] );
        $this->db->bind(':caseSentByID', $data['caseSentByID'] );
        $this->db->bind(':caseID', $data['caseID'] );

        
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }
    
    public function getSingleEmergencyData($emergencyID){
        $this->db->query('SELECT * FROM emergencydata WHERE emergencyID= :emergencyID');
        $this->db->bind(':emergencyID', $emergencyID);

        $row = $this->db->single();
      
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }

 
    public function getEmergencyDataByUserID($user_id){
        $emergencyStatus = 0;
    $this->db->query('SELECT * FROM emergencydata    WHERE emergencySentByID = :emergencySentByID and emergencyStatus =:emergencyStatus  ORDER BY id DESC  ');
    $this->db->bind(':emergencySentByID', $user_id ); 
    $this->db->bind(':emergencyStatus', $emergencyStatus ); 

    $row = $this->db->resultSet();
    return $row; 

  }


  

    //loadChatMsg($senderID,$receiverID);
    public function updateEmergency($data){
        $emergencyStatus = 0;
        $sentDate = date("d-m-Y");
        $sentTime = date("h:i:s A");
        $this->db->query('UPDATE emergencydata SET emergencyState=:emergencyState, emergencyCountry=:emergencyCountry, emergencyText= :emergencyText, emergencyUrl = :emergencyUrl , emergencyImage = :emergencyImage ,  emergencyContact= :emergencyContact WHERE emergencyID =:emergencyID ');
        $this->db->bind(':emergencyUrl', $data['emergencyUrl'] );
        $this->db->bind(':emergencyText', $data['emergencyText'] );
        $this->db->bind(':emergencyContact', $data['emergencyContact'] );
        $this->db->bind(':emergencyImage', $data['emergencyImage'] );
         $this->db->bind(':emergencyID', $data['emergencyID'] );
         $this->db->bind(':emergencyState', $data['emergencyState'] );
         $this->db->bind(':emergencyCountry', $data['emergencyCountry'] );

        
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }



    //loadChatMsg($senderID,$receiverID);
    public function saveEmergency($data){
        $emergencyStatus = 0;
        $sentDate = date("d-m-Y");
        $sentTime = date("h:i:s A");
        $emergencyExpire = time();
        $this->db->query('INSERT INTO emergencydata SET emergencyState=:emergencyState, emergencyCountry=:emergencyCountry, emergencyExpire	=:emergencyExpire, sentDate = :sentDate , sentTime = :sentTime, emergencyStatus = :emergencyStatus, emergencyText= :emergencyText, emergencyUrl = :emergencyUrl , emergencyImage = :emergencyImage , emergencySentByID = :emergencySentByID, emergencyContact= :emergencyContact , emergencyID =:emergencyID ');
        $this->db->bind(':sentTime', $sentTime );
        $this->db->bind(':emergencyStatus', $emergencyStatus );
        $this->db->bind(':sentDate', $sentDate );
        $this->db->bind(':emergencyUrl', $data['emergencyUrl'] );
        $this->db->bind(':emergencyText', $data['emergencyText'] );
        $this->db->bind(':emergencyContact', $data['emergencyContact'] );
        $this->db->bind(':emergencyImage', $data['emergencyImage'] );
        $this->db->bind(':emergencySentByID', $data['emergencySentByID'] );
        $this->db->bind(':emergencyID', $data['emergencyID'] );
        $this->db->bind(':emergencyExpire', $emergencyExpire);
        $this->db->bind(':emergencyCountry', $data['emergencyCountry'] );
        $this->db->bind(':emergencyState', $data['emergencyState'] );


        
        
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }
    
    public function getSingleAdsData($adsID){
        $this->db->query('SELECT * FROM adsdata WHERE adsID= :adsID');
        $this->db->bind(':adsID', $adsID);

        $row = $this->db->single();
      
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }

    public function getAllAdsDataByCountry($adsCountry){
        $adsStatus = 0;
    $this->db->query('SELECT * FROM adsdata  WHERE  adsCountry = :adsCountry and adsStatus =:adsStatus  ORDER BY id DESC  ');
     $this->db->bind(':adsStatus', $adsStatus ); 
     $this->db->bind(':adsCountry', $adsCountry ); 

    $row = $this->db->resultSet();
    return $row; 

  }


 
    public function getAllAdsData(){
        $adsStatus = 0;
    $this->db->query('SELECT * FROM adsdata  WHERE  adsStatus =  :adsStatus  ORDER BY id DESC  ');
     $this->db->bind(':adsStatus', $adsStatus ); 

    $row = $this->db->resultSet();
    return $row; 

  }
  

  public function getAllEmergencyDataByCountry($emergencyCountry,$emergencyState){
    $emergencyStatus = 0;
$this->db->query('SELECT * FROM emergencydata  WHERE emergencyState=:emergencyState AND  emergencyCountry=:emergencyCountry AND emergencyStatus =:emergencyStatus  ORDER BY id DESC  ');
 $this->db->bind(':emergencyStatus', $emergencyStatus ); 
 $this->db->bind(':emergencyState', $emergencyState ); 
 $this->db->bind(':emergencyCountry', $emergencyCountry ); 

$row = $this->db->resultSet();
return $row; 

}



  public function getAllEmergencyData(){
    $emergencyStatus = 0;
$this->db->query('SELECT * FROM emergencydata  WHERE  emergencyStatus =:emergencyStatus  ORDER BY id DESC  ');
 $this->db->bind(':emergencyStatus', $emergencyStatus ); 

$row = $this->db->resultSet();
return $row; 

}

  

  public function getAdsDataByUserID($user_id){
    $adsStatus = 0;
$this->db->query('SELECT * FROM adsdata    WHERE adsSentByID = :adsSentByID and adsStatus =:adsStatus  ORDER BY id DESC  ');
$this->db->bind(':adsSentByID', $user_id ); 
$this->db->bind(':adsStatus', $adsStatus ); 

$row = $this->db->resultSet();
return $row; 

}

  

    //loadChatMsg($senderID,$receiverID);
    public function updateAds($data){
        $adsStatus = 0;
        $sentDate = date("d-m-Y");
        $sentTime = date("h:i:s A");
        $this->db->query('UPDATE adsdata SET  adsCountry=:adsCountry, adsText= :adsText, adsUrl = :adsUrl , adsImage = :adsImage ,  adsContact= :adsContact WHERE adsID =:adsID ');
        $this->db->bind(':adsUrl', $data['adsUrl'] );
        $this->db->bind(':adsText', $data['adsText'] );
        $this->db->bind(':adsContact', $data['adsContact'] );
        $this->db->bind(':adsImage', $data['adsImage'] );
         $this->db->bind(':adsID', $data['adsID'] );
         $this->db->bind(':adsCountry', $data['adsCountry'] );

        
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }



    //loadChatMsg($senderID,$receiverID);
    public function saveAds($data){
        $adsStatus = 0;
        $sentDate = date("d-m-Y");
        $sentTime = date("h:i:s A");
        $this->db->query('INSERT INTO adsdata SET adsCountry = :adsCountry , sentDate = :sentDate , sentTime = :sentTime, adsStatus = :adsStatus, adsText= :adsText, adsUrl = :adsUrl , adsImage = :adsImage , adsSentByID = :adsSentByID, adsContact= :adsContact , adsID =:adsID ');
        $this->db->bind(':sentTime', $sentTime );
        $this->db->bind(':adsStatus', $adsStatus );
        $this->db->bind(':sentDate', $sentDate );
        $this->db->bind(':adsUrl', $data['adsUrl'] );
        $this->db->bind(':adsText', $data['adsText'] );
        $this->db->bind(':adsContact', $data['adsContact'] );
        $this->db->bind(':adsImage', $data['adsImage'] );
        $this->db->bind(':adsSentByID', $data['adsSentByID'] );
        $this->db->bind(':adsID', $data['adsID'] );
        $this->db->bind(':adsCountry', $data['adsCountry'] );
      
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }

    
    //loadChatMsg($senderID,$receiverID);
    public function uploadImageData($senderID,$receiverID,$messageFile,$chatText){
      /*<img src="assets/img/chat-img.png" alt="">< */
    $sentMessage = 1;
    $messageType=2;
    $messageDate = date("d-m-Y");
    $sendTime = date("h:i:s A");
    $this->db->query('INSERT INTO chatmessage SET messageDate=:messageDate, sendTime=:sendTime, messageFile=:messageFile, messageText=:messageText, receiverID = :receiverID , senderID = :senderID , messageType = :messageType,sentMessage=:sentMessage ');
    $this->db->bind(':senderID', $senderID );
    $this->db->bind(':receiverID', $receiverID );
    $this->db->bind(':messageType', $messageType );
    $this->db->bind(':messageFile', $messageFile);
    $this->db->bind(':sentMessage', $sentMessage );
    $this->db->bind(':messageDate', $messageDate );
    $this->db->bind(':sendTime', $sendTime );
    $this->db->bind(':messageText', $chatText );

    
   
   // $this->db->execute();

     if($this->db->execute()){
         return true;
     } else {
        return false;
     }

    }
    //loadChatMsg($senderID,$receiverID);
    public function saveChatMsg($senderID,$receiverID,$chatText,$messageType,$messageFile){
        $sentMessage = 1;
        $messageDate = date("d-m-Y");
        $sendTime = date("h:i:s A");
        $this->db->query('INSERT INTO chatmessage SET messageDate=:messageDate, sendTime=:sendTime, messageFile=:messageFile, receiverID = :receiverID , senderID = :senderID , messageType = :messageType, messageText=:messageText,sentMessage=:sentMessage ');
        $this->db->bind(':senderID', $senderID );
        $this->db->bind(':receiverID', $receiverID );
        $this->db->bind(':messageType', $messageType );
        $this->db->bind(':messageText', $chatText );
        $this->db->bind(':sentMessage', $sentMessage );
        $this->db->bind(':messageFile', $messageFile );
        $this->db->bind(':messageDate', $messageDate );
        $this->db->bind(':sendTime', $sendTime );

        
       
       // $this->db->execute();

         if($this->db->execute()){
             return true;
         } else {
            return false;
         }


    }


    public function countNewChatMsg($senderID){
        $seenMessage = 0;
        $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID and seenMessage=:seenMessage     ');
        $this->db->bind(':seenMessage', $seenMessage );
        $this->db->bind(':receiverID', $receiverID );
        $this->db->execute();
       //  $row = $this->db->single();
        $rowCount = $this->db->rowCount();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
   return $rowCount;

    }


    public function countChatMsg($senderID,$receiverID){
        $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID AND senderID = :senderID OR senderID = :receiverID AND receiverID = :senderID    ');
        $this->db->bind(':senderID', $senderID );
        $this->db->bind(':receiverID', $receiverID );
        $this->db->execute();
       //  $row = $this->db->single();
        $rowCount = $this->db->rowCount();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
   return $rowCount;

    }



    
    //loadChatMsg($senderID,$receiverID);
    public function countNewMessage($receiverID){
        $seenMessage = 0;
      

      //  $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID AND senderID = :senderID OR senderID = :receiverID AND receiverID = :senderID   ');
      $this->db->query('SELECT * FROM chatmessage  WHERE receiverID = :receiverID   and seenMessage=:seenMessage  order by id desc');
      $this->db->bind(':receiverID', $receiverID );
        $this->db->bind(':seenMessage', $seenMessage );
// 
      //  $this->db->query('SELECT * FROM chatmessage LEFT JOIN userprofile  ON (chatmessage.senderID = userprofile.user_id)  WHERE receiverID = :receiverID and seenMessage=:seenMessage group by chatmessage.senderID  ');
      // $this->db->bind(':receiverID', $receiverID );
      //  $this->db->bind(':seenMessage', $seenMessage );
      //$this->db->bind(':rows', 5 );
    // $row = $this->db->execute();
     // $row = $this->db->single();
       $row = $this->db->resultSet();
       
      //  $hash_password = $row->password;
      //$status = $row->status;
      
 //
 return $this->db->rowCount();
      //if($this->db->rowCount() > 0){
      //    return $row;
     // } else {
     //     return false;
      //
   //}


  }
    

    //loadChatMsg($senderID,$receiverID);
    public function countNewChatMsg_By_Sender($senderID,$receiverID){
        $seenMessage = 0;
      

      //  $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID AND senderID = :senderID OR senderID = :receiverID AND receiverID = :senderID   ');
      $this->db->query('SELECT * FROM chatmessage  WHERE receiverID = :receiverID AND senderID = :senderID   and seenMessage=:seenMessage  order by id desc');
      $this->db->bind(':senderID', $senderID );
      $this->db->bind(':receiverID', $receiverID );
      $this->db->bind(':seenMessage', $seenMessage );

      //  $this->db->query('SELECT * FROM chatmessage LEFT JOIN userprofile  ON (chatmessage.senderID = userprofile.user_id)  WHERE receiverID = :receiverID and seenMessage=:seenMessage group by chatmessage.senderID  ');
      // $this->db->bind(':receiverID', $receiverID );
      //  $this->db->bind(':seenMessage', $seenMessage );
      //$this->db->bind(':rows', 5 );
    // $row = $this->db->execute();
     // $row = $this->db->single();
       $row = $this->db->resultSet();
       
      //  $hash_password = $row->password;
      //$status = $row->status;
      
 //
 return $this->db->rowCount();
      //if($this->db->rowCount() > 0){
      //    return $row;
     // } else {
     //     return false;
      //
   //}


  }

    //loadChatMsg($senderID,$receiverID);
    public function getLastMessage_By_Sender($senderID,$receiverID){
        $seenMessage = 0;
      

      //  $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID AND senderID = :senderID OR senderID = :receiverID AND receiverID = :senderID   ');
      $this->db->query('SELECT * FROM chatmessage  WHERE receiverID = :receiverID AND senderID = :senderID   and seenMessage=:seenMessage or receiverID = :senderID AND senderID = :receiverID   and seenMessage=:seenMessage  order by id desc');
      $this->db->bind(':senderID', $senderID );
      $this->db->bind(':receiverID', $receiverID );
      $this->db->bind(':seenMessage', $seenMessage );

      //  $this->db->query('SELECT * FROM chatmessage LEFT JOIN userprofile  ON (chatmessage.senderID = userprofile.user_id)  WHERE receiverID = :receiverID and seenMessage=:seenMessage group by chatmessage.senderID  ');
      // $this->db->bind(':receiverID', $receiverID );
      //  $this->db->bind(':seenMessage', $seenMessage );
      //$this->db->bind(':rows', 5 );
    // $row = $this->db->execute();
      $row = $this->db->single();
     //  $row = $this->db->resultSet();
       
      //  $hash_password = $row->password;
      //$status = $row->status;
      
 //
 return $row;
      //if($this->db->rowCount() > 0){
      //    return $row;
     // } else {
     //     return false;
      //
   //}


  }


  
    //loadChatMsg($senderID,$receiverID);
    public function getLastMessage_By_Sender_Det($senderID,$receiverID){
        $seenMessage = 1;
      

      //  $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID AND senderID = :senderID OR senderID = :receiverID AND receiverID = :senderID   ');
      $this->db->query('SELECT * FROM chatmessage  WHERE receiverID = :receiverID AND senderID = :senderID    or receiverID = :senderID AND senderID = :receiverID     order by id desc');
      $this->db->bind(':senderID', $senderID );
      $this->db->bind(':receiverID', $receiverID );
 
      //  $this->db->query('SELECT * FROM chatmessage LEFT JOIN userprofile  ON (chatmessage.senderID = userprofile.user_id)  WHERE receiverID = :receiverID and seenMessage=:seenMessage group by chatmessage.senderID  ');
      // $this->db->bind(':receiverID', $receiverID );
      //  $this->db->bind(':seenMessage', $seenMessage );
      //$this->db->bind(':rows', 5 );
    // $row = $this->db->execute();
      $row = $this->db->single();
     //  $row = $this->db->resultSet();
       
      //  $hash_password = $row->password;
      //$status = $row->status;
      
 //
 return $row;
      //if($this->db->rowCount() > 0){
      //    return $row;
     // } else {
     //     return false;
      //
   //}


  }


    //loadChatMsg($senderID,$receiverID);
    public function getChatData($receiverID){
        $countChatMsg  = $this->countNewChatMsg($receiverID);
        $seenMessage = 0;
      

      //  $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID AND senderID = :senderID OR senderID = :receiverID AND receiverID = :senderID   ');
//GROUP BY chatmessage.senderID 
        $this->db->query('SELECT * FROM chatmessage LEFT JOIN userprofile  ON (chatmessage.senderID = userprofile.user_id)  WHERE receiverID = :receiverID or senderID = :receiverID GROUP BY chatmessage.senderID,chatmessage.receiverID ORDER BY chatmessage.id DESC  ');
       $this->db->bind(':receiverID', $receiverID );
       // $this->db->bind(':senderID', $receiverID );
      //$this->db->bind(':rows', 5 );
    // $row = $this->db->execute();
      // $row = $this->db->single();
      $row = $this->db->resultSet();
       
      //  $hash_password = $row->password;
      //$status = $row->status;
     // return $row;
 //
 //return $row = arsort($row);
       if($this->db->rowCount() > 0){
         //return $this->db->rowCount();
         return $row;
       } else {
         return false;
      //
   }


  }





    //loadChatMsg($senderID,$receiverID);
    public function loadNewChatMsg($receiverID){
        $countChatMsg  = $this->countChatMsg($senderID,$receiverID) - 5;
        $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID   LIMIT :start, :rows ');
      $this->db->bind(':senderID', $senderID );
      $this->db->bind(':receiverID', $receiverID );
       $this->db->bind(':start', $countChatMsg );
      $this->db->bind(':rows', 5 );
      
     //  $row = $this->db->single();
      $row = $this->db->resultSet();
       
      //  $hash_password = $row->password;
      //$status = $row->status;
      
 //
 return $row;
      //if($this->db->rowCount() > 0){
      //    return $row;
     // } else {
     //     return false;
      //
   //}


  }



    //loadChatMsg($senderID,$receiverID);
    public function loadChatMsg($senderID,$receiverID){
        $status = 1;
        $statusx = 0;

        
       $this->db->query('UPDATE chatmessage SET seenMessage=:seenMessage WHERE   receiverID = :senderID AND senderID = :receiverID  ');
      $this->db->bind(':senderID', $senderID );
      $this->db->bind(':receiverID', $receiverID );
       $this->db->bind(':seenMessage', $status );
       //$this->db->bind(':seenMessagex', $statusx );

         $this->db->execute();

if($this->countChatMsg($senderID,$receiverID) < 5){
    
    $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID AND senderID = :senderID OR senderID = :receiverID AND receiverID = :senderID  ');
    $this->db->bind(':senderID', $senderID );
    $this->db->bind(':receiverID', $receiverID );
     
}else{

    $countChatMsg  = $this->countChatMsg($senderID,$receiverID) - 5;
    $this->db->query('SELECT * FROM chatmessage WHERE receiverID = :receiverID AND senderID = :senderID OR senderID = :receiverID AND receiverID = :senderID LIMIT :start, :rows ');
    $this->db->bind(':senderID', $senderID );
    $this->db->bind(':receiverID', $receiverID );
     $this->db->bind(':start', $countChatMsg );
    $this->db->bind(':rows', 5 );
}
        
     
        
       //  $row = $this->db->single();
        $row = $this->db->resultSet();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }





//$state,$country
    public function searchPlateNo($state,$country,$vn,$user_id){
        $this->db->query('SELECT * FROM initkey WHERE email like :email and state =:state and country = :country and  user_id != :user_id');
        $this->db->bind(':email', '%' . $vn . '%' );
        $this->db->bind(':user_id', $user_id );
        $this->db->bind(':state', $state );
        $this->db->bind(':country', $country );

        $row = $this->db->single();
        // $row = $this->db->resultSet();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }
    
    // Register User
    public function updateAll_userStatus($userStatus){

 
        $this->db->query('UPDATE  initkey  set userStatus = :userStatus  ');
        // Bind Values
       
         $this->db->bind(':userStatus', $userStatus);
          
        // Execute
        //$this->db->execute();


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }

    }
    // Register User
    public function update_userStatus($user_id,$userStatus){

 
        $this->db->query('UPDATE  initkey  set userStatus = :userStatus where user_id = :user_id');
        // Bind Values
       
         $this->db->bind(':userStatus', $userStatus);
        $this->db->bind(':user_id', $user_id);
         
        // Execute
        //$this->db->execute();


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }






    }

    public function updatePlateNox($user_id, $newPlate){


        $this->db->query('UPDATE  userprofile  set   email = :email where user_id = :user_id');
        // Bind Values
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':email', $newPlate);
        // Execute
         $this->db->execute();



         $this->db->query('UPDATE  initkey  set   email = :email where user_id = :user_id');
        // Bind Values
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':email', $newPlate);
        // Execute
         $this->db->execute();


 
    }
    // Register User
    public function updateProfile($data, $new_img_name){
        $this->updatePlateNox($data['user_id'], $data['emailnew']);

        $this->db->query('UPDATE  userprofile  set country= :country, state= :state, emailreal = :emailreal,firstName = :firstName,middleName = :middleName,lastName = :lastName,phone = :phone, image=:image, emailreal = :emailreal where email = :email');
        // Bind Values
        $this->db->bind(':firstName', $data['firstName']);
        $this->db->bind(':middleName', $data['middleName']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':emailreal', $data['emailreal']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':state', $data['state']);
        $this->db->bind(':country', $data['country']);
         $this->db->bind(':image', $new_img_name);
         $this->db->bind(':email', $data['emailnew']);

         
        // Execute
        //$this->db->execute();


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }






    }
    

    // Register User
    public function updateProfilePassword($data){

        $this->db->query('UPDATE  userprofile  set  password = :password where user_id = :user_id');
        // Bind Values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':password', $data['password']);
        $this->db->execute();
   
        // Execute
        
        $this->db->query('UPDATE  initkey  set  password = :password where user_id = :user_id');
        // Bind Values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':password', $data['password']);
        $this->db->execute();


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }






    }
    



    public function registerAutomate($data){
        


        ///////Generate Login 
        $user_id = md5(date('ymdihs').rand(900, 3000));
        $this->db->query('INSERT INTO initkey (state,country,surcon, email, user_id, password, loginStatus,roleID, activeCode) VALUES(:state, :country, :surcon, :email, :user_id, :password, :loginStatus, :roleID, :activeCode)');
        // Bind Values
        // surcon == email
       $roleID = 2;
        $loginStatus =1;
       $this->db->bind(':email', $data['userName']);
        $this->db->bind(':surcon', $data['email']);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':activeCode', $data['activeCode']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':loginStatus', $loginStatus);
        $this->db->bind(':roleID', $roleID);
        $this->db->bind(':state', $data['state']);
        $this->db->bind(':country', $data['country']);

        
        // Execute

        $this->db->execute();

        // if($this->db->execute()){
        //     return true;
        // } else {
        //     return false;
        // }


        $this->db->query('INSERT INTO userprofile (state,country,firstName,lastName,password, user_id, email,emailreal,phone, activeCode, status, agree ) VALUES(:state, :country, :firstName,:lastName, :password, :user_id, :email, :emailreal, :phone, :activeCode, :status, :agree)');
        // Bind Values
        $this->db->bind(':firstName', $data['firstName']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':state', $data['state']);
        $this->db->bind(':country', $data['country']);

        $this->db->bind(':email', $data['userName']);
        $this->db->bind(':emailreal', $data['email']);
        $this->db->bind(':phone', $data['phoneNo']);
        $this->db->bind(':activeCode', $data['activeCode']);
        $this->db->bind(':agree', $data['agree']);
        $this->db->bind(':status', $loginStatus);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':password', $data['password']);

        // Execute
        //$this->db->execute();


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }





}
    // Register User
    public function register($data, $new_img_name){




        
        ///////Generate Login 
      $user_id = md5(date('ymdihs').rand(900, 3000));
        $this->db->query('INSERT INTO initkey ( email, user_id, password, activeCode) VALUES( :email, :user_id, :password, :activeCode)');
        // Bind Values
        
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':activeCode', $data['activeCode']);
        $this->db->bind(':password', $data['password']);

        // Execute

        $this->db->execute();

        // if($this->db->execute()){
        //     return true;
        // } else {
        //     return false;
        // }





        $this->db->query('INSERT INTO userprofile (firstName,user_id, middleName, lastName, email,phone, address, work, memberType, maritalStatus, nextKin,image, activeCode, agree, password) VALUES(:firstName,:user_id, :middleName, :lastName, :email, :phone, :address, :work, :memberType, :maritalStatus, :nextKin , :image, :activeCode, :agree , :password)');
        // Bind Values
        $this->db->bind(':firstName', $data['firstName']);
        $this->db->bind(':middleName', $data['middleName']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':work', $data['work']);
        $this->db->bind(':memberType', $data['memberType']);
        $this->db->bind(':maritalStatus', $data['maritalStatus']);
        $this->db->bind(':nextKin', $data['nextKin']);
        $this->db->bind(':image', $new_img_name);
        $this->db->bind(':activeCode', $data['activeCode']);
        $this->db->bind(':agree', $data['agree']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':user_id', $user_id);
        
        // Execute
        //$this->db->execute();


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }






    }

    public function findLoginByToken($token){
        $this->db->query('SELECT * FROM initkey WHERE token= :token');
        $this->db->bind(':token', $token);

        $row = $this->db->single();
        // $rowx = $this->db->resultSet();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }

    



    public function findByUser_id($user_id){
        $this->db->query('SELECT * FROM userprofile WHERE user_id= :user_id');
        $this->db->bind(':user_id', $user_id);

        $row = $this->db->single();
        // $rowx = $this->db->resultSet();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }


    
    
    
    public function loginUserID($user_id){
        $this->db->query('SELECT * FROM initkey WHERE user_id= :user_id');
        $this->db->bind(':user_id', $user_id);

        $row = $this->db->single();
        // $rowx = $this->db->resultSet();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }


    public function loginUser_check($email){
        $this->db->query('SELECT * FROM initkey WHERE email= :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        // $rowx = $this->db->resultSet();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
        if($this->db->rowCount() > 0){
           return $row;
        } else {
         return false;
        //
      }


    }



    public function loginUser($email){
        $this->db->query('SELECT * FROM initkey WHERE email= :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        // $rowx = $this->db->resultSet();
         
        //  $hash_password = $row->password;
        //$status = $row->status;
        
   //
   return $row;
        //if($this->db->rowCount() > 0){
        //    return $row;
       // } else {
       //     return false;
        //
     //}


    }

    

 

    //Find user by email
    public function findUserByEmail_det($email){
        $this->db->query("SELECT * FROM userprofile WHERE  email = :email");

        // Bind Values
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        
            return $row;
         
    }



    //Find user by email
    public function findUserByEmailreal_detx($email){
        $this->db->query("SELECT * FROM userprofile WHERE  emailreal = :emailreal");

        // Bind Values
        $this->db->bind(':emailreal', $email);

        $row = $this->db->single();
 

      if($this->db->rowCount() > 0){
          return true;
       } else {
         return false;
        
     }
    }

    //Find user by email
    public function findUserByEmail_detx($email){
        $this->db->query("SELECT * FROM userprofile WHERE  email = :email");

        // Bind Values
        $this->db->bind(':email', $email);

        $row = $this->db->single();
 

      if($this->db->rowCount() > 0){
          return true;
       } else {
         return false;
        
     }
    }
    
    //Find user by email
    public function findUserByEmailReal_det($email){
        $this->db->query("SELECT * FROM userprofile WHERE  emailreal = :emailreal");

        // Bind Values
        $this->db->bind(':emailreal', $email);

        $row = $this->db->single();

        
            return $row;
         
    }
 

    //Find user by email
    public function UserEmailUpdateCheck($user_id,$email){
     //   echo "SELECT * FROM userprofile WHERE  email = :email and user_id = :user_id";
        $this->db->query("SELECT * FROM userprofile WHERE  email = :email and user_id = :user_id");

        // Bind Values
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':email', $email);


        $row = $this->db->single();

        // Check roow
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }



    //Find user by email
    public function findUserByEmail($email){
        $this->db->query("SELECT * FROM userprofile WHERE  email = :email");

        // Bind Values
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check roow
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }


    
    //Find user by email
    public function fetchUserModule($roleID){
        $this->db->query("SELECT * FROM menu WHERE  roleID = :roleID");

        // Bind Values
        $this->db->bind(':roleID', $roleID);

        $row = $this->db->resultSet();
        return $row ; 
       
    }

    
    //Get user by Id
    public function getUserByEmail($email){
        $this->db->query("SELECT * FROM userprofile WHERE email = :email");

        // Bind Values
        $this->db->bind(':email', $email);

        $row = $this->db->single();
 
        // Check roow
    //   return $row;

    if($this->db->rowCount() > 0){
              return true;
           } else {
                return false;
          }


    }


    //Get user by Id
    public function getUserByid($id){
        $this->db->query("SELECT * FROM userprofile WHERE id = :id");

        // Bind Values
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        // Check roow
       return $row;
    }





    //Get user by Id
    public function cookieChecker($live){
        $this->db->query("SELECT * FROM initkey WHERE token = :token");

        // Bind Values
        $this->db->bind(':token', $live);

        $row = $this->db->single();

        // Check roow


        
        if($this->db->rowCount() > 0){
            return true;
         } else {

              return false;
        }
      
    }


    

    //Get all submule 
    public function getAllsubmodule(){
        $this->db->query("SELECT * FROM submodule");
        $row = $this->db->resultSet();
        // Check roow
        return $row;
        
    }


    

    //Get user by Id
    public function getErrorByid($code){
        //echo "SELECT * FROM errormessages WHERE 'code' = ':code'";
        $this->db->query("SELECT * FROM errormessages WHERE code = :code");

        // Bind Values
        $this->db->bind(':code', $code);

        $row = $this->db->single();

        // Check roow


        
        if($this->db->rowCount() > 0){
            return $row;
         } else {
              return false;
        }
      
    }



    
    //Get user by Id
    public function getUserByactiveCode($activeCode){
        $this->db->query("SELECT * FROM userprofile WHERE activeCode = :activeCode");

        // Bind Values
        $this->db->bind(':activeCode', $activeCode);

        $row = $this->db->single();

        // Check roow
       return $row;
 
    }



    

    public function deleteToken($user_id,$token){
        $token = '';
        //echo "removed"; exit;
        $this->db->query('UPDATE  initkey SET token = :token WHERE user_id= :user_id');
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':token', $token);
      
       // Execute
        if($this->db->execute()){
             return true;
        } else {
            return false;
        }
    }

    //password_reset_token_time
    //password_reset_token
 
    public function passwordResetByEmail($email){

        $password_reset_token  = "ptoken".md5(date("dmyhis").rand(1222,89787)).md5(date("dmyhis").rand(1222,89787)).md5(date("dmyhis").rand(1222,89787)).md5(date("dmyhis").rand(1222,89787)).md5(date("dmyhis").rand(1222,89787));

        $password_reset_token_time = '15';
    
        $this->db->query('UPDATE initkey SET password_reset_token = :password_reset_token, password_reset_token_time = :password_reset_token_time WHERE email= :email');
        $this->db->bind(':password_reset_token', $password_reset_token);
        $this->db->bind(':password_reset_token_time', $password_reset_token_time);
        $this->db->bind(':email', $email);

 

       // Execute
        if($this->db->execute()){
             return true;
        } else {
            return false;
        }
    }


     



    
    public function updateToken($user_id,$token){
        $this->db->query('UPDATE  initkey SET token = :token WHERE user_id= :user_id');
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':token', $token);
       // Execute
        if($this->db->execute()){
             return true;
        } else {
            return false;
        }
    }




}