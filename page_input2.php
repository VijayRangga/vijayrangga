
<?php
include "koneksi.php";

//proses input 
if (isset($_POST['Input'])) {
	$nip = addslashes (strip_tags ($_POST['nip']));
	$no_surat = addslashes (strip_tags ($_POST['no_surat']));
	$tgl_surat = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl_surat'];
	$utk_tgs = addslashes (strip_tags ($_POST['utk_tgs']));
	$m_tgs = $_POST['thn']."-".$_POST['bln']."-".$_POST['m_tgs'];
	$smp = $_POST['thn']."-".$_POST['bln']."-".$_POST['smp'];
	$bertempat = addslashes (strip_tags ($_POST['bertempat']));
	
	
	if (strlen ($nip) <= 0) {
		die ("nip Harus di Isi !!!");	
	}
	
	//insert ke tabel
	$query = "INSERT INTO spd VALUES('$nip','$no_surat','$tgl_surat','$utk_tgs','$m_tgs','$smp','$bertempat')";
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
				<td width="116">No Surat</td>
				<td width="359">: 
			  <input type="text" name="no_surat" size="25" maxlength="5"></td>
			</tr>
			<tr>
			
			
			<tr>
				<td width="116">Tanggal Surat</td>
				<td width="359">:
              
              <select name="m_tgs">
				<?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
				</select> - 
				<select name="bln">
				<?php
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						echo "<option value='$bl'>$bl</option>";	
					}
				?>
				</select> - 
				<select name="thn">
				<?php
					for ($i=1965; $i<=2020; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
				?>
				</select>
              
              
              </td>
			</tr>
			<tr>
            
            <tr>
				<td width="116">Untuk Tugas</td>
				<td width="359">: 
			  <input type="text" name="utk_tgs" size="30" maxlength="30"></td>
			</tr>
			<tr>
			
             <tr>
				<td width="116">Mulai Tugas</td>
				<td width="359">: 
			  
              <select name="tgl_surat">
				<?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
				</select> - 
				<select name="bln">
				<?php
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						echo "<option value='$bl'>$bl</option>";	
					}
				?>
				</select> - 
				<select name="thn">
				<?php
					for ($i=1965; $i<=2020; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
				?>
				</select>
              
              
              
			</tr>
            
            <tr>
				<td width="116">Sampai</td>
				<td width="359">: 
			  
              
              <select name="smp">
				<?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
				</select> - 
				<select name="bln">
				<?php
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						echo "<option value='$bl'>$bl</option>";	
					}
				?>
				</select> - 
				<select name="thn">
				<?php
					for ($i=1965; $i<=2020; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
				?>
				</select>
              
              
			</tr>
            
            <tr>
				<td width="116">Bertempat</td>
				<td width="359">: 
			  <input type="text" name="bertempat" size="40" maxlength="50"></td>
			</tr>
			
			
			<tr>
			
			
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Data">&nbsp;
				<input type="reset" name="reset" value="Reset"></td>
			</tr>
	  </table>
	</FORM>
</div>