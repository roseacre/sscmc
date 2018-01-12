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

    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">

            <div class="table-responsive">
                <table class="table table-bordered table-striped dataTable" id="eventsDiary"
                       role="grid"
                       summary="This table provides details of services and events that may be of interest to members and visitors of
                            South Shore Methodist Community Church.">
                    <thead>
                    <th id="header1" class="table-date-column sorting_asc" tabindex="0"
                        aria-controls="eventsDiary" aria-sort="ascending"
                        aria-label="Date: activate to sort column descending">Date
                    </th>
                    <th id="header2" class="table-time-column sorting" tabindex="0"
                        aria-controls="eventsDiary" aria-sort="ascending"
                        aria-label="Time: activate to sort column descending">Time
                    </th>
                    <th id="header3" class="table-location-column sorting" tabindex="0"
                        aria-controls="eventsDiary" aria-sort="ascending"
                        aria-label="Location: activate to sort column descending">Location
                    </th>
                    <th id="header4" class="table-notes-column2 sorting" tabindex="0"
                        aria-controls="eventsDiary" aria-sort="ascending"
                        aria-label="Event details: activate to sort column descending">Event Details
                    </th>
                    </thead>
                    <tbody>
                    <?php include '../snippets/lindale-diary-snippet.php'; ?>
                    <?php include '../snippets/highfield-diary-snippet.php'; ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <?php include '../templates/footer.php'; ?>


    <?php include '../templates/scripts-subpage.php'; ?>
    //
    // This only line code describes to bind datatable functionalities like searching, sorting and
    paging to our table.
    // Here 'myTable' is the ID of our table
    //

    <script>
        $(document).ready(function () {
            $('#eventsDiary').dataTable({
                "lengthChange": false,
                "searching": false,
                "columnDefs": [ {
                    "targets": [ 0 ],
                    "orderData": [ 0, 1 ]
                }, {
                    "targets": [ 1 ],
                    "orderData": [ 1, 0 ]
                }, {
                    "targets": [ 2 ],
                    "orderData": [ 2, 0, 1 ]
                } ]
            });
        });
    </script>

</body>
</html>