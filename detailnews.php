<?php

	session_start();
	include("./connectDB.php");
	if(isset($_GET["news_id"])) {
		$news_id = $_GET["news_id"];
	}

	$sql = "SELECT * FROM news WHERE news_id='{$news_id}'";

	$query = mysqli_query($db_connect,$sql);
	$row = mysqli_fetch_array($query);

	while($rows = mysqli_fetch_array($query)) {
	$news_id = $row['news_id'];
	$news_subject = $row['news_subject'];
	$news_detail = $row['news_detail'];
	$news_pic = $row['news_pic'];
	}
?>

<? include('header.php'); ?>

	<div id="box-list">
		<div class="wrapper">

			<div id="head-nav">

           		<? include('head-menu.php'); ?>
	
			</div> <!-- head-nav -->
		
	<div class="clear-box"></div>	

	<div id="detail-pic">
			<div id="detail-1">
				<div class="detail-2"><img src="images/news/<? echo $row['news_pic'] ?>"></div>
			</div>	 		
	</div>
	<div class="clear-box"></div>

	<div id="detail-text">
			
			<div id="datail-news">
				<h2><? echo $row['news_subject'] ?></h2>
				<p><? echo $row['news_detail'] ?></p>
			</div>
	</div>

	</div><!-- box-wrapper -->

	<div class="clear-box"></div>
	
	
	</div><!-- end box-list-->
	<div class="clear-box"></div>
	<div class="box-height"></div>

<? include('footer.php'); ?>

</body>
</html>