<?php
	if (isset($_POST["forgot-submit"])) 
		{
			$email=$_POST["forgot-email"];
			$connection=mysqli_connect("localhost","root","","gamezone");
			$sel="SELECT * from game1 where '$email'=UserEmail";
			$select=($connection->query($sel));
			$row=mysqli_num_rows($select);
			if ($row) 
			{	
				$userdata=mysqli_fetch_array($select);
				$username=$userdata['UserName'];
				$token=$userdata['Token'];
				$subject="Password Reset";
				$body="Hi, $username. \n Click here too reset your password \n http://localhost/Minor%20Project/forget-password/recover.html?Token=$token";
				$sender_email="From: rbekrom@gmail.com";
				if(mail($email, $subject, $body, $sender_email)){
					?>
					<script>
						alert("Please check your Email to reset your password. Click ok to continue.");
						location.replace("../login/login.html");
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						alert("Sorry! Failed to send email. Click ok to continue.");
						location.replace("../index.html");
					</script>
					<?php
				}
			}
			else
			{
				?>
				<script>
					alert("Sorry! No email found. Click ok to continue.");
					location.replace("../index.html");
				</script>
				<?php
			}

		}
?>