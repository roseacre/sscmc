$(document).ready(function () {
    $('#eventsDiary').DataTable({
        "lengthChange": false,
        "searching": false,
        "columnDefs": [{
            "targets": [0],
            "orderData": [0, 1]
        }, {
            "targets": [1],
            "orderData": [1, 0]
        }, {
            "targets": [2],
            "orderData": [2, 0, 1]
        }]
    });
});
