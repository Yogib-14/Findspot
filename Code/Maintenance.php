<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Pemilihan Tempat</title>
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
        <link rel = "stylesheet" href = "css/styleMaintenance.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    
    <body>
      <div class="header-background">
          
	<?php 
    include('connection.php');?>
    <?php session_start();
	$_SESSION["pageName"] = "maintenance";?> 
	<?php include('header.php');?>
          
    <div id="bungkus">
    <div class="container">
	<h1 class="page-header text-center">Maintenance</h1>
	<div class="row">
		<div class="col-md-12">
			<select id="kategorilist" class="btn btn-default" style="color: black; border-color: black;">
			<option value="0">All Category</option>
			<?php
				$sql="SELECT * FROM tabel_kategori";
				$cquery=$connection->query($sql);
				while($krow=$cquery->fetch_array()){
					$idkategori = isset($_GET['kategori']) ? $_GET['kategori'] : 0;
					$selected = ($idkategori == $krow['id_kategori']) ? " selected" : "";
					echo "<option $selected value=".$krow['id_kategori'].">".$krow['nama_kategori']."</option>";
				}
			?>
			</select>
			<a href="#addtempat" data-toggle="modal" class="pull-right btn btn-primary"><span class="fa fa-plus"></span> Tempat Wisata</a>
			<?php include('addtempat.php'); ?>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead class="text-center">
				<th>Kategori</th>
				<th>Kota</th>
				<th>Nama Tempat Wisata</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$where = "";
					if(isset($_GET['kategori']))
					{
						$idkategori=$_GET['kategori'];	
						$where = " WHERE tabel_kategori.id_kategori = $idkategori";
					}
					$sql="SELECT * FROM tabel_tempat_wisata JOIN tabel_kota ON tabel_tempat_wisata.id_kota = tabel_kota.id_kota JOIN tabel_kategori ON tabel_tempat_wisata.id_kategori=tabel_kategori.id_kategori $where ORDER BY tabel_kategori.nama_kategori ASC, tabel_tempat_wisata.nama_tempat_wisata ASC";
					$query=$connection->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr class="text-center">
							<td style="width: 500px;"><?php echo $row['nama_kategori']; ?></td>
							<td style="width: 500px;"><?php echo $row['nama_kota']; ?></td>
							<td style="width: 500px;"><?php echo $row['nama_tempat_wisata']; ?></td>
							<td style="width: 400px;">
								<a href="#edittempat<?php echo $row['id_wisata']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="fa fa-pencil"></span> Edit</a> ||
								<?php include('edittempat.php');?>
								<a href="#deletetempat<?php echo $row['id_wisata']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
								<?php include('deletetempat.php');?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>	
    </div>
    <script type="text/javascript">
	$(document).ready(function(){
		$("#kategorilist").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'Maintenance.php';
			}
			else
			{
				window.location = 'Maintenance.php?kategori='+$(this).val();
			}
		});
	});
</script>
<script src = "bootstrap/js/bootstrap.js"></script>
</div>
  </body>

</html>