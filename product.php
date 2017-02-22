<?php
	session_start();
	include("./connectDB.php");	

	$sql = "SELECT * FROM products";

	$query = mysqli_query($db_connect,$sql);
	$row = mysqli_fetch_array($query);

	$product_id = $row['product_id'];
	$product_name = $row['product_name'];
	$product_price = $row['product_price'];
	$product_pic = $row['product_pic'];
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
		
			<div id="temple-text-1">สินค้า</div>
			<div id="temple-text-2">สินค้าทั้งหมดของทางร้าน</div>

			<div class="pic-news">			
					<a href="pdetail.php?product_id=<?php echo $product_id; ?>" class="hvr-reveal"><div class="img-tag-news">
						<div class="tag-text-news">
						<div class="text-news-edit"><?php echo $product_name; ?></div> 								
					</div>
						<img src="images/<?php echo $product_pic; ?>"></div>		
				</a>			
			</div>

			<? while($row = mysqli_fetch_array($query)) {  ?> 
			<div class="pic-news">
				<a href="pdetail.php?product_id=<?php echo $row['product_id']; ?>" class="hvr-reveal">			
					<div class="img-tag-news">
						<div class="tag-text-news">
						<div class="text-news-edit"><?php echo $row['product_name']; ?></div>		
					</div>
						<img src="images/<?php echo $row['product_pic']; ?>"></div>	
				</a>			
			</div>

			<?  } ?>	
		</div>		
	</div><!-- box-temple	 -->
	</div><!-- end box-list-->

<div class="clear-box"></div>

<div id="ad">

</div>
	<div class="clear-box"></div>	
					
<? include('footer.php'); ?>

</body>
</html>