<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style5 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
.style23 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.style24 {font-size: 18px}
.style26 {font-size: 30px}
-->
</style></head>
<? include("../koneksi.php"); ?>
<body>
<table width="983" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="10%" height="89" valign="top"><img src="../images/LOGO-SHOID2.jpg" width="76" height="89" /></td>
        <td width="90%" valign="top"><div align="left"><span class="style5"><span class="style24">Pondok Pesantren Modern Islam </span><br />
                  <span class="style26">SHOHWATUL IS'AD </span><br />
                  <br />
            </span><span class="style23">Jl. Sipitto Ma'rang Kabupaten Pangkep Sulawesi Selatan Telp.(0410)2315599,   Fax(0410)2317977, www.shohwatulisad.com</span></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>DAFTAR GURU DAN PEGAWAI PPMI SHOHWATUL IS'AD </strong></div></td>
  </tr>
  <tr>
    <td width="150">&nbsp;</td>
    <td width="375">&nbsp;</td>
    <td width="458">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="3%" bgcolor="#CCCCCC"><div align="center"><strong>No</strong></div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center"><strong>Nik</strong></div></td>
        <td width="18%" bgcolor="#CCCCCC"><div align="center"><strong>Nama</strong></div></td>
        <td width="9%" bgcolor="#CCCCCC"><div align="center"><strong>Jenis Kelamin </strong></div></td>
        <td width="8%" bgcolor="#CCCCCC"><div align="center"><strong>Status</strong></div></td>
        <td width="24%" bgcolor="#CCCCCC"><div align="center"><strong>Tempat/Tanggal Lahir </strong></div></td>
        <td width="10%" bgcolor="#CCCCCC"><div align="center"><strong>Jabatan</strong></div></td>
        <td width="10%" bgcolor="#CCCCCC"><div align="center"><strong>Pendidikan Terakhir </strong></div></td>
        <td width="10%" bgcolor="#CCCCCC"><div align="center"><strong>Mulai Bertugas </strong></div></td>
      </tr>
	  <? $no=1;
	    $tampil2=mysql_query("SELECT * FROM guru_pegawai ");
        while($tp=mysql_fetch_array($tampil2)){
	  ?>
      <tr>
        <td><div align="center"><? echo $no; ?></div></td>
        <td><div align="center"><? echo $tp['nip']; ?></div></td>
        <td><? echo $tp['nama_gp']; ?></td>
        <td><div align="center">
          <? if($tp['jkl_gp']=='l'){ echo "Laki-laki"; }else{ echo"Perempuan"; }
		         ?>
        </div></td>
        <td><div align="center">
          <? if($tp['status_pernikahan']=='m'){ echo "Menikah"; }else{ echo"Belum Menikah"; } ?>
        </div></td>
        <td><? $ttl=$tp['tempat_ttl'].",".$tp['tgl_ttl']."-".$tp['bln_ttl']."-".$tp['thn_ttl']; 
		       echo $ttl; ?></td>
        <td><div align="center"><? echo $tp['jabatan_gp']; ?></div></td>
        <td><div align="center"><? echo $tp['pendidikan_gp']; ?></div></td>
        <td><div align="center">
          <? $mb=$tp['tgl_masuk']."-".$tp['bln_masuk']."-".$tp['thn_masuk']; echo $mb; ?>
        </div></td>
      </tr>
	  <? $no+=1; } ?>
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
