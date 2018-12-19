<?php
include "koneksi.php";

if (isset($_GET['nip'])) {
	$nip = $_GET['nip'];
} else {
	die ("Error. Tidak Ada No Registrasi Selected! ");	
}
?>


<div>
	<?php
	//proses delete berita
	if (!empty($nip) && $nip != "") {
	$query = "DELETE FROM pegawai WHERE nip='$nip'";
	$sql = mysql_query ($query);
	if ($sql) {
	
	?><script>document.location.href="index.php?page=tampil"</script><?php
		} else {
			echo "<h2><font color=red>Data Gagal di Hapus !</font></h2>";	
		}
		echo "Klik <a href='index.php?page=tampil'>di sini</a> untuk kembali";
	} else {
		die ("Access Denied");	
	}
	?>
	
</div>