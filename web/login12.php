<?php
	include "Header.php";
	include "connection.php";
	if(isset($_POST['submit']))
{
	$un=$_POST['username'];
	$password=$_POST['password'];
	
	
	$q="Select * from login_info where username='$un' AND password='$password'";
	$c=mysqli_query($con,$q);
	$r=mysqli_num_rows($c);
	if($r>=1)
	{
		$_SESSION['user']=$un;
		while($row=mysqli_fetch_array($c))
		{
			$_SESSION['name']=$row['name'];
			$_SESSION['email']=$row['email'];
		}
		?>
<script>
alert('Login Succesfully');
window.location = "index.php";
</script>
<?php
	}
	else
	{
		?>
<script>
alert('Invalid Username And Passowrd');
</script>
<?php
	}
}
?>
<div id="page-wrapper">
    <div class="main-page login-page ">
        <h2 class="title1">Login</h2>
        <div class="widget-shadow">
            <div class="login-body">
                <form action="#" method="post">
                    <input type="text" class="user" name="username" placeholder="Username">

                    <input type="password" class="lock" name="password" placeholder="Password">
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
	include "Footer.php";
?>