<!DOCTYPE html>
<html lang="en">

<?php
$title = "SSMCC History";
include '../templates/head-subpage.php';
?>

<body>

    <div class="container">

        <?php include '../templates/banner-subpage.php'; ?>
        <?php include '../templates/navbar-subpage.php'; ?>

        <div class="row">
            <div class="col-md-12">

                <h2 class="padded">
                    Photo Gallery for The Blackpool Methodist Circuit
                </h2>

                <div class="general-text">

                    <p>Click on a button to filter the pictures.</p>
                </div>

				<?php include '../templates/gallery/gallery-template.php'; ?>
            </div>
        </div>

        <?php include '../templates/footer.php'; ?>

        <?php include '../templates/scripts-subpage.php'; ?>
        <?php include '../templates/gallery-script-subpage.php'; ?>

    </div>
</body>
</html>