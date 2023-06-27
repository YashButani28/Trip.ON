<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>



    <?php
include "Header.php";
?> <div class="main grid">
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
                            <h3 class="title1">Booked-Trip Table</h3>

                            <div class="panel-body widget-shadow" style="overflow-x:scroll;overflow-y:hidden">
                                <h4>Booked-Trip Table:</h4>


                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Booked_id</th>
                                            <th>Username</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Where To</th>
                                            <th>people</th>
                                            <th>Arrival_Date</th>
                                            <th>Leaving_Date</th>


                                        </tr>



                                        <?php
include "Connection.php";
$query="SELECT * FROM trip_book";
$c=mysqli_query($con,$query);
while($row=mysqli_fetch_array($c))
{

	?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['Trip_book_id'];?></td>
                                            <td><?php echo $row['Username'];?></td>
                                            <td><?php echo $row['Contact'];?></td>
                                            <td><?php echo $row['Email'];?></td>
                                            <td><?php echo $row['Address'];?></td>
                                            <td><?php echo $row['Destination'];?></td>
                                            <td><?php echo $row['people'];?></td>
                                            <td><?php echo $row['arrival_date'];?></td>
                                            <td><?php echo $row['leaving_date'];?></td>

                                            <td><a href="FeedbackReply.php">
                                                    <i style="font-size:20px; color:blue" class="fa fa-reply"
                                                        aria-hidden="true"></i>

                                            <td>
                                                <a class="dropdown-item"
                                                    onclick="return confirm('Are you sure you want to delete this record');"
                                                    href="feedbackdelete.php?id=<?php echo $row['Trip_book_id'];?>"><i
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
</body>

</html>