$('.confirm-delete').on('click', function(e) {
    e.preventDefault();
    var href = $(this).attr('href');
    $('#myModal').data('href', href).modal('show');
});

$('#btnYes').click(function() {
    // handle deletion here
    var href = $('#myModal').data('href');
    location.href = href
});
