<?php
	session_start();
	include("./connectDB.php");

	if(isset($_GET["product_id"])) {
		$product_id = $_GET["product_id"];

		$sql2 = "SELECT * FROM products WHERE product_id='{$product_id}'";
		$query2 = mysqli_query($db_connect,$sql2);
		$row = mysqli_fetch_array($query2);

		while($rows = mysqli_fetch_array($query2)) {
		$product_id = $row['product_id'];
		$product_name = $row['product_name'];
		$product_price = $row['product_price'];
		$product_pic = $row['product_pic'];
		}
	}

	if(isset($_POST["count"])) {
		$count = $_POST["count"];
	}
	else { $count = ''; }

	if(isset($_POST["result"])) {
		$result = $_POST["result"];
	}
	else { $result = ''; }


?>
<? include('header.php'); ?>

	<div id="box-list">
		<div class="bgmenu">
		<div class="wrapper">

			<div id="head-nav">

           		<? include('head-menu.php'); ?>
           	</div></div>
	
			</div> <!-- head-nav -->

		<div id="payment">
			<h2>ที่อยู่สำหรับจัดส่ง</h2>

			<div id="payment-detail">
				<div class="gra"></div>
				<div id="detail-input">
				<form name="sendpay" action="success.php" method="post" target="iframe_target">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
					
			<? if ($result!=null || $count!=null ) { ?>	
						<input type="text" class="register-fill" value="สั่งซื้อ<? echo $row['product_name']; ?><? echo " ".$result." "."บาท"." "."จำนวน"." ".$count." "."ชุด";?>" name="pricepay" readonly/>					
			<?php } ?> 
									
			<?php if(!isset($_SESSION['member_id'])) { ?>
					<input type="text" class="fname" placeholder="ชื่อ" name="firstname" required/>
					<input type="text" class="lname" placeholder="นามสกุล" name="lastname" required/>
			<?php } ?> 

			<?php if(isset($_SESSION['member_id'])){
				$sql = "SELECT * FROM memberinfo
				WHERE member_id = '{$_SESSION['member_id']}'";
				$query1 = mysqli_query($db_connect,$sql);
				$rows = mysqli_fetch_array($query1);

				$member_id = $rows['member_id'];
				$member_user = $rows['member_user'];
				$member_password = $rows['member_password'];
				$member_email = $rows['member_email'];
				$member_firstname = $rows['member_firstname'];
				$member_lastname = $rows['member_lastname'];
				$member_info = $rows['member_info'];
				$member_phone = $rows['member_phone'];
				$member_sub = $rows['member_sub'];
				$member_pic = $rows['member_pic'];
			?>

					<div class="member2col">
						<input type="text" class="mem1" value="<? echo $rows['member_firstname'];?>" name="firstname"  readonly/>
						<input type="text" class="mem2" value="<? echo $member_lastname;?>" name="lastname" readonly/>
					</div>

			<?php } ?>
					
					<input type="text" class="register-input clear-box" placeholder="เบอร์โทรศัพท์" name="phone" required/>
					
					<select class="day" name="day" required>
						<option value="" selected>วันที่</option>
						<?php  
							for ($x = 1; $x <= 31; $x++) {?> 
							<option value="<?echo $x;?>"> <? echo $x; ?> </option>
						<? } ?> 
					</select>

					<select class="day" name="month" required>
						<option value="" selected>เดือน</option>
						<?php  
							for ($x = 1; $x <= 12; $x++) {?> 
							<option value="<?echo $x;?>"> <? echo $x; ?> </option>
						<? } ?> 
					</select>

					<input type="text" class="day clear-day" placeholder="ปี" name="year" required/>					
					<input type="text" class="register-input" placeholder="เพิ่มเติม" name="moredetail" required/>
				</div>
				<input type="submit" id="button-payment" value="ส่งข้อมูล" /></div>
				</form>
			</div>	
		</div> <!-- end wrapper-->
		
	</div><!-- box-list -->

	<div class="clear-box"></div>	
	<div class="box-height"></div>
		 
<? include('footer.php'); ?>

</body>
</html>