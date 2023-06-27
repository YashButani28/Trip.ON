<?php
	include "Header.php"
?>

<div class="main grid">
    <div class="social grid">
        <div class="grid-info">

            <!-- main content start-->
            <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, true);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
            </script>
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="tables">
                        <h3 class="title1">Category Table</h3>

                        <div class="panel-body widget-shadow">
                            <h4>Category Table:</h4>

                            <a href="AddNewCategory.php" style="float:right">Add New Category</a>



                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>Cat_id</th>
                                        <th>Cat_Name</th>
                                        <th>Cat_Img</th>
                                        <th>Detail</th>
                                        <th>price</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <?php
$con=mysqli_connect("localhost","root","","project_db");
$query="SELECT * FROM cat_info";
$c=mysqli_query($con,$query);
while($r=mysqli_fetch_array($c))
{

	?>
                                <tr>
                                    <td><?php echo $r['Cat_id'];?></td>
                                    <td><?php echo $r['Cat_name'];?></td>

                                    <td><img src="upload/<?php echo $r['Cat_img'];?>" height=200 width=200 /></td>

                                    <td><?php echo $r['Detail'];?></td>
                                    <td><?php echo $r['price'];?></td>

                                    <td>
                                        <a href="CategoryEdit.php?id=<?php echo $r['Cat_id'];?>"> <i
                                                style="font-size:20px; color:green" class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this record'); 
			" href="CategoryDelete.php?id=<?php echo $r['Cat_id'];?>" onclick="return checkdelete()"><i
                                                style="font-size:20px; color:red" class="fa fa-trash-o"
                                                aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php
}
?>
                            </table>
                        </div>
                        <?php
include "Footer.php";
?>