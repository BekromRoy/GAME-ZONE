<?php
	if (isset($_POST["signupsubmit"])) 
		{
			$name=$_POST["signupname"];
			$email=$_POST["signupemail"];
			$password=$_POST["signuppassword"];
			$cpassword=$_POST["signupcpassword"];
			$pass=password_hash($password, PASSWORD_DEFAULT);
			$cpass=password_hash($cpassword, PASSWORD_DEFAULT);
			$token=bin2hex(random_bytes(15));
			$connection=mysqli_connect("localhost","root","","gamezone");
			$sel="SELECT * from game1 where '$email'=UserEmail";
			$select=($connection->query($sel));
			$row=mysqli_num_rows($select);
			if ($row>0) 
			{
				
				?>
			    <script>
			    	alert("Oop's! Your email is already exists. Try another email. Click ok to continue.");
			    	location.replace("login.html");
			    </script>
			    <?php
			}
			else
			{
				if ($password === $cpassword)
				{
					$insert="INSERT INTO game1 SET UserName='$name', UserEmail='$email', Password='$pass', cPassword='$cpass', Token='$token', Status='Active'";
					$connection->query($insert);
					
					$username=$name;
					$subject="Game Zone";
					$body="Hi, $username. \n Thank you for choosing Game Zone. It will convert your boring day into interesting and joyful day. Hope you will like our website as well as our games and musics. \n If you face and problems related to our website and games or musics then you can tell us that problem and we will try to fix it. To contact us click to link : http://game-zone.ultimatefreehost.in/contact/contactus.html";
					$sender_email="From: rbekrom@gmail.com";
					mail($email, $subject, $body, $sender_email)

					?>
				    <script>
				    	alert("Signup Successful. Now LogIn manually. Click ok to continue.");
				    	location.replace("login.html");
				    </script>
				    <?php
				}
				else
				{
					
					?>
				    <script>
				    	alert("Password did not matched. Click ok to continue.");
				    	location.replace("login.html");
					</script>
				    <?php
				}
			}
		}
?>

