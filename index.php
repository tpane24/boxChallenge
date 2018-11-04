<!DOCTYPE html>
<?php
	if(isset($_GET['size'])) {
		$size = filter_var($_GET['size'], FILTER_SANITIZE_STRING);
	} else {
		$size = "100";
	}
 ?>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row align-items-center">
		    <div class="col">
		      <!-- One of three columns -->
		    </div>
		    <div class="col">
		      <div id="blueBox">
			<div id="greenBox">
			 <div id="redBox"></div>
			</div>
		      </div>
		    </div>
		    <div class="col">
		      <!-- One of three columns -->
		    </div>
		  </div>
		</div>
	</body>
	<?php
		$redBox = $size;
		$greenBox = $size+100;
		$blueBox = $size+200;
	?>
	<style media="screen">
	.row {
		background-color: white;
		height: 100%;
		position: absolute;
		width : 100%;
	}
	#blueBox {
		height: <?php echo $blueBox.'px'; ?>;
		width: <?php echo $blueBox.'px'; ?>;
		background-color:blue;
		margin: auto;
		text-align: center;
	}
	#greenBox {
		height: <?php echo $greenBox.'px'; ?>;
		width: <?php echo $greenBox.'px'; ?>;
		background-color: green;
		display: inline-block;
		margin-top: 50px;
		text-align: center;
	}
	#redBox {
		height: <?php echo $redBox.'px'; ?>;
		width: <?php echo $redBox.'px'; ?>;
		background-color: red;
		display: inline-block;
		margin-top: 50px;
	}
	</style>
</html>
