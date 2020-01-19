<!DOCTYPE html>
<html lang="en">

<?php
$title = "New Central Methodist Church";
include '../templates/head-subpage.php';
?>

<body>

<div class="container">

    <?php include '../templates/banner-subpage.php'; ?>
    <?php include '../templates/navbar-subpage.php'; ?>


    <div class="row">
    	<div class="col-md-1">
        </div>
        <div class="col-md-10">
			<h2 class="padded-top" id="page-subheading">
				New Central Methodist Church
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
		</div>

		<div class="col-md-8">
			<img src="../images/newcentral.jpg" class="resized-image" alt="Photograph of New Central Methodist Church.">

			<div class="panel-group space-above" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" id="panel-title">
							<a class="indented-subpage panel-title" data-toggle="collapse" data-parent="#accordion"
							   href="#collapse1">Announcements  ▼</a>
						</h3>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<div class="panel-body">
							<?php include '../templates/newcentral-announcements.php'; ?>
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
			<p class="ssmcc-text indented-subpage padded-top" id="address-1">Adelaide St West</p>
			<p class="ssmcc-text indented-subpage" id="address-2">Blackpool</p>
			<p class="ssmcc-text indented-subpage" id="address-3">FY1 4SR</p>
			<br />
			<p class="ssmcc-text indented-subpage padded-top" id="title-phone"> Telephone:</p>
			<p class="ssmcc-text indented-subpage" id="telephone-1"><a href="tel:01253624836">01253 624836</a> </p>
		</div>
		<div class="col-md-6">
			<div id="mapDivH" class="collapse padded">
				<div class="map-responsive padded">
					<iframe width='100%' height='150%' id='mapcanvas' src='https://maps.google.com/maps?q=fy1%204sr&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
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
            	View or hide a map of New Central Methodist Church
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
			<p class="ssmcc-text indented-sub-page padded-top" id-"facebook-link-title">
				<a href="https://www.facebook.com/newcentralblackpool">
				<img src="../images/fb-icon.jpg" alt="Facebook logo">
				Find New Central Methodist Church on Facebook</a>
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<p class="ssmcc-text indented-sub-page padded-top" id-"new-central-www-link-title">
				<a href="http://newcentralmethodistchurch.weebly.com/">
				<img src="../images/browsers.jpg" alt="browser logos">
				Find New Central Methodist Church on the Internet</a>
			</p>
		</div>
	</div>


    <?php include '../templates/footer.php'; ?>

</div>

<?php include '../templates/scripts-subpage.php'; ?>
<?php include '../templates/tables-script-subpage.php'; ?>
<?php include '../templates/panels-script-subpage.php'; ?>

</body>

</html>