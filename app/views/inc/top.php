
 <script>
/*
	  
   
var warningTimeout = 600000;
var timoutNow = 60000;
var warningTimerID,timeoutTimerID;

function startTimer() {
    // window.setTimeout returns an Id that can be used to start and stop a timer
    warningTimerID = window.setTimeout(warningInactive, warningTimeout);
}

function warningInactive() {
    window.clearTimeout(warningTimerID);
    timeoutTimerID = window.setTimeout(IdleTimeout, timoutNow);
    //$('#modalAutoLogout').modal('show');
    alert('Inactivity Warning !!!');
}

function resetTimer() {
    window.clearTimeout(timeoutTimerID);
    window.clearTimeout(warningTimerID);
    startTimer();
}

// Logout the user.
function IdleTimeout() {
   // document.getElementById('logout-form').submit();

   window.location.href = "<?php echo URLROOT.'/users/logout/'.$liveToken."*".$user_id ?>"; 
   
   // or whatever your homepage would be
   
  alert('You Exceeded 10mins of Inactivity !!!')

}

function setupTimers () {
    document.addEventListener("mousemove", resetTimer, false);
    document.addEventListener("mousedown", resetTimer, false);
    document.addEventListener("keypress", resetTimer, false);
    document.addEventListener("touchmove", resetTimer, false);
    document.addEventListener("onscroll", resetTimer, false);
    startTimer();
}

 


resetTimer();
setupTimers();

*/
  </script>
  
  <script type= "text/javascript" src = "<?php echo URLROOT ?>/assetshome/js/c.js"></script> 

				