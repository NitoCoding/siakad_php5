<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style7 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="75%" height="33">&nbsp;&nbsp;<strong>Extrakokurikuler Yang Diikuti</strong> </td>
        <td width="14%"><strong>Bulan :</strong> <? echo $bulan; ?></td>
        <td width="11%"><strong>Pekan :</strong><span class="style7">
          <? if($pekan=='I'){ echo $pekan." (Pertama)"; }else{ echo $pekan." (Kedua)"; }  ?>
        </span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22" colspan="3" valign="top" bgcolor="#DCF3AF"><table width="100%" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
      
		<?
		  
		  $tampil3=mysql_query("SELECT * FROM tb_pbakat WHERE kd_santri='$id_santri' ");
          while($tp3=mysql_fetch_array($tampil3)){
		?>
      <tr>
        <td width="4%" height="29"><div align="center"><img src="../images/btn1.gif" width="12" height="13" /></div></td>
        <td width="96%">&nbsp;          <?
		$pbkt=mysql_query("SELECT kd_mp,nama_mp FROM mata_pelajaran WHERE kd_mp='$tp3[kd_mp]' ");
        $cpk=mysql_fetch_array($pbkt);
		echo $cpk['nama_mp'];
		?></td>
      </tr>
	  <? } ?>
      
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
