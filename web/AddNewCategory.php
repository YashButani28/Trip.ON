<?php
include "Header.php";
if(isset($_POST['submit']))
	{
		
		$name=$_POST['nametxt'];
		$filename=$_FILES['image']['name'];
		$Detail=$_POST['Detail'];
		$price=$_POST['price'];

		include "Connection.php";
		$q= "INSERT INTO Cat_info values('','$name','$filename','$Detail','$price')";
		$c=mysqli_query($con,$q);
		if ($c)
	 	{ 
	 		move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$filename);
	 	echo "<script> window.location ='category.php';</script>"; 
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
            <h3 class="title1">Add New Category</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Card Detail :</h4>
                </div>
                <div class="form-body">
                    <form action="#" method="POST" enctype="multipart/form-data">


                        <div class="form-group"> <label for="exampleInputEmail1">Category_Name</label>
                            <input type="text" name="nametxt" class="form-control" id="exampleInputEmail1"
                                placeholder="Category_Name">
                        </div>

                        <div class="form-group"> <label for="exampleInputFile">File input</label>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Detail</label>
                            <input type="text" name="Detail" class="form-control" id="exampleInputEmail1"
                                placeholder="Detail">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Price</label>
                            <input type="number" name="price" class="form-control" id="exampleInputEmail1"
                                placeholder="Amount">
                        </div>
                        <button type="submit" name="submit" class="btn btn-default"><a href="category.php"></a> Insert
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