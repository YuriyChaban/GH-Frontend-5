new WOW().init();

$(addAnimClasses)

function addAnimClasses(){
    $('.hero-title').addClass('fadeIn wow');
    $('.hero-description').addClass('fadeIn wow');
    $('.section-title').addClass('fadeIn wow');
    $('.section-description').addClass('zoomIn wow').attr('data-wow-delay','.5s');
    $('.creativity h4').addClass('fadeInLeft wow').attr('data-wow-delay','1s');
    $('.buttonn-group li').addClass('fadeInLeft wow').attr('data-wow-delay','1s');
    $('.more-button').addClass('fadeInRight wow');
    $('.work-gallery li').addClass('fadeInDown wow').attr('data-wow-offset','250');
    $('.help h4').addClass('flipInX wow');
    $('.clients-item li').addClass('fadeInLeft wow').attr('data-wow-offset','250').attr('data-wow-delay','.5s');
    $('.people-list li').addClass('fadeInX wow').attr('data-wow-offset','250').attr('data-wow-delay','.5s');
    $('.video play').addClass('tada wow');
    $('.quote-button').addClass('fadeInX wow').attr('data-wow-delay', '1.5s');
    $('.slide li').addClass('fadeInY wow').attr('data-wow-offset','250').attr('data-wow-delay','.5s');
    $('.location span').addClass('fadeInLeft wow').attr('data-wow-offset','250').attr('data-wow-delay','.5s');
    $('.contact-form input').addClass('fadeIn wow').attr('data-wow-offset','250').attr('data-wow-delay', '1.2s');;
    $('.contact-form textarea').addClass('fadeIn wow').attr('data-wow-offset','300').attr('data-wow-delay', '.1s');;
    $('.footer-logo').addClass('fadeInLeft wow').attr('data-wow-delay', '1.5s');
    $('.author').addClass('fadeInLeft wow').attr('data-wow-delay', '1.5s');

}
