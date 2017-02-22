<?php
	session_start();
	include("./connectDB.php");

	if(isset($_POST['username'])) {
		$username = $_POST['username'];
	}
	if(isset($_POST['password'])) {
		$password = $_POST['password'];
	}
	
	$sql = "SELECT * FROM memberinfo
			WHERE member_user='{$username}' AND member_password='{$password}'";
	$query = mysqli_query($db_connect,$sql);
	$rows = mysqli_fetch_array($query);

	$member_user = $rows['member_user'];
	$member_password = $rows['member_password'];
	$member_id = $rows['member_id'];

	if($rows){
		$_SESSION['member_id'] = $rows['member_id'];
		header('localtion:index.php');
	}

	if(!$member_user||!$member_password)
	{
		?>
			<script>
				alert('username or password wrong.');
			</script>
		<?
		echo "<script type='text/javascript'>window.history.back(-1);</script>";
	}
	echo "<script type='text/javascript'>window.location.href = \"index.php\";</script>";	
?>