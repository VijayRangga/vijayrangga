
<?php
include "koneksi.php";

//proses input berita
if (isset($_POST['Input'])) {
	$nip = addslashes (strip_tags ($_POST['nip']));
	$nama = addslashes (strip_tags ($_POST['nama']));
	$gol = addslashes (strip_tags ($_POST['gol']));
	$jabatan = addslashes (strip_tags ($_POST['jabatan']));
	
	
	if (strlen ($nip) <= 0) {
		die ("nip Harus di Isi !!!");	
	}
	
	//insert ke tabel
	$query = "INSERT INTO pegawai VALUES('$nip','$nama','$gol','$jabatan')";
	$sql = mysql_query ($query) or die (mysql_error());
	if ($sql) {
		echo "<h2><font color=blue>Data telah berhasil ditambahkan</font></h2>";	
	} else {
		echo "<h2><font color=red>Data gagal ditambahkan</font></h2>";	
	}
}
?>
<div align="center">
	<h2>Input Data </h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table width="505">
			
			<tr>
				<td width="116">NIP</td>
				<td width="359">: 
			  <input type="text" name="nip" size="18" maxlength="18"></td>
			</tr>
			<tr>
			
			
			<tr>
				<td width="116">Nama</td>
				<td width="359">: 
			  <input type="text" name="nama" size="25" maxlength="50"></td>
			</tr>
			<tr>
			
			
			<tr>
				<td width="116">Golongan</td>
				<td width="359">: 
			  <input type="text" name="gol" size="5" maxlength="5"></td>
			</tr>
			<tr>
			
			
			<tr>
				<td width="116">Jabatan</td>
				<td width="359"> : <textarea input type="text" name="jabatan"  maxlength="100"></textarea></td>
			</tr>
			<tr>
			
			
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Data">&nbsp;
				<input type="reset" name="reset" value="Reset"></td>
			</tr>
	  </table>
	</FORM>
</div>