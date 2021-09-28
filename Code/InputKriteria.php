<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Pemilihan Tempat</title>
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
        <link rel = "stylesheet" href = "css/styleInputKriteria.css">
    </head>
    <body>
      <div class="header-background">
          
      <?php include('connection.php'); ?>
      <?php session_start();
	$_SESSION["pageName"] = "inputKriteria";?> 
	<?php include('header.php');?>
	
         
    <div id = "BungkusForm">
      <h3>
          Masukkan Kriteria Tempat Wisata
      </h3>
    <div class = "main">
      <form action="HasilRanking.php" method="POST"> <!--INI BUAT FORMNYA-->
      <label for="exampleFormControlSelect2"style = "padding-bottom: 10px; text-align: center;">Masukkan kategori wisata:</label><br>
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
      <div class = "main">
          <h5>Kebersihan</h5>
          <input type = "range" min = "1" max = "5" name="kebersihan" value = "1" id = "sliderKebersihan">
          <div id = "selectorKebersihan">
              <div class = "SelectBtnKebersihan">
              </div>
              <div id = "SelectValueKebersihan">
              </div>
          </div>
      </div>

      <div class = "main">
          <h5>Harga</h5>
          <input type = "range" min = "1" max = "5" name="harga" value = "1" id = "sliderHarga">
          <div id = "selectorHarga">
              <div class = "SelectBtnHarga">
              </div>
              <div id = "SelectValueHarga">
              </div>
          </div>
      </div>

      <div class = "main">
          <h5>Tempat Makan</h5>
          <input type = "range" min = "1" max = "5" name="tempatmakan" value = "1" id = "sliderMakan">
          <div id = "selectorMakan">
              <div class = "SelectBtnMakan">
              </div>
              <div id = "SelectValueMakan">
              </div>
          </div>
      </div>

      <div class = "main">
          <h5>Transportasi</h5>
          <input type = "range" min = "1" max = "5" name="transportasi" value = "1" id = "sliderTransportasi">
          <div id = "selectorTransportasi">
              <div class = "SelectBtnTransportasi">
              </div>
              <div id = "SelectValueTransportasi">
              </div>
          </div>
      </div>

      <div class = "main">
          <h5>Sightseeing</h5>
          <input type = "range" min = "1" max = "5" name="sightseeing" value = "1" id = "sliderSightseeing">
          <div id = "selectorSightseeing">
              <div class = "SelectBtnSightseeing">
              </div>
              <div id = "SelectValueSightseeing">
              </div>
          </div>
        </div>
        
        <br>
        <button type="submit" id = "btnKirim" class="btn btn-primary">Kirim</button>
        </form>
    </div> <!--End of id bungkus form-->

    </div>
      <script>
          //Untuk Range Input Kebersihan
          var sliderKebersihan = document.getElementById("sliderKebersihan");
          var selectorKebersihan = document.getElementById("selectorKebersihan");
          var SelectValueKebersihan = document.getElementById("SelectValueKebersihan");

          SelectValueKebersihan.innerHTML = sliderKebersihan.value;

          sliderKebersihan.oninput = function(){
              SelectValueKebersihan.innerHTML = this.value;
              selectorKebersihan.style.left = (this.value-1) *25 + "%";
          }

          //Untuk Range Input Harga
          var sliderHarga = document.getElementById("sliderHarga");
          var selectorHarga = document.getElementById("selectorHarga");
          var SelectValueHarga = document.getElementById("SelectValueHarga");

          SelectValueHarga.innerHTML = sliderHarga.value;

          sliderHarga.oninput = function(){
              SelectValueHarga.innerHTML = this.value;
              selectorHarga.style.left = (this.value-1) *25 + "%";
          }

          //Untuk Range Input Tempat makan
          var sliderMakan = document.getElementById("sliderMakan");
          var selectorMakan = document.getElementById("selectorMakan");
          var SelectValueMakan = document.getElementById("SelectValueMakan");

          SelectValueMakan.innerHTML = sliderMakan.value;

          sliderMakan.oninput = function(){
              SelectValueMakan.innerHTML = this.value;
              selectorMakan.style.left = (this.value-1) *25 + "%";
          }

          //Untuk Range Input Transportasi
          var sliderTransportasi = document.getElementById("sliderTransportasi");
          var selectorTransportasi = document.getElementById("selectorTransportasi");
          var SelectValueTransportasi = document.getElementById("SelectValueTransportasi");

          SelectValueTransportasi.innerHTML = sliderTransportasi.value;

          sliderTransportasi.oninput = function(){
              SelectValueTransportasi.innerHTML = this.value;
              selectorTransportasi.style.left = (this.value-1) *25 + "%";
          }

          //Untuk Range Input Sightseeing
          var sliderSightseeing = document.getElementById("sliderSightseeing");
          var selectorSightseeing = document.getElementById("selectorSightseeing");
          var SelectValueSightseeing = document.getElementById("SelectValueSightseeing");

          SelectValueSightseeing.innerHTML = sliderSightseeing.value;

          sliderSightseeing.oninput = function(){
              SelectValueSightseeing.innerHTML = this.value;
              selectorSightseeing.style.left = (this.value-1) *25 + "%";
          }
          
      </script>
      <script src = "bootstrap/js/bootstrap.js"></script>
       
  </body>
</html>