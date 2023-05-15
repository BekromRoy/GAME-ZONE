<?php 
	session_start();
	ob_start();
?>
<?php
if (isset($_POST["recoversubmit"])) 
	{
		if (isset($_GET['Token'])) {
			$token=$_GET['Token'];
			$password=$_POST["recoverpassword"];
			$cpassword=$_POST["recovercpassword"];
			$pass=password_hash($password, PASSWORD_DEFAULT);
			$cpass=password_hash($cpassword, PASSWORD_DEFAULT);
			$connection=mysqli_connect("localhost","root","","gamezone");
			if ($password === $cpassword)
			{
				$updatequery="UPDATE game1 SET Password='$pass', cPassword='$cpass' where Token='$token'";
				$connection->query($updatequery);
				if ($connection) {				
					?>
				    <script>
				    	alert("Your passowrd has been Updated. Click ok to continue.");
				    	location.replace("../login/login.html");
				    </script>
				    <?php	
				}
				else
				{
					?>
				    <script>
				    	alert("Sorry! failed to update your passowrd. Click ok to continue.");
				    	location.replace("../index.html");
				    </script>
				    <?php	
				}
			}
			else
			{
				?>
			    <script>
			    	alert("Password did not matched. Click ok to continue.");
			    	location.replace("recover.html");
				</script>
			    <?php
			}
		}
		else{
			?>
		    <script>
		    	alert("No token found. Click ok to continue.");
		    	location.replace("../index.html");
			</script>
		    <?php
		}
	}
?>