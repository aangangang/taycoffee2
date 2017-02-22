 <?
 	include 'connectDB.php';

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordcon = $_POST['passwordcon'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$moredetail = $_POST['moredetail'];

	if(!$firstname || !$lastname || !$email || !$username || !$password || !$passwordcon || !$moredetail )
	{
		echo "<script language=\"JavaScript\">";
        echo "alert('Please fill in all required fields.');";
        echo "window.location='register.php';";
        echo "</script>";
        
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		echo "<script language=\"JavaScript\">";
        echo "alert('Please fill E-mail Again');";
        echo "window.location='register.php';";
        echo "</script>";

	}
	elseif($password != $passwordcon)
	{
		echo "<script language=\"JavaScript\">";
        echo "alert('Sorry, Password not match.');";
        echo "window.location='register.php';";
        echo "</script>";
	}
	else{

		$sql2 = "SELECT * FROM memberinfo WHERE member_user = '$username'";
		$query2 = mysqli_query($db_connect,$sql2);
		$num= mysqli_num_rows($query2);

		if($num > 0) {
			echo "<script language=\"JavaScript\">";
        	echo "alert('Sorry, Username : $username not available');";
        	echo "window.location='register.php';";
        	echo "</script>";
		}

		$sql = "INSERT INTO memberinfo (member_user,member_email,member_password,member_firstname,member_lastname,member_info) 
		VALUES ('$username','$email','$password','$firstname','$lastname','$moredetail')";
		$query = mysqli_query($db_connect,$sql); 

		echo "<script language=\"JavaScript\">";
        echo "alert('Register Completed');";
        echo "window.location='index.php';";
        echo "</script>";

        ?>
        
<?
}	  

?>