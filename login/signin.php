<?php 
	session_start();
?>
<?php
	if (isset($_POST['signinsubmit'])) 
		{
			$email=$_POST['signinemail'];
			$password=$_POST['signinpassword'];
			$emailconnect=mysqli_connect("localhost","root","","gamezone");
			$mail= "SELECT * from game1 where '$email'=UserEmail";
			$emailquery=($emailconnect->query($mail));
			$emailno=mysqli_num_rows($emailquery);
			if($emailno)
				{
					$email_pass=mysqli_fetch_assoc($emailquery);
					$db_pass=$email_pass['Password'];
					$_SESSION['UserName']=$email_pass['UserName'];
					$pass_match=password_verify($password, $db_pass);
					if ($pass_match)
						{
							?>
						    <script>
						    	alert("You have successfully Logged In.");
						    	location.replace("../dashbord/dashbord.php");
							</script>
						    <?php
						}
					else
						{
							?>
						    <script>
						    	alert("Sorry, your password didn't match.");
						    	location.replace("login.html");
							</script>
						    <?php
						}
				}
			else
				{
					?>
				    <script>
				    	alert("Oop's! We didn't recognize your email.");
				    	location.replace("login.html");
					</script>
				    <?php
				}
		}
?>