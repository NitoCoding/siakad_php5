<?
include("../koneksi.php");

$rekam=$_GET['rekam'];
$hapus=$_GET['hapus'];
$idsk=$_GET['idsk'];
$kpb=$_GET['kpb'];
$idpbk=$_GET['idpbk'];
$kpb=$_GET['kpb'];
$klsk=$_GET['klsk'];

if($rekam=="Simpan" and $kpb!=""){
   $tamp=mysql_query("SELECT kd_santri,kd_mp FROM tb_pbakat WHERE kd_santri='$idsk' and kd_mp='$kpb' ");
   $kp=mysql_num_rows($tamp);
   if($kp==0){
   $rek=mysql_query("INSERT INTO tb_pbakat VALUES('','$idsk','$kpb')");
   } header("Location: ../home.php?home=pbk&kpb=$kpb&klsk=$klsk");
}
if($hapus=="del"){
  mysql_query("DELETE FROM tb_pbakat WHERE id_pbakat='$idpbk' ");
  header("Location: ../home.php?home=pbk&kpb=$kpb&klsk=$klsk");
} header("Location: ../home.php?home=pbk&kpb=$kpb&klsk=$klsk");
?>