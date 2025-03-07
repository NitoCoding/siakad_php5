<?
include("../koneksi.php");

$masuk=$_GET['masuk'];
$nisk=$_GET['nisk'];
$klsx=$_GET['klsx'];

$Submit=$_POST['Submit'];
$kls_t=$_POST['kls_t'];
$kls_a=$_POST['kls_a'];

if($Submit=="PINDAHKAN"){
 $tdth=mysql_query("SELECT * FROM tb_santri WHERE kelas_st='$kls_t' AND status='a'");
 $cr=mysql_num_rows($tdth);
 if($cr<=0){
    mysql_query("UPDATE tb_santri SET kelas_st='$kls_t' WHERE kelas_st='$kls_a' AND status='a' ");
 }
 header("Location: ../home.php?home=kls&dpn_kls2=k2&psn=2");
 break;
}

if($klsx=="" || $klsx=="-"){
   header("Location: ../home.php?home=kls&dpn_kls2=k2&psn=1");
  }
if($masuk=="Masuk" and $klsx!=""){
  if($klsx=='1'){ $klsx=""; }
  mysql_query("UPDATE tb_santri SET kelas_st='$klsx' WHERE nis='$nisk'");
  if($klsx==''){$klsx="1";}
  header("Location: ../home.php?home=kls&dpn_kls2=k2&klsk=$klsx");
} 
?>