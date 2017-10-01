<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Pelajar extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = 'pelajar';
	}

	public function index()
	{
		# Set pemboleubah utama
		$this->papar->tajuk = 'Pelajar';

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/index',$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
#==========================================================================================
	function daftarBaru()
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->medanbaru = $this->tanya->medanbaru($jadual);
		$this->papar->jadual = $jadual;

		/*# Semak data $this->papar->medanbaru
		echo '<pre>$this->papar->medanbaru:<br>'; 
		print_r($this->papar->medanbaru);
		echo '</pre>|';//*/

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/pendaftaran',$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}

	function semakDaftarBaru()
	{
		# Semak data $_POST
		echo '<pre>$_POST->'; print_r($_POST) . '</pre>| ';
	}
#==========================================================================================
}