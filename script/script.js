$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });

    $("#myModal").on('shown.bs.modal', function(){
        $(this).find('input[type="text"]').focus();
    });

    $('.modal').on('shown.bs.modal', function () {
        $(this).find('textarea').each(function () {
            setHeight(this);
       });
    })

    let setHeight = (input) => {
        input.style.overflow = 'hidden';
        input.style.height = 0;
        input.style.height = `${ input.scrollHeight + 2 }px`;
    };
    
    $('textarea').on('input, keyup', function () {
        setHeight(this);
   })
});