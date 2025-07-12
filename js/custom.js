$(document).ready(function () {

  setHeaderShadow();

  $('.carousel').carousel({
    //interval: 6000,
    interval: false,
    pause: "false"
  });
  bannerHeight();
  bannerMobHeight();


  $("header .dropdown.nav-item").mouseenter(popUp);
  $("header .dropdown.nav-item").mouseleave(popClose);

  $("header .dropdown.nav-item").click(popUp);
  $(window).scroll(function () {
    setHeaderShadow();
  });

  $('.chats, #dIF, .find_your_solution').click(function () {
    $("html, body").animate({
      scrollTop: $('.form_fields').offset().top - $('header')[0].scrollHeight + 2 //calc the scrolltop and show form fields
    }, 500);
    $('#submitMainFormHelper').each(function () {
      $(this).attr({
        'href': 'javascript:void(0)',
        'download': ''
      });
    })
  });

  $('#goToSolution').click(function () {
    $("html, body").animate({
      scrollTop: $('.get_started').offset().top - $('header')[0].scrollHeight - 8 //calc the scrolltop and show form fields
    }, 500);
  });


  $('#submitMainFormHelper').click(function () {
    $('#submitMainForm').trigger('click');
  });

  $('#expandSolutionsBtn').click(function () {
    //debugger;
    if ($(this).hasClass('rotated')) {
      $('#getStartedList').animate({
        height: initialHeight
      }, 500, function () {

        $('#expandSolutionsBtn').removeClass('rotated');
        $('html,body').animate({
          scrollTop: $('.get_started').offset().top - $('header')[0].scrollHeight
        }, 500)
      });

    } else {
      initialHeight = $('#getStartedList').outerHeight();

      $('#getStartedList').css({
        'height': 'auto'
      });

      $('#getStartedList').animate({
        height: $('#getStartedList')[0].scrollHeight
      }, 300, function () {
        $('#expandSolutionsBtn').addClass('rotated');
        $('html,body').animate({
          scrollTop: $('.digital_trend').offset().top - $(window).height()
        }, 500)
      });


    }
  });

  $('.input_value').keyup(function () {
    if ($(this).val() != '') {
      $(this).addClass('valid');
      $(this).find('~ .border_bottom').addClass('valid');
    } else {
      $(this).removeClass('valid');
      $(this).find('~ .border_bottom').removeClass('valid');
    }
  });

  $('.nav-bar.accordrion').click(function () {
    $('#nav-icon').toggleClass('open');
  });


  // $('.send_me_ebook').click(function(){
  //   if($(window).width() > 991){
  //     setTimeout(function(){
  //       setBannerHeight();
  //     },10);
  //   }
  // })
  setBannerHeight();
});


var initialHeight = 0;

function changeCaptacha() {
  alert();
}
$(window).resize(function () {
  bannerHeight();
  $('#getStartedList').removeAttr('style');
  $('#expandSolutionsBtn').removeClass('rotated');
  setBannerHeight();
});

function bannerHeight() {
  var $item = $('.carousel-item');
  var $nonCarousel = $('.no_carousel')
  var $wHeight = ($(window).outerHeight() - $('header').outerHeight()) / 2 + 240;

  $item.eq(0).addClass('active');
  $nonCarousel.height($wHeight);
  $item.height($wHeight);
  $item.addClass('full-screen');
}

function popUp() {
  $('header .dropdown .nav-link').dropdown('show');
  if ($(window).width() < 992) {
    $('#collapse_mobile').addClass('mobile_navbar');
  }
}

function popClose() {
  $('header .dropdown .nav-link').dropdown('hide');
  $('header .dropdown .nav-link').attr('aria-expanded', 'false');
  if ($(window).width() < 992) {
    $('#collapse_mobile').removeClass('mobile_navbar');
  }
}

function bannerMobHeight() {

}

function setHeaderShadow() {
  if ($(window).scrollTop() > 89) {
    $('header').addClass('floating_header');
  } else {
    $('header').removeClass('floating_header');
  }
}

function setBannerHeight(){
  if($(window).width() > 991){
    $('.di_banner_section').css({
      // 'height': $(window).height() - $('.ap_benefits .title').innerHeight() - $('header').outerHeight() + 'px',
      'margin-top': $('header').outerHeight() + 'px',
      //'background-size': $('.di_banner_section').innerHeight() - 50 + 'px'
    });

  }
  else{
    $('.di_banner_section').css({
      // 'height':'auto',
      'margin-top': $('header').outerHeight() + 'px',
      //'background-size': $('.di_banner_section').innerHeight() / 2 + 'px'
    });
  }

  // if($('.di_banner_section').innerHeight() -20 < $('#registration').innerHeight()){
  //   $('.di_banner_section').css({
  //     'height':$('#registration').innerHeight() + 40 + 'px'
  //   })
  // }
}
window.onload = function(){
  $('.di_form_section').addClass('visible');
}
//------------------ google reCAPTCHA --------------------------

var onloadCallback = function () {
  alert("grecaptcha is ready!");
};