<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
</head>
<style>
.w3ls_w3l_banner_left {
    padding-left: 10px !important;
    padding-right: 10px !important;
}

.agile_top_brand_left_grid1 p {
    font-size: 24px !important;
    font-weight: 700;
    margin: 0.5em 0 0.5em !important;
}

.snipcart-details {
    width: 40% !important;
    margin-left: 0 !important;
    margin-right: auto !important;
}

.snipcart-details input.button {
    background: #49ab9c !important;
}

.column div.agile_top_brand_left_grid {
    margin-bottom: 30px !important;
}

.One p {
    font-size: 12px !important;

}
</style>

<body>


    <?php
	include "Header.php";
    
?>
    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
        <div class="container">
            <h3>Top Destinations</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">

                <?php
$id=$_REQUEST['id'];
include "Connection.php";	
$query="SELECT * FROM card_info where Industry='$id'";
$c=mysqli_query($con,$query);
while($r=mysqli_fetch_array($c))
{
	?>



                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">

                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <div class="img-wrapper" style="width:250px;height:150px;">
                                                <img src="../web/upload/<?php echo $r['Image'];?>" data-imagezoom="true"
                                                    style="width:100%;height:100%;object-fit:cover;"
                                                    class="img-responsive" />
                                            </div>

                                            <p><?php echo $r['Name'];?></p>
                                            <div class="One">
                                                <p><?php echo $r['description'];?></p>
                                            </div>
                                            <h4>Rs. <?php echo $r['Price'];?></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <a href="single.php?id=<?php echo $r['Card_id'];?>"><input type="submit"
                                                    name="submit" value="Read More" class="button" /></a>

                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}
?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

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