<?php
include "Header.php";
?>
<!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">View Package Table</h3>
            <div class="panel-body widget-shadow" style="overflow-x:scroll;overflow-y:hidden;">
                <h4>Packages Table:</h4>


                <a href="AddNewCardDesign.php" style="float:right">Add New Package</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>PackageId</th>

                            <th>TypeId</th>
                            <th>Location/ Place</th>
                            <th>Place Image</th>
                            <th>Description</th>
                            <th>Package Price</th>


                        </tr>
                    </thead>
                    <?php
include "Connection.php";
$query="SELECT * FROM card_info";
$c=mysqli_query($con,$query);
while($row=mysqli_fetch_array($c))
{

	?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['Card_id'];?></td>


                            <td><?php echo $row['Industry'];?></td>

                            <td><?php echo $row['Name'];?></td>
                            <td><img src="upload/<?php echo $row['Image'];?>" height=50 width=50 /></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['Price'];?></td>



                            <td>
                                <a href="CardDesignEdit.php?id=<?php echo $row['Card_id'];?>"> <i
                                        style="font-size:20px; color:green" class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></a></a>
                            </td>
                            <td>
                                <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this record'); 
		" href="CardDesignDelete.php?id=<?php echo $row['Card_id'];?>" onclick="return checkdelete()"><i
                                        style="font-size:20px; color:red" class="fa fa-trash-o"
                                        aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
}
?>
                </table>
            </div>
            <?php
include "Footer.php";
?>