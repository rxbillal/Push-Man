<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials._header')

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        @include('partials._loader')
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('partials._sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        @yield('content')
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            jQuery(function($) {
                $('#alert').fadeIn(1500);
                $('#alert').fadeOut (1500);
                $('#alert').fadeIn (1500);
                $('#alert').fadeIn(1500);
                $('#alert').fadeOut (1500);
                $('#alert').fadeIn(500);
                $('#alert').delay (2500);
                $('#alert').fadeOut (2000);
            })
        </script>
        <script>
            function startTime() {
              const today = new Date();
              let h = today.getHours();
              let m = today.getMinutes();
              let s = today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              document.getElementById('txt').innerHTML = "Time : " +h + ":" + m + ":" + s;
              setTimeout(startTime, 1000);
            }

            function checkTime(i) {
              if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
              return i;
            }
        </script>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    {pageLanguage: 'en'},
                    'google_translate_element'
                );
            }
        </script>

        <script type="text/javascript"
                src= "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>
        <style>
            body{
                top: 0px !important;
                position: static !important;
            }
            .goog-te-banner-frame{
                display:none !important
            }
            .goog-te-combo{
                width: 100%;
                height: 40px;
                border-radius: 5px;
            }
            .goog-te-gadget {
                color: #040f1c00;
            }
            .goog-logo-link, .goog-logo-link:link, .goog-logo-link:visited, .goog-logo-link:hover, .goog-logo-link:active {
             font-size: 12px;
             font-weight: bold;
             color: #040f1c00;
             text-decoration: none;
             visibility: hidden;
            }
        </style>
</body>

</html>
