<?php
include "koneksi.php";

if (isset($_GET['nip'])) {
	$nip = $_GET['nip'];
} else {
	die ("Error. Tidak ada no registrasi! ");	
}

$query = "SELECT  nip, nama, gol, jabatan FROM  pegawai WHERE nip='$nip'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$nip = $hasil['nip'];
$nama = stripslashes ($hasil['nama']);
$gol = stripslashes ($hasil['gol']);
$jabatan = stripslashes ($hasil['jabatan']);
//proses edit 
if (isset($_POST['Edit'])) {
	$nip = $_POST['hnip'];
	$nama = addslashes (strip_tags ($_POST['nama']));
	$gol = addslashes (strip_tags ($_POST['gol']));
	$jabatan= addslashes (strip_tags ($_POST['jabatan']));
	
	
	//update data
	$query = "UPDATE pegawai SET nama='$nama',gol='$gol',jabatan='$jabatan' WHERE nip='$nip'";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color=blue>Data  telah berhasil diedit</font></h2>";	
	} else {
		echo "<h2><font color=red>Data  gagal diedit</font></h2>";	
	}
}
?>
<div>
	<h2>Edit Data Anda</h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="661">
			
			<tr>
				<td width="118">NIP</td>
				<td width="425">: <b><?=$nip?></b></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="nama" size="40" maxlength="50" value="<?=$nama?>"></td>
			</tr>
			<tr>	 
			<td>Golongan</td>
				<td>: <input type="text" name="gol" size="40" maxlength="5" value="<?=$gol?>"></td>
			</tr>

			<td>Jabatan</td>
				<td>: <input type="text" name="jabatan" size="40" maxlength="100" value="<?=$jabatan?>"></td>
			</tr>
			
			
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;
				<input type="hidden" name="hnip" value="<?=$nip?>">
				<input type="submit" name="Edit" value="Edit Data">&nbsp;
				<input type="reset" name="reset" value="Reset"></td>
	  </table>
	</FORM>
</div>