<?
include("koneksi.php");
$masuk=$_POST['masuk'];
$user=$_POST['user'];
$pasusr=$_POST['pasusr'];
$idusr=$_COOKIE['idusr']; 
$uslog=$_COOKIE['uslog'];
$logout=$_GET['logout'];
$thna=$_POST['thna'];
$smester=$_POST['smester'];

if($logout==1){
   setcookie("idkusr","");
   setcookie("idgurp","");
   setcookie("idkelas","");
   setcookie("thaj","");
   setcookie("sem","");
   setcookie("qbln","");
   setcookie("blns","");
   header("Location: index.php");
}
if($masuk=="login"  and $thna!="" and $smester!=""){

   $bln=date("m");
   if($bln=="01"){ $nb=1; $pbbln="Januari"; }
   if($bln=="02"){  $nb=2;  $pbbln="Februari";}
   if($bln=="03"){  $nb=3; $pbbln="Maret"; }
   if($bln=="04"){  $nb=4; $pbbln="April"; }
   if($bln=="05"){  $nb=5; $pbbln="Mei"; }
   if($bln=="06"){  $nb=6; $pbbln="Juni"; }
   if($bln=="07"){  $nb=7; $pbbln="Juli"; }
   if($bln=="08"){  $nb=8; $pbbln="Agustus"; }
   if($bln=="09"){  $nb=9; $pbbln="September";}
   if($bln=="10"){ $nb=10; $pbbln="Oktober";}
   if($bln=="11"){ $nb=11; $pbbln="Nopember";}
   if($bln=="12"){ $nb=12; $pbbln="Desember";}

$res = mysql_query("SELECT * FROM tb_user WHERE kd_gp='$user' AND pas2='$pasusr'");
if($ckusr=mysql_num_rows($res)==1){
   $dt=mysql_fetch_array($res);
   
   $qku2=mysql_query("SELECT * FROM wali_kelas WHERE kd_gp='$dt[kd_gp]'");
   $cqk2=mysql_fetch_array($qku2);
   
   setcookie("idkusr","$dt[ket]");
   setcookie("idgurp","$dt[kd_gp]");
   setcookie("idkelas","$cqk2[kd_kls]");
   setcookie("thaj","$thna");
   setcookie("sem","$smester");
   setcookie("qbln","$nb");
   setcookie("blns","$pbbln");
   header("Location: home.php");
}else{ header("Location: index.php?psnu=1"); }
}
//header("Location: index.php");

?>