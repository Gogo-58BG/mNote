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

    // Modal functionality
    $('.note').on("click", function() {
        $('#myModal .modal-header input').val($(this).find('h2').html());
        $('#myModal .modal-body textarea').val($(this).find('p').html());
        $('#noteId').val($(this).attr('href'));
        $('#myModal .modal-body #datepicker').val($(this).find('.date').html());
    });
 
    $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });
});