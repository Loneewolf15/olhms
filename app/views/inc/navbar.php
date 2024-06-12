
<div class="main-wrapper">

<div class="side-menu" id="sidebar-menu">
<div class="close-btn"><i class="feather-x"></i></div>


 <ul >
		 
<?php  //$data['menuList']->token ;
//echo $data['menuList']->name ;

//print_r($data['menuList']);
//exit;
foreach($data['menuList'] as $menuItem ){

	?>

 



<li class=""><a  href="<?php
							
							$page = $menuItem->url;
							$folder = $menuItem->folder;
							//echo $uri_link = $uri.'/?q='.$page.'&folder='.$folder;
               echo  URLROOT.'/'.$folder.'/'.$page.'/'.$liveToken;
										
							?>"> <i class="<?php echo $menuItem->class ?>"></i><?php echo $menuItem->name ?></a></li>



<?php }  ?>
 
 
 
</ul>
</div>


<div class="gradient-header"></div>
<header>
<div class="container">
<div class="left">
<span class="hamburgar-icon"><img src="<?php echo URLROOT ?>/assets/img/icons/hamburgar-icon.svg" alt=""></span>
</div>
