<?php   
include "koneksii.php";
if(isset($_POST['submit'])){
$Tahap_pembayaran = $_POST['Tahap_pembayaran'];
$Tanggal_pembayaran = $_POST['Tanggal_pembayaran'];
$query=mysqli_query ($koneksii,"INSERT INTO pembayaran VALUES('$Tahap_pembayaran','$Tanggal_pembayaran',)");
if ($query){

}
}
?>

<!DOCTYPE html>
<html>
<head>
 </head>
<body>
<center><img src="logo.png"height="15%" width="15%"><br>
 <b><p style="font-size: 18px;margin-bottom: 5px ;margin-top: 0px">Surat pembelian rumah</p></b>
 <b><p style="font-size: 13px;margin-top: 0px"> No. ...../RS/SPR/......../2023</p></b></center>
 <b><p style="font-size: 15px;margin-bottom: 5px ;margin-top: 0px">Telah Diterima dari Calon Pembeli</p></b>
 <?php
include "koneksii.php";
if(isset($_POST['Nokavling'])){
    $Nokavling = $_POST['Nokavling'];
}else{
    die("Nokavling salah");
}
        $sql = "SELECT * FROM penjualan WHERE Nokavling='$Nokavling'";
        $query = mysqli_query($koneksii, $sql);
        while ($result = mysqli_fetch_array($query)){
    echo "<table>";
      echo"  <tr>";
          echo"  <td size='90'>Pada Tanggal</td>";
          echo"<td>:".$result['TanggalUTJ']."</td>";
       echo" </tr>";
       echo" <tr>";
            echo"<td>Nama Pemesan</td>";
            echo"<td>:".$result['Nama']."</td>";
      echo"  </tr>";
        echo"<tr>";
            echo"<td>Alamat lengkap sesuai KTP</td>";
            echo"<td>:".$result['AlamatsesuaiKTP']."</td>";
        echo"</tr>";
       echo" <tr>";
           echo" <td>No Telp/Hp</td>";
            echo"<td>:".$result['Nohp']."</td>";
       echo" </tr>";
 echo" <tr>
        <td></td>
        <td></td>
        <td></td>";
       echo" <td>Uang Sebesar Rp.<b>".$result['JumlahUTJ'].",-</b> </td>";
        echo"<td></td>
        <td></td>
</table>";
echo"<table>
<b><p style='font-size: 15px;margin-bottom: '1px ;margin-top: 10px'>Guna membayar Pesanan Kavling untuk Pembelian Rumah</p></b>";
 echo" <table>";
     echo"  <tr>
        <td>Lokasi</td>
       <td>:</td>
       <td>Perumahan 'ROYAL SINGOSARI'</td>
       </tr>
          <tr>
            <td></td>
          <td></td>";
          echo"<td>kavling".$result['Nokavling']."</td></tr>";
          echo" <tr>
            <td></td>
            <td></td>";
            echo"<td>Luas bangunan ".$result['Luasbangunan']."m² Luas Tanah :".$result['Luastanah']." </td>";
       echo" </tr>
           <tr>";
          echo"  <td>Harga Jual</td>";
           echo" <td>: </td><td>" .$result['Harga']."</b></td>";
        echo"</tr>
</table>";
}
?>
        <b><p style="font-size: 15px;margin-bottom: 5px ;margin-top: 10px">Catatan</p></b>
		<i><p style="font-size: 13px;margin-bottom: 5px ;margin-top: 0px">•	Harga belum termasuk Biaya Perolehan Hak atas Tanah dan Banguna (BPHTB) sesuai dngan peraturan perundangan yang berlaku.</p></i>
		<i><p style="font-size: 13px;margin-bottom: 5px ;margin-top: 0px">•	Bilamana akan ada peningkatan spesifikasi/ penambahan bangunan, maka Harga Kesepakatan berikut Penambahan akan dicantumkan dalam dokumen Perjanjian Pendahuluan Jual Beli (PPJB) yang akan dibuat kemudian.</p></i>
		<i><p style="font-size: 13px;margin-bottom: 5px ;margin-top: 0px">•	Lampiran  SPR adalah copy identitas KTP / PASPOR / SIM yang masih berlaku</p></i>
       
        <?php   
$taahap = $_POST['taahap'];
$daate = $_POST['daate'];
$haarga = $_POST['haarga'];
$tahaap = $_POST['tahaap'];
$datee = $_POST['datee'];
$hargaa = $_POST['hargaa'];

switch(true){
case ($taahap == true && $daate == true && $haarga == true && $tahaap== true && $datee == true && $hargaa == true):
    echo "<table>";
    echo "<tr><td>Nokavling</td><td>:</td><td>$taahap</td></tr>";
    echo "<tr><td>Nama</td><td>:</td><td>$daate</td></tr>";
    echo "<tr><td>No KTP</td><td>:</td><td>$haarga</td></tr>";
    echo "<tr><td>Alamat sesuaiKTP</td><td>:</td><td>$tahaap</td></tr>";
    echo "<tr><td>Alamat domisili</td><td>:</td><td>$datee</td></tr>";
    echo "<tr><td>No hp</td><td>:</td><td>$hargaa</td></tr>";
    echo "</table>";
}
?>

	<script>
		window.print();
	</script>

</body>
</html>    