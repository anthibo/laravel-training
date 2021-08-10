<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('themes/theme_front/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/theme_front/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('themes/theme_front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/theme_front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('themes/theme_front/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/theme_front/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('themes/theme_front/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/theme_front/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!--  Main CSS File -->
    <link href="{{asset('themes/theme_front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('themes/theme_front/css/responsive.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <!-- <h1><a href="index.html">2M <br> METAL COATING & GALVANIZING </a></h1> -->

                <a href="index.html"><img src="assets/img/2m-logo-blue.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#home">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#products">Our Products</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <!-- <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel carousel-fade" data-bs-ride="carousel">

      Slide 1
      <div class="carousel-item active" style="background-image: url('https://www.xzpowerson.com/wp-content/uploads/2019/09/slider2.jpg');">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>2M</span></h2>
          <p class="animate__animated fanimate__adeInUp">Total quality management system.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      Slide 2
      <div class="carousel-item" style="background-image: url('//www.sdvroofracks.co.uk/cms/images/Galvanized-Images/_lightboxImage/Galvanized-Roof-Racks-6.JPG');">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"> Effective assurance system</h2>
          <p class="animate__animated animate__fadeInUp">Customized designs are available with CAD/PS drawings.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section> -->
    <!-- End Hero -->

    <!--/.cd-slider-->


    <main id="main">

        <!-- ======= About Section ======= -->

        <!--  -->
        @include('frontend::layouts.slider')
        @include('frontend::layouts.about')
        @include('frontend::layouts.products')
        @include('frontend::layouts.contact')


        <!-- ======= Contact Section ======= -->
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend::layouts.footer')

    <!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="{{asset('themes/theme_front/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('themes/theme_front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('themes/theme_front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('themes/theme_front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('themes/theme_front/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('themes/theme_front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>



    <!--------------- sliderhome ----------->
    <script>
        (function() {

            function init(item) {
                var items = item.querySelectorAll('li'),
                    current = 0,
                    autoUpdate = true,
                    timeTrans = 8000;

                //create nav
                var nav = document.createElement('nav');
                nav.className = 'nav_arrows';

                //create button prev
                var prevbtn = document.createElement('button');
                prevbtn.className = 'prev';
                prevbtn.setAttribute('aria-label', 'Prev');

                //create button next
                var nextbtn = document.createElement('button');
                nextbtn.className = 'next';
                nextbtn.setAttribute('aria-label', 'Next');

                //create counter
                var counter = document.createElement('div');
                counter.className = 'counter';
                //counter.innerHTML = "<span>1</span><span>"+items.length+"</span>";

                if (items.length > 1) {
                    nav.appendChild(prevbtn);
                    nav.appendChild(counter);
                    nav.appendChild(nextbtn);
                    item.appendChild(nav);
                }

                items[current].className = "current";
                if (items.length > 1) items[items.length - 1].className = "prev_slide";

                var navigate = function(dir) {
                    items[current].className = "";

                    if (dir === 'right') {
                        current = current < items.length - 1 ? current + 1 : 0;
                    } else {
                        current = current > 0 ? current - 1 : items.length - 1;
                    }

                    var nextCurrent = current < items.length - 1 ? current + 1 : 0,
                        prevCurrent = current > 0 ? current - 1 : items.length - 1;

                    items[current].className = "current";
                    items[prevCurrent].className = "prev_slide";
                    items[nextCurrent].className = "";

                    //update counter
                    counter.firstChild.textContent = current + 1;
                }

                item.addEventListener('mouseenter', function() {
                    autoUpdate = false;
                });

                item.addEventListener('mouseleave', function() {
                    autoUpdate = true;
                });

                setInterval(function() {
                    if (autoUpdate) navigate('right');
                }, timeTrans);

                prevbtn.addEventListener('click', function() {
                    navigate('left');
                });

                nextbtn.addEventListener('click', function() {
                    navigate('right');
                });

                //keyboard navigation
                document.addEventListener('keydown', function(ev) {
                    var keyCode = ev.keyCode || ev.which;
                    switch (keyCode) {
                        case 37:
                            navigate('left');
                            break;
                        case 39:
                            navigate('right');
                            break;
                    }
                });

                // swipe navigation
                // from http://stackoverflow.com/a/23230280
                item.addEventListener('touchstart', handleTouchStart, false);
                item.addEventListener('touchmove', handleTouchMove, false);
                var xDown = null;
                var yDown = null;

                function handleTouchStart(evt) {
                    xDown = evt.touches[0].clientX;
                    yDown = evt.touches[0].clientY;
                };

                function handleTouchMove(evt) {
                    if (!xDown || !yDown) {
                        return;
                    }

                    var xUp = evt.touches[0].clientX;
                    var yUp = evt.touches[0].clientY;

                    var xDiff = xDown - xUp;
                    var yDiff = yDown - yUp;

                    if (Math.abs(xDiff) > Math.abs(yDiff)) {
                        /*most significant*/
                        if (xDiff > 0) {
                            /* left swipe */
                            navigate('right');
                        } else {
                            navigate('left');
                        }
                    }
                    /* reset values */
                    xDown = null;
                    yDown = null;
                };


            }

            [].slice.call(document.querySelectorAll('.cd-slider')).forEach(function(item) {
                init(item);
            });

        })();
    </script>

    <!-- Template Main JS File -->
    <script src="{{asset('themes/theme_front/js/main.js')}}"></script>

</body>

</html>