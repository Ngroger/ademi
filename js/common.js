$(document).ready(function() {

	//Цели для Яндекс.Метрики и Google Analytics
	
$(".sandwich").click(function() {
		// $(this).next().slideToggle();
		if ($("header nav ul").is(":visible")) {
				$(".main-nav ul").addClass('visible-lg visible-md visible-sm');
			} else {
				$(".main-nav ul").removeClass('visible-lg visible-md visible-sm');
			};
	});
	// Плавающее меню
	$(document).on("scroll",function(){
		if($(document).scrollTop()>120){ 
           
			$(".header .main-nav").addClass("fixed-header");
            }
		else{
			$(".header .main-nav").removeClass("fixed-header");
		}
        if($(document).scrollTop()>120){
			if ($(window).width() < 767) {
				$(".fixed-phone").show();
			}
		}
		else {
			$(".fixed-phone").hide();
		}
        if ($(this).scrollTop() > 120) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
	});

     $('#back-to-top').click(function() {
                $('#back-to-top').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            $('#back-to-top').tooltip('show');
    
//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {
	};

	$(".main-nav ul a").mPageScroll2id({
			  offset: function(){
            if ($(window).width() < 991) {
                return 40;
            }
            else {
                return 80;
            }
        }
		});

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
    $(".slide-in ul li").click(function(){
        if($(".slide-in").hasClass("on")) {
            $(".slide-in").removeClass("on");
        }
    });
	
});


$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});


$('.slider').slick({
            dots: false,
            arrows: true,
            fade: true,
            autoplay: true,
            infinite: true,
            speed: 300
        });

$('.slider-2').slick({
            dots: false,
            arrows: true,
            fade: true,
            autoplay: true,
            infinite: true,
            speed: 300
        });

$('.slider-3').slick({
            dots: false,
            arrows: true,
            fade: true,
            autoplay: true,
            infinite: true,
            speed: 300
        });
$('.slider-4').slick({
            dots: false,
            arrows: true,
            autoplay: false,
            infinite: true,
            speed: 300
        });
