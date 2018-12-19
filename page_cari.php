<style type="text/css">
<!--
.style3 { color: #FF0000;
font-weight: bold;
}
-->
</style>
<body bgcolor="#999999">


<strong>Masukkan Perusahaan Ingin Anda Cari :</strong><br>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" name="pencarian" id="pencarian">
<input type="text" name="search" id="search">
<input type="submit" name="submit" id="submit" value="CARI"></form>


<table width="753" border="1" bgcolor="#FFFFFF" style="table-layout:fixed">
<tr bgcolor="#00FF00">
<th width="24">No</th>
<th width="171" align="center">Nomor Barang</th>
<th width="116" align="center">Perusahaan</th>
<th width="105" align="center">Paket</th>
<th width="92" align="center">Kontrak</th>
<th width="94" align="center">Pengadaan</th>
<th width="105" align="center">Evaluasi</th>
</tr>
</table>


<?php
include"koneksi.php";

// menampilkan data
if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {
$search = $_POST['search'];
$sql = mysql_query("SELECT * FROM penyediaan_barang WHERE perusahaan LIKE '$search%' ") or die(mysql_error());

//menampilkan jumlah hasil pencarian
$no = 0;
$jumlah = mysql_num_rows($sql);
if ($jumlah >0) {
echo "OK";

while ($hasil = mysql_fetch_array ($sql)) {
$nomor = $hasil['nomor'];
$perusahaan = stripslashes ($hasil['perusahaan']);
$paket = stripslashes ($hasil['paket']);
$kontrak = stripslashes ($hasil['kontrak']);
$pengadaan = stripslashes ($hasil['pengadaan']);
$evaluasi = stripslashes ($hasil['evaluasi']);
$no++;

//tampilkan Pasien
?>

<table width="755" border="1" bgcolor="#FFFFFF" style="table-layout:fixed">
<tr align="center">
<td width="22"><div align="center"><?=$no?></div></td>
<td width="174"><div align="center"><?=$nomor?></div></td>
<td width="104" bgcolor="#3399FF"><div align="center"><?=$perusahaan?></div></td>
<td width="114"><div align="center"><?=$paket?></div></td>
<td width="92"><div align="center"><?=$kontrak?></div></td>
<td width="97"><div align="center"><?=$pengadaan?></div></td>
<td width="106"><div align="center"><?=$evaluasi?></div></td>
</tr>
</table>

<?php
}
}
else {
// menampilkan pesan zero data
echo 'Maaf, hasil pencarian tidak ditemukan.';
}
}
//else { echo '';}
?>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('ul#tools').prepend('<li class="print"><a href="#print"><img src="images/printer1.png" height="50" width="50">Print Halaman Ini</a></li>');
$('ul#tools li.print a').click(function() {
window.print();
return false;
});
});
</script>