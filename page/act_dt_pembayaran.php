<?
include("../koneksi.php");

$thaj=$_COOKIE['thaj'];
$sem=$_COOKIE['sem'];

$rekam=$_POST['rekam'];
$rekam2=$_GET['rekam2'];
$rekam3=$_GET['rekam3'];
$rekam4=$_POST['rekam4'];
$ubah=$_POST['ubah'];
$Submit=$_POST['Submit'];
$pembayaran=$_POST['pembayaran'];
$jml_rp=$_POST['jml_rp'];
$kdpk=$_POST['kdpk'];
$kdkls=$_GET['kdkls'];
$kdbyr=$_GET['kdbyr']; 
$ketp=$_POST['ketp'];
$jmlb=$_POST['jmlb'];
$tgl=$_POST['tgl'];
$bln=$_POST['bln'];
$thn=$_POST['thn'];
$waktu=$tgl." ".$bln." ".$thn;
$semb=$_POST['semb'];
$thnb=$_POST['thnb'];

$tmbk=$_POST['tmbk'];
$del_tr=$_GET['del_tr'];
$id_trs=$_GET['id_trs'];

$sbea=$_POST['sbea'];

$anggran=$_POST['anggran'];
$transaksi=$_POST['transaksi'];
$jml_transaksi=$_POST['jml_transaksi'];

if($rekam=="Simpan"){
   $rek=mysql_query("INSERT INTO tb_pembayaran VALUES('','$pembayaran','$jml_rp','$ketp')");
   header("Location: ../home.php?home=byr");
}
if($ubah=="Simpan"){
 mysql_query("UPDATE tb_pembayaran SET pembayaran='$pembayaran',
								   jumlah='$jml_rp',
								   ket='$ketp'
                        WHERE kd_pembayaran='$kdpk'");
  header("Location: ../home.php?home=byr");
}

if($rekam2=="1"){
   $pmb=mysql_query("SELECT * FROM rincian_bayar WHERE kd_kls='$kdkls' and kd_bayar='$kdbyr' ");
   $cpmb=mysql_num_rows($pmb);
   if($cpmb!=1){
      $rek=mysql_query("INSERT INTO rincian_bayar VALUES('$kdkls','$kdbyr')");
   }
   header("Location: ../home.php?home=byr&pmb=2&kdkls=$kdkls");
}
if($rekam3=="1"){
   mysql_query("DELETE FROM rincian_bayar WHERE kd_kls='$kdkls' and kd_bayar='$kdbyr' ");
   header("Location: ../home.php?home=byr&pmb=2&kdkls=$kdkls");
}
if($rekam4=="Simpan"){
$id_str=$_POST['id_str'];
$sidp=$_POST['sidp'];
$sblnb=$_POST['sblnb']; 
$kodek=$_POST['kodek'];
$notak=$_POST['notak'];
$notak2=$_POST['notak2'];
$gb_nota=$_POST['gb_nota'];
$e_idtrs=$_POST['e_idtrs'];

 if($sidp=="" or $jmlb==""){ 
    header("Location: ../home.php?home=byr&pmb=4&id_k=$id_str&idpbyr=$sidp&klkk=$kodek&bnlk=$sblnb&notak=$notak&notak2=$notak2&gb_nota=$gb_nota"); 
	return; 
	}
	
 if($tmbk=="s"){
      $pmb=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$id_str' and kd_bayar='$sidp' and semester_b='$semb' and thn_b='$thnb' and bln_bayar='$sblnb' ");
      $cpmb=mysql_num_rows($pmb);
	  if($cpmb==1){
	    mysql_query("UPDATE tb_transaksi SET $wt jml_bayar='$jmlb' WHERE kd_santri='$id_str' and kd_bayar='$sidp' and semester_b='$semb' and thn_b='$thnb' and bln_bayar='$sblnb'");
	  }else{
	     $rek=mysql_query("INSERT INTO tb_transaksi VALUES('','$id_str','$sidp','$semb','$thnb','$sblnb','$waktu','$jmlb')");
	
	     $pmb=mysql_query("SELECT * FROM tb_nokwi WHERE no_kwitansi1='$notak' and no_kwitansi2='$notak2'");
         $ctp=mysql_num_rows($pmb);
	
	     if($ctp==0){
	        $rek=mysql_query("INSERT INTO tb_nokwi VALUES('','$notak','$notak2')");
	     }
	
      	 $pmb7=mysql_query("SELECT * FROM tb_transaksi ORDER BY id_transaksi DESC");
	     $ctc=mysql_fetch_array($pmb7);
	     $rek=mysql_query("INSERT INTO rincian_nota VALUES('$gb_nota','$ctc[id_transaksi]')"); 
	  }
   } 	
  // $pmb=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$id_str' and kd_bayar='$sidp' and semester_b='$semb' and thn_b='$thnb' and bln_bayar='$sblnb' ");
  // $cpmb=mysql_num_rows($pmb);
  if($tmbk=="u"){ 
   if(strlen($waktu>=8)){ $wt="tgl_bayar='$waktu',"; }
      mysql_query("UPDATE tb_transaksi SET $wt jml_bayar='$jmlb' WHERE id_transaksi='$e_idtrs' ");
	  header("Location: ../home.php?home=byr&pmb=4&id_k=$id_str&idpbyr=$sidp&klkk=$kodek&bnlk=$sblnb&notak=$notak&notak2=$notak2&gb_nota=$gb_nota"); 
	  return;
   }
   
   if($tmbk=='m'){
    $rek=mysql_query("INSERT INTO tb_transaksi VALUES('','$id_str','$sidp','$semb','$thnb','$sblnb','$waktu','$jmlb')");
	
	$pmb=mysql_query("SELECT * FROM tb_nokwi WHERE no_kwitansi1='$notak' and no_kwitansi2='$notak2'");
    $ctp=mysql_num_rows($pmb);
	
	if($ctp==0){
	   $rek=mysql_query("INSERT INTO tb_nokwi VALUES('','$notak','$notak2')");
	}
	
	$pmb7=mysql_query("SELECT * FROM tb_transaksi ORDER BY id_transaksi DESC");
	$ctc=mysql_fetch_array($pmb7);
	$rek=mysql_query("INSERT INTO rincian_nota VALUES('$gb_nota','$ctc[id_transaksi]')"); 
   } 
   // simpan total pemasukan
    $pmb8=mysql_query("SELECT * FROM tb_pembayaran  WHERE kd_pembayaran='$sidp'");
	$cpmb8=mysql_fetch_array($pmb8);
	
   $tpms=mysql_query("SELECT * FROM tb_saldo WHERE ket='$cpmb8[pembayaran]'  ");
   $cpms=mysql_num_rows($tpms);
   $cpms2=mysql_fetch_array($tpms);
   if($cpms>=1){
      $tot_s=0;
      $tot_s=$cpms2['jumlah_total']+$jmlb;
      mysql_query("UPDATE tb_saldo SET jumlah_total='$tot_s' WHERE ket='$cpmb8[pembayaran]' ");
   }else{
    $rek=mysql_query("INSERT INTO tb_saldo VALUES('','$sidp','$jmlb','$cpmb8[pembayaran]')");
   }
	  
   header("Location: ../home.php?home=byr&pmb=4&id_k=$id_str&idpbyr=$sidp&klkk=$kodek&bnlk=$sblnb&notak=$notak&notak2=$notak2&gb_nota=$gb_nota");   
}
if($del_tr==1){
$id_str=$_GET['id_str'];
$sidp=$_GET['sidp'];
$sblnb=$_GET['sblnb']; 
$kodek=$_GET['kodek'];
$notak=$_GET['notak'];
$notak2=$_GET['notak2'];
$gb_nota=$_GET['gb_nota'];

   mysql_query("DELETE FROM tb_transaksi WHERE id_transaksi='$id_trs' ");
   mysql_query("DELETE FROM rincian_nota WHERE kd_transaksi='$id_trs' ");
   
   $rcn=mysql_query("SELECT * FROM rincian_nota WHERE kd_kwi='$gb_nota'");
   $crc=mysql_fetch_array($rcn);
   if($crc<=0){ mysql_query("DELETE FROM tb_nokwi WHERE no_kwitansi1='$notak' and  no_kwitansi2='$notak2'"); }
   header("Location: ../home.php?home=byr&pmb=4&id_k=$id_str&idpbyr=$sidp&klkk=$kodek&bnlk=$sblnb&notak=$notak&notak2=$notak2&gb_nota=$gb_nota");
}
if($sbea=="Simpan"){
  $id_strbea=$_POST['id_strbea'];
  $pmbyrbea=$_POST['pmbyrbea'];
  $jml_byrbea=$_POST['jml_byrbea']; 
  $klsst=$_POST['klsst']; 
  $kbs=$_POST['kbs']; 
  
  $jbea=mysql_query("SELECT * FROM tb_beasiswa WHERE id_bea='$kbs' ");
  $cjb=mysql_num_rows($jbea);
  if($cjb>=1){
   mysql_query("UPDATE tb_beasiswa SET jml_beasiswa='$jml_byrbea' WHERE id_bea='$kbs' ");
  }else{
  $rek=mysql_query("INSERT INTO tb_beasiswa VALUES('','$thaj','$sem','$id_strbea','$klsst','$pmbyrbea','$jml_byrbea')");
  }
  header("Location: ../home.php?home=byr&pmb=7&id_k=$id_strbea");
}

if($Submit=="Simpan"){
 $rek=mysql_query("INSERT INTO tb_pengeluaran VALUES('','$anggran','$tgl','$bln','$thn','$transaksi','$jml_transaksi')");

 $tpms=mysql_query("SELECT * FROM tb_saldo WHERE ket='$anggran'  ");
 $cpms2=mysql_fetch_array($tpms);
 
 $tot_s=0;
 $tot_s=$cpms2['jumlah_total']-$jml_transaksi;
 mysql_query("UPDATE tb_saldo SET jumlah_total='$tot_s' WHERE ket='$anggran' ");
 	  
 header("Location: ../home.php?home=pgrl");
}
?>