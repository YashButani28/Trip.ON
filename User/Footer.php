!<div class="clearfix"></div>
</div>

</style>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-4 w3_footer_grid">
            <h3>information</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="index.php">Personal Information</a></li>
                <li><a href="about.php">Contact Us</a></li>
                <li><a href="about.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>

        <div class="col-md-4 w3_footer_grid">
            <h3>Book by Trip</h3>
            <?php
				include "connection.php";
				$query="SELECT * FROM industry_info";
				$c=mysqli_query($con,$query);
				while($r=mysqli_fetch_array($c))
				{
				  ?>

            <ul class="w3_footer_grid_list">
                <li><a class="color4"
                        href="ViewIndustry.php?id=<?php echo $r['Industry_id'];?>"><?php echo $r['Industry_name'];?></a>
                </li>
            </ul>

            <?php
				   }
				?>

        </div>


        <div class="col-md-4 w3_footer_grid">
            <h3>TRIP ON Features</h3>
            <ul class="w3_footer_grid_list">

                <li><a href="about.php">Top Destinations</a></li>
                <li><a href="about.php">24/7 Guide Service</a></li>
                <li><a href="about.php">Reasonable Price</a></li>
                <li><a href="about.php">Easy to Use</a></li>

            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="phone_email">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <a href="tel:+916355562186" target="_blank"> +91 63555 62186</a>

            <i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto: yashbutani281@gmail.com"
                target="_blank">tripon@gmail.com</a>
        </div>

        <div class="wthree_footer_copy">
            <p>&copy; 2023 TripON All Rights Reserved !<br>
                Designed by Yash Butani, Panchal Visaj, Bhatiya Bhumil, Suthar Shivam <br>
                Developed at

                <a target="_blank" href="https://gecpatan.ac.in/">GEC - PATAN </a>
            </p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
$(document).ready(function() {
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
<!-- //here ends scrolling icon -->
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
paypal.minicart.render();

paypal.minicart.cart.on('checkout', function(evt) {
    var items = this.items(),
        len = items.length,
        total = 0,
        i;

    // Count the number of each item in the cart
    for (i = 0; i < len; i++) {
        total += items[i].get('quantity');
    }

    if (total < 3) {
        alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
        evt.preventDefault();
    }
});
</script>
</body>
<style>
.w3_footer_grid {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.phone_email {
    color: whitesmoke;
}

</html>