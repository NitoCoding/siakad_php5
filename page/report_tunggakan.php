<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<? include("../koneksi.php"); 
  include("../function.php"); 
 $blnk=$_GET['blnk'];
 $pknk=$_GET['pknk'];
 $klsk=$_GET['klsk'];
 $thaj=$_COOKIE['thaj'];
 $sem=$_COOKIE['sem'];
 
 ?>
<body>
<table width="85%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr> 
    <td colspan="6"><div align="left" class="style4">&nbsp;<font color="#FF0000">Tunggakan 
        Kelas :</font> <? echo $klsk; ?>&nbsp;&nbsp; <font color="#FF0000">Bulan 
        : </font> 
        <? 
		$tgl=date("d");
   if($tgl<=7){ $pkn="I"; }
   if($tgl<=14 and $tgl>=8){ $pkn="II"; }
   if($tgl<=21 and $tgl>=15){ $pkn="III"; }
   if($tgl<=30 and $tgl>=22){ $pkn="IV"; }
		echo $blnk; ?>
        <font color="#FF0000">&nbsp;&nbsp;Pekan :</font> <? echo $pkn;  ?></div></td>
  </tr>
  <tr> 
    <td width="6%"><div align="center"><span class="style3">NIS</span></div></td>
    <td width="27%"><div align="center"><span class="style3">Nama 
        Lengkap </span></div></td>
    <td width="18%"><div align="center"><span class="style3">Tunggakan 
        Syahriah &amp; Komite (Bulanan)</span></div></td>
    <td width="17%"><div align="center"><span class="style3">Tunggakan 
        semester (Pertahun) </span></div></td>
    <td width="16%"><div align="center" class="style3">Tunggakan 
        Buku <br />
        (Pertahun) </div></td>
    <td width="16%"><div align="center" class="style3"> 
        <div align="center">Tunggakan Bimbel<br />
          (Pertahun) </div>
      </div></td>
  </tr>
  <? 
         
	      $tampil=mysql_query("SELECT kd_kls,kelas FROM master_kelas WHERE kelas='$klsk' ");
          while($tp=mysql_fetch_array($tampil)){
  
		  $thnbp=substr($thaj,0,3);
	      $tmpkls=mysql_query("SELECT id_santri,nis,nama,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p')  ");
          while($ct=mysql_fetch_array($tmpkls)){
	   
	   ?>
  <tr> 
    <td bgcolor="#FFFFFF"><div align="center"><? echo"$ct[nis]"; ?></div></td>
    <td bgcolor="#FFFFFF"><div align="left">&nbsp;<? echo"$ct[nama]"; ?></div></td>
    <td bgcolor="#FFFFFF"><div align="right"> Rp. 
        <?
		  $tot=0; $tot2=0; $gb1=0; $tot3=0;
	      
		  $pmb9=mysql_query("SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='1'");
          $c9=mysql_fetch_array($pmb9);
		  
		  $pmb7=mysql_query("SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$c9[kd_bayar]'");
          $c7=mysql_fetch_array($pmb7);
		 
        $pmb2=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and kd_bayar='1' and bln_bayar='$blnk' and 
		                   semester_b='$sem' and thn_b='$thaj'");
          while($ctp2=mysql_fetch_array($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
		$bea=mysql_query("SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj'                          AND semester='$sem' AND kd_bayar='1' ");
        $cbea=mysql_fetch_array($bea);  
		  
		  $tot3=$tot2+$cbea['jml_beasiswa'];
		  
		  $gb1=$c7['jumlah']-$tot3;
        //  $hs1=format_agk2($gb1,$blnb,$qbln); 
			
		 echo $gb1;
		  ?>
      </div></td>
    <td bgcolor="#FFFFFF"><div align="right"> Rp. 
        <?
		  $tot=0; $tot2=0; $tots=0;
		  $pmb10=mysql_query("SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='4'");
          $c10=mysql_fetch_array($pmb10);
		  
		  $pmb7=mysql_query("SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$c10[kd_bayar]'");
          $c7=mysql_fetch_array($pmb7);
           
          $pmb2=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='4' ");
          while($ctp2=mysql_fetch_array($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	$bea2=mysql_query("SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj'                          AND semester='$sem' AND kd_bayar='4' ");
    $cbea2=mysql_fetch_array($bea2); 
	$tots=$tot2+$cbea2['jml_beasiswa'];
		
		  $gb=$c7['jumlah']-$tots;
		  
		echo $gb;
		  ?>
      </div></td>
    <td bgcolor="#FFFFFF"><div align="right">Rp. 
        <?
		  $tot=0; $tot2=0; $totb=0;
	      $pmb11=mysql_query("SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='3'");
          $c11=mysql_fetch_array($pmb11);
		  
		  $pmb7=mysql_query("SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$c11[kd_bayar]' ");
          $c7=mysql_fetch_array($pmb7);
		 
          $pmb2=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='3' ");
          while($ctp2=mysql_fetch_array($pmb2)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	
	$bea3=mysql_query("SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj'                          AND semester='$sem' AND kd_bayar='3' ");
    $cbea3=mysql_fetch_array($bea3); 
	$totb=$tot2+$cbea3['jml_beasiswa'];
	
	$gb=$c7['jumlah']-$totb;
	echo $gb;
	
		  ?>
      </div></td>
    <td bgcolor="#FFFFFF"><div align="right">Rp. 
        <?
		  $tot=0; $tot2=0; $tott=0;
	     $pmb12=mysql_query("SELECT * FROM rincian_bayar WHERE kd_kls='$tp[kd_kls]' AND kd_bayar='6'");
          $c12=mysql_fetch_array($pmb12);
		  
		     $pmb7=mysql_query("SELECT * FROM tb_pembayaran WHERE kd_pembayaran='$c12[kd_bayar]' ");
             $c7=mysql_fetch_array($pmb7);

          $pmb8=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$ct[id_santri]' and semester_b='$sem' and thn_b='$thaj' and kd_bayar='6' ");
          while($ctp2=mysql_fetch_array($pmb8)){
		    $tot2=$tot2+$ctp2['jml_bayar'];
		  }
		  
	$bea4=mysql_query("SELECT * FROM tb_beasiswa WHERE kd_santri='$ct[id_santri]' AND kelas='$tp[kelas]' AND thn_ajaran='$thaj'                          AND semester='$sem' AND kd_bayar='6' ");
    $cbea4=mysql_fetch_array($bea4); 
	$tott=$tot2+$cbea4['jml_beasiswa'];
		  
		  $gb=$c7['jumlah']-$tott;
		  
		  if($tp['kelas']=='IXA' or $tp['kelas']=='IXB') {echo $gb;  }else{ echo"0"; }
		  ?>
      </div></td>
  </tr>
  <? } ?>
  <tr> 
    <td height="116" colspan="6" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="1%">&nbsp;</td>
          <td width="31%">&nbsp;</td>
          <td width="1%">&nbsp;</td>
          <td width="67%">&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>Total Tunggakan Syahria &amp; Komite </td>
          <td>:</td>
          <td>Rp. 
            <? 
				 $tot_sk=0;
			     $jml_t=0;
				 $jml_t2=0;
				 $totts=0;
				 $tot_tsy=0;
		         $tgks=mysql_query("SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or 
				                    status='p') ");
                 $ctgks=mysql_num_rows($tgks); // jumlah santri kelas $tp[kelas]
				 
				 $tgks2=mysql_query("SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='1' ");
                 $ctgks2=mysql_fetch_array($tgks2); // jumlah pembayaran syariah kode 1
				 $tot_sk=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysql_fetch_array($tgks)){	
			$tgks3=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='1' and 
			                    bln_bayar='$blnk' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks3=mysql_fetch_array($tgks3);
			$jml_t=$jml_t+$ctgks3['jml_bayar'];
		    } 
			
			$bea5=mysql_query("SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='1' ");
            while($cbea5=mysql_fetch_array($bea5)){ 
	        $tot_tsy=$tot_tsy+$cbea5['jml_beasiswa'];
			}
			  
			$jml_t2=$tot_sk-($jml_t+$tot_tsy);
			
			$hs2=format_agk2($jml_t2,$blnb,$qbln);  
			  
			
			   ?>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>Total Tunggakan Semester </td>
          <td>:</td>
          <td>Rp. 
            <? 
				 $tot_byr=0;
				 $jmlb_st=0;
			     $tot_bst=0;
				 $tot_ts=0;
				 
		         $jstr=mysql_query("SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctjstr=mysql_num_rows($jstr);
				 
				 $jmlb=mysql_query("SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='4' ");
                 $cjmlb=mysql_fetch_array($jmlb);
				 $tot_byr=$ctjstr*$cjmlb['jumlah'];
				 
    		while($ctjst=mysql_fetch_array($jstr)){	
			$jbyr=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$ctjst[id_santri]' and kd_bayar='4' and semester_b='$sem' and thn_b='$thaj' ");
            $cjbyr=mysql_fetch_array($jbyr);
			$jmlb_st=$jmlb_st-$cjbyr['jml_bayar'];
		    } 
			
			$bea6=mysql_query("SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='4' ");
            while($cbea6=mysql_fetch_array($bea6)){ 
	        $tot_ts=$tot_ts+$cbea6['jml_beasiswa'];
			 }
			 $tot_bst=$tot_byr-($jmlb_st+$tot_ts);
			 $hs3=format_agk($tot_bst);
			   ?>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>Total Tunggakan Buku </td>
          <td>:</td>
          <td>Rp. 
            <? 
				$tot_sk=0;
			     $jml_t=0;
				 $jml_t2=0;
				 $tot_bk=0;
		         $tgks=mysql_query("SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysql_num_rows($tgks);
				 
				 $tgks2=mysql_query("SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='3' ");
                 $ctgks2=mysql_fetch_array($tgks2);
				 $tot_sk=$ctgks*$ctgks2['jumlah'];
				 
				 
			while($ctgks4=mysql_fetch_array($tgks)){	
			$tgks3=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='3' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks3=mysql_fetch_array($tgks3);
			$jml_t=$jml_t-$ctgks3['jml_bayar'];
		    } 
			
			$bea7=mysql_query("SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='3' ");
            while($cbea7=mysql_fetch_array($bea7)){
	        $tot_bk=$tot_bk+$cbea7['jml_beasiswa'];
			}
			
			 $jml_t2=$tot_sk-($jml_t+$tot_bk);
			 $hs4=format_agk($jml_t2);
			   ?>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>Total Tunggakan Bimbingan Belajar </td>
          <td>:</td>
          <td>Rp. 
            <? 
				 $tot_sk3=0;
			     $jml_t3=0;
				 $jml_t4=0;
				 $tot_tb=0;
		         $tgks4=mysql_query("SELECT id_santri,kelas_st,status FROM tb_santri WHERE kelas_st='$tp[kelas]' and (status='a' or status='p') ");
                 $ctgks=mysql_num_rows($tgks4);
				 
				 $tgks5=mysql_query("SELECT kd_pembayaran,jumlah FROM tb_pembayaran WHERE kd_pembayaran='6' ");
                 $ctgks2=mysql_fetch_array($tgks5);
				 $tot_sk3=$ctgks*$ctgks2['jumlah'];
				 
			while($ctgks4=mysql_fetch_array($tgks4)){	
			$tgks7=mysql_query("SELECT * FROM tb_transaksi WHERE kd_santri='$ctgks4[id_santri]' and kd_bayar='6' and semester_b='$sem' and thn_b='$thaj' ");
            $ctgks8=mysql_fetch_array($tgks7);
			$jml_t3=$jml_t3+$ctgks8['jml_bayar'];
		    } 
			
			$bea8=mysql_query("SELECT * FROM tb_beasiswa WHERE thn_ajaran='$thaj' AND semester='$sem' AND kelas='$tp[kelas]' AND 
			                   kd_bayar='6' ");
            while($cbea8=mysql_fetch_array($bea8)){
	        $tot_tb=$tot_tb+$cbea8['jml_beasiswa'];
			}
			 $jml_t4=$tot_sk3-($jml_t3+tot_tb);
			 if($tp['kelas']=='IXA' or $tp['kelas']=='IXB') { $hs5=format_agk($jml_t4);  }else{ echo "0"; } 
			 
			   ?>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<? } ?>

</body>
</html>
