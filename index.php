<?php
	include "Header.php";
	include "Connection.php";
	$q="select * from cat_info";
	$c=mysqli_query($con,$q);
	$cc=mysqli_num_rows($c);
?>

<!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
        <div class="col_3" style="display:flex;justify-content:center;">


            <?php
			include "Connection.php";
			$q="select * from card_info";
			$c=mysqli_query($con,$q);
			$crc=mysqli_num_rows($c);
	?>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                        <h5><strong><?php echo $crc;?></strong></h5>
                        <span>Packages</span>
                    </div>
                </div>
            </div>

            <?php
			include "Connection.php";
			$q="select * from user_info";
			$c=mysqli_query($con,$q);
			$uc=mysqli_num_rows($c);
	?>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                        <h5><strong><?php echo $uc;?></strong></h5>
                        <span>Visitors</span>
                    </div>
                </div>
            </div>

            <?php
			include "Connection.php";
			$q="select * from trip_book";
			$c=mysqli_query($con,$q);
			$oc=mysqli_num_rows($c);
	?>
            <!-- <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                        <h5><strong>/*<?php echo $oc;?></strong></h5>
                        <span>Orders</span>
                    </div>
                </div>
            </div>-->

            <?php
			include "Connection.php";
			$q="select * from trip_book";
			$c=mysqli_query($con,$q);
			$fc=mysqli_num_rows($c);
	?>
            <div class="col-md-3 widget">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                        <h5><strong><?php echo $fc;?></strong></h5>
                        <span>Booked Trips</span>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <br><br><br><br>

        <!-- for amcharts js -->
        <script src="js/amcharts.js"></script>
        <script src="js/serial.js"></script>
        <script src="js/export.min.js"></script>
        <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
        <script src="js/light.js"></script>
        <!-- for amcharts js -->

        <script src="js/index1.js"></script>

        <div class="charts">
            <div class="mid-content-top charts-grids">
                <div class="middle-content">

                    <!-- start content_slider -->
                    <div id="owl-demo" class="owl-carousel text-center">
                        <div class="item">
                            <img class="lazyOwl img-responsive" data-src="images/img-1.jpg" alt="name">
                        </div>
                        <div class="item">
                            <img class="lazyOwl img-responsive" data-src="images/img-3.jpg" alt="name">
                        </div>
                        <div class="item">
                            <img class="lazyOwl img-responsive" data-src="images/img-4.jpg" alt="name">
                        </div>
                        <div class="item">
                            <img class="lazyOwl img-responsive" data-src="images/img-5.jpg" alt="name">
                        </div>
                        <div class="item">
                            <img class="lazyOwl img-responsive" data-src="images/img-6.jpg" alt="name">
                        </div>
                        <div class="item">
                            <img class="lazyOwl img-responsive" data-src="images/img-9.jpg" alt="name">
                        </div>
                        <div class="item">
                            <img class="lazyOwl img-responsive" data-src="images/img-12.jpg" alt="name">
                        </div>

                    </div>
                </div>
                <!--//sreen-gallery-cursual---->
            </div>
        </div>



    </div>
</div>


<?php
	
		include "Footer.php";
	?>