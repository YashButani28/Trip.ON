<?php
	include "Header.php";

	if(isset($_POST['submit']))
	{
		
		$Industry=$_POST['industry'];
		$name=$_POST['name'];
		$filename=$_FILES['image']['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		
		include "Connection.php";	
		$q= "INSERT INTO card_info values('','$Industry','$name','$filename','$description','$price')";
		$c=mysqli_query($con,$q);
		if ($c)
	 	{ 
	 		move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$filename);
	 	echo "<script> window.location ='CardDesign.php';</script>"; 
	 	} 
 	 	
	  	else
	    {	    	
			
				echo "<script>alert('Some Error Occured, Please try again...')</script>"; 
 		} 
	}
		
	
	
?>

<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Add New Package</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Package Detail :</h4>
                </div>
                <div class="form-body">
                    <form action="#" method="POST" enctype="multipart/form-data">

                        <!-- <div class="form-group"> <label for="exampleInputEmail1">Enter Material:-</label>
                            <select name="category">
                                <option value="Select">Select</option>
                               <?php 
											$con=mysqli_connect("localhost","root","","project_db");
											$q="select * from Cat_info";
											$c=mysqli_query($con,$q);
											while($r=mysqli_fetch_array($c))
											{
												?> 
                                <option value="<?php echo $r['Cat_id'];?>"><?php echo $r['Cat_name'];?></option>
                                <?php
											}
											
											?>
                            </select><br>
                        </div> */ -->

                        <div class="form-group"> <label for="exampleInputEmail1">Industry:-</label>
                            <select name="industry">
                                <option value="Select">Select</option>
                                <?php
								$con=mysqli_connect("localhost","root","","project_db");
											$q="select * from industry_info";
											$c=mysqli_query($con,$q);
											while($r=mysqli_fetch_array($c))
											{
												?>
                                <option value="<?php echo $r['Industry_id'];?>"><?php echo $r['Industry_name'];?>
                                </option>
                                <?php
											}
											
											?>

                            </select><br>
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Location/Place</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                placeholder="Location">
                        </div>

                        <div class="form-group"> <label for="exampleInputFile">Place_Img</label>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Description">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Price</label>
                            <input type="number" name="price" class="form-control" id="exampleInputEmail1"
                                placeholder="Amount">
                        </div>






                        <button type="submit" name="submit" class="btn btn-default">Submit
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>



<?php
include"Footer.php";
?>