<?
include("../koneksi.php");

$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem']; 
$rekam=$_POST['rekam'];
$ubah=$_POST['ubah'];
$rekam2=$_POST['rekam2'];
$ubah2=$_POST['ubah2'];
$rekam3=$_POST['rekam3'];
$ubah3=$_POST['ubah3'];
$rekam4=$_POST['rekam4'];

$kelas=$_POST['kelas'];
$thna=$_POST['thna'];
$smester=$_POST['smester'];
$idwls=$_POST['idwls'];

$kdrt=$_POST['kdrt'];
$jam=$_POST['jam'];
$mpl=$_POST['mpl'];
$gpl=$_POST['gpl'];
$jamp=$_POST['jamp'];
$hari=$_POST['hari'];
$idmmp=$_POST['idmmp'];
$idggp=$_POST['idggp'];
$jmlj=$_POST['jmlj'];
$jam_ek=$_POST['jam_ek'];

$hapus=$_GET['hapus'];
$idg=$_GET['idg'];

if($rekam=="Simpan"){
   $rek=mysql_query("INSERT INTO tb_roster VALUES('','$thna','$smester','$kelas')");
   header("Location: ../home.php?home=rst&rst1=k1");
}
if($ubah=="Simpan"){
 mysql_query("UPDATE tb_roster SET thn_ajaran='$thna',
								   semester='$smester',
								   kd_kelas='$kelas'
                       WHERE id_rt='$idwls'");
  header("Location: ../home.php?home=rst&rst1=k1");
}
if($rekam2=="Simpan"){
   $rek=mysql_query("INSERT INTO tb_jam VALUES('','$jamp','$jmlj')");
   header("Location: ../home.php?home=rst&rst2=k2");
}
if($ubah2=="Simpan"){
 mysql_query("UPDATE tb_jam SET jam='$jamp',
 						jml_jam='$jmlj'
                       WHERE kd_jam='$idwls'");
  header("Location: ../home.php?home=rst&rst2=k2");
}
if($rekam3=="Simpan"){
   $rek=mysql_query("INSERT INTO detail_roster VALUES('$kdrt','$hari','$jam','$mpl','$gpl')");
   header("Location: ../home.php?home=rst&rst3=k3");
}
if($ubah3=="Simpan"){
 mysql_query("UPDATE detail_roster SET hari='$hari',
 								   jam='$jam',
								   kd_mp='$mpl',
								   kd_gp='$gpl'
                       WHERE kd_rt='$idwls' and kd_mp='$idmmp' and kd_gp='$idggp' and jam='$jam_ek'");
  header("Location: ../home.php?home=rst&rst3=k3");
}

if($rekam4=="Simpan"){
   $rek=mysql_query("INSERT INTO tb_pengajar VALUES('','$thaj','$sem','$gpl','$mpl','$kdrt')");
   header("Location: ../home.php?home=rst&rst4=k4");
}
if($hapus=="del"){
  mysql_query("DELETE FROM tb_pengajar WHERE id_pengajar='$idg' ");
  header("Location: ../home.php?home=rst&rst4=k4");
} 
?>