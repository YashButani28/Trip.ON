		<?php
	include "Header.php";
include "connection.php";
if(isset($_POST['submit']))
{
	$un=$_POST['username'];
$password=md5($_POST['password']);
	
	
	$q="Select * from users where username='$un' AND password='$password'";
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
alert('Invalid Username And Password');
		</script>
		<?php
	}
}
?>
		<!-- login -->
		<div class="w3_login">
		    <h3>Login</h3>
		    <div class="w3_login_module">
		        <div class="module form-module">
		            <div class="toggle"><a href="index.php"><i class="fa fa-times fa-close"></i></a></div>
		            <div class="form">
		                <h2>Login to your account</h2>
		                <form action="#" method="post">
		                    <input type="text" name="username" placeholder="Username" required>
		                    <input type="password" name="password" placeholder="Password" required>
		                    <input type="submit" value="Login">
		                </form>
		            </div>

		        </div>
		    </div>
		</div>

		</div>
		<?php
	include "Footer.php";
?>