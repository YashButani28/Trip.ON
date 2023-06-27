<!DOCTYPE html>
<html>

<head>
    <title>TripON-Tourister</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="E-Card Creation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //for-mobile-apps -->


    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->


    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->


    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->


    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'
        rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>


    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <div class="agileits_header">
        <!-- <div class="w3l_offers">
         
            <img src="images/trip.webp" width="100px" height="50px" />
        </div> -->
        <div class="w3l_search"></div>


        <!-- <div class="product_list_header">
            <a href="checkout.php">
                <input type="submit" name="submit" value="View your cart" class="button" /></a>

        </div> -->



        <!-- <div class="w3l_header_right">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"
                            aria-hidden="true"></i><span class="caret"></span></a>
                    <div class="mega-dropdown-menu">
                        <div class="w3ls_vegetables">
                            <ul class="dropdown-menu drp-mnu">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="Register.php">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div> -->

        <div class="clearfix"> </div>
    </div>


    <!-- script-for sticky-nav -->
    <script>
    $(document).ready(function() {
        var navoffeset = $(".agileits_header").offset().top;
        $(window).scroll(function() {
            var scrollpos = $(window).scrollTop();
            if (scrollpos >= navoffeset) {
                $(".agileits_header").addClass("fixed");
            } else {
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
    </script>
    <!-- //script-for sticky-nav -->


    <div class="logo_products">
        <div class="container navbar-align">
            <div class="w3ls_logo_products_left" style="width:180px;height:50px;">
                <a href="index.php"><img src="images/trip.webp" style="width:100%;height:100%;object-fit:cover;"> </a>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li><a href="index.php">Packages</a><i>/</i></li>
                    <li><a href="about.php">About Us</a><i>/</i></li>
                    <li><a href="index.php">Book Now</a><i>/</i></li>
                    <li><a href="about.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel:+916355562186" target="_blank"> +91 63555 62186</a>
                    </li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto: yashbutani281@gmail.com"
                            target="_blank">tripon@gmail.com</a>
                    </li>
                </ul>
            </div>
            <div class=" clearfix">
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container product-container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
                <?php
				include "connection.php";
				$query="SELECT * FROM industry_info";
				$c=mysqli_query($con,$query);
				while($r=mysqli_fetch_array($c))
				{
				  ?>


                <li><a class="color4"
                        href="ViewIndustry.php?id=<?php echo $r['Industry_id'];?>"><?php echo $r['Industry_name'];?></a><span>|</span>
                </li>
                <?php
				   }
				?>



            </ul>

            <div class="w3l_header_right">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"
                                aria-hidden="true"></i>
                            <h3 class="caret"></h3>
                        </a>
                        <div class="mega-dropdown-menu">
                            <div class="w3ls_vegetables">
                                <ul class="dropdown-menu drp-mnu">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="Register.php">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <!-- //products-breadcrumb -->
    <!-- banner -->
    <!-- <div class="banner"> -->
    <!-- <div class="w3l_banner_nav_left">
            <nav class="navbar nav_bottom">
                 Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> -->

    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <?php
				include "connection.php";
				$query="SELECT * FROM industry_info";
				$c=mysqli_query($con,$query);
				while($r=mysqli_fetch_array($c))
				{
				  ?>
        <!-- <ul class="nav navbar-nav nav_1">
						<li><a class="color4" href="ViewIndustry.php?id=<?php echo $r['Industry_id'];?>"
						><?php// echo $r['Industry_name'];?></a></li></ul> -->
        <?php
				}
				?>
    </div>
    <!-- /.navbar-collapse -->
    </nav>
    </div>
    </div>
    <div class="w3l_banner_nav_right">