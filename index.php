<?
include "koneksi.php";

?>

<title>KanMenag</title> 
<body background="bg2.jpg">
    <div align="center">
      <table border="1" width="1000" height="130">
        <td align="center"><img src="header.png" width="990"></td>
    </table>
    
      <table border="1" width="1000">
        <td width="211" align="center" ><a href="index.php">Profil</a></td> 
       <td width="228" align="center" ><a href="index.php?page=input">Input Data Pegawai</a></td>
       <td width="227" align="center" > <a href="index.php?page=tampil">Tampil Data Pegawai</a></td>
       <td width="228" align="center" ><a href="index.php?page=input2">Input Data Surat</a></td>
       <td width="227" align="center" > <a href="index.php?page=tampil2">Tampil Data Surat</a></td>
        <td width="96" align="center" ><a href="index.php?page=about">Tentang</a></h4></td>
    </table>
    
      <table border="1" width="1000">
        <td width="848"  height="30" align="center"><p align="center"><span class="style1 style7">
          <marquee behavior="alternate" class="style7" onMouseOver="this.stop()" onMouseOut="this.start()">
          <strong></strong></marquee></span></p>
    </table>
    
      <table border="1" width="1000">
      </div>
    </div>
    <td width="800" align="center">
      
      <div align="center">
        <?php
$page = (isset($_GET['page']))? $_GET['page'] : "main"; 
switch ($page) {
	
	case 'input' : include "page_input.php"; break;
	case 'input2' : include "page_input2.php"; break;
	case 'edit'	: include "page_edit.php"; break;
	case 'edit2'	: include "page_edit2.php"; break;
	case 'delete' : include "page_delete.php"; break;
	case 'delete2' : include "page_delete2.php"; break;
	case 'tampil' : include "page_tampil.php"; break;
	case 'tampil2' : include "page_tampil2.php"; break;
	case 'about' : include "about.php"; break;
	case 'main' :
	default : include 'utama.php';	
}
?>
        
        
        
        Programmer by : @vj_ranggaa </div>
</body>
</html>
</td>
</table>

<table border="1" width="1000">


<td width="70" align="center">
<?php
$tgl=date('l, d-m-Y');
echo $tgl;
?>
</td>



</td>
<td width="80" align="center"> <><marquee behavior="alternate" onMouseOver="this.stop()" onMouseOut="this.start()">----</marquee></a></td>





<td width="70" align="center">


    <script type="text/javascript"> 
    // 1 detik = 1000 
    window.setTimeout("waktu()",1000);   
    function waktu() {    
        var tanggal = new Date();   
        setTimeout("waktu()",1000);   
       document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds(); 
   } 
   </script> 
   </head>
   <body bgcolor="white" text="black" onLoad="waktu()"> 
   <div id="output"></div> 


</td>

</table>
