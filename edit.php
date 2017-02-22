<?php
	session_start();
	include("./connectDB.php");
	if(isset($_SESSION['member_id'])) {

	$sql = "SELECT * FROM memberinfo
	WHERE member_id = '{$_SESSION['member_id']}'";
	$query1 = mysqli_query($db_connect,$sql);
	$rows = mysqli_fetch_array($query1);
	
	$sql2 = "SELECT * FROM payments";
	$query2 = mysqli_query($db_connect,$sql2);
	$rows = mysqli_fetch_array($query2);

	$payment_id = $rows['payment_id'];
	$payment_firstname = $rows['payment_firstname'];
	$payment_lastname = $rows['payment_lastname'];
	$payment_phone = $rows['payment_phone'];
	$payment_namewat = $rows['payment_namewat'];
	$payment_districtwat = $rows['payment_districtwat'];
	$payment_day = $rows['payment_day'];
	$payment_month = $rows['payment_month'];
	$payment_year = $rows['payment_year'];
	$payment_moredetail = $rows['payment_moredetail'];
	$payment_price = $rows['payment_price'];
	$payment_detail = $rows['payment_detail'];
	$payment_count = $rows['payment_count'];
?>
<? include('header.php'); ?>

	<div id="box-list">
		<div class="wrapper">

			<div id="head-nav">

           		<? include('head-menu.php'); ?>
	
			</div> <!-- head-nav -->

		<div id="admin">
			<h2>รายการจัดส่ง</h2>

			<?  while($row = mysqli_fetch_array($query2)) {  ?>	
			<div class="admin-list">
				<div id="detail-admin">				
					<div class="adminH">อันดับการจัดส่ง <? echo $row['payment_id'] ?></div>
					<div class="clear-box"></div>
					<span>ชื่อผู้รับ : <? echo $row['payment_firstname']." ".$row['payment_lastname'] ?></span>
					<div class="clear-box"></div>
					<span>เบอร์โทรศัพท์ติดต่อ : <? echo $row['payment_phone'] ?></span>
					<div class="clear-box"></div>
					<span>จัดส่งที่ : <? echo $row['payment_namewat']." ".$row['payment_districtwat'] ?></span>
					<div class="clear-box"></div>
					<span>รายละเอียด : <? echo $row['payment_detail'] ?></span>
					<div class="clear-box"></div>
					<span>วัน เดือน ปี จัดส่ง : <? echo "วันที่"." ".$row['payment_day']." "."เดือน"." ".$row['payment_month']." ".$row['payment_year'] ?></span>
					<div class="clear-box"></div>
					<span>เพิ่มเติม : <? echo $row['payment_moredetail'] ?></span>					
				</div>
				</div> 
			<? } ?>
							
		</div> <!-- end wrapper-->
		
	</div><!-- box-list -->
<?php } ?>

	<div class="clear-box"></div>	
	<div class="box-height"></div>
		 
<? include('footer.php'); ?>
</body>
</html>