<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}
.style2 {color: #FFFFFF}
.style3 {color: #996600}
-->
</style>
</head>
<script language="JavaScript" type="text/javascript">
function angka(){
  if(isNaN(form1.nip.value)) { form1.nip.value='';  }
  
}
function cek(){
  if(form1.nis.value=='') { 
    form1.nis.focus;
	return;
  }
}
function konfirmasi(pesan) { 
  var is_confirmed=confirm(pesan);      
  if(!is_confirmed){    
   return false;
	}	
}
</script>
<?
$edt=$_GET['edt'];
$edt2=$_GET['edt2'];
$idk_t=$_GET['idk_t'];
$idgp=$_GET['idgp'];
$idtjk=$_GET['idtjk'];
?>
<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_gaji.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td bgcolor="#666633">&nbsp;</td>
      <td colspan="2" bgcolor="#666633"><span class="style1">LOKASI CEKLIST KEBERSIHAN, KERAPIAN DAN KELENGKAPAN  </span></td>
    </tr>
	
    <tr>
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="14%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="84%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Lokasi Ceklist </td>
      <td><div align="left">
        <select name="lokasi_lst">
          <option>-</option>
          <?
	      $tampi3=mysql_query("SELECT * FROM tb_lokasi_ceklist ");
          while($tp3=mysql_fetch_array($tampi3)){
	    ?>
          <option value="<? echo $tp3['id_ceklist']; ?>"><? echo $tp3['lokasi']; ?></option>
          <? } ?>
        </select>
      </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><div align="left">List Lokasi  Ceklist </div></td>
      <td><div align="left">
        <input name="list_lokasi" type="text" size="100" />
      </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="74" bgcolor="#CCCCCC"><div align="center">NO.</div></td>
          <td width="252" height="24" bgcolor="#CCCCCC"><div align="center">LOKASI CEKLIST </div></td>
          <td width="752" bgcolor="#CCCCCC"><div align="center">BAGIAN YANG AKAN DI CEKLIST  </div></td>
          </tr>
		  <?  $no=1;
		  $tampil=mysql_query("SELECT * FROM tb_list_lokasi_ceklist ");
          while($tp=mysql_fetch_array($tampil)){
		  
		  ?>
        <tr>
          <td><div align="center"><a href="page/act_dt_gaji.php?del=oke6&idk_t=<? echo $tp['id_list_lokasi']; ?>" onClick="return konfirmasi('Yakinmi mau dihapus broo..?');"><? 
		   $tampil2=mysql_query("SELECT * FROM tb_lokasi_ceklist WHERE id_ceklist='$tp[kd_lokasi]' ");
          $tp2=mysql_fetch_array($tampil2);
		  echo $no; ?></a></div></td>
          <td height="38"><div align="center"><? echo $tp2['lokasi']; ?></div></td>
          <td>&nbsp;<? echo"$tp[list_lokasi]"; ?></td>
          </tr>
		  <? $no+=1; } ?>
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
      <td><input type="submit" name="rekam_ls_ckl" value="Simpan" onclick="cek();" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#666633">&nbsp;</td>
      <td bgcolor="#666633"><div align="left"></div></td>
      <td bgcolor="#666633"><div align="left"></div></td>
    </tr>
  </table>
</form>

</body>
</html>
