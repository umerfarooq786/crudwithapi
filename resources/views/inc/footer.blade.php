<div class="footer-cpy text-center">
    <div class="social_banner">

    </div>
    <div class="footer-copy">
        <p>© 2018 Discover. All rights reserved | Design by
            Service Finder
        </p>
    </div>
</div>
<!--//footer-->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- gallery light box -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<!-- testimonials-->
<script src="js/owl.carousel.js"></script>
<link href="css/owl.carousel.css" rel="stylesheet">
<!-- requried-jsfiles-for owl -->
<script>
    $(document).ready(function () {
        $("#owl-demo2").owlCarousel({
            items: 1,
            lazyLoad: false,
            autoPlay: true,
            navigation: false,
            navigationText: false,
            pagination: true,
        });
    });
</script>
<!-- //requried-jsfiles-for owl -->
<!-- //testimonials -->
<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>