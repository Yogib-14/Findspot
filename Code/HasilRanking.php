<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Pemilihan Tempat</title>
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
        <link rel = "stylesheet" href = "css/styleHasilRanking.css">
    </head>
    <body>
        <?php
        include('connection.php');
        $kategori = $_POST["kategori"];
        $bobotkebersihan = $_POST["kebersihan"];
        $bobotharga = $_POST["harga"];
        $bobottransportasi = $_POST["transportasi"];
        $bobottempatmakan = $_POST["tempatmakan"];
        $bobotsightseeing = $_POST["sightseeing"];
        
        if($kategori == 0){
            $where = "WHERE tabel_review.status = 'Confirmed'";
        }else{
            $where = "WHERE tabel_tempat_wisata.id_kategori = $kategori AND tabel_review.status = 'Confirmed'";
        }

        $kebersihan = array();
        $harga = array();
        $tempatmakan = array();
        $transportasi = array();
        $sightseeing = array();
        $sum_kriteria = array();
        $i=0;
        $pembagi = array($bobotkebersihan, $bobotharga, $bobottempatmakan, $bobottransportasi, $bobotsightseeing);

        while($i<5){
            $kebersihan[$i] = $bobotkebersihan/$pembagi[$i];
            $harga[$i] = $bobotharga/$pembagi[$i];
            $tempatmakan[$i] = $bobottempatmakan/$pembagi[$i];
            $transportasi[$i] = $bobottransportasi/$pembagi[$i];
            $sightseeing[$i] = $bobotsightseeing/$pembagi[$i];
            $sum_kriteria[$i] = $kebersihan[$i] + $harga[$i] + $tempatmakan[$i] + $transportasi[$i] + $sightseeing[$i];
            $i++;
        }

        $kebersihan_2 = array();
        $harga_2 = array();
        $tempatmakan_2 = array();
        $transportasi_2 = array();
        $sightseeing_2 = array();

        $i=0;
        while($i<5){
            $kebersihan_2[$i] = $kebersihan[$i]/$sum_kriteria[$i];
            $harga_2[$i] = $harga[$i]/$sum_kriteria[$i];
            $tempatmakan_2[$i] = $tempatmakan[$i]/$sum_kriteria[$i];
            $transportasi_2[$i] = $transportasi[$i]/$sum_kriteria[$i];
            $sightseeing_2[$i] = $sightseeing[$i]/$sum_kriteria[$i];
            $i++;
        }

        $kebersihan_hasil = array_sum($kebersihan_2)/count($kebersihan_2);
        $harga_hasil = array_sum($harga_2)/count($harga_2);
        $tempatmakan_hasil = array_sum($tempatmakan_2)/count($tempatmakan_2);
        $transportasi_hasil = array_sum($transportasi_2)/count($transportasi_2);
        $sightseeing_hasil = array_sum($sightseeing_2)/count($sightseeing_2);      


        
        $nama_tempat = array();
        $nama_kota = array();
        $nama_kategori = array();
        $kebersihan_tempat = array();
        $harga_tempat = array();
        $tempatmakan_tempat = array();
        $transportasi_tempat = array();
        $sightseeing_tempat = array();
        $gmaps = array();


        $sql = "SELECT gmaps, nama_tempat_wisata, nama_kota, nama_kategori, AVG(kebersihan) as 'kebersihan', AVG(harga) as 'harga', AVG(tempat_makan) as 'tempat_makan', AVG(akomodasi_transportasi) as 'akomodasi_transportasi', AVG(sightseeing) as 'sightseeing' FROM tabel_review JOIN tabel_tempat_wisata ON tabel_review.id_wisata = tabel_tempat_wisata.id_wisata JOIN tabel_kota ON tabel_tempat_wisata.id_kota=tabel_kota.id_kota JOIN tabel_kategori ON tabel_kategori.id_kategori = tabel_tempat_wisata.id_kategori $where GROUP BY tabel_tempat_wisata.nama_tempat_wisata";
        $query=$connection->query($sql);        
        $i=0;
        while($row=$query->fetch_array()){
            $nama_tempat[$i] = $row['nama_tempat_wisata'];
            $nama_kota[$i] = $row['nama_kota'];
            $nama_kategori[$i] = $row['nama_kategori'];
            $kebersihan_tempat[$i] = $row['kebersihan'];
            $harga_tempat[$i] = $row['harga'];
            $tempatmakan_tempat[$i] = $row['tempat_makan'];
            $transportasi_tempat[$i] = $row['akomodasi_transportasi'];
            $sightseeing_tempat[$i] = $row['sightseeing'];
            $gmaps[$i] = $row['gmaps'];
            $i++;
        }
        $jumlah_alternatif = sizeof($nama_tempat);

        $sum_kebersihan = array();
        $sum_harga = array();
        $sum_tempatmakan = array();
        $sum_transportasi = array();
        $sum_sightseeing = array();
        $i=0;
        while($i < $jumlah_alternatif){
            $sum_kebersihan[$i] = 0;
            $sum_harga[$i] = 0;
            $sum_tempatmakan[$i] = 0;
            $sum_transportasi[$i] = 0;
            $sum_sightseeing[$i] = 0;
            $i++;
        }

        
        $i=0;
        while($i < $jumlah_alternatif){
            $j=0;
            while($j < $jumlah_alternatif){
                $sum_kebersihan[$i] = $sum_kebersihan[$i] + ($kebersihan_tempat[$j]/$kebersihan_tempat[$i]);
                $sum_harga[$i] = $sum_harga[$i] + ($harga_tempat[$j]/$harga_tempat[$i]);
                $sum_tempatmakan[$i] = $sum_tempatmakan[$i] + ($tempatmakan_tempat[$j]/$tempatmakan_tempat[$i]);
                $sum_transportasi[$i] = $sum_transportasi[$i] + ($transportasi_tempat[$j]/$transportasi_tempat[$i]);
                $sum_sightseeing[$i] = $sum_sightseeing[$i] + ($sightseeing_tempat[$j]/$sightseeing_tempat[$i]);
                $j++;
            }

            $i++;
        }

        $i=0;
        

        $kebersihan_hasil_tempat = array();
        $harga_hasil_tempat = array();
        $tempatmakan_hasil_tempat = array();
        $transportasi_hasil_tempat = array();
        $sightseeing_hasil_tempat = array();

        $i=0;
        $j=0;
        while($i < $jumlah_alternatif){
            $kebersihan_hasil_tempat[$i] = ($kebersihan_tempat[$j]/$kebersihan_tempat[$i])/$sum_kebersihan[$i];
            $harga_hasil_tempat[$i] = ($harga_tempat[$j]/$harga_tempat[$i])/$sum_harga[$i];
            $tempatmakan_hasil_tempat[$i] = ($tempatmakan_tempat[$j]/$tempatmakan_tempat[$i])/$sum_tempatmakan[$i];
            $transportasi_hasil_tempat[$i] = ($transportasi_tempat[$j]/$transportasi_tempat[$i])/$sum_transportasi[$i];
            $sightseeing_hasil_tempat[$i] = ($sightseeing_tempat[$j]/$sightseeing_tempat[$i])/$sum_sightseeing[$i];
            $j++;
            $i++;
        }

        $hasil = array();

        $i=0;
        while($i < $jumlah_alternatif){
            $hasil[$i] = $kebersihan_hasil_tempat[$i]*$kebersihan_hasil + $harga_hasil_tempat[$i]*$harga_hasil + $tempatmakan_hasil_tempat[$i]*$tempatmakan_hasil + $transportasi_hasil_tempat[$i]*$transportasi_hasil + $sightseeing_hasil_tempat[$i]*$sightseeing_hasil;
            $i++;
        }
        array_multisort($hasil, SORT_DESC, SORT_NUMERIC, $nama_tempat, $nama_kota, $nama_kategori, $kebersihan_tempat, $harga_tempat, $tempatmakan_tempat, $transportasi_tempat, $sightseeing_tempat, $gmaps);
        ?>
      <div class="header-background">
      <?php include('connection.php'); ?>
            <?php session_start();
	        $_SESSION["pageName"] = "inputKriteria";?> 
	        <?php include('header.php');?>
          <section id = "bungkusHasil" style="padding:1%;">
              <h5>
                  Ranking tourism spot:
              </h5>
              <table class="table table-striped table-bordered">
                  <tr>
                    <th>Ranking:</th>
                    <th>Nama Tourism Spot:</th>
                    <th>Kota:</th>
                    <th>Kategori:</th>
                    <th>Hasil:</th>
                    <th>Maps</th>
                  </tr>
                  <?php
                  $i=0;
                  while($i<$jumlah_alternatif){
                      ?>
                      <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $nama_tempat[$i]; ?></td>
                        <td><?php echo $nama_kota[$i]; ?></td>
                        <td><?php echo $nama_kategori[$i]; ?></td>
                        
                        
                        <?php
                        
                        $hasil_round = $hasil[$i]*100;
                        ?>
                        <td><?php echo round($hasil_round, 2); echo" %"; ?></td>
                        <td><a style = "color: blue;" href="<?php echo $gmaps[$i]; ?>">Click here<a></td>
                      </tr>
                      <?php
                      $i++;
                  }
                  ?>
              </table>
              <button id = "btnSelesai" onclick="document.location='index.php'"  class="btn btn-primary">Selesai</button>
          </section>
          <script src = "bootstrap/js/bootstrap.js"></script>
        </div><!-- end class header-background-->
    </body>
          
</html>