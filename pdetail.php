<?php

	session_start();
	include("./connectDB.php");
	if(isset($_GET["product_id"])) {
		$product_id = $_GET["product_id"];
	}
	if(isset($_POST["score"])) {
		$score = $_POST["score"];
	}
	else { $score = ''; }
	if(isset($_POST["result"])) {
		$result = $_POST["result"];
	}
	else { $result = ''; }

	$sql = "SELECT * FROM products
			WHERE product_id='{$product_id}'";

	$query = mysqli_query($db_connect,$sql);
	$row = mysqli_fetch_array($query);

	while($rows = mysqli_fetch_array($query)) {
	$product_id = $row['product_id'];
	$product_name = $row['product_name'];
	$product_price = $row['product_price'];
	$product_pic = $row['product_pic'];
	}
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

	<div class="product-pay">
		<script type="text/javascript">
			function startCalc(){ 
			interval = setInterval("calc()",1); 
			} 
			function calc(){ 
			one = document.autoForm.target.value; 
			two = document.autoForm.count.value; 

			document.autoForm.result.value = two * one; 
			} 
			function stopCalc(){ 
			clearInterval(interval); 
			} 
		</script>

		
		<div id="detail-r">
			<div class="img-product"><img src="images/Products/<?php echo $row['product_pic']; ?>"></div>

			<div class="detail-text-product">

			<div id="detail-text-1"><?php echo $row['product_name']; ?></div>
					<div id="detail-text-4">สั่งซื้อกับทางเว็บ</div>

					<form name="autoForm" action="sendpayment.php?product_id=<?php echo $row['product_id']; ?>" method="post"> 
						<div class="price-text">
						<div class="price-1">ราคา</div>
						<input class="price-2" type=text name="target" value="<? echo $row['product_price']; ?>" onFocus="startCalc();" onBlur="stopCalc();" readonly>
						<div class="price-1">บาท</div>
						</div>
						<div class="clear-box"></div>

						<div class="price-text">
						<div class="price-1">จำนวน</div>
						<div class="price-1">
							<input type="text" id="count" name="count" onFocus="startCalc();" onBlur="stopCalc();" required/>
						</div>
						<div class="price-1">ชุด</div>
					</div>
					<input id="result" type=text name="result" value="0" readonly>
					<input type="submit" id="button-pdetail" value="สั่งซื้อ"/>
					</form>		
					<!-- <a href="sendpayment.php?product_id=<?php echo $row['product_id']; ?>"> --><!-- </a> -->
				</div>
		</div>
	</div>

	<div class="clear-box"></div>
		<div class="box-height"></div>

		

	<div class="clear-box"></div>

		
	</div>
	</div><!-- end box-list-->

<div class="clear-box"></div>
<div class="box-height"></div>

<? include('footer.php'); ?>
					
</body>
</html>