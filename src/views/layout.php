<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library Of Books</title>
    <!--

    Template 2086 Multi Color

    http://www.tooplate.com/view/2086-multi-color

    -->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="src/views/fonts/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="src/views/css/bootstrap.min.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="src/views/css/hero-slider-style.css">
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="src/views/css/magnific-popup.css">
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="src/views/css/tooplate-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Content -->
<div class="cd-hero">

    <!-- Navigation -->
    <div class="cd-slider-nav">
        <nav class="navbar">
            <div class="tm-navbar-bg">

                <a class="navbar-brand text-uppercase" href="#"><i class="fa fa-gears tm-brand-icon"></i>Library Of Books</a>

                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>
                <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active selected">
                            <a class="nav-link" href="#0" data-no="1">Multi One <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="2">Multi Two</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="3">Multi Three</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="4">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="5">Keep in touch</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </div>
    <?php if ($content): ?>
        <?=$content;?>
    <?php endif; ?>
    <footer class="tm-footer">

        <div class="tm-social-icons-container text-xs-center">
            <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
            <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
            <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
            <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
        </div>

        <p class="tm-copyright-text">Copyright &copy; 2017 Your Company

            - Design: Tooplate</p>

    </footer>

</div> <!-- .cd-hero -->


<!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
<div id="loader-wrapper">

    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!-- load JS files -->
<script src="src/views/js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
<script src="src/views/js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
<script src="src/views/js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
<script src="src/views/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

<script>

    function adjustHeightOfPage(pageNo) {

        var offset = 80;
        var pageContentHeight = 0;

        var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

        if( pageType != undefined && pageType == "gallery") {
            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
        }
        else {
            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
        }

        if($(window).width() >= 992) { offset = 120; }
        else if($(window).width() < 480) { offset = 40; }

        // Get the page height
        var totalPageHeight = $('.cd-slider-nav').height()
            + pageContentHeight + offset
            + $('.tm-footer').height();

        // Adjust layout based on page height and window height
        if(totalPageHeight > $(window).height())
        {
            $('.cd-hero-slider').addClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
        }
        else
        {
            $('.cd-hero-slider').removeClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
        }
    }

    /*
        Everything is loaded including images.
    */
    $(window).load(function(){

        adjustHeightOfPage(1); // Adjust page height

        /* Gallery One pop up
        -----------------------------------------*/
        $('.gallery-one').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery:{enabled:true}
        });

        /* Gallery Two pop up
        -----------------------------------------*/
        $('.gallery-two').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{enabled:true}
        });

        /* Gallery Three pop up
        -----------------------------------------*/
        $('.gallery-three').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{enabled:true}
        });

        /* Collapse menu after click
        -----------------------------------------*/
        $('#tmNavbar a').click(function(){
            $('#tmNavbar').collapse('hide');

            adjustHeightOfPage($(this).data("no")); // Adjust page height
        });

        /* Browser resized
        -----------------------------------------*/
        $( window ).resize(function() {
            var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");

            // wait 3 seconds
            setTimeout(function() {
                adjustHeightOfPage( currentPageNo );
            }, 1000);

        });

        // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
        $('body').addClass('loaded');

    });

</script>

</body>
</html>