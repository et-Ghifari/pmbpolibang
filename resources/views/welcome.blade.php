<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('template.head')    
    </head>
    <body>     
        <!-- ======= Header ======= -->
        @include('template.header')
        <!-- End Header -->

        <!-- ======= Content ======= -->
        @include('template.content')
        <!-- End Content -->        

        <!-- ======= Footer ======= -->
        <footer id="footer">   

            <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>POLITEKNIK BALEKAMBANG JEPARA</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="{{ url('/') }}">PMB | POLIBANG</a>
            </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a class="back-to-top"><i class="icofont-simple-up"></i></a>
        
        @include('template.script')
    </body>
</html>
