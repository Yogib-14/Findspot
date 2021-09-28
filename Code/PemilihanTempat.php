<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Pemilihan Tempat</title>
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
        <link rel = "stylesheet" href = "css/stylePemilihanTempat.css">
    </head>
    <body>
        <div class="header-background">
            
        <?php include('connection.php'); ?>
      <div id = "nav" class= "sticky-nav">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
    					<img class = "kelasLogo" src="picture/Logo.png"/>
    				</a>
        			
    				<div class="collapse navbar-collapse" id="navbarSupportedContent">
      					<ul class="navbar-nav me-auto mb-lg-0 ms-auto">
        					<li class="nav-item">
         						<a class="nav-link" aria-current="page" href="index.php">Home</a>
        					</li>
       						<li class="nav-item_active">
          						<a class="nav-link" href="InputKriteria.php">Pemilihan Tempat</a>
        					</li>
        				
        					<li class="nav-item">
          						<a class="nav-link" href="ReviewTempat.php">Review Tempat</a>
        					</li>
        					<li class="nav-item">
          						<a class="nav-link" href="about_us.php">About Us</a>
        					</li>

      					</ul>
      					
   					</div>
 				</div>
			</nav>
		</div>
	

        <section id = "bungkusForm">
        <h5>Masukkan informasi di bawah ini</h5>
        
        <form action="InputKriteria.php">
            

            <div class="form-group">
                <br>
                <label for="exampleFormControlSelect2"style = "padding-bottom: 10px;">Masukkan kategori wisata:</label><br>
                <select class="custom-select" id="kategori" name="kategori">
                  <option value="0">All</option>
                  <?php 
                      $sql = "SELECT * FROM tabel_kategori";
                      $query=$connection->query($sql);
                      while($row=$query->fetch_array()){
                      ?>
                      <option value="<?php echo $row['id_kategori'];?>"><?php echo $row["nama_kategori"];?></option>
                      <?php
                      }
                  ?>
                </select>
              </div>
            <br>
            
            <button type="submit" id="btnSubmit" class="btn btn-primary">Kirim</button>
          </form>


        </section>
        <script src = "bootstrap/js/bootstrap.js"></script>
        
        </div>
    </body>
    
</html>