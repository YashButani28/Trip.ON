<?php
include "Header.php";
$id=$_REQUEST['id'];
include "Connection.php";
$q="SELECT * from cat_info where Cat_id='$id'";
	$c=mysqli_query($con,$q);
		while($r=mysqli_fetch_array($c))
		{
			$name=$r['Cat_name'];
			$image=$r['Cat_img'];
			$Detail=$r['Detail'];
			$price=$r['price'];
		}

if(isset($_POST['submit']))
{
	$name=$_POST['Cat_name'];
	if($_FILES['Cat_img']['name']=="")
	{
		$image=$im;
	}
	else
	{
		$image=$_FILES['Cat_img']['name'];
	}
	$Detail=$_POST['Detail'];
	$price=$_POST['price'];

	$qq="UPDATE cat_info SET Cat_name='$name',Cat_img='$image',Detail='$Detail', price='$price' where Cat_id='$id'";
	$cc=mysqli_query($con,$qq);
	if($cc)
	{
		move_uploaded_file($_FILES['Cat_img']['tmp_name'],"../web/upload/".$image);
		?>
<script>
alert("Successfully Upadated");
</script>

<script>
window.location = 'Category.php';
</script>





<?php
	}
	else
		?>
<script>
alert("Something Goes Wrong");
</script>

<script>
window.location = 'CategoryEdit.php';
</script>
<?php
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


                        <div class="form-group"> <label for="exampleInputEmail1">Card_Name</label>

                            <input type="text" name="Cat_name" class="form-control" id="exampleInputEmail1"
                                value="<?php echo $name?>">
                        </div>

                        <img src="../web/upload/<?php echo $image;?>" height=60 width=60 />
                        <div class="form-group"> <label for="exampleInputFile">File input</label>
                            <input type="file" name="Cat_img" id="exampleInputFile" value="<?php echo $image;?>">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Detail</label>

                            <input type="text" name="Detail" class="form-control" id="exampleInputEmail1"
                                value="<?php echo $Detail?>">
                        </div>

                        <div class="form-group"> <label for="exampleInputEmail1">price</label>

                            <input type="number" name="price" class="form-control" id="exampleInputEmail1"
                                value="<?php echo $price?>">
                        </div>

                        <button type="submit" name="submit" class="btn btn-default"> Update </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
include"Footer.php";
?>
</div>