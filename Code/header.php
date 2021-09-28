<header>
<link rel = "stylesheet" href = "css/styleHeader.css">

</header>

<?php
$pgName = $_SESSION["pageName"];

if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['role'])){
	$_SESSION['role'] = "none";
}



	else if($_SESSION['role'] == "admin"){
	}
?>

<div id = "nav" class= "sticky-nav">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
    					<img class = "kelasLogo" src="picture/Logo.png"/>
    				</a>
        			
    				<div class="collapse navbar-collapse" id="navbarSupportedContent">
      					<ul class="navbar-nav me-auto mb-lg-0 ms-auto">
        					<li class="nav-item<?php if($pgName == "index") {echo "_active";} else{echo"";}  ?>">
         						<a class="nav-link" aria-current="page" href="index.php">Home</a>
        					</li>
							<li class="nav-item<?php if($pgName == "inputKriteria") {echo "_active";} else{echo"";}  ?>">
          						<a class="nav-link" href="InputKriteria.php">Pemilihan Tempat</a>
        					</li>
        				
        					<li class="nav-item<?php if($pgName == "review_tempat") {echo "_active";} else{echo"";}  ?>">
          						<a class="nav-link" href="ReviewTempat.php">Review Tempat</a>
        					</li>
        					<li class="nav-item<?php if($pgName == "about_us") {echo "_active";} else{echo"";}  ?>">
          						<a class="nav-link" href="about_us.php">About Us</a>
        					</li>
							<?php
							if($_SESSION['role'] == "admin"){
								?>
								
								<!-------------------->
								<li class = "nav-item dropdown" id = "profile<?php if($pgName == "maintenance") {echo "_active";} else{echo"";}  ?>">
        <a class = "nav-link dropdown-toggle" href = "#" id= "navbarDropdown" role = "button" data-bs-toggle="dropdown" aria-expanded="false"> Maintenance </a>

        <ul class = "dropdown-menu" aria-labelledby = "navbarDropdown">
         <li><a class = "dropdown-item" href="Maintenance.php"> Tempat Wisata </a></li>
         <li><a class = "dropdown-item" href="ReviewApproval.php?review_status=0"> Review Approval </a></li>
         
        </ul>
       </li>



							<?php } ?>

      					</ul>
						  <?php
                    if($_SESSION['role'] == "user"){
                    $id_user = $_SESSION['id_user'];
                    $sql = "SELECT nama_user FROM tabel_user WHERE tabel_user.id_user = '$id_user'";
                    $result=$connection->query($sql);
                    if($row=mysqli_fetch_assoc($result)){
                        $name = $row['nama_user'];
                    }
                    ?>
							<li class = "d-flex dropdown" id = "profile<?php if($pgName == "profile") {echo "_active";} else{echo"";}  ?>" style = "margin-right : 30px;">
        <a class = "nav-link dropdown-toggle" href = "#" id= "navbarDropdown" role = "button" data-bs-toggle="dropdown" aria-expanded="false"> Hello <?php echo $name;?>! </a>

        <ul class = "dropdown-menu" aria-labelledby = "navbarDropdown">
         
         <li><a class = "dropdown-item" href="ReviewHistory.php?review_status=0"> Review History </a></li>
         <li><a class = "dropdown-item" href="Logout.php"> Logout </a></li>
        </ul>
       </li>

	   
								
						<?php
							} else if($_SESSION['role'] == "admin"){
						?>
							<li class = "d-flex dropdown" id = "profile<?php if($pgName == "profile") {echo "_active";} else{echo"";}  ?>" style = "margin-right : 30px;">
        <a class = "nav-link dropdown-toggle" href = "#" id= "navbarDropdown" role = "button" data-bs-toggle="dropdown" aria-expanded="false"> Hello Admin! </a>

        <ul class = "dropdown-menu" aria-labelledby = "navbarDropdown">
         
         
         <li><a class = "dropdown-item" href="Logout.php"> Logout </a></li>
        </ul>
       </li>
						<?php
							} else{
						?>
						  <form class = "d-flex" action = "SignUp.php">
						  	<button id="btnLogin" class="btn btn-outline-success" >SIGN IN</button>
						  </form>
						  <?php }
						  ?>
      					
   					</div> <!-- end class collapse navabar-collapse-->
 				</div> <!-- end class container-fluid-->
			</nav> <!-- end class navbar navbar-expand-lg-->
		</div> <!-- end class sticky-nav-->


		

		