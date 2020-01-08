<!DOCTYPE html>
	<html lang="en">

    	<?php
        	$title = "The Blackpool Methodist Circuit";
            include 'templates/head.php';?>

       	<body>
       		<div class="container">

       			<?php include 'templates/banner.php';?>
                <?php include 'templates/navbar.php';?>

       			<div class="row">
       				<div/class="col-md-12">
       					<div>
       						<h2 class="padded">
       							Welcome to the Blackpool Methodist Circuit website.
       						</h2>
       						<div class="general-text">
       							<p>
       								The Blackpool Methodist Circuit is a group of five Methodist churches serving the Blackpool community.
       							</p>
       							<p>
       								We seek to be a loving and inclusive community that worships God, and serves others. We place a high priority on
       								teaching from the Bible and following the example of Jesus. Our vision is to impact and renew Blackpool and
       								beyond with the transforming message of Jesus Christ through words and actions.
       							</p>
       							<p>
       								Everyone is welcome. Come as you are - we'd love to get to know you.
       							</p>
       							<div class="separator"></div>
       						</div>
       					</div>
       				</div>
       			</div>

       			<div class="row space-above">
       				<div class="col-md-1"></div>
       				<div class="col-md-2">
						<div class="card">
						  	<img src="images/highfield.jpg" class="card-img-top" alt="Photograph of Highfield Methodist Church, taken from the corner of Mayfield Avenue and Scarsdale Avenue.">
						  	<div class="card-body">
								<h5 class="card-title">Highfield Methodist Church</h5>
						   		<p class="card-text card-sub-heading">Sunday service:</p>
						   		<p class="card-text">10:30 am</p>
						   		<p class="card-text card-sub-heading">Address:</p>
						   		<p class="card-text card-address">Mayfield Avenue</p>
						   		<p class="card-text card-address">Blackpool</p>
						   		<p class="card-text card-address">FY4 2NP</p>
						  	</div>
						  	<div class="card-body">
						  		<a class="card-link btn" href="pages/highfield.php?location=1">View more about Highfield Methodist Church »</a>
						  	</div>
						</div>
      				</div>

 					<div class="col-md-2">
 						<div class="card">
 						  	<img src="images/layton.jpg" class="card-img-top" alt="Photograph of Layton Methodist Church, taken from Talbot Road.">
 						  	<div class="card-body">
 								<h5 class="card-title">Layton Methodist Church</h5>
 								<p class="card-text card-sub-heading">Sunday service:</p>
 						   		<p class="card-text">10:45 am</p>
						   		<p class="card-text card-sub-heading">Address:</p>
								<p class="card-text card-address">Westcliffe Drive</p>
								<p class="card-text card-address">Blackpool</p>
								<p class="card-text card-address">FY3 7DZ</p>
 						  	</div>
 						  	<div class="card-body">
 						  		<a class="card-link btn" href="pages/layton.php?location=1">View more about Layton Methodist Church »</a>
 						  	</div>
 						</div>
 					</div>

      				<div class="col-md-2">
						<div class="card">
						  	<img src="images/lindale.jpg" class="card-img-top" alt="Photograph of Highfield Methodist Church, taken from the corner of Mayfield Avenue and Scarsdale Avenue.">
						  	<div class="card-body">
								<h5 class="card-title">Lindale Methodist Church</h5>
						   		<p class="card-text card-sub-heading">Sunday service:</p>
						   		<p class="card-text">10:30 am</p>
						   		<p class="card-text card-sub-heading">Address:</p>
								<p class="card-text card-address">Dorritt Road</p>
								<p class="card-text card-address">Blackpool</p>
								<p class="card-text card-address">FY4 3PE</p>
						  	</div>
						  	<div class="card-body">
						  		<a class="card-link btn" href="pages/lindale.php?location=1">View more about Lindale Methodist Church »</a>
						  	</div>
						</div>
       				</div>

					<div class="col-md-2">
						<div class="card">
						  	<img src="images/marton.jpg" class="card-img-top" alt="Photograph of Marton Methodist Church.">
						  	<div class="card-body">
								<h5 class="card-title">Marton Methodist Church</h5>
						   		<p class="card-text card-sub-heading">Sunday service:</p>
						   		<p class="card-text">10:30 am</p>
						   		<p class="card-text card-sub-heading">Address:</p>
								<p class="card-text card-address">Midgeland Road</p>
								<p class="card-text card-address">Blackpool</p>
								<p class="card-text card-address">FY4 5HL</p>
						  	</div>
						  	<div class="card-body">
						  		<a class="card-link btn" href="pages/marton.php?location=1">View more about Marton Methodist Church »</a>
						  	</div>
						</div>
					</div>

					<div class="col-md-2">
						<div class="card">
						  	<img src="images/newcentral.jpg" class="card-img-top" alt="Photograph of New Central Methodist Church.">
						  	<div class="card-body">
								<h5 class="card-title">New Central Methodist Church</h5>
						   		<p class="card-text card-sub-heading">Sunday service:</p>
						   		<p class="card-text">10:30 am</p>
						   		<p class="card-text card-sub-heading">Address:</p>
								<p class="card-text card-address">Adelaide St West</p>
								<p class="card-text card-address">Blackpool</p>
								<p class="card-text card-address">FY1 4SR</p>
						  	</div>
						  	<div class="card-body">
						  		<a class="card-link btn" href="pages/newcentral.php?location=1">View more about New Central Methodist Church »</a>
						  	</div>
						</div>
					</div>
       				<div class="col-md-1"></div>
       			</div>

       			<div class="row">
       				<div class="col-md-12">
       					<p class="padded general-text">Please note that Highfield and Lindale Methodist Churches periodically celebrate joint services.
       					You can check the <a href="pages/highfield.php#title-services">Highfield events diary</a> or the
       					<a href="pages/lindale.php#title-services">Lindale events diary</a> if you want to confirm service times.</p>
       				</div>
       			</div>

       			<?php include 'templates/footer-indexpage.php';?>

       		</div>

            <?php include 'templates/scripts.php';?>

        </body>

   </html>