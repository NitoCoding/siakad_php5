<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
.style3 {font-size: 24px; font-family: "Courier New", Courier, monospace; }
.style8 {font-size: 14px}
.style9 {font-size: 24px; font-weight: bold; }
.style10 {font-size: 18px}
body {
	margin-top: 0px;
}
-->
</style>
</head>
<?
include("../../koneksi.php");
 include("../../function.php");
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
?>
<body>
<table width="965" border="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%" height="95" valign="top"><img src="../../images/LOGO-SHOID2.jpg" width="105" height="109" /></td>
        <td width="89%" valign="top"><div align="center"><span class="style10">YAYASAN 
              SHOHWATUL IS'AD</span><br />
              <span class="style9 style2">PPMI 
                                 SHOHWATUL IS'AD</span><br />
                                 <span class="style10">SMA IT SHOHWATUL IS'AD </span><br />
              <span class="style8"><br />
Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan Hp. 081242518637 <br />
http://www.shohwatulisad.sch.id e-mail : info@shohwatulisad.sch.id </span></div></td>
      </tr>
      <tr>
        <td height="1" colspan="2" valign="top" bgcolor="#000000"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
      <?
	      $tmpkls=mysql_query("SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysql_fetch_array($tmpkls);
		  
		  $tmpkls2=mysql_query("SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
          $ctk2=mysql_fetch_array($tmpkls2);
		  
	   ?>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td width="31%"><? echo $ct['kelas_st']; ?></td>
        <td width="1%">:</td>
        <td width="16%"><div align="right"><img src="Copy (2) of Arab rapor.jpg" width="84" height="19" /></div></td>
        <td width="8%">&nbsp;</td>
        <td width="28%"><? echo $ct['nama']; ?></td>
        <td width="1%">:</td>
        <td width="15%"><div align="right" class="style3"><img src="Arab rapor.jpg" width="136" height="24" /></div></td>
      </tr>
      <tr>
        <td><font size="2"><? echo $thaj; ?></font></td>
        <td>:</td>
        <td><div align="right"><img src="Copy (3) of Arab rapor.jpg" width="125" height="18" /></div></td>
        <td>&nbsp;</td>
        <td><font size="2">
          <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
        </font></td>
        <td>:</td>
        <td><div align="right"><img src="Copy of Arab rapor.jpg" width="134" height="19" /></div></td>
      </tr>
      <tr>
        <td colspan="7" height="3"></td>
        </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="752"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td height="30" colspan="2"><div align="center"><strong>Nilai</strong> / <img src="Copy (7) of Arab rapor.jpg" width="38" height="21" align="absmiddle" /></div></td>
        <td width="7%"><div align="center"><img src="arab rapor 4.jpg" width="40" height="36" align="absmiddle" /></div></td>
        <td width="55%"><div align="center"><img src="Copy (4) of Arab rapor.jpg" width="101" height="25" /></div></td>
        <td width="4%" rowspan="3"><div align="center"><img src="Copy (6) of Arab rapor.jpg" width="23" height="49" /></div></td>
      </tr>
      <tr>
        <td width="17%"><div align="center"><img src="Copy (8) of Arab rapor.jpg" width="96" height="19" /></div></td>
        <td width="17%"><div align="center"><img src="Copy (18) of Arab rapor.jpg" width="51" height="17" /></div></td>
        <td rowspan="2"><div align="center"><strong>KKM</strong></div></td>
        <td rowspan="2"><div align="center"><strong>Mata Pelajaran </strong></div></td>
        </tr>
      <tr>
        <td><div align="center"><strong>Huruf</strong></div></td>
        <td><div align="center"><strong>Angka</strong></div></td>
        </tr>
      <tr>
        <td><div align="center">
          <?    $rtt=0; $j1=0; $j2=0; $j3=0; $j4=0; $j5=0; $j6=0; $j7=0; $j8=0; $j9=0; $j10=0; $j11=0; $j12=0; $j13=0; $j14=0; $j15=0; $j16=0; $j17=0;
		        $j18=0; $j19=0; $j20=0; $j21=0; $j22=0;  $j23=0; $j24=0; $j25=0; $j26=0; $j27=0; $j28=0; $j29=0; $j30=0; $j31=0;
		        
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]' ");
          $tpk2=mysql_fetch_array($tampi);  

		  if($tpk2['raport'] >=1){	
		    $tn1=1; 
		    $j1=$tpk2['raport']; 
			$a=angka_huruf($tpk2['raport']); echo $a; 
			$b=$tpk2['raport'];
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP006' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j1=$ck13['nir'];
		 if($j1 >=1){ $tn1=1; } 
		$a=angka_huruf($ck13['nir']); echo $a; 
		$b=$ck13['nir'];
			} 
			?>
        </div></td>
        <td><div align="center">
          <? 
		 	
		echo $b;
		 ?>
        </div></td>
        <td><div align="center">
          <? 
		$ntu3=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD023'");
	    $ctk3=mysql_fetch_array($ntu3);
		
		if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
		 
			   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Agama Islam </td>
            <td width="50%"><div align="right"><img src="Copy (9) of Arab rapor.jpg" width="120" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">1.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		   $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		  if($tpk['raport'] >=1){
		  $tn2=1;	 
		    $j2=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			$b=$tpk['raport']; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD013' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j2=$ck13['nir'];
		if($j2 >=1){ $tn2=1; } 
		$a=angka_huruf($ck13['nir']); echo $a; 
		$b=$ck13['nir'];;
			}  ?>
        </div></td>
        <td><div align="center">
          <? 
		  echo $b; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD013' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j2 >=1){
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Kewarganegaraan </td>
            <td width="50%"><div align="right"><img src="Copy (19) of Arab rapor.jpg" width="113" height="19" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">2.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		   $tampi=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD003' and kd='3'");
          $tpk=mysql_fetch_array($tampi);
		  $j3=$tpk['nir'];
		  if($j3 >=1){ $tn3=1; }
		  
		  
		   $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		  if($tpk['raport'] >=1){
		  $tn3=1;	 
		    $j3=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			$b=$tpk['raport']; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD003' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j3=$ck13['nir'];
		if($j3 >=1){ $tn3=1; } 
		$a=angka_huruf($ck13['nir']); echo $a; 
		$b=$ck13['nir'];;
			}
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $b; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD003' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j3 >=1){
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Bahasa dan Sastra Indonesia </td>
            <td width="50%"><div align="right"><img src="Copy (20) of Arab rapor.jpg" width="166" height="21" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">3.</div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">
          <? 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
			  
		  if($tpk['raport'] >=1){	
		  $tn4=1; 
		    $j4=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD004' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j4=$ck13['nir'];
		if($j4 >=1){ $tn4=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j4; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD004' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j4 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Bahasa Inggris </td>
            <td width="50%"><div align="right"><img src="Copy (21) of Arab rapor.jpg" width="112" height="17" align="absmiddle" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">4.</div></td>
      </tr>
      <tr>
        <td height="28"><div align="center">
          <? 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn5=1;
		    $j5=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD005' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j5=$ck13['nir'];
		if($j5 >=1){ $tn5=1; } 
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j5; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD005' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j5 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Matematika</td>
            <td width="50%"><div align="right"><img src="matematika.png" width="86" height="21" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">5.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  
		   $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD020' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn6=1;
		    $j6=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD020' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j6=$ck13['nir'];
		if($j6 >=1){ $tn6=1; } 
		$a=angka_huruf($ck13['nir']); echo $a; 
			} 
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j6; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD020' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j6 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Biologi</td>
            <td width="50%"><div align="right"><img src="biologi.jpg" width="74" height="22" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">6.</div></td>
      </tr>
      <tr>
        <td height="21"><div align="center">
          <? 
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD022' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn7=1;
		    $j7=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD022' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j7=$ck13['nir'];
		if($j7 >=1){ $tn7=1; } 
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j7; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD022' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j7 >=1){
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26"> &nbsp;Fisika</td>
            <td width="50%"><div align="right"><img src="fisika.jpg" width="57" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">7.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		 
		  
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD015' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn8=1;
		    $j8=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD015' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j8=$ck13['nir'];
		if($j8 >=1){ $tn8=1; } 
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j8; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD015' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j8 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Kimia</td>
            <td width="50%"><div align="right"><img src="kimia.jpg" width="53" height="24" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">8.</div></td>
      </tr>
      
      <tr>
        <td height="27"><div align="center">
          <? 
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD023' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn11=1;
		    $j11=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD023' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j11=$ck13['nir'];
		if($j11 >=1){ $tn11=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		  ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	     
		  
		  echo $j11; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD023' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j11 >=1){
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="26">&nbsp;Sejarah Indonesia </td>
            <td width="50%"><div align="right"><img src="sejarah.jpg" width="57" height="27" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">9.</div></td>
      </tr>
      
      
      <tr>
        <td><div align="center">
          <?
		   
		     $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn13=1;
		    $j13=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD009' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j13=$ck13['nir'];
		if($j13 >=1){ $tn13=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		    ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j13; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD009' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j13 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Jasmani dan Kesehatan </td>
            <td width="50%"><div align="right"><img src="Copy (26) of Arab rapor.jpg" width="73" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">10.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j15=$tpk['raport'];
		  if($j15 >=1){ $tn15=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD010' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j15 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="30">&nbsp;Teknologi Informasi dan Komunikasi </td>
            <td width="50%"><div align="right"><img src="tik.png" width="239" height="30" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">11.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <? 
		 
		  
		   $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn16=1;
		    $j16=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MD011' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j16=$ck13['nir'];
		if($j16 >=1){ $tn16=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j16; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD011' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j16 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Kewirausahaan dan Agrobisnis </td>
            <td width="50%"><div align="right"><img src="agrobisnis_kewirausahaan.jpg" width="201" height="21" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">12.</div></td>
      </tr>
      
      
      <tr>
        <td height="27"><div align="center">
          <? 
		  
		   $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn18=1;
		    $j18=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP001' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j18=$ck13['nir'];
		if($j18 >=1){ $tn18=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j18; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP001' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j18 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Menghafal Al Qur'an / Tahfidz </td>
            <td width="50%"><div align="right"><img src="Copy (3) of Arab rapor 2.jpg" width="76" height="19" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">13.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		 
		   if($tpk['raport'] >=1){	
		  $tn19=1;
		    $j19=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP003' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j19=$ck13['nir'];
		if($j19 >=1){ $tn19=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		  ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j19; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP003' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j19 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="25">&nbsp;Bahasa Arab </td>
            <td width="50%"><div align="right"><img src="Copy (4) of Arab rapor 2.jpg" width="85" height="21" align="absmiddle" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">14.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <? 
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		 
		  
		    if($tpk['raport'] >=1){	
		    $tn20=1;
		    $j20=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP005' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j20=$ck13['nir'];
		if($j20 >=1){ $tn20=1; }  
		$a=angka_huruf($ck13['nir']); echo $a;  
			}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j20; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP005' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j20 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Fiqh</td>
            <td width="50%"><div align="right"><img src="Copy (10) of Arab rapor 2.jpg" width="32" height="25" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">15.</div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">
          <? 
		  
		   $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' and kd_kelas='$ctk2[kd_kls]'");
          $tpk=mysql_fetch_array($tampi);
		  
		   if($tpk['raport'] >=1){	
		  $tn21=1;
		    $j21=$tpk['raport']; 
			$a=angka_huruf($tpk['raport']); echo $a; 
			}else{
		$tpk13=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and kd_mapel='MP006' and tahun_ajaran='$thaj' 
		                     and semester='$sem' and kd='3' ");
        $ck13=mysql_fetch_array($tpk13); 
		$j21=$ck13['nir'];
		if($j21 >=1){ $tn21=1; }  
		$a=angka_huruf($ck13['nir']); echo $a; 
			}  
		   ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $j21; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP006' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j21 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Aqidah Akhlaq </td>
            <td width="50%"><div align="right"><img src="Copy (9) of Arab rapor 2.jpg" width="103" height="22" />&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">16.</div></td>
      </tr>
      
      
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j24=$tpk['raport'];
		  if($j24 >=1){ $tn24=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP009' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j24 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Nahwu</td>
            <td width="50%"><div align="right"><img src="Copy (6) of Arab rapor 2.jpg" width="52" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">17.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j25=$tpk['raport'];
		  if($j25 >=1){ $tn25=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP010' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j25 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Shorof</td>
            <td width="50%"><div align="right"><img src="Copy (7) of Arab rapor 2.jpg" width="75" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">18.</div></td>
      </tr>
      
      <tr>
        <td><div align="center">
          <div align="center">
            <? 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j28=$tpk['raport'];
		  if($j28 >=1){ $tn28=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP011' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j28 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
          </div>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Hadist</td>
            <td width="50%"><div align="right"><img src="hadits.png" width="65" height="22" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">19.</div></td>
      </tr>
      <tr>
        <td height="30"><div align="center">
          <div align="center">
            <? 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP022' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j29=$tpk['raport'];
		  if($j29 >=1){ $tn29=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP022' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j29 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
          </div>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Tafsir</td>
            <td width="50%"><div align="right">
              <img src="tafsir.jpg" width="54" height="28" />
            </div></td>
          </tr>
        </table></td>
        <td><div align="center">20.</div></td>
      </tr>
      <tr>
        <td height="30"><div align="center">
          <div align="center">
            <? 
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP020' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j30=$tpk['raport'];
		  if($j30 >=1){ $tn30=1; }
		  $a=angka_huruf($tpk['raport']); echo $a; ?>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <? 
		 	
	      
		  
		  echo $tpk['raport']; ?>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP020' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j30 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
          </div>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" height="28">&nbsp;Mahfudzat</td>
            <td width="50%"><div align="right"><img src="mahfudzat.jpg" width="83" height="28" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">21.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <div align="center">
            <? 
		 
		  
		  $tampi=mysql_query("SELECT * FROM tb_raport_k13 WHERE id_santri='$ct[id_santri]' and tahun_ajaran='$thaj' and semester='$sem' and kd_mapel='MD024' and kd='3'");
          $tpk=mysql_fetch_array($tampi);
		  $j31=$tpk['nir'];
		  if($j31 >=1){ $tn31=1; }
		  
		  $a=angka_huruf($tpk['nir']); echo $a; ?>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <? 
		  echo $tpk['nir']; ?>
          </div>
        </div></td>
        <td><div align="center">
          <div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD024' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($j31 >=1){
			if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='XA' or $ct['kelas_st']=='XB' or $ct['kelas_st']=='XC')  { echo $ctk3['kkm']; }
		if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='XIA' or $ct['kelas_st']=='XIB' or $ct['kelas_st']=='XIC')  { echo $ctk3['kkm2']; }
		if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='XIIA' or $ct['kelas_st']=='XIIB' or $ct['kelas_st']=='XIIC')  { echo $ctk3['kkm3']; }
			  }
			  ?>
          </div>
        </div></td>
        <td><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="50%">&nbsp;Matematika Peminatan </td>
              <td width="50%"><div align="right"><img src="matematika peminatan.png" width="156" height="21" /></div></td>
            </tr>
          </table>
        </div></td>
        <td><div align="center">22.</div></td>
      </tr>
      
      

      <tr>
        <td colspan="5" bgcolor="#000000" height="1"></td>
        </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="center">
          <? 
		 	
			 				
	     $jml_t=$j1+$j2+$j3+$j4+$j5+$j6+$j7+$j8+$j9+$j10+$j11+$j12+$j13+$j15+$j16+$j18+$j19+$j20+$j21+$j22+$j24+  
		        $j25+$j28+$j29+$j30+$j31;  
		 $pnl=$tn+$tn1+$tn2+$tn3+$tn4+$tn5+$tn6+$tn7+$tn8+$tn9+$tn10+$tn11+$tn12+$tn13+$tn15+$tn16+$tn18+$tn19+$tn20+
		      $tn21+$tn22+$tn24+$tn25+$tn28+$tn29+$tn30+$tn31;	  
		 
		 echo $jml_t; 
		  
		   ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%"> &nbsp;Jumlah</td>
            <td width="50%"><div align="right"><img src="Copy (2) of Arab rapor 3.jpg" width="72" height="33" /></div></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><div align="center">
          <? 
			     
				 $rt=ceil($jml_t/$pnl);
				  
				 $p1=substr($rt,0,2);
				 $p2=substr($rt,3,2);
				 if($p2>=50){ echo $p1+1; }else{ echo $p1; }
				 
				   
			 // }
			  ?>
        </div></td>
        <td><div align="center"></div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Nilai Rata-rata </td>
            <td width="50%"><div align="right"><img src="Copy (3) of Arab rapor 3.jpg" width="94" height="32" /></div></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      
      
    </table></td>
  </tr>
  <?
            $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ORDER BY id_ext DESC");
            $chq=mysql_fetch_array($ktr);    
			
			?>
  <tr>
    <td height="149"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2"><div align="center"><? echo $chq['hafalan_qr']; ?></div></td>
        <td><div align="center"><strong>Hafalan Al Quran </strong></div></td>
        <td>&nbsp;</td>
        <td width="17%" rowspan="6"><div align="center">Pengembangan Diri <img src="Copy (3) of c1.JPG" width="89" height="27" /><br />
        </div></td>
      </tr>
      <tr>
        <td colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="2"></td>
      </tr>
      <tr>
        <td width="34%"><div align="center"><strong>Keterangan</strong> <img src="keterangan.jpg" width="63" height="19" align="absmiddle" /></div></td>
        <td width="7%"><div align="center"><strong>Nilai</strong></div></td>
        <td width="19%"><div align="center"><strong>Jenis Kegiatan </strong></div></td>
        <td width="23%"><div align="center"><img src="b1.jpg" width="82" height="26" /></div></td>
      </tr>
      <tr>
        <td height="21"><div align="center">
          <? 
		if($cktr['pramuka']=="A"){ echo"Sangat Baik"; }
		if($cktr['pramuka']=="B"){ echo"Baik"; }
		if($cktr['pramuka']=="C"){ echo"Cukup"; }
		if($cktr['pramuka']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $cktr['pramuka']; ?></div></td>
        <td>1. Pramuka </td>
        <td><div align="right"><img src="b2.jpg" width="74" height="24" /></div></td>
      </tr>
      
	  <?
	      $pbk=mysql_query("SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]'  ");
          $tpbk=mysql_fetch_array($pbk); 
		  
		  $pbk1=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk1=mysql_fetch_array($pbk1);
		  
		  $tnils=mysql_query("SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                      kls_eskl='$ct[kelas_st]' AND kd_eskl1='$tpbk1[kd_mp]'   ");
        $cnils=mysql_fetch_array($tnils);
	  ?>
      <tr>
        <td height="34"><div align="center"><? echo $tpbk1['nama_mp']; ?></div></td>
        <td><div align="center"><? echo $cnils['nil_eskl1']; ?></div></td>
        <td><div align="left">2. Ekstrakurikuler Pilihan </div></td>
        <td><div align="right"><img src="extrakur_pil1.jpg" width="176" height="24" /></div></td>
      </tr>
	  <?
	   	  $pbk=mysql_query("SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' limit 1,1 ");
          $tpbk=mysql_fetch_array($pbk); 
		  
		  $pbk2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysql_fetch_array($pbk2);
		  
		  $tnils=mysql_query("SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                       kls_eskl='$ct[kelas_st]' AND kd_eskl2='$tpbk2[kd_mp]'  ");
        $cnils=mysql_fetch_array($tnils);
	  ?>
      <tr>
        <td height="34"><div align="center"><? echo $tpbk2['nama_mp']; ?></div></td>
        <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
        <td><div align="left">3. Ekstrakurikuler Pilihan </div></td>
        <td><div align="right"><img src="extrakur_pil1.jpg" width="185" height="24" /></div></td>
      </tr>
	<?  
			 ?>
      
    </table></td>
  </tr>
  
  <tr>
    <td><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="33%"><table width="328" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#000000">
              <tr>
                <td colspan="3"><div align="center"><strong>Kehadiran</strong> <img src="kehadiran.jpg" width="74" height="29" align="absmiddle" /></div></td>
              </tr>
              <tr>
                <td width="20"><div align="center">1.</div></td>
                <td width="234">Sakit <img src="sakit.jpg" width="42" height="19" align="absmiddle" /></td>
                <td width="66"><div align="center"> 
                  <? 
			  $skt=0;
			  $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
           while($cktr=mysql_fetch_array($ktr)){
		   $skt=$cktr['sakit']+$skt;
		   }
			
			  echo $skt; ?>
                  hari </div></td>
              </tr>
              <tr>
                <td><div align="center">2.</div></td>
                <td>Izin <img src="izin.jpg" width="25" height="23" align="absmiddle" /></td>
                <td><div align="center"> 
                  <? 
			  $skt=0;
			  $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
           while($cktr=mysql_fetch_array($ktr)){
		   $skt=$cktr['izin']+$skt;
		   }
			
			  echo $skt;
			   ?>
                  hari</div></td>
              </tr>
              <tr>
                <td><div align="center">3.</div></td>
                <td>Tanpa Keterangan <img src="tanpa_ket.jpg" width="65" height="26" align="absmiddle" /></td>
                <td><div align="center"> 
                  <? 
			  $skt=0;
			  $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
           while($cktr=mysql_fetch_array($ktr)){
		   $skt=$cktr['alpa']+$skt;
		   }
			
			  echo $skt;
			  
			   ?>
                  hari</div></td>
              </tr>
              <tr>
                <td><div align="center">4.</div></td>
                <td>Tidak Solat Jamaah <img src="tidak_solat.jpg" width="111" height="24" align="absmiddle" /></td>
                <td><div align="center"> 
                  <? 
			 $skt=0;
			  $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
           while($cktr=mysql_fetch_array($ktr)){
		   $skt=$cktr['t_solat']+$skt;
		   }
			
			  echo $skt;
			   ?>
                  kali </div></td>
              </tr>
          </table></td>
          <td width="67%" valign="top"><table width="99%" height="35" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#000000">
            <tr>
              <td height="33" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="24"><strong>Catatan Wali Kelas</strong> <img src="keterangan.jpg" width="63" height="19" align="absmiddle" />: </td>
                  </tr>
                  <tr>
                    <td height="15"></td>
                  </tr>
                  <tr>
                    <td height="24"><?
			$cw=mysql_query("SELECT * FROM tb_catatan_wk WHERE nis='$ct[nis]' and thn_ajaran='$thaj' and semester='$sem' and kelas='$ct[kelas_st]' ");
            $ccw=mysql_fetch_array($cw);
				
			echo $ccw['catatan'];
			?></td>
                  </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?
	    $tampil=mysql_query("SELECT * FROM tb_ttd WHERE ket='a' ");
        $tp=mysql_fetch_array($tampil);
		
		
	  ?>
	  <tr>
        <td width="47%">&nbsp;</td>
        <td width="5%">&nbsp;</td>
        <td width="48%"><div align="right"><? echo $tp['tgl_semester']; ?>&nbsp;&nbsp; <img src="waktu pembagian.JPG" width="125" height="31" align="absmiddle" /></div></td>
      </tr>
      <tr>
        <td><div align="center"><img src="ttd1.jpg" width="67" height="28" /></div></td>
        <td>&nbsp;</td>
        <td><div align="center"><img src="ttd2.jpg" width="75" height="28" /></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td><div align="center">
	<?
	$tampi=mysql_query("SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysql_fetch_array($tampi);
	
	$tampi2=mysql_query("SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysql_fetch_array($tampi2);
	
	$tampi4=mysql_query("SELECT id_gp,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysql_fetch_array($tampi4);
	
	$tampil5=mysql_query("SELECT * FROM wali_kelas WHERE kd_gp='$tpk3[kd_gp]' ");
    $tp4=mysql_fetch_array($tampil5);
	?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center">
            <? if(!empty($tp4['ttd'])){ ?>
            <img src="<? echo "$tp4[ttd]"; ?>" height="90" width="130" />
            <? } ?>
          </div></td>
        </tr>
        
        <tr>
          <td width="47%"><div align="center">__________________</div></td>
          <td width="5%">&nbsp;</td>
          <td width="48%"><div align="center"><? echo $tpk4['nama_gp']; ?></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
