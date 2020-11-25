// $(function () {
//   $('[data-toggle="tooltip"]').tooltip()
// })

$('#hover-link').mouseover(function() {
    $('#sign').css({
        'visibility': 'visible',
        'opacity': '1'
    });
});


$('#hover-link').mouseout(function() {
    $('#sign').css({
        'visibility': 'hidden',
        'opacity': '0'
    });
});

$('#sign').mouseover(function() {
    $('#sign').css({
        'visibility': 'visible',
        'opacity': '1'
    });
});

$('#sign').mouseout(function() {
    $('#sign').css({
        'visibility': 'hidden',
        'opacity': '0'
    });
});