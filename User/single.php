<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book_Package</title>
</head>

<body>
    <style>
    .w3agile p {
        font-size: 20px !important;
        color: black;
        margin-bottom: 2% !important;
    }

    .w3agile h1 {
        margin-bottom: 2% !important;

    }

    .w3agile h3 {
        margin-bottom: 3% !important;
        font-size: 22px !important;
    }

    .format {
        margin-bottom: 20px;
        text-align: center;
    }
    </style>





    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Now</title>
    </head>
    <style>
    .Two {
        margin-top: 3% !important;
    }
    </style>

    <body>

        <?php
	include "Header.php";


?>



        <div class="agileinfo_single">
            <?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","project_db");
$query="SELECT * FROM card_info where Card_id='$id'";
$c=mysqli_query($con,$query);
while($r=mysqli_fetch_array($c))
{
	?>

            <?php

	if(isset($_POST['submit']))
	{
		$id=$_REQUEST['id'];
		$Username=$_POST['name'];
		$Contact=$_POST['contact'];
		$Email=$_POST['email'];
		$Address=$_POST['Address'];
		$Destination=$_POST['Destination'];
		$people=$_POST['people'];
		$arrival_date=$_POST['date'];
		$leaving_date=$_POST['date1'];
        
		$con= mysqli_connect("localhost","root","","project_db");
		$q= "INSERT INTO trip_book values('','$Username','$Contact','$Email','$Address','$Destination','$people','$arrival_date','$leaving_date')";
		
		$c=mysqli_query($con,$q);
		if ($c)
	 	{ 
	 		?>
            <script>
            alert("Your Trip Booked Successfully");
            </script>
            <script>
            window.location = 'index.php';
            </script>;
            <?php 
	 	} 
 	 	
	  	else
	    {	    	
			
				echo "<script>alert('Some Error Occured, Please try again...')</script>"; 
 		} 
	}
		
	
	
?>
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="../web/upload/<?php echo $r['Image'];?>" data-imagezoom="true" height="300"
                    width="500" class="img-responsive" />
            </div>
            <div class="col-md-8 agileinfo_single_right">

                <div class="w3agile">
                    <h1><?php echo $r['Name'];?></h1>

                    Description:<p><?php echo $r['description'];?></p>
                    <h3>RS. <?php echo $r['Price'];?></h3>
                </div>
                <div class="format">
                    <h2>Book Your Trip</h2>
                </div>

                <div class="snipcart-item block">
                    <div class="form-body">
                        <form action="#" method="POST" enctype="multipart/form-data">


                            <div class="form-group"> <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Name">
                            </div>

                            <div class="form-group"> <label for="exampleInputEmail1">E-Mail</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Email">
                            </div>

                            <div class="form-group"> <label for="exampleInputEmail1">Contact No.</label>
                                <input type="text" name="contact" class="form-control" id="exampleInputEmail1"
                                    placeholder="Contact Number">
                            </div>


                            <div class="form-group"> <label for="exampleInputEmail1">Address</label>
                                <input type="text" name="Address" class="form-control" id="exampleInputEmail1"
                                    placeholder="Address">
                            </div>

                            <div class="form-group"> <label for="exampleInputEmail1">From </label>
                                <input type="text" name="Destination" class="form-control" id="exampleInputEmail1"
                                    placeholder="Where To">
                            </div>

                            <div class="form-group"> <label for="exampleInputEmail1">Number of Guests</label>
                                <input type="number" name="people" class="form-control" id="exampleInputEmail1"
                                    placeholder="Number of Guests">
                            </div>

                            <div class="form-group"> <label for="exampleInputEmail1">Arrivals Date for Tour</label>
                                <input type="date" name="date" class="form-control" id="exampleInputEmail1"
                                    placeholder="">
                            </div>

                            <div class="form-group"> <label for="exampleInputEmail1">Leaving Date from Tour</label>
                                <input type="date" name="date1" class="form-control" id="exampleInputEmail1"
                                    placeholder="">
                            </div>



                            <input type="submit" name="submit" value="Book Now" />&nbsp;&nbsp;&nbsp;
                            <input type="reset" value="Cancle">


                        </form>
                    </div>
                </div>
            </div>
            <?php
}
?>
            <div class="clearfix"> </div>
        </div>
        </div>
        <div class="clearfix"></div>
        </div>




        <!-- //banner -->
        <?php
	include "Footer.php";
?>
    </body>

    </html>