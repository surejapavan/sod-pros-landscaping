<?php include("html-doctype.php") ;?>

<link href="css/flexslider.css" rel="stylesheet" type="text/css">

<?php include("header.php") ;?>

</head>

<body class="ie8">
    <a id="top"></a>

    <?php include("head.php") ;?>

    <!-- <section class="IdxHeaderBg ">
        <div class="flexslider" id="HomeSlider">
            <ul class="slides NoBullet">
                <li class="BG BeforeBlack"
                    style="background-image:url(images/bg/idxslider-img1.jpg); min-height:657px;">
                    <div class="ResImg">
                        <img src="images/bg/idxslider-img1.jpg" alt=" ">
                    </div>

                    <header class="Header">
                        <div class="MainWrapper">
                            <div class="FillRedBtn">
                                <a href="https://player.vimeo.com/video/370990748?autoplay=1&title=0&byline=0&portrait=0"
                                   class="popup-vimeo">Meet Your Pharmacist </a>
                            </div>
                        </div>
                    </header>
                </li>
                <li class="BG BeforeBlack"
                    style="background-image:url(images/bg/idxslider-img1.jpg); min-height:657px;">
                    <div class="ResImg">
                        <img src="images/bg/idxslider-img1.jpg" alt=" ">
                    </div>

                    <header class="Header">
                        <div class="MainWrapper">
                            <div class="FillRedBtn">
                                <a href="https://player.vimeo.com/video/370990748?autoplay=1&title=0&byline=0&portrait=0"
                                   class="popup-vimeo">Meet Your Pharmacist </a>
                            </div>
                        </div>
                    </header>
                </li>
                <li class="BG BeforeBlack"
                    style="background-image:url(images/bg/idxslider-img1.jpg); min-height:657px;">
                    <div class="ResImg">
                        <img src="images/bg/idxslider-img1.jpg" alt=" ">
                    </div>

                    <header class="Header">
                        <div class="MainWrapper">
                            <div class="FillRedBtn">
                                <a href="https://player.vimeo.com/video/370990748?autoplay=1&title=0&byline=0&portrait=0"
                                   class="popup-vimeo">Meet Your Pharmacist </a>
                            </div>
                        </div>
                    </header>
                </li>
            </ul>
        </div>
    </section> SliderSection -->


    <!-- <section class="IdxVideoWrap">
	<div class="VideoMainWrap WindowHeight" style="width:100%; overflow:hidden;">
		<div class="VideoWrap" style="width:100%;">
			<video id="my-video" class="video-js " preload="auto" width="100%" height="100%" autoplay playsinline loop muted>
				<source src="video/video.mp4" type="video/mp4">
			</video>
		</div>
	</div>

	<header class="Header">
		<div class="MainWrapper">
			<div class="FillRedBtn">
				<a href="https://player.vimeo.com/video/370990748?autoplay=1&title=0&byline=0&portrait=0" class="popup-vimeo">Meet Your Pharmacist </a>
			</div>
		</div>
	</header>
</section>-->

    <?php include("footer.php") ; ?>

    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".WindowHeight").height(jQuery(window).height());
        jQuery(window).resize(function() {
            jQuery(".WindowHeight").height(jQuery(window).height());
        });
    });
    </script>

    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $('#HomeSlider').flexslider({
                animation: "slide",
                direction: "horizontal",
                animationSpeed: 2000,
                slideshowSpeed: 5000,
                smoothHeight: true,
                controlNav: true,
                directionNav: false
            });
        } else {
            $('#HomeSlider').flexslider({
                animation: "fade",
                direction: "horizontal",
                animationSpeed: 2000,
                slideshowSpeed: 5000,
                smoothHeight: true,
                controlNav: true,
                directionNav: false
            });
        }

    });
    </script>


    <script type="text/javascript">
    $(window).load(function() {

        //$('.DownloadColHeight').balance() ;

    }); // $(document).ready 
    </script>

</body>

</html>