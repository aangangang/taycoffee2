<?php
	if(!isset($_SESSION['member_id'])) { 
?>
<div class="head-menu-desktop">
	<div class="menu-box">
<a href="index.php"><div id="logo"><img src="images/logo.png"></div></a>
<div id="nav">
				<ul>
					<a href="index.php"><li class="btn btn-primary btn-lg outline">โปรโมชั่น</li></a>
					<a href="product.php"><li class="btn btn-primary btn-lg outline">สินค้า</li></a>
					
				</ul>
			</div><!--  end nav -->

			<div id="nav-login">
				<ul>
				<a href="#popup1"><li class="btn btn-primary btn-lg outline">เข้าสู่ระบบ</li></a>
				<a href="register.php"><li class="btn btn-primary btn-lg outline">สมัครสมาชิก</li></a>
				</ul>
			</div>
	</div>
</div> <!-- end head-menu-desktop -->

			<div class="clear-box"></div>
			<!-- login-register -->

<div id="popup1" class="overlay">
	<div class="box-popup">
		<div class="popup-r">
			<div class="x-close"><a class="close" href="#">&times;</a></div>
			<div class="clear-box"></div>
			<div class="pop-r1">สมัครสมาชิก</div>
			<div class="pop-r2">สามารถกรอกข้อมูลอื่นๆได้ภายหลัง</div>
			<a href="register.php"><button id="button-registerpop">สมัครสมาชิก</button></a>

		</div>
		<div class="popup">
			<div class="pop-l">
			<div class="popup-text">ลงชื่อเข้าใช้</div>
			<form action="login.php" method="post">

				<input type="text" id="username" placeholder="Username" name="username" required/>
				<div class="clear-box"></div>
				<input type="password" id="pass" placeholder="Password" name="password" required/>
				<div class="clear-box"></div>
				<div class="forget">ลืม User หรือ รหัสผ่าน</div>
				<div class="clear-box"></div>
				<input type="submit" id="button-login" value="เข้าสู่ระบบ"/>
			</form>
			</div>
			
		</div>
	</div>
</div>


<?php
}
else {

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
	$member_status = $rows['member_status'];

?>
<div class="head-menu-desktop">
	<div class="menu-box">
		<a href="index.php"><div id="logo"><img src="images/logo.png"></div></a>
<div id="nav">
				<ul>
					<a href="index.php"><li class="btn btn-primary btn-lg outline">หน้าแรก</li></a>
					<a href="product.php"><li class="btn btn-primary btn-lg outline">สินค้า</li></a>
			
				</ul>
			</div><!--  end nav -->

			<? if ($member_status==1) { ?>
				<div id="nav-login">
				<ul>
				<a href="edit.php"><li class="btn btn-primary btn-lg outline">จัดส่ง</li></a>
				<a href="logout.php"><li class="btn btn-primary btn-lg outline">ออกจากระบบ</li></a>
				</ul>
			</div>
			<? } else {?>

			<div id="nav-login">
				<ul>
				<a href="profile.php"><li class="btn btn-primary btn-lg outline">โปรไฟล์</li></a>
				<a href="logout.php"><li class="btn btn-primary btn-lg outline">ออกจากระบบ</li></a>
				</ul>
			</div>
			<? } ?>
	</div>
</div> <!-- end head-menu-desktop -->
			<div class="clear-box"></div>
			<!-- login-register -->


<div class="clear-box"></div>
<?
}	
?>