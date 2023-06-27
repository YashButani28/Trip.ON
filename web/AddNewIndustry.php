<?php
	include "Header.php";

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		include "Connection.php";
		$q= "INSERT INTO industry_info values('','$name')";
		$c=mysqli_query($con,$q);
		if ($c)
	 	{ 
	 	echo "<script> window.location ='Industry.php';</script>"; 
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
            <h3 class="title1">Add New Type</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Trip-Type Detail :</h4>
                </div>
                <div class="form-body">
                    <form action="#" method="POST">
                        <div class="form-group"> <label for="exampleInputEmail1">Trip-type_Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                placeholder="Trip-type_Name">
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include"Footer.php";
?>