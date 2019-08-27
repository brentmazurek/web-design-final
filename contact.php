<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>As Seen On TV | Contact Us</title>
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
    	<h1 class="intro__header">Contact Us</h1>
    </div>
<br />
    
    <div class="callout-container" id="callout-container">
    
    	<!--  CALLOUT 1  -->
        <div class="callout callout1">
          <form class="form" method="post">
            	<p class="form__intro">Please fill out the following form to order a product.</p>
                <br />
                <p>First Name (required)</p>
                <input type="text" required="required" placeholder="First Name" /><br />
                <p>Last Name (required)</p>
                <input type="text" required="required" placeholder="Last Name" /><br />
              	<p>Phone Number (required)</p>
                 <input type="tel" required="required" /><br /><br />
              <p>Product:
                    <select name="product" id="product">
                    	<option value="Miracle Blade">Miracle Blade</option>
                        <option value="Aqua Globe">Aqua Globe</option>
                        <option value="Chop Wizard">Chop wizard</option>
                        <option value="Rotorazer">Rotorazer</option>
                    </select>
                    </p><br />
                  <p>Quantity:</p>
                  <input type="number" placeholder="1" /><br />
                  <br />
<input type="submit" class="submit" />
                  
            </form>
        </div>
        
        <!--  CALLOUT 2  -->
        <div class="callout callout2">
            <div class="callout__left callout2__left">
                <img src="images/map.png" alt="Our Location" />
            </div>
            <div class="callout__right callout1__right">
                <h3>Located in Mayfair Mall</h3>
                <p><a href="https://www.google.com/maps/place/Mayfair/@43.0626798,-88.0511704,15.33z/data=!4m5!3m4!1s0x0:0x4d6391650fdc280d!8m2!3d43.0638122!4d-88.0448023" target="_blank" alt="location">2500 N Mayfair Rd, Wauwatosa, WI 53226</a></p>
                <p>Call us at <a href="tel:2625555555">262-555-5555</a></p>
            </div>
            <div class="callout__link"><a href="https://www.google.com/maps/place/Mayfair/@43.0626798,-88.0511704,15.33z/data=!4m5!3m4!1s0x0:0x4d6391650fdc280d!8m2!3d43.0638122!4d-88.0448023" alt="View on google maps" target="_blank">View on Google Maps</a></div>
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