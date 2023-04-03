<?php
require_once './db/connection.php';

$sql = "SELECT * FROM portfolios JOIN portfolios_images ON portfolios.id = portfolios_images.portfolio_id GROUP BY portfolios.id";
$result = $conn->query($sql);

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SpotTech</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Website Name: Spottech
    * Website URL: https://spottech.tech
    * Author: SpotTech
    * Developer: Masihullah Khairy
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <!--<h1 class="logo"><a href="index.html">Multi</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SpotTech</span></h2>
                        <p class="animate__animated animate__fadeInUp">Our objective is to help you grow your business
                            through technology and enable you to work globally.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Application Development</h2>
                        <p class="animate__animated animate__fadeInUp">Create better and user-friendly apps faster. </p> <p>Your apps, your style, create them any way you want with. Swiftly made, easily edited, beautifully deployed</p>
                        <p>Not only desktop apps, have your own mobile app and website to show the world who you are and what you offer.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Graphic Design</span></h2>
                        <p class="animate__animated animate__fadeInUp">Let all your ideas bloom. Then build the best image for your idea! 🍃💥</p>
                        <p>Accessible design is good design. We strive for two things in design: simplicity and clarity. Whitespace is like air: it is necessary for design to breathe.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About</h2>
                <p>About Us</p>
            </div>
            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        We are a dedicated and professional software developer and graphic design team based in New
                        Zealand. With the following services
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Software Development
                        </li>
                        <li><i class="ri-check-double-line"></i> Web Design & Development
                            velit
                        </li>
                        <li><i class="ri-check-double-line"></i> Mobile App Development
                        </li>
                        <li><i class="ri-check-double-line"></i> Graphic Design
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        SpotTech is an experienced Wellington-based software development, graphic design, and IT
                        services company founded in 2022,
                        which has been working on a unique set of technology services on numerous concepts.
                        Our team are highly skilled experienced and creative in diverse area of Information Technology,
                        software development and graphic designing with have an average of 4 years of professional
                        experience.
                    </p>
                    <a href="#contact" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>Happy Clients</strong> </p>
                        <a href="#contact">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>Projects</strong> </p>
                        <a href="#contact">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>Hours Of Support</strong> </p>
                        <a href="#contact">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>Hard Workers</strong> </p>
                        <a href="#contact">Find out more &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-5 align-items-stretch video-box"
                     style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="100">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                       data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>We are a dedicated and professional software developer and graphic design team based in New
                            Zealand</h3>
                        <p>
                            Our team is highly skilled, experienced, and creative in diverse areas of information
                            technology, software development, and graphic design with several years of professional
                            experience.
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>
                                    Software Development <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>Build your dream app; Fast, easy, and affordable.</p>
                                    <p>
                                        Our dedicated software development services provide creative ideas and products
                                        to grow your business through technology.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                                    Web Design & Development <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>It’s not about how great our app is, but the effect it has on your organization.</p>
                                    <p>
                                        With our dedicated team, you will have a responsive, reliable, and user-friendly
                                        experience. We will help you build a scalable and secure website which will
                                        increase the global profile of your business.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                                    Mobile App Development<i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>Your battle plan for conquering the App Store should be written in code.</p>
                                    <p>
                                        SpotTech is an experienced mobile application development company. We offer
                                        cross-platform applications to meet your business expectations and help you grow
                                        your business up to 5 times faster.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Software Development</a></h4>
                        <p>Our dedicated software development services provide creative ideas and products to grow your
                            business through technology.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                     data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-mobile-alt"></i></div>
                        <h4><a href="">Mobile App Development</a></h4>
                        <p>SpotTech is an experienced mobile application development company. We offer cross-platform
                            applications to meet your business expectations and help you grow your business up to 5
                            times faster.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                     data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-desktop"></i></div>
                        <h4><a href="">Web Design & Development</a></h4>
                        <p>With our dedicated team, you will have a responsive, reliable, and user-friendly experience.
                            We will help you build a scalable and secure website which will increase the global profile
                            of your business.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-id-card"></i></div>
                        <h4><a href="">Graphic Designing</a></h4>
                        <p>We are a creative team that is motivated to assist in the growth of your businesses. Our goal
                            is to produce a design based on your values, purposes and commercial requirements.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Product & Design</a></h4>
                        <p>Our expert, experienced team uses creative and innovative solutions to bring positive changes
                            to your business and enable you to use state-of-the-art technology to grow.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-server"></i></div>
                        <h4><a href="">Hosting</a></h4>
                        <p>At SpotTech, we offer you the highest hosting performance, enjoy all the flexibility and
                            security with sole access to every resource.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Testimonials</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Romesh Dissanayake</h3>
                                <h4>Job Mentoring Service</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Mohammad Reza Hakimyar has been a pleasure to work with. Through his company
                                    SpotTech, he has provided Job Mentoring
                                    Service with an efficient, professional, and high-quality level of service. They are
                                    friendly, reliable and tailor their
                                    approach for each individual clients’ needs. I would recommend them for all your
                                    Software Development and Graphic Design
                                    needs. Thank you to Mohammad and your team for the outstanding work you have done
                                    for
                                    us!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Farid Khalili</h3>
                                <h4>Ceo, Granite Tiles</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    You have been doing a great job lately! It is clear that you care about your
                                    business, and I appreciate that you asked
                                    the client about their design preferences before creating their website. Promoting
                                    you
                                    to lead graphic designer was the
                                    best choice for our company. I am glad to see you are challenging yourself and are
                                    open
                                    to more responsibilities.
                                    Management knew your strong attention to detail would make you the right candidate
                                    for
                                    this role and all the training
                                    you have done with me has been very helpful. I have noticed your leadership skills
                                    and
                                    plan to keep you in mind for
                                    future projects.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Call To Action</h3>
                <p> Every idea can be valuable when you put it into action. We are here to make it happen. Call us or
                    schedule an appointment. Our representative will contact you shortly. </p>
                <a class="cta-btn" href="#contact">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Check our Portfolio</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-web">Web</li>
                        <li data-filter=".filter-card">Plugin</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-lg-4 col-md-6 portfolio-item <?php echo $row['type'];?>">
                            <img src="assets/img/portfolio/<?php echo $row['path'];?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?php echo $row['name'];?></h4>
                                <p><?php echo $row['category'];?></p>
                                <a href="assets/img/portfolio/<?php echo $row['path'];?>" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.php?portfolio_id=<?php echo $row['portfolio_id'];?>" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                            </div>
                        </div>
                    <?php }
                }

                $conn->close(); ?>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Check our Team</p>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Mohammad Reza Hakimyar</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6" data-wow-delay="0.1s">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Masihullah Khairy</h4>
                                <span>Senior Software Developer</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6" data-wow-delay="0.2s">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img src="assets/img/team/sabiry.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Mahboobulrahman Sabiry</h4>
                                <span>Web Developer</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6" data-wow-delay="0.3s">
                    <div class="member" data-aos="zoom-in" data-aos-delay="400">
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Mohammad Yasin Mohammadi</h4>
                                <span>Mobile App Developer</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6" data-wow-delay="0.3s">
                    <div class="member" data-aos="zoom-in" data-aos-delay="400">
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Said Shukrullah Azimi</h4>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <!--<div class="section-title">-->
            <!--<h2>Pricing</h2>-->
            <!--<p>Our Competing Prices</p>-->
            <!--</div>-->

            <!--<div class="row align-items-center">-->

            <!--<div class="col-lg-4">-->
            <!--<div class="box" data-aos="zoom-in" data-aos-delay="100">-->
            <!--<h3>Free</h3>-->
            <!--<h4>$0<span>per month</span></h4>-->
            <!--<ul>-->
            <!--<li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>-->
            <!--<li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>-->
            <!--<li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>-->
            <!--<li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>-->
            <!--<li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>-->
            <!--</ul>-->
            <!--<a href="#" class="get-started-btn">Get Started</a>-->
            <!--</div>-->
            <!--</div>-->

            <!--<div class="col-lg-4">-->
            <!--<div class="box featured" data-aos="zoom-in" data-aos-delay="100">-->
            <!--<h3>Business</h3>-->
            <!--<h4>$29<span>per month</span></h4>-->
            <!--<ul>-->
            <!--<li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>-->
            <!--<li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>-->
            <!--<li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>-->
            <!--<li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>-->
            <!--<li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>-->
            <!--</ul>-->
            <!--<a href="#" class="get-started-btn">Get Started</a>-->
            <!--</div>-->
            <!--</div>-->

            <!--<div class="col-lg-4">-->
            <!--<div class="box" data-aos="zoom-in" data-aos-delay="100">-->
            <!--<h3>Developer</h3>-->
            <!--<h4>$49<span>per month</span></h4>-->
            <!--<ul>-->
            <!--<li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>-->
            <!--<li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>-->
            <!--<li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>-->
            <!--<li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>-->
            <!--<li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>-->
            <!--</ul>-->
            <!--<a href="#" class="get-started-btn">Get Started</a>-->
            <!--</div>-->
            <!--</div>-->

            <!--</div>-->

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>8 Leeds Street, Te Aro, Wellington 6011, New Zealand</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@spottech.co.nz</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+64 224 997 951</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                      required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>SpotTech</h3>
                        <p class="pb-3"><em>SpotTech is one of New Zealand’s leading Development & Design experts
                                providing superior, secure software, web, mobile, and desktop applications at an
                                affordable cost.</em></p>
                        <p>
                            8 Leeds Street, Te Aro, <br>
                            Wellington 6011, New Zealand<br><br>
                            <strong>Phone:</strong> +64 224 997 951<br>
                            <strong>Email:</strong> info@spottech.co.nz<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/profile.php?id=100086098711338" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/spottech.limited/" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Software Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Mobile App Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Graphic Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Hosting</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Newsletter</h4>
                    <p>Join SpotTech team to get hot update news from us.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            Copyright &copy; <strong><span>SpotTech </span> </strong><script> document.write(new Date().getFullYear()); </script>. All Rights Reserved
        </div>

    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>