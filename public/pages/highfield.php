<!DOCTYPE html>
<html lang="en">

<?php
$title = "South Shore Methodist Community Church (Scarsdale Avenue)";
include '../templates/head-subpage.php';
?>

<body>

<div class="container">

    <?php include '../templates/banner-subpage.php'; ?>
    <?php include '../templates/navbar-subpage.php'; ?>


    <div class="row">
    	<div class="col-md-2">
        </div>
        <div class="col-md-10">
			<h2 class="padded-top" id="page-subheading">
				South Shore Methodist Community Church (Scarsdale Avenue)
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
		</div>

		<div class="col-md-8">
			<img src="../images/highfield.jpg"
				alt="Photograph of South Shore Methodist Community Church (Scarsdale Avenue)"
				title="South Shore Methodist Community Church (Scarsdale Avenue)">

			<div class="panel-group space-above" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" id="panel-title-announcements">
							<a class="indented-subpage panel-title" data-toggle="collapse" data-parent="#accordion"
							   href="#collapse1">Announcements  ▼</a>
						</h3>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<div class="panel-body">
							<?php include '../templates/highfield-announcements.php'; ?>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" id="panel-title-groups">
							<a class="indented-subpage panel-title" data-toggle="collapse" data-parent="#accordion"
							   href="#collapse3">Church groups  ▼</a>
						</h3>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
							<?php include '../templates/highfield-groups.php'; ?>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="row space-above">
		<div class="col-md-1">
    	</div>

		<div class="col-md-10">
			<div class="separator"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
		</div>

		<div class="col-md-2">
			<h3 class="padded-top indented-h3" id="title-contact-details">Contact Details</h3>
			<p class="ssmcc-text indented-subpage padded-top" id="address-1">Scarsdale Avenue</p>
			<p class="ssmcc-text indented-subpage" id="address-2">Blackpool</p>
			<p class="ssmcc-text indented-subpage" id="address-3">FY4 2NP</p>
			<br />
			<p class="ssmcc-text indented-subpage padded-top" id="title-phone"> Telephone:</p>
			<p class="ssmcc-text indented-subpage" id="telephone-1"><a href="tel:01253695527">01253 695527</a> </p>
		</div>
		<div class="col-md-6">
			<div id="mapDivH" class="collapse padded">
				<div class="map-responsive padded">
					<iframe width='100%' height='150%' id='mapcanvas' src='https://maps.google.com/maps?q=fy4%202np&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
						<div style='overflow:hidden;'>
							<div id='gmap_canvas' style='height:100%;width:150%;'>
							</div>
						</div>
					</iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-3">
			<button id="mapButton" href="#mapDivH" class="btn padded" data-toggle="collapse">
            	View or hide a map of <br /> South Shore Methodist Community Church (Scarsdale Avenue)
            </button>
		</div>
	</div>

	<div class="row space-above">
		<div class="col-md-1">
    	</div>

		<div class="col-md-10">
			<div class="padded separator"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h3 class="padded-top" id="title-services">Services</h3>
			<p class="ssmcc-text padded-top">10:30 am every Sunday</p>
			<p class="padded-top ssmcc-text">Please note that South Shore Methodist Community Church periodically celebrates joint services.
            	You can check the events diary for the Scarsdale Avenue site by clicking the Events and Services button below or the
                <a href="../pages/lindale.php#title-services">Dorritt Road site events diary</a> if you want to confirm service times.</p>

			<div class="panel-group space-above" id="accordion2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" id="panel-title-events">
							<a class="indented-subpage panel-title" data-toggle="collapse" data-parent="#accordion2"
							   href="#collapse2">Events and services  ▼</a>
						</h3>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<?php include '../templates/highfield-diary.php'; ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


    <?php include '../templates/footer.php'; ?>

</div>

<?php include '../templates/scripts-subpage.php'; ?>
<?php include '../templates/panels-script-subpage.php'; ?>

</body>

</html>