$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });

    $("#myModal").on('shown.bs.modal', function(){
        $(this).find('input[type="text"]').focus();
    });
});