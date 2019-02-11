$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });

    $("#myModal").on('shown.bs.modal', function(){
        $(this).find('input[type="text"]').focus();
    });
    
    // $('textarea').on('input, keyup', function () {
    //     setHeight(this);
    // })

    // Modal functionality
    $('.note').on("click", function() {
        $('#myModal .modal-header input').val($(this).find('h2').html());
        $('#myModal .modal-body textarea').val($(this).find('p').html());
        $('#noteId').val($(this).attr('href'));
        $('#myModal #deleteNote').attr('href', 'models/deleteNote.php?noteId=' + $(this).attr('href'));
        $('#myModal #trashNote').attr('href', 'models/trashNote.php?noteId=' + $(this).attr('href'));
        $('#myModal .modal-body #datepicker').val($(this).find('.date').html());
        $('#myModal .modal-body #datepicker1').val($(this).find('.date').html());
        $('#myModal .modal-body #created').val($(this).find('.created').html());

        if ($(this).attr('href') === 'new_note') {
            $('#myModal #deleteNote').parent().hide();
        } else {
            $('#myModal #deleteNote').parent().show();
        }

        if ($(this).attr('href') === 'new_note') {
            $('#myModal #trashNote').parent().hide();
        } else {
            $('#myModal #trashNote').parent().show();
        }

    });
	
	$.datepicker.setDefaults({
		firstDay: 1
	});
 
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd'
    });

    $('.close').on("click", function() {
          window.location.href = 'index.php';
    });

    $('.close1').on("click", function() {
        window.location.href = 'trashIndex.php';
    });

    $('.close2').on("click", function() {
        window.location.href = 'editProfile.php';
    });

    $('.close3').on("click", function() {
        window.location.href = 'php/logout.php';
    });
});