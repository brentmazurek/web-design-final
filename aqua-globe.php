<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>As Seen On TV | Aqua Globe</title>
<link rel="stylesheet" type="text/css" href="styles/stylesheets/screen.css" />
<link rel="stylesheet" type="text/css" href="styles/stylesheets/print.css" />
<script src="https://code.jquery.com/jquery-2.2.3.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="assets/rs-slides/responsiveslides.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Questrial|Arya:400,700" rel="stylesheet" type="text/css">
<?php
include("includes/favicon_info.inc.php");
?>
</head>

<body>
<div class="wrapper" id="wrapper">
<!--  HEADER  -->
<?php
require_once("includes/navigation.inc.php");
?>
<div class="hero-image">

</div>

<!--  MAIN CONTENT  -->
<div class="main">

	<div class="intro-section">
    	<h1 class="intro__header">Aqua Globe Watering Bulbs</h1>
        <h2>$8.95 (Was $14.99)</h2>
        <p>Never leave plants un-watered again with Aqua Globes: the hand-blown glass plant watering bulb! Aqua Globes as seen on TV waters plants efficiently for up to 2 weeks. Easy to use - just fill and insert into soil, and it waters plants as needed. Provides the exact amount of water needed every time! Comes in a set of two.</p>
    </div>
	<div class="view-more-arrow"><a class="view-more-button" href="javascript:void(0);" alt="View Products"><img src="images/view-more-info-arrow.png" alt="view more information"  /></a></div>
    
    <div class="callout-container" id="callout-container">
    
        <!--  CALLOUT 1  -->
        <div class="callout callout1">
            <div class="callout__left callout1__left">
                <img src="images/globe/globes.jpg" alt="Aqua Globe" />
            </div>
            <div class="callout__right callout1__right">
                <h3>Technical Information</h3>
                <ul>
                	<li>Comes in blue, red, purple, and clear</li>
                    <li>4.8 x 6.3 x 13.3 inches</li>
                    <li>Made of blown glass</li>
                    <li>0.8 pounds</li>
                </ul>
            </div>
            <div class="callout__link"><a href="contact.php" alt="Purchase">Contact Us to Purchase</a></div>
        </div>
    
    <!--  END CALLOUT CONTAINER  -->
    </div>
    
<!--  END MAIN CONTAINER  -->
</div>

<?php
require_once("includes/footer.inc.php");
?>
<!--  END WRAPPER  -->
</div>
<script>
$('.mobile-nav__slide-down').click(function(){
	$('.mobile-nav__list').slideDown([250]);
});
$('.mobile-nav__slide-up').click(function(){
	$('.mobile-nav__list').slideUp([250]);
});
</script>
<script>
  $(function() {
    $(".rslides").responsiveSlides({
		auto: true,
		speed:500,
		pager: true,
		pause: true
	});
  });
</script>
<script>
//smooth scrolling
$(".view-more-button").click(function() {
    $('html, body').animate({
        scrollTop: $("#callout-container").offset().top
    }, 1000);
});
</script>
</body>
</html>