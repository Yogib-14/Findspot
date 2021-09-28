<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FindSpot Decision Support System</title>
	  

	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
	<link rel = "stylesheet" href = "css/styleProfile.css">
</head>
<body>

	<div class="header-background">
	<?php include('connection.php'); ?>
	<?php session_start();
	$_SESSION["pageName"] = "profile";?> 
	<?php include('header.php');?>
      
	
    
    
    <div id = "BungkusText">
	<?php
        if($_SESSION['role'] == "user"){
		    $id_user = $_SESSION['id_user'];
			$sql = "SELECT nama_user FROM tabel_user WHERE tabel_user.id_user = '$id_user'";
			$result=$connection->query($sql);
				if($row=mysqli_fetch_assoc($result)){
					$name = $row['nama_user'];
		}?>
		<h2 style = "text-align : center;">My Profile</h2>
		<img class = "foto_profil" src="picture/myProfile.png"/>
		<table style = "margin: auto;">
			<tr style = "padding: 20%;">
				<td style="padding-right: 20%; width = 50%; "> <p>Name:  <?php echo $name;}?></p> </td>
				<td style="padding-left: 20%;"> <button> Edit </button>
			</tr>
		</table>
		
    </div>

	

	
	<script src = "bootstrap/js/bootstrap.js"></script>
	
	
</body>

</html>