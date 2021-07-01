

$(document).ready(function () {
    $('.form-btn').click(function (e) {
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "load-table.php",
            data: $('.table-data').serialize(),
            dataType: "html",
            success: function (response) {
                $(".table-data").html(response);
            }
        });
    });
});