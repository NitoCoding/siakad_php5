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
-->
</style>
</head>
<?
include("../koneksi.php");
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
?>
<body>
<table width="1205" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1418" height="180" valign="top"><table width="1205" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="6" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="7%" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="95" height="108" /></td>
                <td width="1%">&nbsp;</td>
                <td width="92%"><span class="style3">YAYASAN SHOHWATUL IS'AD</span><br />
                    <span class="style1">SMP IT SHOHWATUL IS'AD</span><br />
                    <br />
                    <br />
                    <span class="style4">Alamat:  Jl. Poros Padanglampe&nbsp; KM  . 3&nbsp; Ma&rsquo;rang&nbsp;  Pangkep&nbsp; Sulawesi -Selatan 90645  P.O. Box 300<br />
                      http://www.shohwatulisad.com e-mail : shohwatulisad@gmail.com</span></td>
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
        <td colspan="6"><div align="center" class="style5">REKAP ABSENSI KEHADIRAN SANTRI PERTAHUN </div></td>
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
        <td width="7%">Kelas</td>
        <td width="1%">:</td>
        <td width="71%"><? echo $klsk; ?></td>
        <td width="5%">&nbsp;</td>
        <td width="1%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td>Tahun Ajaran  </td>
        <td>:</td>
        <td><? echo $thaj; ?></td>
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
    </table></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="1205" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="34" rowspan="3"><div align="center">No</div></td>
        <td width="66" rowspan="3"><div align="center">Nis</div></td>
        <td width="215" rowspan="3"><div align="center">Nama</div></td>
        <td colspan="41"><div align="center">MATA PELAJARAN </div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">ARB</div></td>
        <td colspan="3"><div align="center">MFT</div></td>
        <td colspan="3"><div align="center">NHU</div></td>
        <td colspan="3"><div align="center">AQD</div></td>
        <td colspan="3"><div align="center">TFS</div></td>
        <td colspan="3"><div align="center">SRF</div></td>
        <td colspan="3"><div align="center">TRI</div></td>
        <td colspan="3"><div align="center">HDST</div></td>
        <td colspan="3"><div align="center">IMLA'</div></td>
        <td colspan="3"><div align="center">FIQH</div></td>
        <td colspan="3"><div align="center">QRH</div></td>
        <td colspan="3"><div align="center">BML</div></td>
        <td colspan="4" rowspan="1"><div align="center">JML</div></td>
        <td width="60" rowspan="2"><div align="center">TOT<br />
          JAM</div></td>
        </tr>
      <tr>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
        <td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">I</div></td>
		<td width="21"><div align="center">S</div></td>
        <td width="21"><div align="center">A</div></td>
        <td width="21"><div align="center">H</div></td>
		</tr>
      <? $no=1;
   $tam=mysql_query("SELECT id_santri,kelas_st,nama,nis FROM tb_santri WHERE kelas_st='$klsk' AND status='a'  ORDER BY nama  ");
   while($tp=mysql_fetch_array($tam)){
   
          if($tp['kelas_st']=="VIIA"){ $tabelx="tb_hadir_7a"; $tabelx2="detail_hadir_7a"; }
		  if($tp['kelas_st']=="VIIB"){ $tabelx="tb_hadir_7b"; $tabelx2="detail_hadir_7b"; }
		  if($tp['kelas_st']=="VIIIA"){ $tabelx="tb_hadir_8a"; $tabelx2="detail_hadir_8a"; }
		  if($tp['kelas_st']=="VIIIB"){ $tabelx="tb_hadir_8b"; $tabelx2="detail_hadir_8b"; }
		  if($tp['kelas_st']=="IXA"){ $tabelx="tb_hadir_9a"; $tabelx2="detail_hadir_9a"; }
		  if($tp['kelas_st']=="IXB"){ $tabelx="tb_hadir_9b"; $tabelx2="detail_hadir_9b"; }
   
   
  ?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $tp['nis']; ?></div></td>
        <td>&nbsp;<? echo $tp['nama']; ?></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP003' AND $tabelx2.status='I' ");
   $tdh=mysql_num_rows($tdth);
   echo $tdh;
			
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP003' AND $tabelx2.status='S' ");
   $tdh=mysql_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP003' AND $tabelx2.status='A' ");
   $tdh=mysql_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
			$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP008' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP008' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP008' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP009' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
			
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP009' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP009' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP006' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
	
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP006' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP006' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP002' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
	
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP002' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP002' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP010' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;

  ?>
        </div></td>
        <td><div align="center">

            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP010' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
  $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP010' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP007' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
	
  
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP007' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP007' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP011' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;		
			
   
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP011' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP011' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP004' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	
			
  
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP004' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP004' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
            <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP005' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	
	
  
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP005' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
            <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP005' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
          <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP001' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
		  
   
  ?>
        </div></td>
        <td><div align="center">
          <?
  $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP001' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
          <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP001' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;
  ?>
        </div></td>
        <td><div align="center">
          <?
	$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP012' AND  
			$tabelx2.status='I' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	  
		  
  ?>
        </div></td>
        <td><div align="center">
          <?
  $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP012' AND  
			$tabelx2.status='S' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
          <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2 WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl='MP012' AND  
			$tabelx2.status='A' ");
            $tdh=mysql_num_rows($tdth);
            echo $tdh;	
  ?>
        </div></td>
        <td><div align="center">
          <?
   $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.status='I' AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
   mata_pelajaran.ket='MP' ");
   $tdh=mysql_num_rows($tdth);
   echo $tdh;
   
  ?>
        </div></td>
        <td><div align="center">
          <?
    $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.status='S' AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
   mata_pelajaran.ket='MP' ");
   $tdh=mysql_num_rows($tdth);
   echo $tdh;
   
  ?>
        </div></td>
        <td><div align="center">
          <?
    $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.status='A' AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
   mata_pelajaran.ket='MP' ");
   $tdh=mysql_num_rows($tdth);
   echo $tdh;
  ?>
        </div></td>
        <td>
          <div align="center">
            <?
    $tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND $tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.status='H' AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
   mata_pelajaran.ket='MP' ");
   $tdh=mysql_num_rows($tdth);
   echo $tdh;
  ?>
            </div></td>
        <td><div align="center">
            <? 
			$tjam=0;
			$tdth=mysql_query("SELECT * FROM $tabelx,$tabelx2,mata_pelajaran WHERE $tabelx.nis_h='$tp[nis]' AND $tabelx.thn_ajrh='$thaj' AND    
			$tabelx2.kd_hadir=$tabelx.id_hadir AND $tabelx2.kd_mpl=mata_pelajaran.kd_mp AND 
            mata_pelajaran.ket='MP'");
      while($tp3=mysql_fetch_array($tdth)){
   
      $tax=mysql_query("SELECT * FROM tb_jam WHERE kd_jam='$tp3[jam]' "); 
      $tpa=mysql_fetch_array($tax);
	  $tjam=$tjam+$tpa['jml_jam'];
   }
   echo $tjam;
  ?>
        </div></td>
        </tr>
      <?
    $no+=1;
    }
  ?>
    </table></td>
  </tr>
</table>

</body>
</html>
