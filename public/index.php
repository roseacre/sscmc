<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "South Shore Community Methodist Church";
        include 'templates/head.php';
    ?>

	<body>
	
		<div class="container">
		
			<?php include 'templates/banner.php';?>
            <?php include 'templates/ssmcc-links.php';?>

			<div class="row">
				<div class="col-md-1">
				</div>
				<div/class="col-md-10">
					<div>
						<h2>
							Welcome to the South Shore Methodist Community Church website.
						</h2>
						<div class="general-text">
							<p>
								South Shore Methodist Community Church is a Christian congregation serving the Blackpool community.
							</p>
							<p>
								We seek to be a loving, friendly community that worships God, and serves others. We place a high priority on 
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
			
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<img alt="Photograph of Highfield Methodist Church"
                         longdesc="The image shows the church building photographed from the corner of Mayfield Avenue and Scarsdale Avenue."
                         src="images/highfield.jpg" class="resized-image img-rounded" />
					<h2 class="banner">
						Highfield Site
					</h2>
                    <div class="general-text">
                        <p>Join us on Sunday mornings, at 10:30 am,<p>
                        <p>in Mayfield Avenue, Blackpool, FY4 2NP.</p>
                        <p>
                            <a class="btn" href="#">View more about Highfield Methodist Church »</a>
                        </p>
                    </div>
				</div>
				<div class="col-md-5">
					<img alt="Photograph of Lindale Methodist Church"
                         longdesc="The image shows the church building photographed from the corner of Dorritt Road and Margate Avenue"
                         src="images/lindale.jpg" class="resized-image img-rounded" />
					<h2 class="banner">
						Lindale Site
					</h2>
                    <div class="general-text">
                        <p>Join us on Sunday mornings, at 10:30 am,</p>
                        <p>in Dorritt Road, Blackpool, FY4 3PE.</p>
                        <p>
                            <a class="btn" href="pages/lindale.php?location=1">View more about Lindale Methodist Church »</a>
                        </p>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<p class="centred padded general-text">Please check our events diary to confirm service times as periodically we celebrate joint services.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="separator"></div>
					<p class="padded general-text">
						If you wish to speak to our minister Rev. Barrie Morris, call <a href="tel:01253341017">01253 341017</a> or email him using
						<a href="mailto:example@example.com">Example Email</a>, he will be glad to hear from you. 
						You can also <a href="mailto:n.g.evans@btinternet.com">contact the Church Secretary</a> with queries and prayer
						intercessions.
					</p>
				</div>
			</div>
			
			<?php include 'templates/footer.php';?>
			
		</div>

        <?php include 'templates/scripts.php';?>

 	</body>
</html>