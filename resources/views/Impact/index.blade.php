<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CRM - Landing page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="/impact/assets/img/favicon.png" rel="icon">
  <link href="/impact/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/impact/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/impact/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/impact/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/impact/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/impact/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/impact/assets/css/main.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Impact
  * Updated: Jan 30 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('impact.components.topBarContact')

    @include('impact.components.navbar')

    @include('impact.components.hero')

  <main id="main">

    @include('impact.components.aboutus')

    @include('impact.components.partners')

    @include('impact.components.clients')

    @include('impact.components.services')

    @include('impact.components.testimonials')

    @include('impact.components.team')

    @include('impact.components.pricing')

    @include('impact.components.faq')

    @include('impact.components.contact')


  </main><!-- End #main -->

  @include('impact.components.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/impact/assets/vendor/aos/aos.js"></script>
  <script src="/impact/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/impact/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/impact/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/impact/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/impact/assets/js/main.js"></script>

</body>

</html>
