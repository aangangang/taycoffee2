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
		
	<div class="clear-box"></div>

	<div id="box-temple">
		<div class="wrapper">
		
			<div id="temple-text-1">โปรโมชั่น</div>
			<div id="temple-text-2">รวบรวบโปรโมชั่นทั้งหมด</div>

			<div class="temple-1"><a href="detail.php?Temple_id=310" class="hvr-reveal">

				<div class="temple-r">
					<div class="temple-r-1">โปรโมชั่นคู่รัก</div>
					<div class="temple-r-2">เฉพาะเดือนกุมภาพันธ์เท่านั้น ที่คู่รักทุกคู่จะกุมมือมาดืมกาแฟสดที่ร้านทวายคอฟฟี่ รับสิทธิ์ประโยชน์มากมาย</div>
				</div>
				<div class="temple-l"><img src="images/temple1.jpg"></div></a>
				<div class="temple-foot"></div>
			</div>


			<div class="temple-1"><a href="detail.php?Temple_id=2" class="hvr-reveal">
				<div class="temple-r">
					<div class="temple-r-1">โปรโมชั่นกุมภา</div>
					<div class="temple-r-2">เฉพาะเดือนกุมภาพันธ์เท่านั้น ที่จะไม่น้อยหน้าคนมีคู่มาดื่มกาแฟสดที่ร้านทวายคอฟฟี่ รับสิทธิ์ประโยชน์มากมาย </div>
				</div>
				<div class="temple-l"><img src="images/temple2.jpg"></div></a>
				<div class="temple-foot"></div>
			</div></a>

			<div class="clear-box"></div>

			<div class="temple-1"><a href="detail.php?Temple_id=450" class="hvr-reveal">
				<div class="temple-r">
					<div class="temple-r-1">โปรโมชั่นคนพิเศษ</div>
					<div class="temple-r-2">ยิ่งดื่ม  ยิ่งได้กาแฟมาก สุดคุ้มกับทางร้านที่มอบสิทธิ์ประโยชน์ให้คุณ</div>
				</div>
				<div class="temple-l"><img src="images/temple3.jpg"></div></a>
				<div class="temple-foot"></div>
			</div></a>

			
		</div>
	</div><!-- box-temple -->
	
	</div><!-- end box-list-->

<div class="clear-box"></div>
					
<? include('footer.php'); ?>

</body>
</html>