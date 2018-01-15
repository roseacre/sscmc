<!DOCTYPE html>
<html lang="en">

<?php
$title = "SSMCC Highfield Site";
include '../templates/head-subpage.php';
?>

<body>

<div class="container">

    <?php include '../templates/banner-subpage.php'; ?>
    <?php include '../templates/ssmcc-links-subpage.php'; ?>


    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse1">Sunday Worship  ▼</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php include '../templates/highfield-worship.php'; ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse2">Midweek Services  ▼</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php include '../templates/highfield-midweek.php'; ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse3">Dates for your diary  ▼</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php include '../templates/highfield-diary.php'; ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse4">Church groups  ▼</a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php include '../templates/highfield-groups.php'; ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse5">Announcements  ▼</a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">


                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse6">Church history  ▼</a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php include '../templates/highfield-history.php'; ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse7">Gallery  ▼</a>
                </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php include '../templates/highfield-gallery.php'; ?>
                </div>
            </div>
        </div>

<!--        <div class="panel panel-default">-->
<!--            <div class="panel-heading">-->
<!--                <h4 class="panel-title">-->
<!--                    <a data-toggle="collapse" data-parent="#accordion"-->
<!--                       href="#collapse7">Something else  ▼</a>-->
<!--                </h4>-->
<!--            </div>-->
<!--            <div id="collapse7" class="panel-collapse collapse">-->
<!--                <div class="panel-body">-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="panel panel-default">-->
<!--            <div class="panel-heading">-->
<!--                <h4 class="panel-title">-->
<!--                    <a data-toggle="collapse" data-parent="#accordion"-->
<!--                       href="#collapse8">Another category  ▼</a>-->
<!--                </h4>-->
<!--            </div>-->
<!--            <div id="collapse8" class="panel-collapse collapse">-->
<!--                <div class="panel-body">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>

    <?php include '../templates/footer.php'; ?>

</div>

<?php include '../templates/scripts-subpage.php'; ?>
<?php include '../templates/tables-script-subpage.php'; ?>
<?php include '../templates/panels-script-subpage.php'; ?>

</body>
</body>
</body>
</html>