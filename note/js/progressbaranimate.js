// <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

$(document).ready(function() {
    var progressbar = $('#progressbar'),
        max = progressbar.attr('max'),
        time = (1000/max)*5,
        value = progressbar.val();
    var loading = function() {
        value += 1;
        addValue = progressbar.val(value);
        $('.progress-value').html(value + '%');
        if (value == max) {
            clearInterval(animate);
        }
    };
    var animate = setInterval(function() {
        loading();
    }, time);
});