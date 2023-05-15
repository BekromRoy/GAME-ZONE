<?php 
	if (isset($_POST['contactsend']))
	{
		$UserName = $_POST['contactname'];
		$UserEmail = $_POST['contactemail'];
		$UserMassage = $_POST['contactmassage'];
		$formcontent = "From : $UserName \n Massage : $UserMassage";
		$mailTo = "roybekrom@gmail.com, ssingh.amritanshu@gmail.com, ";
		$subject ="Contact form submision \n";
		$mailheader = "From : $UserEmail \r\n";	
		mail($mailTo,$subject,$formcontent,$mailheader);
		?>
		<script>alert("Thanks for your response. Click OK to continue.");
	    location.replace("dashbord.php");</script>
	    <?php
	}
?>