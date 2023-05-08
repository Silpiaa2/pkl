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
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <form action="insertform.php" method="POST">
            <fieldset border="0" width="100%" height="50px">
                <b>
                    <center>
                        <legend>Biodata</legend>
                    </center>
                    <table border="0" width="100%" height="50px">
                        <tr>
                            <td>No kavling</td>
                            <td>:</td>
                            <td><input type="text" name="Nokavling" placeholder="Masukkan No kavling..." /></td>
                        </tr>

                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="Nama" placeholder="Nama lengkap..." /></td>
                        </tr>

                        <tr>
                            <td>No KTP</td>
                            <td>:</td>
                            <td><input type="text" name="NoKTP" placeholder="No KTP..." /></td>
                        </tr>

                        <tr>
                            <td>Alamat Sesuai KTP</td>
                            <td>:</td>
                            <td><input type="text" name="AlamatsesuaiKTP" placeholder="Alamat..." /></td>
                        </tr>

                        <tr>
                            <td>Alamat domisili</td>
                            <td>:</td>
                            <td><input type="text" name="Alamatdomisili" placeholder="Alamat..." /></td>
                        </tr>

                        <tr>
                            <td>No hp</td>
                            <td>:</td>
                            <td><input type="text" name="Nohp" placeholder="No_hp..." /></td>
                        </tr>

                        <tr>
                            <td>Cara pembayaran</td>
                            <td>:</td>
                            <td>
                                <label class="radio-inline">
                                    <input type="radio" name="Carapembayaran" value="Cash">Cash</span>
                                    <input type="radio" name="Carapembayaran" value="Inhouse">Inhouse</span>
                                    <input type="radio" name="Carapembayaran" value="KPR">KPR</>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>Setiap Tanggal</td>
                            <td>:</td>
                            <td><input type="text" name="setiaptanggal" placeholder="Tanggal bayar cicilan.." /></td>
                        </tr>

                        <tr>
                            <td>Luas Bangunan</td>
                            <td>:</td>
                            <td><input type="text" name="Luasbangunan" placeholder="Luas..." /></td>
                        </tr>

                        <tr>
                            <td>Luas Tanah</td>
                            <td>:</td>
                            <td><input type="text" name="Luastanah" placeholder="Luas..." /></td>
                        </tr>


                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td><input type="text" name="Harga" placeholder="harga..." /></td>
                        </tr>

                        <tr>
                            <td> Jumlah UTJ</td>
                            <td>:</td>
                            <td><input type="text" name="JumlahUTJ" placeholder="Jumlah..." /></td>
                        </tr>

                        <tr>
                            <td>Tanggal UTJ</td>
                            <td>:</td>
                            <td><input type="date" name="TanggalUTJ" placeholder="tanggal..." /></td>
                        </tr>
                        <tr>
                            <td>Lama cicilan</td>
                            <td>:</td>
                            <td>
                                <div>
                                    <label><b>Awal ciclan</b></label>
                                    <input type="number" placeholder="Wajib 1" name="awal">
                                </div>
                                <div>
                                    <label><b>Akhir cicilan</b></label>
                                    <input type="number" placeholder="Lama cicilan yang diinginkan" name="akhir">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Catatan atau bonus</td>
                            <td>:</td>
                            <td><input type="text" name="Catatanbonus" placeholder="catatan..." /></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <input type="submit" name="submit" value="submit" />
                            </td>
                        <tr>
                            <td colspan="3">
                                <input type="reset" name="reset" value="reset" />
                            </td>
                    </table>
            </fieldset>
        </form>
    
</body>

</html>