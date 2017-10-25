

(function($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 48
    });

    // Closes responsive menu when a link is clicked
    $('.navbar-collapse>ul>li>a').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Collapse the navbar when page is scrolled
    $(window).scroll(function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    });

    // Logo Change

    // Scroll reveal calls
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 1000,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 300);

    // Magnific popup calls

    var data = [
      {
        pp_img: '../img/doctors/pp_althea.jpg',
        caption: 'Dr. Banbury has paved the way with cutting edge technology in the dermatology field and the art of laser procedures. Skin Solutions was born from her vision of creating a world-class medical complex, complete with an operating theatre and the expertise of top-brass medical professionals who attend to our clients’ holistic wellness, in a relaxed and pristine atmosphere. Dr. Banbury is a Dermatologist and General Practitioner more than 25 years’ experience, and is a member of the Medical Association of Jamaica and the Dermatology Association of Jamaica. She received her B.Sc. from the University of Windsor in Canada, an MBBS from the University of the West Indies and a Diploma in Dermatology from the University of London.'
      },

      {
        pp_img: '../img/doctors/pp_kingsley.jpg',
        caption: 'Professor and Harvard-trained surgeon Dr. Kingsley R. Chin has taught over 200 surgeons from several countries and has provided his expertise to children, professional athletes, and patients around the world. He is the founder of the LESS Institute, and has devoted many years to laying the foundation for less invasive surgery techniques. The LESS Institute was founded as a center of excellence to advance the industry standard of patient care.'
      }

    ];

    $('.popup-gallery').magnificPopup({

        // delegate: 'a',
        // type: 'image',
        // tLoading: 'Loading image #%curr%...',
        // mainClass: 'mfp-img-mobile',
        // gallery: {
        //     enabled: true,
        //     navigateByImgClick: true,
        //     preload: [0, 1]
        // },
        // image: {
        //     tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        // }
        delegate: 'a',
        mainClass: 'mfp-img-mobile',
        type: 'ajax',
        tLoading: 'Loading image #%curr%...',
        gallery:{
          enabled:true,
          navigateByImgClick: true,
          preload:[0,1]
        },
        ajax: {
          // markup:   "<div class='white-pop'><div class='mfp-close'></div>"+
          //               "<div class='row'>"+
          //                 "<div class='col-lg-6 mfp-pp'></div>"+
          //                   " <hr/>"+
          //               "  <div class='col-lg-6 img_col_caption mfp-caption'></div>"+
          //                     "<hr/>"+
          //             "</div>"+
          //           "</div>"

          settings: null,
          cursor: 'mfp-ajax-cur',
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });



})(jQuery); // End of use strict

$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
