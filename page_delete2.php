<?php
include "koneksi.php";

if (isset($_GET['nip'])) {
	$nip = $_GET['nip'];
} else {
	die ("Error.! ");	
}
?>


<div>
	<?php
	//proses delete
	if (!empty($nip) && $nip != "") {
	$query = "DELETE FROM spd WHERE nip='$nip'";
	$sql = mysql_query ($query);
	if ($sql) {
	
	?>
	<script>document.location.href="index.php?page=tampil2"</script><?php
		} else {
			echo "<h2><font color=red>Data Gagal di Hapus !</font></h2>";	
		}
		echo "Klik <a href='index.php?page=tampil2'>di sini</a> untuk kembali";
	} else {
		die ("Access Denied");	
	}
	?>
	
</div>