function menu(){
    $('.header-btn').click(function (e) {
        //e.preventDefault();
        $(this).siblings().toggleClass('active');
    })
}
menu();
$(document).ready(function () {
    $('.form-btn').click(function (e) {
        e.preventDefault();
        $(this).html('Закрыть').toggleClass('close');
        if($(this).hasClass('close')){
            $(this).click(function (e) {
                //e.preventDefault();
                $(this).html('Показать данные таблицы tasks').siblings().toggleClass('hide');
            })
        }

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