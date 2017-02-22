<?php
	session_start();
	include("./connectDB.php");

	if(isset($_GET["product_id"])) {
		$product_id = $_GET["product_id"];
	}
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$namewat = $_POST['namewat'];
	$districtwat = $_POST['districtwat'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$moredetail = $_POST['moredetail'];
	$pricepay = $_POST['pricepay'];
	
	//เพิ่มข้อมูลส่ง
	$sql = "INSERT INTO payments (payment_firstname,payment_lastname,payment_phone,	payment_namewat,payment_districtwat,payment_day,payment_month,	payment_year,payment_moredetail,payment_detail) 
	VALUES ('$firstname','$lastname','$phone','$namewat','$districtwat','$day','$month','$year','$moredetail','$pricepay')";
	$query = mysqli_query($db_connect,$sql); 

?>
<script>
alert('ขอบคุณที่ใช้งานค่ะ');
window.location.href = "index.php";

</script>