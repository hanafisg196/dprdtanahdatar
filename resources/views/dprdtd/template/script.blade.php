
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
 <script src="/assets/owlcarousel/owl.carousel.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function() {
         var owl = $('.owl-carousel');
         owl.owlCarousel({
             items: 1,
             loop: true,
             margin: 10,
             autoplay: true,
             autoplayTimeout: 5000,
             autoplayHoverPause: true,
             smartSpeed: 800,
             animateOut: 'fadeOut',
             animateIn: 'fadeIn'
         });
         $('.play').on('click', function() {
             owl.trigger('play.owl.autoplay')
         })
         $('.stop').on('click', function() {
             owl.trigger('stop.owl.autoplay')
         })
     });
 </script>
 <!-- general script file -->
 <script type="text/javascript" src="/assets/js/script.js"></script>

