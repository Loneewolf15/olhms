<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">

<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="#">
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				NIS (Edo State)
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="<?php echo URLROOT ?>/assets/img/user/<?php echo ucwords($data['userData']->image); ?>" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="font-weight-bold"><?php echo ucwords($data['userData']->firstName); ?></div>
					<small>Front-end Developer</small>
				</div>


<?php 


 
						$page = "dash";
					   
						$uri =  URLROOT.'/users/dashboard/'.$liveToken;
						$uri_link = $uri.'/?q='.$page;
						
						

?>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						User Portal Panel
					</li>
					 


					<li class="sidebar-item">
						<a class="sidebar-link" href="<?php
						echo $uri_link ; ?>" >
							<i class="align-middle mr-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">Dashboards <?php  // $uri_link ;	 ?></span>
						</a>
					</li>


					       
				 
<?php  //$data['menuList']->token ;
//echo $data['menuList']->name ;

//print_r($data['menuList']);
//exit;
foreach($data['menuList'] as $menuItem ){
	
	



	?>

					<li class="sidebar-item">
						<a href="#x<?php echo $menuItem->id ?>" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-map-marker-alt"></i> <span class="align-middle"><?php echo $menuItem->name ?></span>
						</a>
						
						<ul id="x<?php echo $menuItem->id ?>" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							
							<?php 
							
						//	print_r($data['submoduleList']);
							
							foreach($data['submoduleList'] as $submoduleItem ){

if($submoduleItem->moduleID == $menuItem->moduleID ){



							 ?>
							<li class="sidebar-item"><a class="sidebar-link" href="<?php
							
							$page = $submoduleItem->url;
							$folder = $submoduleItem->folder;
							//echo $uri_link = $uri.'/?q='.$page.'&folder='.$folder;
                             echo  URLROOT.'/'.$folder.'/'.$page.'/'.$liveToken;


							
							
							?>"><?php echo $submoduleItem->name ?></a></li>

							 

							<?php  } }  ?>

						</ul>



					</li>
<?php }  ?>


 
				</ul>
			</div>
		</nav>