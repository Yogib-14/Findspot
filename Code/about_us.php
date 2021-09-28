<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FindSpot Decision Support System</title>
	  

	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
	<link rel = "stylesheet" href = "css/styleAboutUs.css">
</head>
<body>

	<div class="header-background">
	<?php include('connection.php'); ?>
	<?php session_start();
	$_SESSION["pageName"] = "about_us";?> 
	<?php include('header.php');?>
      
	
    
    
    <div id = "BungkusText">
        <p>
            Findspot adalah sebuah website yang dapat membantu turis ataupun wisatawan dalam memilih tempat wisata yang terdapat di Bali. Dengan adanya website ini, diharapkan para wisatawan dan turis yang datang berkunjung ke Bali dapat memanfaatkan waktu kunjungannya dengan seoptimal mungkin dan dapat merasakan kepuasan setelah mengunjungi tempat - tempat yang telah direkomendasikan. 
        </p> <br><br>
 
        <p>
            Tim kami:<br>
            Alfonsus Kurniawan (00000018370)<br>
            Alvian Pratama (00000029687)<br>
            Andreas Yogi Brata (00000028611)<br>
            Natanael Benediktus (00000030405)<br>
            Steven Chandra (00000028429)<br>
            Ronaldo Christian (00000025074)<br>
            Saul Carlos Immanuel Simatupang (00000033371)<br>
            Erra Pratama Situmorang (00000026296)<br>


        </p>
    </div>

	

	
	<script src = "bootstrap/js/bootstrap.js"></script>
	</div>
	
</body>

</html>