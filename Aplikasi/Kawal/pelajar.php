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
		$this->papar->jenisBorang = 'baru';

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

	function paparBiodata()
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Registration Proses'] = $this->tanya->datapelajar($jadual);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';		

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

	function laporanDaftar()
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Registration Report'] = $this->tanya->laporanDaftar($jadual);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'laporan';

		/*# Semak data $this->papar->senarai['data']
		echo '<pre>$this->papar->senarai['data']:<br>'; 
		print_r($this->papar->senarai['data']);
		echo '</pre>|';//*/

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/laporan_pendaftaran',$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}

	public function papar($profil,$id)
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai = $this->tanya->profilSeorang($jadual, $id);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';		
		$this->papar->tajukbesar1 = 'Student Infomation';
		$this->papar->tajukbesar2 = 'Profil';
		$this->papar->tajukbesar3 = 'Father Infomation';
		$this->papar->tajukbesar4 = 'Mother Infomation';

		/*# Semak data $this->papar->senarai
		echo '<pre>$this->papar->senarai:<br>'; 
		print_r($this->papar->senarai);
		echo '</pre>|';//*/

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/papar_profil',$jenis,0); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
#==========================================================================================
}
