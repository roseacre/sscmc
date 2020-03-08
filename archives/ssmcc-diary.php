<!DOCTYPE html>
<html lang="en">

<?php
$title = "SSMCC Diary";
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

                <?php include '../snippets/diary-table-header.php'; ?>
                <?php include '../snippets/lindale-diary-snippet.php'; ?>
                <?php include '../snippets/highfield-diary-snippet.php'; ?>
                <?php include '../snippets/diary-table-footer.php'; ?>

            </div>
        </div>
    </div>

    <?php include '../templates/footer.php'; ?>

    <?php include '../templates/scripts-subpage.php'; ?>
    <?php include '../templates/tables-script-subpage.php'; ?>

</body>
</html>