	<!DOCTYPE html>
	<html lang="en">

	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Contact-Us</title>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<style>
.icons-container {
    margin-top: 2rem;
    display: flex;
    justify-content: center;
    gap: 1.5rem;
}

.icons {
    background: #eee;
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
}

.icons i {
    font-size: 48px;
    color: #247ba0;
    padding-bottom: 24px;
}

.icons span {
    text-align: center;
    font-size: 16px;
    color: #777;
    display: block;
}

.phone_email {
    margin-bottom: 15px;
}
	</style>

	<body>


	    <?php
	include "Header.php";
?>
	    <!-- about -->
	    <div class="privacy about">
	        <h3 style="margin:0px 0 40px 0px;">About Us</h3>
	        <ul class="phone_email">
	            <i class="fa fa-phone" aria-hidden="true"></i>
	            <a href="tel:+916355562186" target="_blank"> +91 63555 62186</a>

	            <i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto: yashbutani281@gmail.com"
	                target="_blank">tripon@gmail.com</a>

	        </ul>
	        <div class="img-wrapper" style="width:75%;height:400px;margin:auto!important">
	            <img src="./images/about-img.jpg" style="width:100%;height:100%;object-fit:cover;" alt="">
	        </div>


	        <h3 style="margin:40px 0 0px 0px;">why choose us?</h3>

	        <p class="animi" style="text-align:center;padding-top:24px;">Amazing Tours a Best tour Operator and Travel
	            agent in India. We
	            are
	            Tour Package, Hotel
	            booking.
	            India Tours & Travel agent. Find international and domestic tour packages from india at low
	            prices including best ... Travel Package | Honeymoon Package | Tour Package</p>

	        <p class="animi" style="text-align:center;">Fantastic getaway. Very good communication. Friendly and Easy to
	            deal
	            with.(Shame the
	            transfer back to the airport on the final day wasn't included)</p>

	    </div>
	    <!-- //about -->
	    </div>

	    </div>
	    <!-- //banner -->
	    <!-- testimonials -->
	    <div class="testimonials">
	        <div class="container">
	            <h3>TRIP-ON FEATURES</h3>

	            <div class="w3_testimonials_grids">
	                <div class="icons-container">
	                    <div class="icons">
	                        <i class="fas fa-map"></i>
	                        <span>top destinations</span>
	                    </div>
	                    <div class="icons">
	                        <i class="fas fa-headset"></i>
	                        <span>24/7 guide service</span>
	                    </div>
	                    <div class="icons">
	                        <i class="fas fa-hand-holding-usd"></i>
	                        <span>reasonable price</span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <?php
	include "Footer.php";
?>
	</body>

	</html>