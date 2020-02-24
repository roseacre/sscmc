<!DOCTYPE html>
<html lang="en">

<?php
$title = "History of Lindale Methodist Church";
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
				<?php include '../templates/history/lindale.php'; ?>
				<div class="separator space-above"></div>
			</div>
			<div class="col-md-1">
			</div>
        </div>

		<?php include '../templates/nav-history.php'; ?>

        <?php include '../templates/footer.php'; ?>

        <?php include '../templates/scripts-subpage.php'; ?>

    </div>
</body>
</html>