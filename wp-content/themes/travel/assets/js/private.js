
$('.slide-txt-about').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
    speed: 500,
}); 

$('.slide-new').slick({
    autoplay: false,
    arrow: false,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
    speed: 500,
});  

$('.slide-tour-hot').slick({
    autoplay: false,
    arrow: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
    speed: 500,
});  

$('.list-gallery').slick({
    autoplay: true,
    arrow: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
    speed: 500,
});  

$('.slider-for').slick({
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true, 
    asNavFor: '.slider-nav',
    speed: 500,
});
$('.slider-nav').slick({
    autoplay:false,
    arrow:false,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
    ],
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    prevArrow: '', 
    nextArrow: '', 
});

$('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime(''
    + '<label class="weed-count"><span>%w</span> tuần</label> '
    + '<label><span>%d</span> ngày</label> '
    + '<label><span>%H</span> giờ</label> '
    + '<label><span>%M</span> phút</label> '
    + '<label><span>%S</span> giây</label>'));
  });
});



$('ul.tabs li a').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li a').removeClass('active');
    $('.tab-content').removeClass('active');

    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
})