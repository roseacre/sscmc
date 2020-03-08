<!DOCTYPE html>
<html lang="en">

<?php
$title = "Blackpool Methodist Circuit Email Contact Form";
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

                <h2>
                    Contact The Blackpool Methodist Circuit
                </h2>

                <div class="space-above">
                    <?php include '../snippets/email-us-form.php'; ?>
                </div>

            </div>
        </div>

        <?php include '../templates/footer.php'; ?>

        <?php include '../templates/scripts-subpage.php'; ?>

    </div>

</body>
</html>