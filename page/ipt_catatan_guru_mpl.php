<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {
	color: #FF3300;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.ip_tx {
	font-family: Arial, Helvetica, sans-serif;
	margin: 9px;
	padding: 9px;
	height: auto;
	width: auto;
	font-size: 9px;
}
.style13 {color: #FFFFFF}
-->
</style>
<script type="text/JavaScript">
<!--
function angka(){
  if(isNaN(form1.nt1.value)) { form1.nt1.value='';  }
  if(isNaN(form1.nt2.value)) { form1.nt2.value='';  }
  if(isNaN(form1.nt3.value)) { form1.nt3.value='';  }
  if(isNaN(form1.nt4.value)) { form1.nt4.value='';  }
  if(isNaN(form1.nt5.value)) { form1.nt5.value='';  }
  if(isNaN(form1.nt6.value)) { form1.nt6.value='';  }
  if(isNaN(form1.nt7.value)) { form1.nt7.value='';  }
  if(isNaN(form1.nt8.value)) { form1.nt8.value='';  }
  if(isNaN(form1.nt9.value)) { form1.nt9.value='';  }
  if(isNaN(form1.nt10.value)) { form1.nt10.value='';  }
  if(isNaN(form1.uh1.value)) { form1.uh1.value='';  }
  if(isNaN(form1.uh2.value)) { form1.uh2.value='';  }
  if(isNaN(form1.uh3.value)) { form1.uh3.value='';  }
  if(isNaN(form1.uh4.value)) { form1.uh4.value='';  }
  if(isNaN(form1.uh5.value)) { form1.uh5.value='';  }
  if(isNaN(form1.nuts.value)) { form1.nuts.value='';  }
   if(isNaN(form1.nus.value)) { form1.nus.value='';  } 
    if(isNaN(form1.remedi.value)) { form1.remedi.value='';  } 
  
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<?
  $klsk2=$_GET['klsk2'];
  $klsk=$_GET['klsk'];
  $mpl=$_GET['mpl'];
  
   $idkls=$_GET['idkls'];
 
  $nisk=$_GET['nisk'];
  $mpl=$_GET['mpl'];
 
?>
<body>
<table width="1300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4">&nbsp;<font color="#FF0000" size="+3">
      <? $psn=$_GET['psn'];
	     if($psn=='1')echo "Kelas Belum Anda Pilih";
	   ?>
    </font></td>
  </tr>
  <tr>
    <td width="1%" height="27">&nbsp;</td>
    <td colspan="3" background="images/suckerfish_yellow.png">&nbsp;&nbsp;&nbsp;
      <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
        
        <option value="home.php?home=nilai&amp;dpn_nl8=n8&amp;klsk=">Semua Kelas</option>
        
        <?
		  if($idkusr=="i"){ $wrmk="WHERE kd_kls='$idkelas' "; }else{ $wrmk="";}
	      $tampi3=mysql_query("SELECT * FROM master_kelas $wrmk");
          while($tp3=mysql_fetch_array($tampi3)){
		 
	    ?>
        <option value="home.php?home=nilai&amp;dpn_nl8=n8&amp;klsk=<? echo "$tp3[kd_kls]&klsk2=$tp3[kelas]"; ?>" <? if($klsk2=="$tp3[kelas]"){ echo"selected='selected'"; } ?>><? echo $tp3['kelas']; ?></option>
        <? } ?>
        </select>
      &nbsp;<span class="style13">      </span>&nbsp;&nbsp;Tahun Ajaran : <? echo $thaj; ?>&nbsp;&nbsp;&nbsp;&nbsp;Semester 
    : <? echo $sem; if($sem=='I')echo " (Satu)";else echo " (Dua)"; ?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <?  
	   if($idkusr=="i"){
	      $qku7=mysql_query("SELECT kd_kls,kelas FROM master_kelas WHERE kd_kls='$idkelas'");
          $cqk7=mysql_fetch_array($qku7);
		  $klsk=$cqk7['kd_kls'];
		  $klsk2=$cqk7['kelas'];
	   }
	?>
  <tr>
    <td>&nbsp;</td>
    <td width="4%" valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td width="21%" valign="top">&nbsp;</td>
    <td width="74%" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="189">&nbsp;</td>
    <td colspan="3" valign="top"><?
	      if($klsk!=""){
		  $tam=mysql_query("SELECT id_santri,nis,nama,kelas_st FROM tb_santri WHERE kelas_st='$klsk2' AND status='a' ORDER BY nama"); }  else{ $tam=mysql_query("SELECT nis,nama,kelas_st FROM tb_santri WHERE kelas_st='VIIA' AND status='a' ORDER BY nama"); }
	  ?>
        <table width="100%" border="0" cellpadding="0" cellspacing="1" bordercolor="#B3CF70">
          <tr>
            <td colspan="3" bordercolor="#FFFFFF"><div align="left" class="style4">
              <? 
		  if($idkusr=="i"){
		  $qku=mysql_query("SELECT kd_kls,kd_gp FROM wali_kelas WHERE kd_gp='$idgurp'");
          $cqk=mysql_fetch_array($qku);
		  
		  $qku2=mysql_query("SELECT * FROM master_kelas WHERE kd_kls='$cqk[kd_kls]'");
          $cqk2=mysql_fetch_array($qku2);
           $klsk=$cqk2['kd_kls'];
		  }
		  if($klsk!=""){ echo"Kelas : $klsk2"; }else{ ?>
              Semua Kelas
  <? }?>
            </div></td>
          </tr>
          <tr>
            <td width="75" colspan="3" bordercolor="#FFFFFF">&nbsp;</td>
          </tr>
          
         
          <tr>
            <td colspan="3" bgcolor="#B3CF70" >
              <table width="100%" height="62" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="27" bgcolor="#666633"><div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nis</font></div></td>
                  <td bgcolor="#B3CF70"><div align="center"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Nama 
                  Santri</font></div></td>
                  <td bgcolor="#666633"><div align="center" class="style13">Predikat Spritual </div></td>
                  <td bgcolor="#B3CF70"><div align="center">Deskripsi Spritual </div></td>
                  <td bgcolor="#666633"><div align="center" class="style13">Predikat Sosial </div></td>
                  <td bgcolor="#B3CF70"><div align="center">Deskripsi Sosial </div></td>
                  <td bgcolor="#999900"><div align="center" class="style13">Action</div></td>
                </tr>
				
				
				 <?
				 $bgr=1;
		 while($tp=mysql_fetch_array($tam)){
		 $cnt=mysql_num_rows($tam);
		 $qku5=mysql_query("SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$tp[kelas_st]'");
         $cqk5=mysql_fetch_array($qku5);
		 
		 
		 if($klsk!=""){
	$ntgs=mysql_query("SELECT * FROM  catatan_mapel WHERE kd_santri='$tp[id_santri]' and kelas='$cqk5[kelas]' and  semester='$sem' and tahun_ajaran='$thaj' ");
	$cnt=mysql_fetch_array($ntgs);
      $rk=mysql_num_rows($ntgs);
	}  
		?>
               <form id="form1" name="form1" method="post" action="page/act_nilai_santri.php">
			    <tr bgcolor="#FFFFCC">
                  <td width="6%" height="24" bgcolor="#999966"><div align="center"><? echo"$tp[nis]"; ?></div></td>
                  <td width="20%">&nbsp;<? echo"$tp[nama]"; ?>
                    <input type="hidden" name="idstr" value="<? echo"$tp[id_santri]"; ?>" />
                    
                  <input type="hidden" name="mpl" value="<? echo"$mpl"; ?>" />
                  <input type="hidden" name="idkls" value="<? echo $klsk; ?>" />
                  <input type="hidden" name="klsk2" value="<? echo $klsk2; ?>" /></td>
				  <td width="14%" bgcolor="#999966"><div align="center">
				    <textarea name="pengetahuan" cols="20" rows="3"><? echo $cnt['predikat']; ?></textarea>
				  </div></td>
				  <td width="20%" bgcolor="#999966"><div align="center">
				    <textarea name="keterampilan" cols="25" rows="3"><? echo $cnt['deskripsi']; ?></textarea>
				  </div></td>
				  <td width="14%" bgcolor="#999966"><div align="center">
				    <textarea name="pres" cols="20" rows="3"><? echo $cnt['predikat_s']; ?></textarea>
				  </div></td>
				  <td width="20%" bgcolor="#999966"><div align="center">
				    <textarea name="dess" cols="25" rows="3"><? echo $cnt['deskripsi_s']; ?></textarea>
				  </div></td>
				  <td width="6%"><div align="center">
   <input <? if($rk==0){ echo"name='rekam_cm'"; }else{ echo"name='ubah_cm'"; } ?> type="submit" value="S A V E" />
 </div></td>
                </tr> </form> <a name="kembali"></a>
				<tr height="2" bgcolor="#B3CF70"><td></td><td></td>
				  <td></td>
				  <td></td>
				  <td></td>
				  <td></td>
			    <td></td></tr>
				<? $bgr+=1; $ary+=1;  } ?>
            </table>                                   </td>
          </tr>
          
          
          <tr>
            <td colspan="3" bgcolor="#B3CF70">&nbsp;</td>
          </tr>
      </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>


</body>
</html>