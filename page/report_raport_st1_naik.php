<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 16px}
td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	text-decoration: none;
}
.style4 {font-size: 12px}
.style5 {
	font-size: 14px;
	font-weight: bold;
}
.style6 {font-size: 14px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style7 {
	font-size: 12;
	font-weight: bold;
}
-->
</style>
</head>
<?
include("../koneksi.php");
 include("../function.php");
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 $idstr=$_GET['idstr'];
?>
<body>
<table width="692" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="95" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="95" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top">&nbsp;</td>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr> 
                <td width="11%" height="95" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="82" height="93" /></td>
                <td width="89%" valign="top"><div align="center">
                  <p><span class="style3"><font size="2">YAYASAN 
                    SHOHWATUL IS'AD</font></span><br /> 
                    <span class="style1"><font size="4">SMP 
                      IT SHOHWATUL IS'AD</font></span><br /> 
                      <br /> 
                      <span class="style6">NSS : 202190205004</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style6">NPSN : 40314482</span><span class="style4"><br />
                      Alamat: Jl. Poros Padanglampe�KM . 3�Ma'rang�Pangkep�Sulawesi -Selatan 90645 P.O. Box 300
                    <br>
                    http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></p>
                  </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="6"><hr /></td>
  </tr>
  <tr> 
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6"><div align="center" class="style5"><font size="3">LAPORAN HASIL BELAJAR SISWA </font></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><font size="2">SEMESTER 
      <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
    TAHUN AJARAN <? echo $thaj; ?></font></div>    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
      <?
	      $tmpkls=mysql_query("SELECT id_santri,nis,nama,kelas_st,nis_nasional FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysql_fetch_array($tmpkls);
	   ?>
  <tr> 
    <td width="8%" height="22">NIS/NISN</td>
    <td width="1%">:</td>
    <td width="60%"><? echo $ct['nis']." / ". $ct['nis_nasional']; ?></td>
    <td width="11%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="23">Nama</td>
    <td>:</td>
    <td><? echo $ct['nama']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="22">Kelas</td>
    <td>:</td>
    <td><? echo $ct['kelas_st']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td height="402" colspan="6"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr bgcolor="#CCCCCC">
        <td width="3%" rowspan="2" bgcolor="#FFFFFF"><div align="center">No</div></td>
        <td width="36%" rowspan="2" bgcolor="#FFFFFF"><div align="center">Mata Pelajaran </div></td>
        <td width="8%" rowspan="2" bgcolor="#FFFFFF"><div align="center">KKM</div></td>
        <td height="22" colspan="3" bgcolor="#FFFFFF"><div align="center">Nilai</div></td>
      </tr>
      <tr>
        <td width="8%" height="25"><div align="center">Angka</div></td>
        <td width="27%"><div align="center">Huruf</div></td>
        <td width="19%"><div align="center">Deskripsi Kemajuan Belajar </div></td>
      </tr>
      <? 
		  /* $mpl=mysql_query("SELECT kd_mp,nama_mp,ket FROM mata_pelajaran  WHERE ket='MD' ");
          while($cmpl=mysql_fetch_array($mpl)){
	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='$cmpl[kd_mp]' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi); */
		?>
      <tr>
        <td height="27" valign="middle"><div align="center">1.</div></td>
        <td>&nbsp;Pendidikan Agama </td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MP005' ");
              $tpk2=mysql_fetch_array($tampi2);
			 if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk2['kkm']; $t=$tpk2['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk2['kkm2']; $t=$tpk2['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk2['kkm3'];   $t=$tpk2['kkm2']; }
			  
			   ?>
        </div></td>
        <td><div align="center">
          <?
		  
		         $tampi1=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
                 $tpk1=mysql_fetch_array($tampi1); 
				 
				 $p1=substr($tpk1['raport'],0,2);
				 $p2=substr($tpk1['raport'],3,2);
				 
				 //echo $tpk1['raport'];
		         $nl_fiqi=$tpk1['raport'];  
		
		
		         $tampi1=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
                 $tpk1=mysql_fetch_array($tampi1); 
				 
				 $p1=substr($tpk1['raport'],0,2);
				 $p2=substr($tpk1['raport'],3,2);
				 //echo $tpk1['raport'];
		         $nl_aqidah=$tpk1['raport'];
		  
		         //$j1=ceil(($nl_fiqi+$nl_aqidah)/2);
				 echo $nl_fiqi; 
				 $j1=$nl_fiqi;
		   ?>
        </div></td>
        <td><div align="center">
          <? $a=angka_huruf($j1); echo $a; ?>
        </div></td>
        <td><div align="center">
          <? if($j1 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      
      <tr>
        <td height="27"><div align="center">2.</div></td>
        <td>&nbsp;Pendidikan Kewarganegaraan </td>
        <td><div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD013' ");
              $tpk3=mysql_fetch_array($tampi2);
			  
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j3=$tpk['raport'];
		  
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j3 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">3.</div></td>
        <td>&nbsp;Bahasa Indonesia </td>
        <td><div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD003' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC' or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j4=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j4 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      
      <tr>
        <td height="28"><div align="center">4.</div></td>
        <td>&nbsp;Bahasa Inggris </td>
        <td><div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD004' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j6=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j6 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">5.</div></td>
        <td>&nbsp;Matematika</td>
        <td><div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD005' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j7=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j7 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">6.</div></td>
        <td>&nbsp;Ilmu Pengetahuan Alam </td>
        <td><div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD006' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j8=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j8 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      <tr>
        <td height="26"><div align="center">7.</div></td>
        <td>&nbsp;Ilmu Pengetahuan Sosial </td>
        <td><div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD007' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j9=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j9 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">8.</div></td>
        <td>&nbsp;Seni Budaya </td>
        <td><div align="center">
            <? 
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC' or $ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID'){ $kmps="MD012"; }else{ $kmps="MP008"; }
			  
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='$kmps' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='$kmps' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j10=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j10 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">9.</div></td>
        <td>&nbsp;Pendidikan Jasmani, Olahraga, dan Kesehatan </td>
        <td><div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD009' ");
              $tpk3=mysql_fetch_array($tampi2);
			    if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j11=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j11 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      
      <tr>
        <td height="47"><div align="center">10.</div></td>
        <td valign="bottom">&nbsp;Pilihan : **) <br />
&nbsp;a. Keterampilan <br />
&nbsp;b. Teknologi Informasi dan Komunikasi </td>
        <td valign="bottom"><div align="center">
            <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD010' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td valign="bottom"><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j12=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td valign="bottom"><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td valign="bottom"><div align="center">
            <? if($j12 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      
      <tr>
        <td height="47"><div align="center">11.</div></td>
        <td>&nbsp;&nbsp;Mulok **)&nbsp;<br />
&nbsp;a. Kewirausahaan dan Agrobisnis <br />
&nbsp;b. .................................................. <br /></td>
        <td><div align="center">
          <? 
			  $tampi2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='MD011' ");
              $tpk3=mysql_fetch_array($tampi2);
			  if($ct['kelas_st']=='VIIA' or $ct['kelas_st']=='VIIB' or $ct['kelas_st']=='VIIC' or $ct['kelas_st']=='VIID') { echo $tpk3['kkm']; $t=$tpk3['kkm']; }
			  if($ct['kelas_st']=='VIIIA' or $ct['kelas_st']=='VIIIB' or $ct['kelas_st']=='VIIIC'  or $ct['kelas_st']=='VIIID') { echo $tpk3['kkm2']; $t=$tpk3['kkm2']; }
			  if($ct['kelas_st']=='IXA' or $ct['kelas_st']=='IXB' or $ct['kelas_st']=='IXC') { echo $tpk3['kkm3'];   $t=$tpk3['kkm2']; }
			  
			  ?>
        </div></td>
        <td><div align="center">
            <? 
		 	
	      $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);
		  $j13=$tpk['raport'];
		  echo $tpk['raport']; ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($tpk['raport']); echo $a; ?>
        </div></td>
        <td><div align="center">
            <? if($j13 >= $t) { echo "Tuntas"; }else{ echo "Tidak Tuntas"; } ?>
        </div></td>
      </tr>
      <tr>
        <td rowspan="2"><div align="center"></div>
            <div align="center"></div></td>
        <td height="28">&nbsp;<strong>Jumlah Nilai</strong> </td>
        <td>&nbsp;</td>
        <td><div align="center">
            <?
		  $rtt=$j1+$j3+$j4+$j6+$j7+$j8+$j9+$j10+$j11+$j12+$j13; 
		  
		  echo $rtt;
		  ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($rtt); echo $a; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="28">&nbsp; <strong>Nila Rata-rata</strong> </td>
        <td><div align="center"></div></td>
        <td><div align="center">
            <? 
			     
				
				 $rt=$rtt/11;
				//  $nl=ceil($rt);
				 $p1=substr($rt,0,2);
				 $p2=substr($rt,3,2);
				 if($p2>=50){ $hrtt=$p1+1; echo $p1+1; }else{ $hrtt=$p1; echo $p1; }
				 
				   
			 // }
			  ?>
        </div></td>
        <td><div align="center">
            <? $a=angka_huruf($hrtt); echo $a; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr height="12">
    <td height="11" colspan="6" valign="top"></td>
  </tr>
  <?
            $akh=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML017' and thn_ajaran='$thaj' and semester='$sem' ");
            $cakh=mysql_fetch_array($akh);  
			
			$kep=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML018' and thn_ajaran='$thaj' and semester='$sem' ");
            $ckep=mysql_fetch_array($kep);
			
			$nck1=0;
			$nck2=0;
			$nck3=0;
			$nck4=0;
			$ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and thn_ajar='$thaj' and semester='$sem' ");
            while($cktr=mysql_fetch_array($ktr)){
			   $nck1=$cktr['sakit']+$nck1;  
			   $nck2=$cktr['izin']+$nck2; 
			   $nck3=$cktr['alpa']+$nck3; 
			   $nck4=$cktr['t_solat']+$nck4; 
			}  
			
			?>
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="28%" height="19" bgcolor="#FFFFFF"><div align="center">Kegiatan</div></td>
        <td width="23%" bgcolor="#FFFFFF"><div align="center">Jenis</div></td>
        <td width="8%" bgcolor="#FFFFFF"><div align="center">Nilai</div></td>
        <td width="41%" bgcolor="#FFFFFF"><div align="center">Keterangan</div></td>
      </tr>
      
	  <?
              $pbk=mysql_query("SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' limit 0,1  ");
          $tpbk=mysql_fetch_array($pbk); 
		  
		  $pbk1=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk1=mysql_fetch_array($pbk1);
		  
		  $tnils=mysql_query("SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                      kls_eskl='$ct[kelas_st]' AND kd_eskl1='$tpbk1[kd_mp]'   ");
        $cnils=mysql_fetch_array($tnils); 
			
			?>
	  
      <tr>
        <td rowspan="2"><div align="center">Pengembangan Diri </div></td>
        <td>&nbsp;1. <? echo $tpbk1['nama_mp']; ?></td>
        <td><div align="center"><? echo $cnils['nil_eskl1']; ?></div></td>
        <td><div align="center">
            <? 
		if($cnils['nil_eskl1']=="A"){ echo"Sangat Baik"; }
		if($cnils['nil_eskl1']=="B"){ echo"Baik"; }
		if($cnils['nil_eskl1']=="C"){ echo"Cukup"; }
		if($cnils['nil_eskl1']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
      </tr>
	<?  $pbk=mysql_query("SELECT * FROM tb_pbakat WHERE kd_santri='$ct[id_santri]' limit 1,1 ");
          $tpbk=mysql_fetch_array($pbk); 
		  
		  $pbk2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysql_fetch_array($pbk2);
		  
		  $tnils=mysql_query("SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                       kls_eskl='$ct[kelas_st]' AND kd_eskl2='$tpbk2[kd_mp]'  ");
        $cnils=mysql_fetch_array($tnils); ?>
      <tr>
        <td>&nbsp;2.  <? echo $tpbk2['nama_mp']; ?></td>
        <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
        <td><div align="center">
          <? 
		if($cnils['nil_eskl2']=="A"){ echo"Sangat Baik"; }
		if($cnils['nil_eskl2']=="B"){ echo"Baik"; }
		if($cnils['nil_eskl2']=="C"){ echo"Cukup"; }
		if($cnils['nil_eskl2']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="48%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td colspan="3" bgcolor="#FFFFFF"><div align="center">Akhlak dan Keperibadian</div></td>
                </tr>
                <tr>
                  <td colspan="3" bgcolor="#000000" height="2"></td>
                </tr>
                <tr>
                  <td width="27%" height="24">&nbsp;Akhlak </td>
                  <td width="3%">:</td>
                  <td width="70%"><? echo $cakh['nilai']; ?>&nbsp;&nbsp;(<? 
		if($cakh['nilai']=="A"){ echo"Sangat Baik"; }
		if($cakh['nilai']=="B"){ echo"Baik"; }
		if($cakh['nilai']=="C"){ echo"Cukup"; }
		if($cakh['nilai']=="D"){ echo"Kurang"; }
		 ?>)</td>
                </tr>
                <tr>
                  <td>&nbsp;Keperibadian</td>
                  <td>:</td>
                  <td><? echo $ckep['nilai']; ?>&nbsp;&nbsp;(<? 
		if($ckep['nilai']=="A"){ echo"Sangat Baik"; }
		if($ckep['nilai']=="B"){ echo"Baik"; }
		if($ckep['nilai']=="C"){ echo"Cukup"; }
		if($ckep['nilai']=="D"){ echo"Kurang"; }
		 ?>)</td>
                </tr>
                <tr>
                  <td colspan="3" height="2"></td>
                  </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="4%">&nbsp;</td>
        <td width="48%"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td colspan="3" bgcolor="#FFFFFF"><div align="center">Ketidak Hadiran </div></td>
                </tr>
                <tr>
                  <td colspan="3" bgcolor="#000000" height="2"></td>
                  </tr>
                <tr>
                  <td width="31%">&nbsp;Sakit</td>
                  <td width="3%">:</td>
                  <td width="66%"><? if(empty($nck1)){ echo "-"; }else{ echo"$nck1"; } ?> Hari</td>
                </tr>
                <tr>
                  <td>&nbsp;Izin</td>
                  <td>:</td>
                  <td><? if(empty($nck2)){ echo "-"; }else{ echo"$nck2";}  ?> Hari</td>
                </tr>
                <tr>
                  <td>&nbsp;Tanpa Keterangan </td>
                  <td>:</td>
                  <td><? if(empty($nck3)){ echo "-"; }else{ echo"$nck3";}  ?> Hari</td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="62%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><strong>Catatan Wali Kelas :</strong></td>
          </tr>
          <tr>
            <td height="25"><?
			$cw=mysql_query("SELECT * FROM tb_catatan_wk WHERE nis='$ct[nis]' and thn_ajaran='$thaj' and semester='$sem' and kelas='$ct[kelas_st]' ");
            $ccw=mysql_fetch_array($cw);
				
			echo $ccw['catatan'];
			?>            </td>
          </tr>
        </table></td>
        <td width="38%" height="48" valign="top"><span class="style4"><strong>Keputusan</strong> :<br />
Berdasarkan hasil yang dicapai pada semester 1 dan 2 maka peserta didik ditetapkan<br />
naik ke kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;............(....................)<br />
tinggal di kelas ............(....................)</span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="162" colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">Mengetahui : </div></td>
        <td>&nbsp;</td>
        <td><div align="center">Pangkep, 25 Juni 2020</div></td>
      </tr>
      <tr>
        <td><div align="center">Orang Tua Wali</div></td>
        <td><div align="center">Kepala Sekolah</div></td>
        <td><div align="center">Wali Kelas</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td rowspan="7" valign="bottom"><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="30%" height="36"><div align="center">
          <div align="center">
            <p>(______________________________)</p>
            </div>
        </div></td>
        <td width="34%"><div align="center"> <u>(Miftahul Khair, S.Pd.)</u><br />
          NIY : 201408 1 2 021 </div></td>
        <td width="36%"><div align="center">
          <p><?
		  
	$tampi=mysql_query("SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysql_fetch_array($tampi);
	
	$tampi2=mysql_query("SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysql_fetch_array($tampi2);
	
	$tampi4=mysql_query("SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysql_fetch_array($tampi4);
	
	echo $tpk4['nama_gp'];
	?>
            <br />
            NIY : <? echo $tpk4['nip']; ?></p>
          </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%" height="95" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="82" height="93" /></td>
        <td width="89%" valign="top"><div align="center">
            <p><span class="style3"><font size="2">YAYASAN 
              SHOHWATUL IS'AD</font></span><br />
                              <span class="style1"><font size="4">SMP 
                                IT SHOHWATUL IS'AD</font></span><br />
                                <br />
                                <span class="style6">NSS : 202190205004</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style6">NPSN : 40314482</span><span class="style4"><br />
                                  Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan 90645 P.O. Box 300 <br />
                                  http://www.shohwatulisad.sch.id - e-mail : info@shohwatulisad.sch.id </span></p>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="6" valign="top"><HR /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="6"><div align="center" class="style5"><font size="3">LAPORAN HASIL UJIAN LISAN </font></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><font size="2">SEMESTER
      <? if($sem=='I') { echo "GANJIL"; }else{ echo"GENAP"; }?>
      TAHUN AJARAN <? echo $thaj; ?></font></div></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="8%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td colspan="2"><div align="right"><? echo $ct['nis']." / ". $ct['nis_nasional']; ?></div></td>
    <td><div align="center" class="style7">:</div></td>
    <td><img src="raport/nis.jpg" width="79" height="28" align="absmiddle" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="right"><? echo $ct['nama']; ?></div></td>
    <td><div align="center" class="style7">:</div></td>
    <td><img src="raport/nama.jpg" width="77" height="26" align="absmiddle" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="right"><? echo $ct['kelas_st']; ?></div></td>
    <td><div align="center" class="style7">:</div></td>
    <td><img src="raport/kelas.jpg" width="42" height="23" align="absmiddle" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="350" colspan="6" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="right"><strong>NILAI</strong></div></td>
              <td><div align="center"><img src="raport/nilai.jpg" width="39" height="25" /></div></td>
            </tr>
          </table>
        </div>          <div align="center"></div></td>
        <td width="37%" rowspan="2" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><img src="raport/sub_materi.jpg" width="91" height="24" /></div></td>
          </tr>
          <tr>
            <td><div align="center"><strong>SUB MATERI </strong></div></td>
          </tr>
        </table></td>
        <td width="18%" rowspan="2" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><img src="raport/materi.jpg" width="97" height="26" /></div></td>
          </tr>
          <tr>
            <td><div align="center"><strong>MATERI</strong></div></td>
          </tr>
        </table>
          <div align="center"></div></td>
      </tr>
      <tr>
        <td width="24%" bgcolor="#FFFFFF"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="50%"><div align="center"><strong>HURUF</strong></div></td>
              <td width="50%"><div align="center"><img src="raport/huruf.jpg" width="66" height="22" /></div></td>
            </tr>
          </table>
        </div></td>
        <td width="21%" bgcolor="#FFFFFF"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="51%"><div align="center"><strong>ANGKA</strong></div></td>
              <td width="49%"><div align="center"><img src="raport/angka.jpg" width="53" height="27" /></div></td>
            </tr>
          </table>
        </div></td>
        </tr>
      <tr>
        <td><div align="center">
          <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML001' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);
			$ls1=$crl['nilai'];
			if($ls1 >=1){ $tnl=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
          <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;1. Membaca Al-Qur'an </td>
            <td><div align="right"><img src="raport/membaca alquran.JPG" width="68" height="28" /></div></td>
          </tr>
        </table></td>
        <td rowspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><img src="raport/alquran.jpg" width="42" height="23" /></div></td>
          </tr>
          <tr>
            <td><div align="center">
              <div align="center"><strong>Al-Qur'an</strong></div>
            </div></td>
          </tr>
        </table>
        <div align="center"></div>          <div align="center"></div>          <div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML002' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls2=$crl['nilai'];
			if($ls2 >=1){ $tnl2=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%">&nbsp;2. Tajwid </td>
            <td width="52%"><div align="right"><img src="raport/tajwid.jpg" width="47" height="20" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML003' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls3=$crl['nilai'];
			if($ls3 >=1){ $tnl3=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%">&nbsp;3. Hafalan Al-Qur'an </td>
            <td width="52%"><div align="right"><img src="raport/Copy (3) of Arab rapor 2.jpg" width="76" height="19" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML004' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl); 
			$ls4=$crl['nilai']; 
			if($ls4 >=1){ $tnl4=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="59%">&nbsp;4. Terjemahan Al-Qur'an </td>
            <td width="41%"><div align="right"><img src="raport/terjemahan.jpg" width="78" height="20" /> </div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="4" height="5"></div></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML005' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);
			$ls5=$crl['nilai'];  
			if($ls5 >=1){ $tnl5=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;1. Fiqhih Syari'ah </td>
            <td><div align="right"><img src="raport/fiqisyariah.jpg" width="63" height="25" /></div></td>
          </tr>
        </table></td>
        <td rowspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><img src="raport/Copy (10) of Arab rapor 2.jpg" width="32" height="25" /></div></td>
          </tr>
          <tr>
            <td><div align="center">
              <div align="center"><strong>Fiqih</strong></div>
            </div></td>
          </tr>
        </table>
        <div align="center"></div>          <div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML006' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls6=$crl['nilai'];
			if($ls6 >=1){ $tnl6=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;2. Ibadah Amaliyah </td>
            <td><div align="right"><img src="raport/ibadah_amalia.jpg" width="77" height="23" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML007' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls7=$crl['nilai'];
			if($ls7 >=1){ $tnl7=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;3. Dalil-dalil dan Do'a </td>
            <td><div align="right"><img src="raport/dalil_doa.jpg" width="91" height="21" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML008' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls8=$crl['nilai'];
			if($ls8 >=1){ $tnl8=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="55%">&nbsp;4. Baca Kitab </td>
            <td width="45%"><div align="right"><img src="raport/baca_kitab.jpg" width="70" height="23" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="4" height="5"></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML009' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl); 
			$ls9=$crl['nilai']; 
			if($ls9 >=1){ $tnl9=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="54%">&nbsp;1. Muhadatsah </td>
            <td width="46%"><div align="right"><img src="raport/muhadazah.jpg" width="52" height="20" /></div></td>
          </tr>
        </table></td>
        <td rowspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><img src="raport/Copy (4) of Arab rapor 2.jpg" width="85" height="21" /></div></td>
          </tr>
          <tr>
            <td><div align="center"><strong>Bahasa Arab </strong></div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML010' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl); 
			$ls10=$crl['nilai']; 
			if($ls10 >=1){ $tnl10=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="54%">&nbsp;2. Muthola'ah </td>
            <td width="46%"><div align="right"><img src="raport/Muthola.jpg" width="51" height="21" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML011' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls11=$crl['nilai'];
			if($ls11 >=1){ $tnl11=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="53%">&nbsp;3. Nahwu </td>
            <td width="47%"><div align="right"><img src="raport/Copy (6) of Arab rapor 2.jpg" width="52" height="26" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML012' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls12=$crl['nilai'];
			if($ls12 >=1){ $tnl12=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="54%">&nbsp;4. Mufrodat </td>
            <td width="46%"><div align="right"><img src="raport/mufrodat.jpg" width="94" height="24" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="4" height="5"></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML013' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl); 
			$ls13=$crl['nilai']; 
			if($ls13 >=1){ $tnl13=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="54%">&nbsp;1. Reading </td>
            <td width="46%"><div align="right"><img src="raport/reading.jpg" width="101" height="25" /></div></td>
          </tr>
        </table></td>
        <td rowspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><img src="raport/Copy (21) of Arab rapor.jpg" width="112" height="17" /></div></td>
          </tr>
          <tr>
            <td><div align="center"><strong>Bahasa Inggris </strong></div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">
          <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML014' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl); 
			$ls14=$crl['nilai']; 
			if($ls14 >=1){ $tnl14=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="55%">&nbsp;2. Conversation </td>
            <td width="45%"><div align="right"><img src="raport/coposition.jpg" width="98" height="24" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><div align="center">
          <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML015' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls15=$crl['nilai'];
			if($ls15 >=1){ $tnl15=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="52%">&nbsp;3. Translation </td>
            <td width="48%"><div align="right"><img src="raport/translation.jpg" width="79" height="26" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><div align="center">
            <? 
		    $rl=mysql_query("SELECT * FROM tb_nilai_lisan WHERE nis_santri='$ct[nis]' and kd_mp='ML016' and thn_ajaran='$thaj' and semester='$sem' ");
            $crl=mysql_fetch_array($rl);  
			$ls16=$crl['nilai'];
			if($ls16 >=1){ $tnl16=1; }
		    $a=angka_huruf($crl['nilai']); echo $a; 
		  ?>
        </div></td>
        <td><div align="center">
            <? 
			echo $crl['nilai']; 
         ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="53%">&nbsp;4. Listening </td>
            <td width="47%"><div align="right"><img src="raport/listening.jpg" width="46" height="25" /></div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="1" colspan="4" bgcolor="#000000"></td>
        </tr>
      <tr>
        <td height="20">&nbsp;</td>
        <td><div align="center"><?
		$tls=$ls1+$ls2+$ls3+$ls4+$ls5+$ls6+$ls7+$ls8+$ls9+$ls10+$ls11+$ls12+$ls13+$ls14+$ls15+$ls16;
		$pnl=$tnl+$tnl1+$tnl2+$tnl3+$tnl4+$tnl5+$tnl6+$tnl7+$tnl8+$tnl9+$tnl10+$tnl11+$tnl12+$tnl13+$tnl14+$tnl15+$tnl16;
		$nr_tls=ceil($tls/$pnl);
		echo $tls;
		?></div></td>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="72%"><strong>&nbsp;Jumlah</strong></td>
            <td width="28%"><img src="raport/jumlah.jpg" width="105" height="25" /></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="21">&nbsp;</td>
        <td><div align="center"><? echo $nr_tls; ?></div></td>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="72%" height="20"><strong>&nbsp;Nilai Rata-rata </strong></td>
            <td width="28%"><img src="raport/nilai_rata2.jpg" width="84" height="23" /></td>
          </tr>
        </table></td>
        </tr>
      
    </table></td>
  </tr>
  <tr>
    <td colspan="6" height="22"></td>
  </tr>
  <tr>
    <td height="235" colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      
      <tr>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
        <td><div align="left">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="48%"><img src="raport/pangkep.jpg" width="47" height="22" /></td>
              <td width="7%">:</td>
              <td width="45%"><img src="raport/ditetapkan.jpg" width="60" height="22" /></td>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%">25 Juni 2020</td>
            <td width="7%">:</td>
            <td width="45%"><img src="raport/tanggal.jpg" width="45" height="23" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td><div align="center"><img src="raport/orang_tua.jpg" width="58" height="26" /></div></td>
        <td><div align="center"><img src="raport/kepala_sekolah.jpg" width="81" height="28" /></div></td>
        <td><div align="center"><img src="raport/wali_kelas.jpg" width="63" height="26" /></div></td>
      </tr>
      <tr>
        <td><div align="center">Orang Tua Wali </div></td>
        <td><div align="center">Kepala Sekolah</div></td>
        <td><div align="center">Wali Kelas </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="37%" rowspan="6" valign="bottom"><div align="center"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="33%">&nbsp;</td>
        <td width="30%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="36"><div align="center">(__________________________________)</div></td>
        <td><div align="center"><u>(Miftahul Khair, S.Pd.)</u><br />
NIY : 201408 1 2 021 </div></td>
        <td><div align="center"><u>(<?
		  
	$tampi=mysql_query("SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysql_fetch_array($tampi);
	
	$tampi2=mysql_query("SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysql_fetch_array($tampi2);
	
	$tampi4=mysql_query("SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
    $tpk4=mysql_fetch_array($tampi4);
	
	echo $tpk4['nama_gp'];
	?>)</u><br />
NIY : <? echo $tpk4['nip']; ?></div></td>
      </tr>
    </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
