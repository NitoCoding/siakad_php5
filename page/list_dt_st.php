<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.lk {	text-decoration: none;
}
-->
</style>
</head>
<script language="JavaScript" type="text/javascript">
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>
<body>
<? 
     
     $jst=mysql_query("SELECT * FROM tb_santri WHERE status='a' or status='p' ");
     $tjst=mysql_num_rows($jst);
  ?>
<strong>Total Santri Saat ini :</strong> <? echo $tjst; ?>
 Orang <strong>&nbsp;|&nbsp;</strong>  <strong>Kelas</strong> 
<select name="select" onchange="MM_jumpMenu('parent',this,0)">
  <option value="home.php?home=st&dpn_st=ld&klsk=s" <? if($klsk=="s"){ echo"selected='selected'"; } ?>>Semua Kelas</option>
  <?
	      $tampi=mysql_query("SELECT kd_kls,kelas FROM master_kelas ");
          while($tpk=mysql_fetch_array($tampi)){
	    ?>
  <option value="home.php?home=st&dpn_st=ld&klsk=<? echo "$tpk[kelas]"; ?>" <? if($klsk=="$tpk[kelas]"){ echo"selected='selected'"; } ?>><? echo $tpk['kelas']; ?></option>
  <? } ?>
  </select>
 &nbsp;<strong>|</strong>&nbsp;&nbsp;<img src="images/index.gif" width="16" height="16" /> &nbsp;<a href="page/report_st.php?klsk=<? echo $klsk; ?>" class="lk" target="_blank">Priview Data Santri </a><br />
<?  
	      if($klsk!='' and $klsk!='s'){ $klsx="WHERE kelas='$klsk' "; }
		  if($klsk=='s'){ $klsx=""; }
	      $tampil=mysql_query("SELECT kd_kls,kelas FROM master_kelas $klsx");
          while($tp=mysql_fetch_array($tampil)){
		  echo"<br><b>Kelas : $tp[kelas]</b><br>";
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#B3CF70">
  
  <tr>
    <td width="3%" bgcolor="#B3CF70"><div align="center">No</div></td>
    <td width="11%" bgcolor="#B3CF70"><div align="center">Nis  </div></td>
    <td width="24%" bgcolor="#B3CF70"><div align="center">Nama</div></td>
    <td width="11%" bgcolor="#B3CF70"><div align="center">Kelas </div></td>
    <td width="22%" bgcolor="#B3CF70"><div align="center">Tahun Ajaran Masuk </div></td>
    <td width="13%" bgcolor="#B3CF70"><div align="center">Status </div></td>
    <td width="8%" height="26" bgcolor="#B3CF70"><div align="center">Edit</div></td>
    <td width="8%" bgcolor="#B3CF70"><div align="center">Hapus</div></td>
  </tr>
  
    <tr>
      <td colspan="8" height="2"></td>
    </tr>
	<? $no=1;
     $tampil2=mysql_query("SELECT * FROM tb_santri WHERE kelas_st='$tp[kelas]' AND status='a' ORDER BY nama ");
     while($tp=mysql_fetch_array($tampil2)){
  ?>
  <tr>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$no"; ?></div>    </td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[nis]"; ?></div>    </td>
    <td bgcolor="#DCF3AF"><? echo"$tp[nama]"; ?></td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[kelas_st]"; ?></div>    </td>
    <td bgcolor="#DCF3AF"><div align="center"><? echo"$tp[thn_ajaranmsk]"; ?></div></td>
    <td bgcolor="#DCF3AF"><div align="center">
      <? if($tp['status']=='a')echo"Aktif"; 
	       if($tp['status']=='p')echo"Pindahan"; 
		   if($tp['status']=='d')echo"Pindah"; 
		   if($tp['status']=='l')echo"Alumni"; 
	?>
    </div></td>
    <td bgcolor="#DCF3AF"><div align="center"><a href="home.php?home=st&dpn_st=edt&idk_dst=<? echo"$tp[id_santri]"; ?>"><img src="images/image1.gif" width="20" height="22" border="0" align="absmiddle" /></a></div></td>
    <td bgcolor="#DCF3AF"><div align="center"><a href="page/act_dt_st.php?del=oke&idk_ddt=<? echo"$tp[id_santri]"; ?>" onClick="return konfirmasi('yakin data akan dihapus ?');"><img src="images/actionCancel.gif" width="18" height="18" border="0" align="absbottom" /></a> </div></td>
  </tr>
  <? $no+=1; } ?>
</table>
<? } ?>

</body>
</html>
