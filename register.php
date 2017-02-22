<?php
	session_start();
	include("./connectDB.php");
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
			<h2>สมัครสมาชิก</h2>

			<div id="register-detail">
				<div class="gra"></div>
				<div id="detail-input">
				<form action="register_check.php" method="post" >
					<input type="text" class="register-input clear-box" placeholder="Username*" name="username" required/>
					<input type="text" class="register-input" placeholder="E-mail address*" name="email" required/>
					<input type="password" class="fname" placeholder="รหัสผ่าน*" name="password" required/>
					<input type="password" class="lname" placeholder="ยืนยันรหัสผ่าน*" name="passwordcon" required/>
					<input type="text" class="fname" placeholder="ชื่อ*" name="firstname" required/>
					<input type="text" class="lname" placeholder="นามสกุล*" name="lastname" required/>
					<input type="text" class="register-input" placeholder="ข้อมูลเพิ่มเติม" name="moredetail" required/>
				</div>
				<input type="submit" id="button-register" value="สมัครสมาชิก" /></div>
				</form>
				
		</div> <!-- end wrapper-->
		
	</div><!-- box-list -->

	<div class="clear-box"></div>	
	<div class="box-height"></div>
		 
<? include('footer.php'); ?>

</body>
</html>