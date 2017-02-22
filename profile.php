<?php
	session_start();
	include("./connectDB.php");

	if(isset($_SESSION['member_id'])) {

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

<? include('header.php'); ?>

	<div id="box-list">
		<div class="wrapper">

			<div id="head-nav">

           		<? include('head-menu.php'); ?>
	
			</div> <!-- head-nav -->

		<div id="profile">
			<h2>เข้าสู่ระบบ</h2>

			<div class="profile-user">
				<div class="gra"></div>
				<div id="detail-user">				
					<div class="memberUser">
						<span>Username : <? echo $member_user;?></span>
					</div>
					<div class="memberUser">
						<span>E-mail address : <? echo $member_email;?></span>
					</div>
					<div class="memberUser">
						<span>Password : <? echo $member_password;?></span>
					</div>
					
				</div>
				</div> 

				<h2>ข้อมูลส่วนตัว</h2>

			<div class="profileContact">
				<div class="gra"></div>
				<div id="detail-user">				
					<div class="member2col">
						<div class="mem1">ชื่อ : <? echo $member_firstname;?></div>
						<div class="mem2">นามสกุล : <? echo $member_lastname;?></div>
					</div>
					<div class="clear-box"></div>
					<div class="memberUser">
						<span>เพิ่มเติม : <? echo $member_info;?></span>
					</div>										
				</div>
				</div> 
			
				<h2>ติดต่อ</h2>

			<div class="profilePlace">
				<div class="gra"></div>
				<div id="detail-user">
				<form action="saveProfile.php" method="post">
					<input type="text" class="register-input clear-box" placeholder="เบอร์โทรศัพท์" name="phone" required/>
					<input type="text" class="register-input clear-box" placeholder="ที่อยู่" name="address" required/>
					<input type="text" class="fname" placeholder="แขวง/ตำบล" name="districtUser" required/>
					<input type="text" class="lname" placeholder="เขต/อำเภอ" name="districtPlace" required/>
					<input type="text" class="fname" placeholder="จังหวัด" name="city" required/>
					<input type="text" class="lname" placeholder="รหัสไปรษณีย์" name="postcode" required/>
					
				</div>
				 <input type="submit" id="button-profile" value="ยืนยันข้อมูล" /></div> 
				</form>
				
		</div> <!-- end wrapper-->
		
	</div><!-- box-list -->
<?php } ?>

	<div class="clear-box"></div>	
	<div class="box-height"></div>
		 
<? include('footer.php'); ?>

</body>
</html>