<!-----footer ------>

<section class="footer">
    <div class="footer-background">
        <div class="container-fluid py-3 py-lg-0">
            <div class="row align-items-center">
                <ul class="footer-content">
                    <li> <a href="tel:+91 44-45497565" class="call-list">IN: +91 44-45497565
                    <span
                                class="vertical-line">|</span>
                    </a>
                    </li>
                    <li> <a href="mailto:info@itsdesigncity.com" class="call-list">info@itsdesigncity.com
                    </a>
                    </li>
                    
                </ul>
                <ul class="social-icons footer-content ml-auto">
                    <li class="icons"><a href="https://www.linkedin.com/company/itsdesigncity" title="Linkedin" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li class="icons"><a href="https://twitter.com/itsdesigncity" title="Twitter" target="_blank"><i
                                class="fab fa-twitter"></i></a></li>
                    <li class="icons"><a href="https://www.facebook.com/itsdesigncity/" title="Facebook" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                   
                    <li class="icons"><a href="https://www.instagram.com/itsdesigncity1/" title="instagram" target="_blank">
                            <i class="fab fa-instagram"></i></a></li>
                            <li class="icons"><a href="https://www.youtube.com/channel/UCufhl8tYk6IsXVlhEG9Ifnw" title="Youtube" target="_blank"><i
                                class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="copy-right">
            <div class="row align-items-center">
                <div class="col-md-7 text-center text-md-left">
                    <p class="p-subtitle pt-lg-0 pt-3">©2021 itsdesigncity. All Rights Reserved.</p>
                </div>
                <div class="col-md-5 text-center text-md-right">
                    <ul class="private">
                        <li class="policy1"><a href="https://itsdesigncity.com/itsdesigncity/privacy-policy.php" target="_blank">Privacy Policy</a>
                        </li>
                        <li class="policy"><a href="https://itsdesigncity.com/itsdesigncity/terms-of-use.php" target="_blank">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <!-- <div class="closing-tag">
                        <i class="fa fa-window-close close" aria-hidden="true"></i>
                            <h4 class="form-text">Thank You</h4>

                        </div> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div class="form-border">
                <div class="bg-white form_section p-4">
                    <div class="form-section">
                   
                        <form action="" method="post" id="check">
                       
                            <div class="row">
                                <div class="col-12">
                                    <div class="form_transition form-group text-left">
                                        <input type="text" id="full_name" name="full_name" class="form-control"
                                            placeholder="Enter Your Full Name" required>

                                    </div>
                                    
                                    <div class="form_transition form-group text-left">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Enter Your Email" required>

                                    </div>

                                    <div class="form_transition form-group text-left">
                                        <input type="text" id="company_name" name="company_name" class="form-control"
                                            placeholder="Enter Your Company Name">


                                    </div>

                                    <!-- <div class="form_transition form-group text-left">
                                        <input type="text" id="cname" name="cname" class="form-control" placeholder
                                            autocomplete="off">
                                        <label for="cname" class="">Company
                                            Name <sup>*</sup></label>
                                        <span class="error_text error_cname d-none">Enter
                                            Company Name</span>
                                    </div> -->
                                    <div class="form_transition form-group text-left">
                                        <textarea rows="5" name="message" cols="30"  class="form-control1" placeholder="Insert your message" id="requirement"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <span class="checkmark">By submitting the
                                            form, you agree to<br>
                                            Itsdesigncity</span> <a href="#" target="_blank"
                                            title="Its design city Privacy Policy">Privacy
                                            Policy</a>

                                        </label>
                                    </div>
                                    <div class="form-group m-0 ">
                                        <button type="submit" class="btn btn-primary reg-submit" name="submit"
                                            value="Submit" id="check">Let Start</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---script------>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$('.mobile1').carousel({})
</script>
<script>
$('.mobile').carousel({})
</script>
<script>
$('.mobile1').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 3000,
    autoplaySpeed: 10000,
    autoplayHoverPause: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
</script>

<script>
$('.mobile').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 1800,
    slideTransition: 'linear',
    autoplayHoverPause: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
</script>
<script>
$('.portfolio').owlCarousel({
    stagePadding: 50,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 1800,
    slideTransition: 'linear',
    autoplayHoverPause: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
</script>

<script>
$(document).ready(function() {
    if ($(window).width() < 769) {
        experienceSliderHeight();
        $('.expand_list img').click(function() {
            $(this).parents('.banner-details').find('.maxed ul').slideToggle();
        })
    } else {
        $('.expand_list img').off('click');
        $('.maxed ul').each(function() {
            $(this)[0].style.display = '';
        });
    }
    var counted = 0;
    $(window).scroll(function() {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
            $('.count').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            counted = 1;
        }

    });
});

$(window).resize(function() {
    if ($(window).width() < 769) {
        experienceSliderHeight();
        $('.expand_list img').click(function() {
            if ($(this).parents('.banner-details').find('.maxed ul').is(':visible') == false) {
                $('.maxed ul').slideUp();
                $(this).parents('.banner-details').find('.maxed ul').slideDown();
            }
        })
    } else {
        $('.expand_list img').off('click');
        $('.maxed ul').each(function() {
            $(this)[0].style.display = '';
        });
    }

})

function experienceSliderHeight() {
    var MaxHeight = 0;
    $('#customer-carousel .testimonial-item').each(function() {
        if (MaxHeight < $(this).find('p.font-weight-light').height()) {
            MaxHeight = $(this).find('p.font-weight-light').height();
        }
    })
    $('#customer-carousel .testimonial-item').find('p.font-weight-light').height(MaxHeight);
}
</script>


<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




