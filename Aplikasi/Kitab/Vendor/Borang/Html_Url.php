<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html_Url
{
#==========================================================================================
	function pilihURL($key, $data, $myTable = null)
	{
		if ($key=='no'):
			$this->gaya_url_1($data);
		elseif(in_array($key,array('posdaftar'))):
			$this->gaya_url_2($data);
		elseif ($key=='pegawaiborang'):
			$this->gaya_url_3($data);
		elseif ($key=='hantar_prosesan'):
			$this->gaya_url_4($data);
		elseif ($key=='terimaProsesan'):
			$this->gaya_url_5($data);
		elseif(in_array($key,array('Mesej'))):
			?><td><?php echo nl2br($data) ?></td><?php
		else:?><td><?php echo $data ?></td><?php
		endif;
	}
#------------------------------------------------------------------------------------------
	public function gaya_url_1($data)
	{
		//$this->gaya_url_1($data, $warna,$this->iconFA)
		$k0 = URL . 'pelajar/papar/profil/' . $data;
		$p0 = '<a target="_blank" href="' . $k0 . '">'
		. $this->iconFA(0) . '</a>&nbsp;';

		$k1 = URL . 'pelajar/ubah/profil/' . $data;
		$p1 = '<a target="_blank" href="' . $k1 . '">'
		. $this->iconFA(1) . '</a>&nbsp;';

		?><td><?php echo $p0 . $p1 ?></td><?php
		?><td><?php echo $data ?></td><?php		
	}
	public function gaya_url_2($data) 
	{
		$this->gaya_url_2($data)
		list($k,$btn) = $this->posdaftar($data);
		$pautan = ($data==null) ? $data :
		'<a target="_blank" href="' . $k[3] . '" class="' 
		. $this->butang('info') . '">' . $data . '</a>';

		?><td><?php echo $pautan ?></td><?php
	}
	public function gaya_url_3($data) 
	{
		$k1 = URL . "operasi/batch/$data";
		$k2 = URL . "laporan/cetakNonA1/$data/1000";
		$k3 = URL . "laporan/cetakA1/$data/1000";
		if ($data == null):
			?><td>&nbsp;</td><?php
		else:?><td><?php
			$this->pautanTD(null,$k1,$warnaPrimary,$data);
			$this->pautanTD('_blank',$k2,$warnaDanger,'Batch Non A1');
			$this->pautanTD('_blank',$k3,$warnaSuccess,'Batch A1');
			?></td><?php
		endif;
	}
	public function gaya_url_4($data)
	{
		$k1 = URL . "batch/proses/$data";
		$k2 = URL . "laporan/cetakNonA1/$data/1000";
		$k3 = URL . "laporan/cetakA1/$data/1000";
		if ($data == null):
			?><td>&nbsp;</td><?php
		else:?><td><?php
			$this->pautanTD(null,$k1,$warnaPrimary,$data);
			$this->pautanTD('_blank',$k2,$warnaDanger,'Batch Non A1');
			$this->pautanTD('_blank',$k3,$warnaSuccess,'Batch A1');
			?></td><?php
		endif;	
	}
	public function gaya_url_5($data)
	{
		$k1 = URL . "batch/terima/$data";
		$k2 = URL . "laporan/cetakTerimaProses/$data";
		if ($data == null):
			?><td>&nbsp;</td><?php
		else:?><td><?php
			$this->pautanTD(null,$k1,$warnaPrimary,$data);
			$this->pautanTD('_blank',$k2,$warnaDanger,'cetak');
			?></td><?php
		endif;
	}
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
	public function butang($warna = 'info',$saiz = 'kecil')
	{ 
		$btnW['primary'] = 'btn btn-primary'; # birutua
		$btnW['info'] = 'btn btn-info'; # birumuda - utama
		$btnW['danger'] = 'btn btn-danger'; # merah
		$btnW['success'] = 'btn btn-success'; #hijau
		$btnS['kecil'] = ' btn-mini'; # - utama
		
		$btn = $btnW[$warna] . $btnS[$saiz];
		return $btn;
	}
#------------------------------------------------------------------------------------------
	public function iconFA($pilih)
	{# icon font awesome
		$a[0] = '<i class="fa fa-user-o" aria-hidden="true"></i>';
		$a[1] = '<i class="fa fa-pencil" aria-hidden="true"></i>';

		return $a[$pilih];
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}