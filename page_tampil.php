<?php
include "koneksi.php";
?>

<div align="center">
	<h2>Data</h2>
	<table width="859" border="1"  bgcolor="#FFFFFF" style="table-layout:fixed">
	<tr bgcolor="#CCCCCC">
		<th width="39">No</th>
		<th width="165" align="center">NIP</th>
		<th width="256" align="center">Nama</th>
		<th width="120" align="center">Golongan</th>
		<th width="184" align="center">Jabatan</th>
        <th width="55" align="center">Opsi</th>
	</tr>
    	
	<?php
	$no = 1;
	$query = "SELECT nip, nama, gol, jabatan FROM pegawai ORDER BY nip";
	$sql = mysql_query ($query);
	while ($hasil = mysql_fetch_array ($sql)) {
		$nip = $hasil['nip'];
		$nama = stripslashes ($hasil['nama']);
		$gol = stripslashes ($hasil['gol']);
		$jabatan = stripslashes ($hasil['jabatan']);

		//tampilkan data
	?>
			<td><div align="center"><?php echo $no?></div></td>
			<td><div align="center"><?php echo $nip?></div></td>
			<td><div align="center"><?php echo $nama?></div></td>
			<td><div align="center"><?php echo $gol?></div></td>
			<td><div align="center"><?php echo $jabatan?></div></td>
            
            <td width="55">
			<a href="index.php?page=edit&nip=<?=$nip?>">Edit</a><br/>
			<a href="index.php?page=delete&nip=<?=$nip?>" onClick="return confirm('Apakah Anda Yakin Hapus data?')">Hapus            </a></td>

		</tr>	
	<?php $no++; }?>
  </table>
  
   

<div id="container">
<ul id="tools">
</ul>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-751954-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</p>
</div>
