// $(function () {
//   $('[data-toggle="tooltip"]').tooltip()
// })

// smooth scroll
$(".shop").click(function(e){       
    e.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, "slow");
});
// smooth scroll end


// show/hide sign in
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
// show/hide sign in end