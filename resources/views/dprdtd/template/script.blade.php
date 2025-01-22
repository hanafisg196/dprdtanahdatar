 <!-- Back to top Link -->
 <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>
 <!-- Load JS plugins -->
 <script type="text/javascript" src="/assets/js/jquery-1.12.0.min.js"></script>
 <script type="text/javascript" src="/assets/js/assets.js"></script>
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script type="text/javascript">
     $(window).load(function() {
         var swiper = new Swiper('.mySwiper', {
             slidesPerView: 6,
             loop: true,
             // centeredSlides: true,
             navigation: {
                 nextEl: '.swiper-button-next',
                 prevEl: '.swiper-button-prev',
             },
             autoplay: {
                 delay: 2500,
                 disableOnInteraction: false,
             },
             pagination: {
                 clickable: true,
                 el: '.swiper-pagination',
             },
         });
     });
 </script>
 <!-- OWL SLIDER SCRIPTS  -->
 <link rel="stylesheet" href="assets/css/sliders/owl.carousel.css" property='stylesheet' />
 <script type="text/javascript" src="assets/js/sliders/owl.carousel.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function() {
         $("#owl-slider").owlCarousel({
             navigation: true,
             items: 1
         });
     });
 </script>
 <!-- general script file -->
 <script type="text/javascript" src="/assets/js/script.js"></script>
