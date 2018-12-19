<?php
include "koneksi.php";

?>
<div align="center">
	<h2>Data</h2>
	<table width="983" border="1"  bgcolor="#FFFFFF" style="table-layout:fixed">
	<tr bgcolor="#CCCCCC">
		<th width="34">No</th>
		<th width="196" align="center">NIP</th>
		<th width="89" align="center">No Surat</th>
		<th width="114" align="center">Tanggal Surat</th>
		<th width="135" align="center">Untuk Tugas</th>
        <th width="102" align="center">Mulai Tugas</th>
        <th width="96" align="center">Sampai</th>
        <th width="111" align="center">Bertempat</th>
        <th width="48" align="center">Opsi</th>
	</tr>
    	
	<?php
	$no = 1;
	$query = "SELECT nip, no_surat, tgl_surat, utk_tgs, m_tgs, smp, bertempat FROM spd ORDER BY nip";
	$sql = mysql_query ($query);
	while ($hasil = mysql_fetch_array ($sql)) {
		$nip = $hasil['nip'];
		$no_surat = stripslashes ($hasil['no_surat']);
		$tgl_surat = stripslashes ($hasil['tgl_surat']);
		$utk_tgs = stripslashes ($hasil['utk_tgs']);
		$m_tgs = stripslashes ($hasil['m_tgs']);
		$smp = stripslashes ($hasil['smp']);
		$bertempat = stripslashes ($hasil['bertempat']);

		//tampilkan data
	?>
			<td><div align="center"><?php echo $no?></div></td>
			<td><div align="center"><?php echo $nip?></div></td>
			<td><div align="center"><?php echo $no_surat?></div></td>
			<td><div align="center"><?php echo $tgl_surat?></div></td>
			<td><div align="center"><?php echo $utk_tgs?></div></td>
            <td><div align="center"><?php echo $m_tgs?></div></td>
            <td><div align="center"><?php echo $smp?></div></td>
            <td><div align="center"><?php echo $bertempat?></div></td>
            
            <td width="48">
			<a href="index.php?page=edit2&nip=<?=$nip?>">Edit</a><br/>
			<a href="index.php?page=delete2&nip=<?=$nip?>" onClick="return confirm('Apakah Anda Yakin Hapus data?')">Hapus            </a></td>

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
