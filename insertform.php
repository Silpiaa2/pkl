<!DOCTYPE html>
<html>

<head>
    <title>Biodata</title>
    <style>
    fieldset {
        width: 400px;
        border-color: black;
        background: #daeaf6
    }
    </style>
</head>

<body bgcolor="CCDOFF">
    <center>
        <form action="sprpdf.php" method="POST">
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <?php   
include "koneksii.php";
if(isset($_POST['submit'])){
    $Nokavling = $_POST['Nokavling'];
    $Nama = $_POST['Nama'];
    $NoKTP = $_POST['NoKTP'];
    $AlamatsesuaiKTP = $_POST['AlamatsesuaiKTP'];
    $Alamatdomisili = $_POST['Alamatdomisili'];
    $Nohp = $_POST['Nohp'];
    $Carapembayaran  = $_POST['Carapembayaran'];
    $setiaptanggal = $_POST['setiaptanggal'];
    $Luasbangunan = $_POST['Luasbangunan'];
    $Luastanah = $_POST['Luastanah'];
    $Harga = $_POST['Harga'];
    $JumlahUTJ =$_POST['JumlahUTJ'];
    $TanggalUTJ = $_POST['TanggalUTJ'];
    $Catatanbonus = $_POST['Catatanbonus'];
    switch(true){
    case ($Nokavling == true && $Nama == true && $NoKTP == true && $AlamatsesuaiKTP== true && $Alamatdomisili == true && $Nohp == true && $Carapembayaran == true && $setiaptanggal == true && $Luasbangunan == true && $Luastanah == true && $Harga == true && $JumlahUTJ == true && $TanggalUTJ == true && $Catatanbonus == true):
        echo "<table>";
        echo "<tr><td>Nokavling</td><td>:</td><td>$Nokavling</td></tr>";
        echo "<tr><td>Nama</td><td>:</td><td>$Nama</td></tr>";
        echo "<tr><td>No KTP</td><td>:</td><td>$NoKTP</td></tr>";
        echo "<tr><td>Alamat sesuaiKTP</td><td>:</td><td>$AlamatsesuaiKTP</td></tr>";
        echo "<tr><td>Alamat domisili</td><td>:</td><td>$Alamatdomisili</td></tr>";
        echo "<tr><td>No hp</td><td>:</td><td>$Nohp</td></tr>";
        echo "<tr><td>Cara pembayaran</td><td>:</td><td>$Carapembayaran</td></tr>";
        echo "<tr><td>Setiap Tanggal</td><td>:</td><td>$setiaptanggal</td></tr>";
        echo "<tr><td>Luas Bangunan</td><td>:</td><td>$Luasbangunan</td></tr>";
        echo "<tr><td>Luas Tanah</td><td>:</td><td>$Luastanah</td></tr>";
        echo "<tr><td>Harga</td><td>:</td><td>$Harga</td></tr>";
        echo "<tr><td>Jumlah UTJ</td><td>:</td><td>$JumlahUTJ</td></tr>";
        echo "<tr><td>Tanggal UTJ</td><td>:</td><td>$TanggalUTJ</td></tr>";
        echo "<tr><td>Catatan / bonus</td><td>:</td><td>$Catatanbonus</td></tr>";
        echo "</table>";
    }
    }
?>
<?php
include "koneksii.php";
$nilai_awal = $_POST["awal"];
$nilai_akhir = $_POST["akhir"];

if (empty($_POST["awal"]) && ($nilai_akhir = $_POST["akhir"])) {
    echo "Nilai awal kosong.";
} elseif (empty($_POST["akhir"]) && ($nilai_awal = $_POST["awal"])) {
    echo "Nilai akhir kosong.";
} elseif (empty($_POST["awal"]) && empty($_POST["akhir"])) {
    echo "Nilai awal dan akhir kosong.";
} 
         else {
         echo "Tahap Cicilan: <br>";
         for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
         if($i % 2 == 0){
         echo "<br>  <input type='text' name='cicilan' placeholder='Tahap'/>";
         echo "<input type='text' name='nominal'placeholder='harga'/>";
         echo "<input type='date' name='tanggal'/><br>";
          } else {
          echo "<br> <input type='text' name='cicilan'placeholder='Tahap'/>";
          echo "<input type='text' name='nominal'placeholder='harga'/>";
          echo " <input type='date' name='tanggal'/><br>";
          $sql="INSERT INTO penjualan_detail VALUES (cicilan,nominal,tanggal) VALUES ('".$nilai_awal."','".$nilai_akhir."')";
          mysqli_query($sql);
}
    }
}
?>
            <input type="submit" name="print" value="submit" />
        </center>
    </body>
</form>

</html>