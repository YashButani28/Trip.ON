<?php
$id=$_REQUEST['id'];

	include "Connection.php";

	$q="DELETE from trip_book where Trip_book_id='$id'";
	$c=mysqli_query($con,$q);
	?>






<script>
window.location = "http://localhost/Project/web/aFeedback.php";
</script>