<!DOCTYPE html>
<html lang="en">

<?php
$title = "SSMCC Contact Us";
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
                    The Blackpool Methodist Circuit
                </h2>
                <h3 class="space-above">Contact Our Minister</h3>

                <div class="general-text">
                    <p>The Church is established at two sites within South Shore, Blackpool, but we share
                        a Minister, Reverend Barrie Morris who is contactable by telephone on
                        <a href="tel:01253341017">01253 341017</a> or via email using
                        <a href="mailto:example@example.com">Example Email</a>. He will be glad to hear
                        from you.</p>
                </div>

                <h3 class="space-above">Contact Our Church Secretary</h3>
                <div class="general-text">
                    <p>For general enquiries and requests for prayer intercessions, you can
                        <a href="mailto:n.g.evans@btinternet.com">email our Church Secretary</a>, Nigel Evans.</p>
                </div>

                <h3 class="space-above" id="highfield-contact">Contact Details For Highfield Methodist Church</h3>
                    <div>
                        <?php include '../templates/highfield-contact-us.php'; ?>
                    </div>

                <h3 class="space-above" id="lindale-contact">Contact Details For Lindale Methodist Church</h3>
                <div>
                    <?php include '../templates/lindale-contact-us.php'; ?>
                </div>

            </div>
        </div>

        <?php include '../templates/footer.php'; ?>

        <?php include '../templates/scripts-subpage.php'; ?>

    </div>

</body>
</html>