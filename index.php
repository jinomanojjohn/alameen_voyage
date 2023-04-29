<?php
include 'travelincludes/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Al Ameen Voyage is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="MicroRed">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Al Ameen Voyage</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.ico">
</head>

<body data-spy="scroll" data-target=".fixed-top">




    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Al Ameen Voyage</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/LOGO.png" alt="alternative" height="70px"
                width="70px"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#projects">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://m.facebook.com/Al-Ameen-voyage-529559893901603/" target="_blank">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.instagram.com/al_voyage/" target="_blank">
                        <span class="hexagon"></span>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>AL AMEEN VOYAGE <span class="txt-rotate" data-period="2500"
                                    data-rotate='[ "TOURS", "TRAVELS"]'></span>
                                <!-- <span id="js-rotating">TOURS, TRAVELS</span> -->
                            </h1>
                            <p class="p-heading p-large ">Al Ameen Voyage is a travel consultancy company from the
                                Department of BTTM at Al-Ameen College, Edathala,specializing in tourism & travel
                                services</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">ABOUT</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>Al Ameen Voyage</h2>
                        <p>Al-Ameen Voyage is the travel consultancy of the Department of Tourism. The consulting was
                            carried out by the students of the department with the support of Alumni. It started in 2016
                            with passport services and one-day packages. </p>
                        <p class="testimonial-text">The Department of Tourism started in 2009. In 2016, the course BTS
                            (Bachelor of Tourism Studies) became known as BTTM (Bachelor of Travel and Tourism
                            Management). The course includes every aspect of the tourism industry.</p>
                        <div class="testimonial-author">Department of BTTM</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container" data-aos="flip-left" data-aos-delay="500" data-aos-duration="1000">
                        <img class="img-fluid" src="images/intro-office.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container" data-aos="flip-right" data-aos-delay="500" data-aos-duration="1000">
                        <img class="img-fluid" src="images/manali.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <!-- <div class="section-title">ABOUT</div> -->
                        <h2>Welcome to Al Ameen Voyage, a travel and tourism website run by the students and teachers of
                            the Department of BTTM at Al Ameen College.</h2>
                        <p>The main aim was to put on the industry experience to students. the successful alumni are the
                            backbone of the venture. with the support in 2023 al- ameen voyage successfully handle all
                            the third-year college trip.</p>
                        <p>Our team consists of experienced faculty members and enthusiastic students who are
                            well-versed in the latest industry trends and practices.</p>
                        <p>We also strive to support local communities and promote sustainable tourism practices. By
                            choosing Al Ameen Voyage, you can rest assured that your travel experiences will have a
                            positive impact on the environment and the communities you visit.</p>
                        <!-- Counter -->
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="16">1</div>
                                <div class="counter-info">Trips<br>Completed</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="12">1</div>
                                <div class="counter-info">New<br>Passports</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="3">1</div>
                                <div class="counter-info">Passports<br>Renewed</div>
                            </div>
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-book-open fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Visa and Passport Assistance</h4>
                            <p>Streamline your travel preparations with our expert visa and passport assistance
                                services.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Wide Range of Destinations</h4>
                            <p>We offer a wide range of destinations to suit the
                                interests and preferences of different traveler</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-tags fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Competitive Pricing</h4>
                            <p>Travel can be expensive, so we offer competitive
                                pricing on our services to ensure that travelers get the best value for their money.
                            </p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">SERVICES</div>
                    <h2>Services Provided</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card" data-aos="flip-right" data-aos-duration="500">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-1.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Tour packages</h3>
                            <p>Tour Pakages according to your budget and needs</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Domestic Packages</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">International Packages</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Customized package</div>
                                </li>
                            </ul>
                            <!-- <p class="price">Starting at <span>₹1199</span></p> -->
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card" data-aos="flip-right" data-aos-duration="1000">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Passport & VISA Assistance</h3>
                            <p>Assistance for passport and visa application</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">New Passport Application</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Visa application support</div>
                                </li>
                            </ul>
                            <!-- <p class="price">Starting at <span>₹1199</span></p> -->
                        </div>
                        <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card" data-aos="flip-left" data-aos-duration="1500">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Ticketing</h3>
                            <p>Assistance in booking tickets of various modes of transport</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Rail Tickets</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Airline Tickets</div>
                                </li>
                            </ul>
                            <!-- <p class="price">Starting at <span>₹1199</span></p> -->
                        </div>
                        <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    <!-- Projects -->

    <div id="projects" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">GALLERY</div>
                    <h2>Tours that We're Proud Of</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid">
                        <?php
                        $query = "SELECT * FROM m_gallery";

                        $result = mysqli_query($conn, $query);
                        $ani = 100;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="element-item development" data-aos="fade-up" data-aos-delay="<?php echo $ani ?>">
                                <a class="popup-with-move-anim" href="#project-1"
                                    onclick="getData(<?php echo $row['mid'] ?>,'<?php echo $row['title'] ?>','<?php echo $row['sub_title'] ?>','<?php echo $row['description'] ?>')">
                                    <div class="element-item-overlay"><span>
                                            <?php echo $row["sub_title"] ?>
                                        </span></div><img src="gallery/<?php echo $row["image"]; ?>"
                                        style="object-fit:cover;" height="200px" width="100%" alt="alternative">
                                </a>
                            </div>
                            <?php
                            $ani = $ani + 50;
                        } ?>

                    </div> <!-- end of grid -->
                    <!-- end of filter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->

    <!-- Lightbox -->

    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2500">
                    <div class="carousel-inner" id="carouselImages">
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" Al Ameen Voyage-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" Al Ameen Voyage-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3 id="mTitle">Van Moose</h3>
                <hr class="line-heading">
                <h6 id="mSubTitle">Strategy Development</h6>
                <p id="mDesc">Need a solid foundation for your business growth plans? Al Ameen Voyage will help you
                    manage sales
                    and meet your
                    current needs</p>
                <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->



    <!-- About -->



    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <?php
                        $query = "SELECT * FROM data";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by the Department of BTTM or just use the contact form for any
                            questions and inquiries</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>Al-Ameen College,
                                Edathala, Aluva, Ernakulam,
                                Kerala – 683 564.</li>
                            <li><i class="fas fa-phone"></i><a href="tel:+91<?php echo $row['mobile'] ?>">+91<?php echo $row['mobile'] ?></a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></li>
                        </ul>
                        <h3>Follow Al Ameen Voyage On Social Media</h3>

                        <span class="fa-stack">
                            <a href="https://m.facebook.com/Al-Ameen-voyage-529559893901603/" target="_blank">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>

                        <span class="fa-stack">
                            <a href="https://www.instagram.com/al_voyage/" target="_blank">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cmobile" required>
                            <label class="label-control" for="phone">Mobile Number</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About Al Ameen Voyage</h4>
                        <p class="white">We're passionate about delivering the best travel services for
                            our customers.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="https://www.alameencollege.org"
                                    target="_blank">alameencollege.org</a>
                            </li>
                            <li>
                                <a class="white" href="https://www.alameencollege.org/iic/" target="_blank">IIC
                                    Al-Ameen</a>
                            </li>
                            <li>
                                <a class="white" href="https://www.alameencollege.org/iedc/" target="_blank">IEDC
                                    Al-Ameen</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2023 <a href="https://www.hexameta.in/" target="_blank">by
                            HexaMeta Technologies</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script>
        function getData(id, title, subtitle, desc) {
            document.getElementById('mTitle').innerHTML = title;
            document.getElementById('mSubTitle').innerHTML = subtitle;
            document.getElementById('mDesc').innerHTML = desc;
            const images = document.getElementById('carouselImages');

            $.ajax({
                url: "travelincludes/getcgallery.php?id=" + id,
                type: "GET",
                success: function (data) {
                    var data = JSON.parse(data);
                    var html = '';
                    data.forEach((element, index) => {
                        if (index == 0) {
                            html = html + "<div class='carousel-item active'><img class='img-fluid' src='subgallery/" + element.image + "' alt='alternative'></div>"
                        }
                        else {
                            html = html + "<div class='carousel-item'><img class='img-fluid' src='subgallery/" + element.image + "' alt='alternative'></div>"
                        }
                    });
                    images.innerHTML = html;
                }
            });
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>