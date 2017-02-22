<?php
	session_start();
	include("./connectDB.php");

	if(isset($_POST["donatewat"]))
	{
		$donatewat = $_POST["donatewat"];				
	}
	else { $donatewat = ''; }

	if(isset($_POST["namewat"]))
	{
		$namewat = $_POST["namewat"];				
	}
	else { $namewat = ''; }

	if(isset($_POST["districtwat"])) {
		$districtwat = $_POST["districtwat"];
	}
	else { $districtwat = ''; }

	$sql = "INSERT INTO donate (donate_money,donate_temple,donate_district) 
	VALUES ('$donatewat','$namewat','$districtwat')";
	$query = mysqli_query($db_connect,$sql); 
?>
<? include('header.php'); ?>

	<div id="box-list">
		<div class="wrapper">

			<div id="head-nav">

           		<? include('head-menu.php'); ?>
	
			</div> <!-- head-nav -->

		<div id="payment">
			<h2>ที่อยู่สำหรับจัดส่ง</h2>

			<div id="payment-detail">
				<div class="gra"></div>
				<div id="detail-input">
				<form action="register_check.php" method="post">
					<input type="text" class="fname" placeholder="ชื่อ" name="firstname" required/>
					<input type="text" class="lname" placeholder="นามสกุล" name="lastname" required/>
					<input type="text" class="register-input clear-box" placeholder="เบอร์โทรศัพท์" name="phone" required/>
					<input type="text" class="register-input clear-box" placeholder="<?php echo $namewat;?>" name="namewat" required/>
					<input type="text" class="register-input" placeholder="<?php echo $districtwat;?>" name="districtwat" required/>
					<input type="text" class="day" placeholder="วันที่" name="day" required/>
					<input type="text" class="day" placeholder="เดือน" name="month" required/>
					<input type="text" class="day clear-day" placeholder="ปี" name="year" required/>					
					<input type="text" class="register-input" placeholder="เพิ่มเติม" name="moredetail" required/>
				</div>
				<div id="subnews">*เก็บเงินปลายทาง<br>
				**จัดส่งภายในกรุงเทพฯเท่านั้น</div>
				<input type="submit" id="button-payment" value="ส่งข้อมูล" /></div>
				</form>
				
		</div> <!-- end wrapper-->
		
	</div><!-- box-list -->

	<div class="clear-box"></div>	
	<div class="box-height"></div>
		 
<footer>
	<div id="text-foot">
		<div id="newletter">
			
			<p>รับข่าวสารจากทางเว็บ</p>
			<input type="text" id="news-sub" placeholder="E-mail"/>
			<a href="#"><i class="fa fa-arrow-circle-o-right fa-lg"></i></a>
		</div>
		<div id="footer-list">
			<div class="place-foot">
				<ul>
					<h3>สถานที่ทำบุญแนะนำ</h3>
					<li>เขตห้วยขวาง</li>
					<li>เขตพระนคร</li>
					<li>เขตคลองเตย</li>
					<li>เขตบางซื่อ</li>
				</ul>
			</div>
			<div class="place-foot">
				<ul>
					<h3>กิจกรรมและข่าวสาร</h3>
					<li>เขตห้วยขวาง</li>
					<li>เขตพระนคร</li>
				</ul>
			</div>
			<div class="place-foot">
				<ul>
					<h3>ติดต่อ</h3>	
					<ul class="fa-ul">				
					<li><i class="fa-li fa fa-phone-square"></i>+66 91111 1111</li>
					<li><i class="fa-li fa fa-envelope"></i>tumbun@gmail.com</li>
					<li><i class="fa-li fa fa-map-marker"></i>555 Ratchada Road<br> Bangkok  10300</li>
					</ul>
				</ul>
			</div>

		</div>
	</div>
</footer>
<div id="copyright"><i class="fa fa-copyright"></i>​ 2016 All Rights Reserved.</div>

</body>
</html>