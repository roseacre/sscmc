<!DOCTYPE html>
<html lang="en">

<?php
$title = "SSMCC Diary";
include '../templates/head-subpage.php';
?>

<body>

<div class="container">

    <?php include '../templates/banner-subpage.php'; ?>
    <?php include '../templates/ssmcc-links-subpage.php'; ?>

    <div>

        //
        // Table with data
        //
        <table id="myTable" role="grid" class="table table-striped table-bordered dataTable">
            <thead>
            <tr>
                <th class="sorting_asc" tabindex="0" aria-controls="myTable" aria-sort="ascending" aria-label="Name: activate to sort column descending">ENO</th>
                <th class="sorting" tabindex="0" aria-controls="myTable" aria-sort="ascending" aria-label="Name: activate to sort column descending">EMPName</th>
                <th class="sorting" tabindex="0" aria-controls="myTable" aria-sort="ascending" aria-label="Name: activate to sort column descending">Country</th>
                <th class="sorting" tabindex="0" aria-controls="myTable" aria-sort="ascending" aria-label="Name: activate to sort column descending">Salary</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>001</td>
                <td>Anusha</td>
                <td>India</td>
                <td>10000</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Charles</td>
                <td>United Kingdom</td>
                <td>28000</td>
            </tr>
            <tr>
                <td>003</td>
                <td>Sravani</td>
                <td>Australia</td>
                <td>7000</td>
            </tr>
            <tr>
                <td>004</td>
                <td>Amar</td>
                <td>India</td>
                <td>18000</td>
            </tr>
            <tr>
                <td>005</td>
                <td>Lakshmi</td>
                <td>India</td>
                <td>12000</td>
            </tr>
            <tr>
                <td>006</td>
                <td>James</td>
                <td>Canada</td>
                <td>50000</td>
            </tr>

            <tr>
                <td>007</td>
                <td>Ronald</td>
                <td>US</td>
                <td>75000</td>
            </tr>
            <tr>
                <td>008</td>
                <td>Mike</td>
                <td>Belgium</td>
                <td>100000</td>
            </tr>
            <tr>
                <td>009</td>
                <td>Andrew</td>
                <td>Argentina</td>
                <td>45000</td>
            </tr>

            <tr>
                <td>010</td>
                <td>Stephen</td>
                <td>Austria</td>
                <td>30000</td>
            </tr>
            <tr>
                <td>011</td>
                <td>Sara</td>
                <td>China</td>
                <td>750000</td>
            </tr>
            <tr>
                <td>012</td>
                <td>JonRoot</td>
                <td>Argentina</td>
                <td>65000</td>
            </tr>
            </tbody>
        </table>


    </div>

    <?php include '../templates/footer.php'; ?>

</div>

<?php include '../templates/scripts-subpage.php'; ?>
//
// This only line code describes to bind datatable functionalities like searching, sorting and paging to our table.
// Here 'myTable' is the ID of our table
//

<script>
    $(document).ready(function(){
        $('#myTable').dataTable({
             "lengthChange": false,
             "searching": false
        });
    });
</script>

</body>
</html>