<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?
$id_k=$_GET['id_k'];
$ed_k=$_GET['ed_k'];
$edt=$_GET['edt'];
?>
<body>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="page/act_dt_prpl.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr> 
      <td height="30" colspan="3" bgcolor="#B3CF70"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="65%">&nbsp;</td>
            <td width="3%"><img src="images/collapsed.gif" width="16" height="12" /></td>
            <td width="32%">Input Data Prestasi &amp; Pelanggaran </td>
          </tr>
        </table></td>
    </tr>
    <?
	if($edt=='y'){
	  $tmpkls1=mysql_query("SELECT * FROM tb_prpl WHERE  id_prpl='$ed_k' ");
      $cpr1=mysql_fetch_array($tmpkls1);
	  $id_k=$cpr1['kd_st'];
	}
$tmpkls=mysql_query("SELECT nip,nama_gp,jabatan_gp,id_gp,status FROM guru_pegawai WHERE id_gp='$id_k' ");
    $cpr=mysql_fetch_array($tmpkls);
	?>
    <tr> 
      <td colspan="3" height="7"></td>
    </tr>
    <tr> 
      <td width="2%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="19%" bgcolor="#ACD75E">&nbsp;</td>
      <td width="79%" bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Nik</td>
      <td bgcolor="#DCF3AF"><? echo $cpr['nip']; ?> <input type="hidden" name="id_str" value="<? echo $cpr['id_gp']; ?>" /> 
        <input type="hidden" name="kdprpl" value="<? echo $cpr1['id_prpl']; ?>" />
        <input type="hidden" name="kets" value="1" /></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Nama Lengkap</td>
      <td bgcolor="#ACD75E"><? echo $cpr['nama_gp']; ?></td>
    </tr>
    <tr> 
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Jabatan</td>
      <td bgcolor="#DCF3AF"><? echo $cpr['jabatan_gp']; ?></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Waktu</td>
      <td bgcolor="#ACD75E">Hari 
        <select name="hari">
          <option value="-">-</option>
          <option <? if($cpr1['hari']=="Senin"){ ?>selected="selected" <? } ?>value="Senin">Senin</option>
          <option <? if($cpr1['hari']=="Selasa"){ ?>selected="selected" <? } ?> value="Selasa">Selasa</option>
          <option <? if($cpr1['hari']=="Rabu"){ ?>selected="selected" <? } ?> value="Rabu">Rabu</option>
          <option <? if($cpr1['hari']=="Kamis"){ ?>selected="selected" <? } ?> value="Kamis">Kamis</option>
          <option <? if($cpr1['hari']=="Jumat"){ ?>selected="selected" <? } ?> value="Jumat">Jumat</option>
          <option <? if($cpr1['hari']=="Sabtu"){ ?>selected="selected" <? } ?> value="Sabtu">Sabtu</option>
          <option <? if($cpr1['hari']=="Ahad"){ ?>selected="selected" <? } ?> value="Ahad">Ahad</option>
        </select> &nbsp;&nbsp;Tanggal 
        <select name="tgl">
          <option>-</option>
          <? for($i=1;$i<=31;$i++){ ?>
          <option <? if($cpr1['tgl']=="$i"){ ?>selected="selected" <? } ?> value="<? echo $i; ?>"><? echo $i; ?></option>
          <? } ?>
        </select> <select name="bln">
          <option>-</option>
          <option <? if($cpr1['bln']=="Januari"){ ?>selected="selected" <? } ?> value="Januari">Januari</option>
          <option <? if($cpr1['bln']=="Februari"){ ?>selected="selected" <? } ?> value="Februari">Februari</option>
          <option <? if($cpr1['bln']=="Maret"){ ?>selected="selected" <? } ?>value="Maret">Maret</option>
          <option <? if($cpr1['bln']=="April"){ ?>selected="selected" <? } ?>value="April">April</option>
          <option <? if($cpr1['bln']=="Mei"){ ?>selected="selected" <? } ?>value="Mei">Mei</option>
          <option <? if($cpr1['bln']=="Juni"){ ?>selected="selected" <? } ?>value="Juni">Juni</option>
          <option <? if($cpr1['bln']=="Juli"){ ?>selected="selected" <? } ?>value="Juli">Juli</option>
          <option <? if($cpr1['bln']=="Agustus"){ ?>selected="selected" <? } ?>value="Agustus">Agustus</option>
          <option <? if($cpr1['bln']=="September"){ ?>selected="selected" <? } ?>value="September">September</option>
          <option <? if($cpr1['bln']=="Oktober"){ ?>selected="selected" <? } ?>value="Oktober">Oktober</option>
          <option <? if($cpr1['bln']=="November"){ ?>selected="selected" <? } ?>value="November">November</option>
          <option <? if($cpr1['bln']=="Desember"){ ?>selected="selected" <? } ?>value="Desember">Desember</option>
        </select> <select name="thn">
          <option>-</option>
          <? for($b=5;$b>=0;$b--){ 
		     $tthn=date("Y")-$b;
		  ?>
          <option <? if($cpr1['thn']=="$tthn"){ ?>selected="selected" <? } ?> value="<? echo date("Y")-$b; ?>"><? echo date("Y")-$b; ?></option>
          <? } ?>
        </select></td>
    </tr>
    <tr> 
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td valign="top" bgcolor="#DCF3AF">Prestasi/Pelanggaran</td>
      <td bgcolor="#DCF3AF"><textarea name="pr_pl" cols="40" rows="5"><? echo $cpr1['perihal']; ?></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Hukuman/Ganjaran</td>
      <td bgcolor="#ACD75E"><input name="hukum" type="text" size="50" value="<? echo $cpr1['hkuman']; ?>" /></td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">Foto</td>
      <td bgcolor="#ACD75E"><input name="foto" type="file" /></td>
    </tr>
    <tr> 
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">Keterangan</td>
      <td bgcolor="#DCF3AF"><select name="ket">
          <option>-</option>
          <option <? if($cpr1['ket']=="s"){ ?>selected="selected" <? } ?> value="s">Prestasi</option>
          <option <? if($cpr1['ket']=="p"){ ?>selected="selected" <? } ?>value="p">Pelanggaran</option>
        </select> </td>
    </tr>
    <tr> 
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
      <td bgcolor="#ACD75E">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF"><input type="submit" value="Simpan" <? if($edt=='y'){ echo "name='ubah'"; }else{ echo "name='rekam'"; }?> /> 
        <? if($edt=='y'){ ?>
        <input type="submit" name="del" value="Hapus" /> 
        <? } ?>
      </td>
    </tr>
    <tr> 
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
      <td bgcolor="#DCF3AF">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
