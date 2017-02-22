<?php

	session_start();
	include("./connectDB.php");
	if(isset($_GET["Temple_id"])) {
		$Temple_id = $_GET["Temple_id"];
	}

	$sql = "SELECT * FROM Temples
			WHERE Temple_id='{$Temple_id}'";

	$query = mysqli_query($db_connect,$sql);
	$row = mysqli_fetch_array($query);

	while($rows = mysqli_fetch_array($query)) {
	$Temple_id = $row['Temple_id'];
	$Temple_name = $row['Temple_name'];
	$Temple_address = $row['Temple_address'];
	$Temple_district = $row['Temple_district'];
	$Temple_postcode = $row['Temple_postcode'];
	$Temple_discription = $row['Temple_discription'];
	$Temple_pic = $row['Temple_pic'];
	$Temple_icon = $row['Temple_icon'];
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

	<div id="detail-text">
			<div id="datail-l"><img src="images/<? echo $row['Temple_icon'] ?>"></div>
			<div id="datail-r">
				<h2><? echo $row['Temple_name'] ?></h2>
				<p><? echo $row['Temple_discription'] ?></p>
			</div>
	</div>

	</div><!-- box-wrapper -->

	<div class="clear-box"></div>

	
	</div><!-- end box-list-->
	</div>
	<div class="clear-box"></div>
	<div class="box-height"></div>

<? include('footer.php'); ?>

</body>
</html>