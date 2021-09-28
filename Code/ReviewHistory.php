<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Pemilihan Tempat</title>
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
        <link rel = "stylesheet" href = "css/styleReviewHistory.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <style>
        #bungkus{
            background-color: white;
            margin-left: 10%;
            margin-right: 10%;
            padding-bottom: 30px;
        }
    </style>
    <body>
	<div class="header-background">
      <?php include('connection.php'); ?>
	    <?php session_start();
		$id_user = $_SESSION['id_user'];
		$_SESSION["pageName"] = "profile";
		?> 
	    <?php include('header.php');?>
          
	
          
    <div id="bungkus" style="margin-top:1%;">
    <div class="container">
	<h1 class="page-header text-center">Review History</h1>
	<div class="row">
		<div class="col-md-12">
			<select id="statuslist" class="btn btn-default" style="color: black; border-color: black;">
			<option value="0">All Status</option>
			<?php
				$arr_status = array("Pending", "Confirmed");
				foreach($arr_status as $status_value){
                    $status_name = isset($_GET['review_status']) ? $_GET['review_status'] : 0;
					$selected = ($status_name == $status_value) ? " selected" : "";
					echo "<option $selected value='".$status_value."'>".$status_value."</option>";
                }
			?>
			</select>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center align-middle">Tanggal</th>
				<th class="text-center align-middle">Nama Tempat Wisata</th>
				<th class="text-center align-middle">Kebersihan</th>
				<th class="text-center align-middle">Harga</th>
				<th class="text-center align-middle">Tempat Makan</th>
				<th class="text-center align-middle">Akomodasi Transportasi</th>
				<th class="text-center align-middle">Sightseeing</th>
				<th class="text-center align-middle">Status</th>
				<th class="text-center align-middle">Action</th>
			</thead>
			<tbody>
				<?php
					$where = "";
					if(isset($_GET['review_status']))
					{
						$rstatus=$_GET['review_status'];
                        if($rstatus == '0'){
							$where = " WHERE tabel_user.id_user='$id_user'";
                        }else{
                            $where = " WHERE tabel_review.status = '$rstatus' AND tabel_user.id_user='$id_user'";
                        }
					}
					$sql="SELECT * FROM tabel_review JOIN tabel_user ON tabel_review.id_user = tabel_user.id_user JOIN tabel_tempat_wisata ON tabel_review.id_wisata = tabel_tempat_wisata.id_wisata $where ORDER BY tabel_tempat_wisata.nama_tempat_wisata ASC";
					$query=$connection->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr class="text-center">
							<td style="width: 500px;" class="text-center align-middle"><?php echo $row['created_at']; ?></td>
							<td style="width: 500px;" class="text-center align-middle"><?php echo $row['nama_tempat_wisata']; ?></td>
							<td style="width: 100px;" class="text-center align-middle"><?php echo $row['kebersihan']; ?></td>
							<td style="width: 100px;" class="text-center align-middle"><?php echo $row['harga']; ?></td>
							<td style="width: 100px;" class="text-center align-middle"><?php echo $row['tempat_makan']; ?></td>
							<td style="width: 100px;" class="text-center align-middle"><?php echo $row['akomodasi_transportasi']; ?></td>
							<td style="width: 100px;" class="text-center align-middle"><?php echo $row['sightseeing']; ?></td>
							<td style="width: 500px;" class="text-center align-middle"><?php echo $row['status']; ?></td>
							<td style="width: 4000px;" class="text-center align-middle">
							<a href="#removereview<?php echo $row['id_review']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Remove</a>
							<?php include('RemoveReviewUser.php');?>
							
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
		$("#statuslist").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'ReviewHistory.php?review_status='+$(this).val();
			}
			else
			{
				window.location = 'ReviewHistory.php?review_status='+$(this).val();
			}
		});
	});
</script>
<script src = "bootstrap/js/bootstrap.js"></script>

</div>
  </body>

</html>