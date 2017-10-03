<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Surat extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = 'surat';
	}

	public function index()
	{
		# Set pemboleubah utama
		$this->papar->tajuk = 'Surat';

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/index',$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
#==========================================================================================
	function buatsurat()
	{
		# Set pemboleubah utama
		$this->papar->jenisBorang = 'baru';

		/*# Semak data $this->papar->medanbaru
		echo '<pre>$this->papar->medanbaru:<br>'; 
		print_r($this->papar->medanbaru);
		echo '</pre>|';//*/

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/buat_surat',$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}

	function tawaran($pilih)
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->data = $this->tanya->suratTawaran($jadual);
		$this->papar->jadual = $jadual;
		$this->papar->jenisBorang = 'baru';

		/*# Semak data $this->papar->data
		echo '<pre>$this->papar->data:<br>'; 
		print_r($this->papar->data);
		echo '</pre>|';//*/

		# pilih hantar tawaran melalui apache_child_terminate
		if ($pilih == 'surat'): $fail = 'surat_tawaran';
		elseif ($pilih == 'sms'): $fail = 'sms_tawaran';
		elseif ($pilih == 'email'): $fail = 'email_tawaran';
		endif;

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail,$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}

	function terimatawaran()
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Registration Proses'] = $this->tanya->datapelajar($jadual);
		$this->papar->_jadual = $jadual;

		/*# Semak data $this->papar->senarai['data']
		echo '<pre>$this->papar->senarai['data']:<br>'; 
		print_r($this->papar->senarai['data']);
		echo '</pre>|';//*/

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/senarai_pelajar',$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}

	function tolaktawaran()
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Registration Proses'] = $this->tanya->datapelajar($jadual);
		$this->papar->_jadual = $jadual;

		/*# Semak data $this->papar->senarai['data']
		echo '<pre>$this->papar->senarai['data']:<br>'; 
		print_r($this->papar->senarai['data']);
		echo '</pre>|';//*/

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/senarai_pelajar',$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
#------------------------------------------------------------------------------------------------
	function profil($pilih)
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->data = $this->tanya->suratHebahan($jadual);
		$this->papar->jadual = $jadual;
		$this->papar->jenisBorang = 'papar';

		/*# Semak data $this->papar->data
		echo '<pre>$this->papar->data:<br>'; 
		print_r($this->papar->data);
		echo '</pre>|';//*/

		# pilih hantar tawaran melalui apache_child_terminate
		if ($pilih == 'surat'): $fail = 'hebahan_surat';
		elseif ($pilih == 'sms'): $fail = 'hebahan_sms';
		elseif ($pilih == 'email'): $fail = 'hebahan_email';
		endif;//*/

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail,$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
#------------------------------------------------------------------------------------------------
#==========================================================================================
}
