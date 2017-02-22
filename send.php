<?
	$subject = $_POST['subject'];
	$emailContact = $_POST['emailContact'];
	$Message = $_POST['Message'];

	if(!$subject || !$emailContact || !$Message)
	{
		?>
			<script>
				alert('โปรดกรอกข้อมูลให้ครบ');
			</script>
		<?
		echo "<script type='text/javascript'>window.history.back(-1);</script>";
	}else{
		include 'connectDB.php';
		$sql = "INSERT INTO contacts (contact_subject,contact_email,contact_message) 
	    VALUES ('$subject','$emailContact','$Message')";
	    $query = mysqli_query($db_connect,$sql);
?>
	    <?
	 }
	 
?>
<html>
<head>
	<title>Tumbun</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
	<style>
	.regis h2{
		font-family: 'db_helvethaicamon_x55_regular';
		font-size: 48px;
	}
	.regis p{
		font-family: 'db_helvethaicamon_x55_regular';
		font-size: 36px;
	}
	</style>
</head>
<body>
	<div class="regis">
	<h2>แจ้งเรียบร้อยแล้วค่ะ</h2>
	</div>	
</body>
</html>