$('.button').on('click', function() {
    $(this).closest('form')[0].reset();
});