<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
.style3 {font-size: 24px; font-family: "Courier New", Courier, monospace; }
.style1 {	font-size: 36px;
	font-weight: bold;
}
.style8 {font-size: 14px}
.style9 {
	font-size: 18px;
	font-weight: bold;
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
    <td><table width="96%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="11%" height="95" valign="top"><img src="../../images/LOGO-SHOID2.jpg" width="105" height="109" /></td>
        <td width="89%" valign="top"><div align="center"><span class="style2">YAYASAN 
              SHOHWATUL IS'AD</span><br />
              <span class="style1">PPMI 
                                 SHOHWATUL IS'AD</span><br />
                                 <strong>SMP IT SHOHWATUL IS'AD</strong> <br />
              <span class="style8">NSS : 202190205004&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NPSN : 40314482<br />
              Alamat: Jl. Poros Padanglampe&nbsp;KM . 3&nbsp;Ma'rang&nbsp;Pangkep&nbsp;Sulawesi -Selatan 90645 P.O. Box 300 <br /></span><span class="style8">http://www.shohwatulisad.sch.id e-mail : info@shohwatulisad.sch.id </span></div></td>
      </tr>
      <tr>
        <td height="2" colspan="2" valign="top" bgcolor="#000000"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
      <?
	      $tmpkls=mysql_query("SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE id_santri='$idstr' ");
          $ct=mysql_fetch_array($tmpkls);
	   ?>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7"><div align="center" class="style9">RAPORT MID SEMESTER </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
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
        <td>&nbsp;</td>
      </tr>
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
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right" class="style2"></div></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="667"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="5%" rowspan="2"><div align="center"><strong>SIKAP</strong></div></td>
        <td width="5%" rowspan="2"><div align="center"><strong>UTS</strong></div></td>
        <td colspan="4"><div align="center"><strong>U H </strong></div></td>
        <td height="30" colspan="6"><div align="center"><strong>TUGAS</strong></div></td>
        <td width="88%"><div align="center"><img src="Copy (4) of Arab rapor.jpg" width="101" height="25" /></div></td>
        <td width="6%" rowspan="2"><div align="center"><img src="Copy (6) of Arab rapor.jpg" width="23" height="49" /></div></td>
      </tr>
      <tr>
        <td width="5%"><div align="center">1</div></td>
        <td width="5%"><div align="center">2</div></td>
        <td width="5%"><div align="center">3</div></td>
        <td width="5%"><div align="center">4</div></td>
        <td width="5%"><div align="center">1</div></td>
        <td width="5%"><div align="center">2</div></td>
        <td width="5%"><div align="center">3</div></td>
        <td width="5%"><div align="center">4</div></td>
        <td width="5%"><div align="center">5</div></td>
        <td width="5%"><div align="center">6</div></td>
        <td><div align="center"><strong>Mata Pelajaran </strong></div></td>
        </tr>
      
      <tr>
        <td><div align="center">
            <?    	       
		  

		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk1=mysql_fetch_array($tampi); $ntk1=$tpk1['uts']; $nt1=$tpk1['nt1']; $nt2=$tpk1['nt2']; $nt3=$tpk1['nt3']; $nu1=$tpk1['uh1']; $nu2=$tpk1['uh2']; $nu3=$tpk1['uh3'];
		  
		  $tampi2=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
         $tpk12=mysql_fetch_array($tampi2); $ntk2=$tpk12['uts']; $nn1=$tpk12['nt1']; $nn2=$tpk12['nt2']; $nn3=$tpk12['nt3']; $nl1=$tpk12['uh1']; $nl2=$tpk12['uh2']; $nl3=$tpk12['uh3'];
		  $sikap=$tpk12['sikap'];
		  
		  
		  
		  $nl_uts=ceil(($ntk1+$ntk2)/2);
		  
		  $nl_tgs1=ceil(($nt1+$nn1)/2);
		  $nl_tgs2=ceil(($nt2+$nn2)/2);
		  $nl_tgs3=ceil(($nt3+$nn3)/2);
		  
		  $nl_uh1=ceil(($nu1+$nl1)/2);
		  $nl_uh2=ceil(($nu2+$nl2)/2);
		  $nl_uh3=ceil(($nu3+$nl3)/2);
		  
		  
		 echo $sikap; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $nl_uts;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $nl_uh1;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $nl_uh2;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $nl_uh3;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $nl_tgs1;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $nl_tgs2;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $nl_tgs3;
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		 
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
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
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  echo $tpk['nt6'];
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
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		  echo $tpk['nt6'];
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
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		  echo $tpk['nt6'];
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
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Matematika</td>
            <td width="50%"><div align="right"><img src="Copy (22) of Arab rapor.jpg" width="85" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">5.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		   
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Ilmu Pengetahuan Alam </td>
            <td width="50%"><div align="right"><img src="Copy (23) of Arab rapor.jpg" width="84" height="20" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">6.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		 echo $tpk['nt6'];
		  ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Ilmu Pengetahuan Sosial </td>
            <td width="50%"><div align="right"><img src="Copy (24) of Arab rapor.jpg" width="117" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">7.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD012' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Ilmu Seni Budaya/Kaligrafi </td>
            <td width="50%"><div align="right"><img src="Copy (25) of Arab rapor.jpg" width="90" height="18" />&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">8.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Pendidikan Jasmani dan Kesehatan </td>
            <td width="50%"><div align="right"><img src="Copy (26) of Arab rapor.jpg" width="73" height="20" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">9.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt6'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Teknologi Informasi dan Komunikasi </td>
            <td width="50%"><div align="right"><img src="Copy of Arab rapor 2.jpg" width="132" height="46" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">10.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD011' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Kewirausahaan dan Agrobisnis </td>
            <td width="50%"><div align="right"></div></td>
          </tr>
        </table></td>
        <td><div align="center">11.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP014' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Membaca Al Qur'an/Tajwid </td>
            <td width="50%"><div align="right"><img src="Copy (2) of Arab rapor 2.jpg" width="119" height="26" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">12.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP001' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		  
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		  
		echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Menghafal Al Qur'an </td>
            <td width="50%"><div align="right"><img src="Copy (3) of Arab rapor 2.jpg" width="76" height="19" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">13.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP003' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
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
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP004' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Dikte Bahasa Arab / Imla'</td>
            <td width="50%"><div align="right"><img src="Copy (5) of Arab rapor 2.jpg" width="59" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">15.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP009' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		  
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Nahwu</td>
            <td width="50%"><div align="right"><img src="Copy (6) of Arab rapor 2.jpg" width="52" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">16.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP010' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Shorof</td>
            <td width="50%"><div align="right"><img src="Copy (7) of Arab rapor 2.jpg" width="75" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">17.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP020' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		
		  
		 echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Mahfudhot</td>
            <td width="50%"><div align="right"><img src="Copy (8) of Arab rapor 2.jpg" width="86" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">18.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP006' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Aqidah Akhlaq </td>
            <td width="50%"><div align="right"><img src="Copy (9) of Arab rapor 2.jpg" width="103" height="22" />&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">19.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP005' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Fiqh</td>
            <td width="50%"><div align="right"><img src="Copy (10) of Arab rapor 2.jpg" width="32" height="25" />&nbsp;&nbsp;&nbsp;</div></td>
          </tr>
        </table></td>
        <td><div align="center">20.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP007' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Sejarah Kebudayaan Islam </td>
            <td width="50%"><div align="right"><img src="Copy (11) of Arab rapor 2.jpg" width="142" height="26" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">21.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP013' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Qira'atul Kutub </td>
            <td width="50%"><div align="right"><img src="Copy of Arab rapor 3.jpg" width="86" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">22.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP016' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Mutholaah</td>
            <td width="50%"><div align="right"><img src="mutoalah.JPG" width="55" height="23" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">23.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MD012' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Khot</td>
            <td width="50%"><div align="right"><img src="khot.JPG" width="35" height="25" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">24.</div></td>
      </tr>
      
      <tr>
        <td height="21"><div align="center">
          <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP018' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Insya'</td>
            <td width="50%"><div align="right"><img src="insya.JPG" width="58" height="30" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">25.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP008' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Muhadatsah</td>
            <td width="50%"><div align="right"></div></td>
          </tr>
        </table></td>
        <td><div align="center">26.</div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='MP019' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
          <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Composition</td>
            <td width="50%"><div align="right"><img src="composition.JPG" width="60" height="30" /></div></td>
          </tr>
        </table></td>
        <td><div align="center">27.</div></td>
      </tr>
      <tr>
        <td><div align="center">
            <?    	       
		  
		  $tampi=mysql_query("SELECT * FROM tb_nilai WHERE nis='$ct[nis]' and kd_mp='ML014' and thn_ajaran='$thaj' and semester='$sem' ");
          $tpk=mysql_fetch_array($tampi);  
		  echo $tpk['sikap'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uts'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['uh4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		 
		  echo $tpk['nt1'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt2'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt3'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt4'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <?    	       
		  
		   
		  echo $tpk['nt5'];
		  
		  
		//$a=angka_huruf($j1); echo $a; 
			
			?>
        </div></td>
        <td><div align="center">
            <? 
		 
		  
		  echo $tpk['nt6'];
		   ?>
        </div></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%">&nbsp;Conversation</td>
            <td width="50%"><div align="right"></div></td>
          </tr>
        </table></td>
        <td><div align="center">28.</div></td>
      </tr>
      
      

    </table></td>
  </tr>
  <tr>
    <td height="108" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2"><div align="center"><? 
		$ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ORDER BY id_ext DESC");
        $cktr=mysql_fetch_array($ktr);
		
		echo $cktr['hafalan_qr']; ?></div></td>
        <td colspan="2"><div align="center"><strong>Hafalan Al Quran </strong></div></td>
        <td width="17%" rowspan="5"><div align="center"><strong>Pengembangan Diri </strong><img src="Copy (3) of c1.JPG" width="89" height="27" /><br />
        </div></td>
      </tr>
      <tr>
        <td colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="2"></td>
      </tr>
      <tr>
        <td width="34%"><div align="center"><strong>Huruf</strong> <img src="Copy (8) of Arab rapor.jpg" width="96" height="19" align="absmiddle" /></div></td>
        <td width="7%"><div align="center"><strong>Nilai</strong></div></td>
        <td width="19%"><div align="center"><strong>Jenis Kegiatan </strong></div></td>
        <td width="23%"><div align="center"><img src="b1.jpg" width="82" height="26" /></div></td>
      </tr>
      <tr>
        <td height="21"><div align="center">
          <? 
		  $tnils=mysql_query("SELECT * FROM tb_nilai_eskul WHERE thn_eskl='$thaj' AND sms_eskl='$sem' AND nis_eskl='$ct[nis]' AND 
		                           kls_eskl='$ct[kelas_st]' ");
                                   $cnils=mysql_fetch_array($tnils); 
		  
		    
			
		if($cnils['nil_eskl1']=="A"){ echo"Sangat Baik"; }
		if($cnils['nil_eskl1']=="B"){ echo"Baik"; }
		if($cnils['nil_eskl1']=="C"){ echo"Cukup"; }
		if($cnils['nil_eskl1']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
        <td><div align="center"><? 
								   echo $cnils['nil_eskl1'];
								   ?>
		</div></td>
        <td>
		  <div align="center">
		    <?
		  $pbk=mysql_query("SELECT * FROM tb_pbakat WHERE kd_santri='$idstr'  ");
          $tpbk=mysql_fetch_array($pbk); 
		  
		  $pbk2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysql_fetch_array($pbk2);
		  
		  echo $tpbk2['nama_mp'];
		?>
	        </div></td>
        <td><div align="center"><img src="extrakur_pil1.jpg" width="176" height="22" /></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <? 
		    
			
		if($cnils['nil_eskl2']=="A"){ echo"Sangat Baik"; }
		if($cnils['nil_eskl2']=="B"){ echo"Baik"; }
		if($cnils['nil_eskl2']=="C"){ echo"Cukup"; }
		if($cnils['nil_eskl2']=="D"){ echo"Kurang"; }
		 ?>
        </div></td>
        <td><div align="center"><? echo $cnils['nil_eskl2']; ?></div></td>
        <td><div align="center">
          <?
		  $pbk=mysql_query("SELECT * FROM tb_pbakat WHERE kd_santri='$idstr' limit 1,1 ");
          $tpbk=mysql_fetch_array($pbk); 
		  
		  $pbk2=mysql_query("SELECT * FROM mata_pelajaran WHERE kd_mp='$tpbk[kd_mp]'  ");
          $tpbk2=mysql_fetch_array($pbk2);
		  
		  echo $tpbk2['nama_mp'];
		?>
        </div></td>
        <td><div align="center"><img src="extrakur_pil2.jpg" width="185" height="23" /></div></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="328" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#000000">
              <tr>
                <td colspan="3"><div align="center"><strong>Kehadiran</strong> <img src="kehadiran.jpg" width="74" height="24" align="absmiddle" /></div></td>
              </tr>
			  <? $skt=0; 
			   $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysql_fetch_array($ktr)){
			         $skt=$cktr['sakit']+$skt;
			   }
			  
			   
			  ?>
              <tr>
                <td width="20"><div align="center">1.</div></td>
                <td width="241">Sakit <img src="sakit.jpg" width="42" height="19" align="absmiddle" /></td>
                <td width="59"><div align="center"><? echo $skt;  ?> hari </div></td>
              </tr>
              <tr>
                <td><div align="center">2.</div></td>
                <td>Izin <img src="izin.jpg" width="25" height="23" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysql_fetch_array($ktr)){
			   $skt=$cktr['izin']+$skt;  }
				
				echo $skt; ?> hari</div></td>
              </tr>
              <tr>
                <td><div align="center">3.</div></td>
                <td>Tanpa Keterangan <img src="tanpa_ket.jpg" width="65" height="26" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysql_fetch_array($ktr)){
			   $skt=$cktr['alpa']+$skt;  }
				
				 echo $skt; ?> hari</div></td>
              </tr>
              <tr>
                <td><div align="center">4.</div></td>
                <td>Tidak Solat Jamaah <img src="tidak_solat.jpg" width="111" height="24" align="absmiddle" /></td>
                <td><div align="center"><? 
				$skt=0; 
			   $ktr=mysql_query("SELECT * FROM tb_nilai_ext WHERE kd_santri='$ct[nis]' and kelas='$ct[kelas_st]' and thn_ajar='$thaj' and semester='$sem' ");
               while($cktr=mysql_fetch_array($ktr)){
			   $skt=$cktr['t_solat']+$skt;  }
				
				 echo $skt; ?> kali </div></td>
              </tr>
          </table></td>
          <td valign="top"><img src="untitled.JPG" width="662" height="122" /></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  
  
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
     <?
	    $tampil=mysql_query("SELECT * FROM tb_ttd WHERE ket='b' AND semester='$sem'");
        $tp=mysql_fetch_array($tampil);
		
		
	  ?>
	 
	  <tr>
        <td width="47%"><div align="center"></div></td>
        <td width="5%">&nbsp;</td>
        <td width="48%"><div align="center"><? echo $tp['tgl_mid']; ?>&nbsp;&nbsp; <img src="waktu pembagian.JPG" width="125" height="31" align="absmiddle" /></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Wali Santri <img src="ttd1.jpg" width="67" height="28" align="absmiddle" /></div></td>
        <td>&nbsp;</td>
        <td><div align="center">Wali Kelas <img src="ttd2.jpg" width="75" height="28" align="absmiddle" /></div></td>
      </tr>
    </table></td>
  </tr>
  
  
  <tr>
    <td><div align="center">
	<?
	$tampi=mysql_query("SELECT * FROM master_kelas WHERE kelas='$ct[kelas_st]' ");
    $tpk=mysql_fetch_array($tampi);
	
	$tampi2=mysql_query("SELECT * FROM wali_kelas WHERE kd_kls='$tpk[kd_kls]' ");
    $tpk3=mysql_fetch_array($tampi2);
	
	$tampi4=mysql_query("SELECT id_gp,nip,nama_gp FROM guru_pegawai WHERE id_gp='$tpk3[kd_gp]' ");
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
          <td><div align="center">(______________________________)</div></td>
          <td>&nbsp;</td>
          <td><div align="center">( <? echo $tpk4['nama_gp']; ?> ) </div></td>
        </tr>
        <tr>
          <td width="47%"><div align="center"></div></td>
          <td width="5%">&nbsp;</td>
          <td width="48%"><div align="center">NIY : <? echo $tpk4['nip']; ?></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
