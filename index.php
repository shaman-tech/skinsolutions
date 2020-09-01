<?php get_header() ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- wrapper for class -->
    <div class="carousel-inner">

      <header class="masthead item active">
        <div class="header-content">
          <div class="header-content-inner text-left">
            <h3 id="homeHeading">Skin Solutions is Jamaica’s premier Dermatology and Plastic Surgery practice</h3>
            <a class="btn btn-secondary btn-xl" id="hero_button" href="#about">Find Out More</a>
          </div>
        </div>
      </header>
      <header class="masthead2 item">
        <div class="header-content">
          <div class="header-content-inner text-left">
            <h3 id="homeHeading"> We help people look and feel their best, inside and out.</h3>
            <a class="btn btn-secondary btn-xl" id="hero_button" href="#about">Find Out More</a>
          </div>
        </div>
      </header>
      <header class="masthead3 item">
        <div class="header-content">
          <div class="header-content-inner text-left">
            <h3 id="homeHeading">Schedule a consultation today and be on your way to skin you glow in!</h3>
            <a class="btn btn-secondary btn-xl" id="hero_button" href="#about">Find Out More</a>
          </div>
        </div>
      </header>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background-image:none" onclick="$('#myCarousel').carousel('prev')">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background-image:none" onclick="$('#myCarousel').carousel('next')">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  <section id="whatwedo">
    <h1>What We Do</h1>
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="inner_col">
            <div id="inner_img2"></div>
            <div>
              <h4>General Dermatology</h4>
              <p>Acne ● Eczema ● Hair Loss ● Fungal Infections ● Nail Health ● Skin Cancer Treatment </p>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="inner_col">
            <div id="inner_img3">
            </div>
            <div>
              <h4>Plastic Surgery</h4>
              <p>Body Contouring ● Liposuction ● Breast Augmentation, Reduction & Lift ● Butt Lift ● Reconstructive Surgery</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="inner_col">
            <div id="inner_img1"></div>
            <div>
              <h4>Cosmetic Procedures</h4>
              <p>Botox ● Chemical Peels ● Fillers ● Laser Vein & Hair Removal ● Microdermabrasion ● Vaginal Rejuvenation</p>
            </div>
          </div>
        </div>



      </div>
    </div>

  </section>

<!--- At Your Service Section #Serve -->

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">At Your Service</h2>
          <hr class="primary">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x text-primary sr-icons" id="d_icon"></i>
            <h3>Dermatology</h3>
            <p class="text-muted">Solutions for problems preventing you from glowing in the skin you're in.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x text-primary sr-icons" id="ps_icon"></i>
            <h3> Plastic Surgery</h3>
            <p class="text-muted"> Let’s create the body you’ve always wanted.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x text-primary sr-icons" id="cp_icon"></i>
            <h3>Cosmetic Procedures </h3>
            <p class="text-muted">You deserve to feel 100% at ease in your own skin.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x text-primary sr-icons" id="g_icon"></i>
            <h3>Gynaecology</h3>
            <p class="text-muted">Complete care for women who want to retain or restore their reproductive and pelvic health.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x text-primary sr-icons" id="gs_icon"></i>
            <h3>General Surgery</h3>
            <p class="text-muted">Our private operating theatre is outfitted with state-of-the art equipment.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
<!--- END OF AT YOUR SERVICE --->

<!--- ABOUT US SERVICE #About --->
  <section class="bg-primary" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Why Skin Solutions?</h2>
          <hr class="light">
          <p class="text-faded">Skin Solutions is Jamaica’s premier Dermatology and Plastic Surgery practice. Experienced medical professionals,
            state-of-the-art technology and compassionate service are the pillars of our commitment to you. Schedule a consultation
            today and be on your way to skin you glow in!</p>
          <a class="btn btn-default btn-xl sr-button" href="popups/contact_pop.html">Request Appointment</a>
        </div>
      </div>
    </div>
  </section>

<!-- END OF ABOUT US SECTION --->

<!--- OUR DOCTORS SECTION #Doctors --->

<section class="p-0" id="portfolio">
    <div class="container-fluid">
      <h1 style="text-align: center;">Our Doctors</h1>
      <div class="row no-gutter popup-gallery">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="popups/pop-up1.html">
            <img class="img-fluid" src="img/doctors/pp_althea.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category ">
                  Dr. Althea Banbury, MBBS, Dip. Derm.
                </div>
                <div class="project-name text-faded">
                  Dermatologist & General Practitioner
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="popups/pop-up2.html">
            <img class="img-fluid" src="img/doctors/pp_norman.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  Dr. Norman Morrison
                </div>
                <div class="project-name">
                  Plastic Surgeon
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="popups/pop-up6.html">
            <img class="img-fluid" src="img/doctors/pp_terry.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  Dr. Terri-Ann Samuels
                </div>
                <div class="project-name">
                  Urogynaecologist
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="popups/pop-up3.html">
            <img class="img-fluid" src="img/doctors/pp_martin.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category ">
                  Dr. Kimberly Martin
                </div>
                <div class="project-name text-faded">
                  Obstetrician & Gynaecologist
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="popups/pop-up4.html">
            <img class="img-fluid" src="img/doctors/pp_henry.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category ">
                  Dr. Kevin Henry
                </div>
                <div class="project-name text-faded">
                  Obstetrician & Gynaecologist
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- <div style="visibility: hidden;" class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/doctors/pp_norman.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  Dr. Norman Morrison
                </div>
                <div class="project-name">
                  Plastic Surgeon
                </div>
              </div>
            </div>
          </a>
        </div> -->

        <!-- <div class="col-lg-4 col-sm-6 skin_sol_info">
          <img data-aos: "fade-up" class="skin_sol_info_logo"src="img/logos/ss_logo_green_circular_no_tag.png" alt="Skin Solutions" />
          <p>Skin Solutions is home to a range of medical professionals, including a Dermatologist, Plastic Surgeon, General Surgeon and Gynaecologists. We also have a well-appointed operating theatre, complete with a private entrance and ample parking. </p>
        </div> -->


        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="popups/pop-up5.html">
            <img class="img-fluid" src="img/doctors/pp_steph.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  Dr. Stephanie Lyew
                </div>
                <div class="project-name">
                  General Surgeon
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
<!--- END OF OUR DOCTORS SECTION --->

<!-- call-to-action SET YOUR APPOINTMENT --->

  <div class="call-to-action bg-dark popup-gallery">
    <div class="container text-center">
      <h2>Set your appointment</h2>
      <a class="btn btn-default btn-xl sr-button" href="popups/contact_pop.html">Register Here</a>
    </div>
  </div>
<!-- END OF CALL TO ACTION -->

<!-- CONTACT US SECTION #contact -->

  <section id="contact1">
    <div class="container" id="contact">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Let's Get In Touch!</h2>
          <hr class="primary">
          <p>Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fa fa-phone fa-3x sr-contact"></i>
          <p>(876)978-7803 / (876)927-7404</p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fa fa-envelope-o fa-3x sr-contact"></i>
          <p>
            <a href="mailto:info@skinsolutions.com">info@skinsolutionsjamaica.com</a>
          </p>
        </div>
      </div>
    </div>
  </section>
<!-- END OF CONTACT US SECTION -->

<?php get_footer() ?>