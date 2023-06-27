<?php
include "Header.php";
$id=$_REQUEST['id'];
include "Connection.php";
	$q="SELECT * from card_info where Card_id='$id'";
	$c=mysqli_query($con,$q);
    $description = NULL;
		while($r=mysqli_fetch_array($c))
			{
	 		$Name=$r['Name'];
			$Image=$r['Image'];
            $description=$r['description'];
			$Price=$r['Price'];
			$Industry=$r['Industry'];
            }			
	
if(isset($_POST['submit']))
{
	
	$name=$_POST['Name'];
	$description=$_POST['description'];
	$Price=$_POST['Price'];
	$Industry=$_POST['Industry'];
	if($_FILES['Image']['name']=="")
	{
		$image=$Image;
	}
	else
	{
		$image=$_FILES['Image']['name'];
	}

	$qq="UPDATE card_info SET Name='$name',Industry='$Industry',Image='$image', description='$description', Price='$Price' where Card_id='$id'";
	$cc=mysqli_query($con,$qq);
	if($cc)
	{
		move_uploaded_file($_FILES['Image']['tmp_name'],"../web/upload/".$image);
		?>
<script>
alert("Successfully Upadated");
</script>

<script>
window.location = 'CardDesign.php';
</script>

<?php
	}
	else
		?>
<script>
alert("Something Goes Wrong");
</script>

<script>
window.location = 'CardDesignEdit.php';
</script>
<?php
}


	 	
	?>


<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Edit Package Details</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Package Detail :</h4>
                </div>
                <div class="form-body">
                    <form action="#" method="POST" enctype="multipart/form-data">


                        <div class="form-group"> <label for="exampleInputEmail1">Location/Place</label>
                            <input type="text" name="Name" class="form-control" id="exampleInputEmail1"
                                value="<?php echo $Name;?>">
                        </div>

                        <img src="../web/upload/<?php echo $Image;?>" height=60 width=60 />
                        <div class="form-group"> <label for="exampleInputFile">Place_Img</label>

                            <input type="file" name="Image" id="exampleInputFile" value="<?php echo $Image;?>">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                                value="<?php echo $description;?>">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Price</label>
                            <input type="number" name="Price" class="form-control" id="exampleInputEmail1"
                                value="<?php echo $Price;?>">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Industry:-</label>
                            <select name="Industry">


                                <?php 
											include "Connection.php";	
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




                        <button type="submit" name="submit" class="btn btn-default">Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
include"Footer.php";
?>
</div>