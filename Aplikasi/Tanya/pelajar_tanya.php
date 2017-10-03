<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__; 
class Pelajar_Tanya extends \Aplikasi\Kitab\Tanya
{
#==========================================================================================
	public function __construct() { parent::__construct(); }

	public function medanUbah2($cariID)
	{
		$senaraiMedan = 'no,Nama_Penuh nama,email,nohp';

		return $senaraiMedan; # pulangkan pemboleubah
	}

	public function tatasusunanCariID($jadual, $medan, $cari, $susun)
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'alamat' => 'no 1000, ' . "\r" 
					. 'jalan 2000, ' . "\r" 
					. 'taman 3000 ' . "\r" 
					. 'poskod 40000',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}

	public function tatasusunanCariMFG($jadual, $medan, $cari, $susun)
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'kumpulanIndustri' => 'MFG',
				'terimaProsesan' => 'J001',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}

	public function tatasusunanCariPPT($jadual, $medan, $cari, $susun)
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'kumpulanIndustri' => 'PPT',
				'hantar_prosesan' => 'J001',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}

	public function tatasusunanUbah2A($jadual, $medan, $cari, $susun)
	{
		# ada nilai - cantum semua tatasusunan dalam satu
		$hasil = array (
			'msic2008' => array (
				0 => array (
						'S' => 'S',
						'msic2000' => '93099p',
						'msic' => '96094',
						'keterangan' => 'Perkhidmatan jagaan haiwan(2)',
						'notakaki' => '(2) Termasuk: penumpangan, perapian, mendudukkan dan melatih binatang peliharaan',
					),
				),
			'msic_v1' => array (
				0 => array (
						'msic' => '96094',
						'kp' => '85',
						'staf' => NULL,
						'keterangan' => 'Perkhidmatan jagaan haiwan',
						'notakaki' => 'Pet care services INCLUDE boarding, grooming, sitting and training pets '
								. 'NOT INCLUDE veterinary activities, see 7500 activities of fitness centres, see 93118',
					),
			),
			'msic_bandingan' => array (
				0 => array (
						'sv_newss' => '332',
						'sv_sidap' => '85',
						'msic2000p' => '93099p',
						'msic2000' => '93099',
						'msic' => '96094',
						'keterangan' => 'Aktiviti Perkhidmatan Persendirian',
						'Sektor' => 'Perkhidmatan (Lain-lain)',
					),
			),
			'msic2000' => array (),
			'msic2000_notakaki' => array (),
		);

		# ada nilai - pecah tatasusunan kepada beberapa bahagian
		$hasil1['satu'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);
		$hasil1['dua'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);
		$hasil1['tiga'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}

	public function medanUbah($cariID) 
	{
		# Set pemboleubah
		# buat link
		$alamat1 = 'http://xxx/crud/ubah2/",kp,"/'.$cariID.'/2010/2015/'; 
		$url1 = '" <a target=_blank href=' . $alamat1 . '>SEMAK 1</a>"';
		$url2 = 'concat("<a target=_blank href=' . $alamat1 . '>SEMAK 2</a>")';
		# Set pemboleubah untuk sql
        $senaraiMedan = 'id,'
			. 'concat_ws("|",nama,operator,' . $url1 . ',' . $url2 . ') nama,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("="," hasil",format(hasil,0)),' . "\r"
			. ' 	concat_ws("="," belanja",format(belanja,0)),' . "\r"
			. ' 	concat_ws("="," gaji",format(gaji,0)),' . "\r"
			. ' 	concat_ws("="," aset",format(aset,0)),' . "\r"
			. ' 	concat_ws("="," staf",format(staf,0)),' . "\r"
			. ' 	concat_ws("="," stok akhir",format(stok,0))' . "\r"
 			. ' ) as data5P,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("="," tel",tel),' . "\r"
			. ' 	concat_ws("="," fax",fax),' . "\r"
			. ' 	concat_ws("="," orang",orang),' . "\r"
			. ' 	concat_ws("="," notel",notel),' . "\r"
			. ' 	concat_ws("="," nofax",nofax)' . "\r"
 			. ' ) as dataHubungi,'
			. 'concat_ws(" ",alamat1,alamat2,poskod,bandar) as alamat,' . "\r"
			//. 'concat_ws(" ",no,batu,( if (jalan is null, "", concat("JALAN ",jalan) ) ),tmn_kg,poskod,dp_baru) alamat_baru,' . "\r"
			. 'tel,notel,fax,nofax,responden,orang,email,esurat,'
			. 'hasil,belanja,gaji,aset,staf,stok' . "\r" 
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}

	public function semakPost($senarai, $nilaiRM, $medanID, $dataID) 
	{
        foreach ($_POST as $myTable => $value)
        {   if ( in_array($myTable,$senarai) )
            {   foreach ($value as $kekunci => $papar)
				{	$posmen[$myTable][$kekunci]= 
						( in_array($kekunci,$nilaiRM) ) ? # $nilaiRM rujuk line 154
						str_replace( ',', '', bersih($papar) ) # buang koma	
						: bersih($papar);
				}	$posmen[$myTable][$medanID] = $dataID;
            }
        }

		return $posmen; # pulangkan nilai
	}

	public function semakPosmen($posmen, $jadual) 
	{
		# valid guna gelung foreach
		foreach ($nilaiRM as $keyRM) # $nilaiRM rujuk line 154
		{# kod php untuk formula matematik
			$data = null;
			if(isset($posmen[$jadual][$keyRM])):
				eval( '$data = (' . $posmen[$jadual][$keyRM] . ');' );
				$posmen[$jadual][$keyRM] = $data;
			endif;
		}/*$nilaiTEKS = array('no','batu','jalan','tmn_kg');
		foreach ($nilaiTEKS as $keyTEKS)
		{# kod php untuk besarkan semua huruf aka uppercase
			if(isset($posmen[$jadual][$keyTEKS])):
				$posmen[$jadual][$keyTEKS] = strtoupper($posmen[$jadual][$keyTEKS]);
			endif;
		}//*/ # valid guna if
		if (isset($posmen[$jadual]['email']))
			$posmen[$jadual]['email']=strtolower($posmen[$jadual]['email']);
		//if (isset($posmen[$jadual]['dp_baru']))
		//	$posmen[$jadual]['dp_baru']=ucwords(strtolower($posmen[$jadual]['dp_baru']));
		if (isset($posmen[$jadual]['responden']))
			$posmen[$jadual]['responden']=mb_convert_case($posmen[$jadual]['responden'], MB_CASE_TITLE);
		if (isset($posmen[$jadual]['password']))
		{
			//$pilih = null;
			$pilih = 'md5'; # Hash::rahsia('md5', $posmen[$jadual]['password'])
			//$pilih = 'sha256'; # Hash::create('sha256', $posmen[$jadual]['password'], HASH_PASSWORD_KEY)
			if (empty($posmen[$jadual]['password']))
				unset($posmen[$jadual]['password']);
			elseif ($pilih == 'md5')
				$posmen[$jadual]['password'] = 
				\Aplikasi\Kitab\Hash::rahsia('md5', $posmen[$jadual]['password']);
			elseif ($pilih == 'sha256')
				$posmen[$jadual]['password'] = 
				\Aplikasi\Kitab\Hash::create('sha256', $posmen[$jadual]['password'], HASH_PASSWORD_KEY);
		}//*/

		return $posmen; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------------------------
	public function medanCari($cariID) 
	{ 
		# Set pemboleubah untuk sql
        $senaraiMedan = ''
			. 'msic,keterangan,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("","",seksyen),' . "\r"
			. ' 	concat_ws("","",bahagian),' . "\r"
			. ' 	concat_ws("","",kumpulan),' . "\r"
			. ' 	concat_ws("","",kelas)' . "\r"
 			. ' ) as jenis,'
			. 'msic2000,'
			. 'notakaki'
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}
#------------------------------------------------------------------------------------------------------------------
	public function medanCari2($cariID) 
	{ 
		# Set pemboleubah untuk sql
        $senaraiMedan = ''
			. 'msic,kod_produk,keterangan,'
			. ' concat_ws("-",' . "\r"
			. ' 	concat_ws("","",msic),' . "\r"
			. ' 	concat_ws("","",p),' . "\r"
			. ' 	concat_ws("","",a)' . "\r"
 			. ' ) as jenis,'
			. 'mcpa2005,unit,code'
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}
#------------------------------------------------------------------------------------------------------------------
	public function tukar_data_xml($dataCantum,$xml_user_info)
	{
		# function call to convert array to xml
		$xmlData = new \Aplikasi\Kitab\Tatasusunan;
		$xmlData->array_to_xml($dataCantum,$xml_user_info);

		# saving generated xml file
		//$namafail = 'sumber/fail/xml/emsic2008.xml';
		$namafail = 'sumber/fail/xml/emcpa2009.xml';
		$xml_file = $xml_user_info->asXML($namafail);
		//$xml_file = $xml_user_info->asXML();

		# success and error message based on xml creation
		if($xml_file)
		{
			echo 'XML file have been generated successfully.'
			. '<a target="_blank" href="' . URL . $namafail . '">Click here</a> | '
			. '<a href="' . URL . 'ruangtamu/pelawat">Ruang Legar</a>';
			//echo $xml_file;
		}
		else
		{
			echo 'XML file generation error.';
		}
		//*/
	}
#------------------------------------------------------------------------------------------------------------------
	public function medanbaru($jadual)
	{
		# ada nilai
		$medan = array (
				'sekolah' => array(
					'nama_label' => 'Application For School',
					'jenis_medan' => 'select',
					'jenis_data' => 'Sekolah Kebangsaan Darul Iman',
					),
				'tahun_masuk' => array(
					'nama_label' => 'For Intake Year*',
					'jenis_medan' => 'select',
					'jenis_data' => '2017,2018,2019,2020',
					),
				'tahun_level' => array(
					'nama_label' => 'For Year/Level*',
					'jenis_medan' => 'select',
					'jenis_data' => '1,2,3,4,5,6,7',
					),
				'sesi' => array(
					'nama_label' => 'Preferred Session*',
					'jenis_medan' => 'select',
					'jenis_data' => '- Select -,Pagi,Petang,Malam',
					'label_dibawah' => 'Preferred Session Will Be Finalized By Management',
					),
				'sekolah_asal' => array(
					'nama_label' => 'Previous School',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'nama_pelajar' => array(
					'nama_label' => 'Student Name',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'warganegara' => array(
					'nama_label' => 'Citizen',
					'jenis_medan' => 'select',
					'jenis_data' => '*Malaysia,Foreign Student',
					),
				'nama_pelajar' => array(
					'nama_label' => 'Student Name*',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'no_kp_pelajar' => array(
					'nama_label' => 'IC No/Passport*',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					'label_dibawah' => '(No Space and Dash\'-\')',
					),
				'no_surat_lahir' => array(
					'nama_label' => 'Birth Cert. No',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'tempat_lahir' => array(
					'nama_label' => 'Birth Place*',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'tarikh_lahir' => array(
					'nama_label' => 'Birth Date*',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					'label_dibawah' => '(YYYY-MM-DD)',
					),
				'jantina-bangsa-agama' => array(
					'nama_label' => 'Gender/Race/Religion*',
					'jenis_medan' => 'manyselect',
					'jenis_data' => '- Gender -,Lelaki,Perempuan'
						. '|- Race -,Melayu,Cina,India,Lain-lain'
						. '|- Religion -,Islam,Budda,Hindu,Lain-lain'
					),
				'no_tel_waris' => array(
					'nama_label' => 'Tel. Mobile*(Parent)',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					'label_dibawah' => '(No Space and Dash\'-\')',
					),
				'email_waris' => array(
					'nama_label' => 'Email(Parent)',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					'label_dibawah' => '(Eg. mel@yahoo.com)',
					),
				'no_tel_rumah' => array(
					'nama_label' => 'Tel.Home',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'alamat1' => array(
					'nama_label' => 'Address (Line 1)*',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'alamat2' => array(
					'nama_label' => 'Address (Line 2)',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'bandar' => array(
					'nama_label' => 'City*',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'poskod' => array(
					'nama_label' => 'Postcode*',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'negeri' => array(
					'nama_label' => 'State*',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					),
				'alahan' => array(
					'nama_label' => 'Ilness/Alergic*',
					'jenis_medan' => 'selecttiktextbox',
					'jenis_data' => 'Asthmatic,Heart,Skin,Allergic',
					'label_dibawah' => 'Others : ',
					),
				'nama_waris1' => array(
					'nama_label' => 'Name',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					'label_dibawah' => '(Guardion/Father Infomation)',
					),
				'no_kp_waris1' => array(
					'nama_label' => 'IC No/Passport',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					'label_dibawah' => '(Guardion/Father Infomation)',
					),
				'hubungan_waris1' => array(
					'nama_label' => 'Relation*',
					'jenis_medan' => 'select',
					'jenis_data' => '- Relation -,Bapa,Ibu,Datok,Nenek,Bapa Saudara,Ibu Saudara,Lain-lain',
					'label_dibawah' => '(Guardion/Father Infomation)',
					),
				'nama_waris2' => array(
					'nama_label' => 'Name',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					'label_dibawah' => '(Guardion/Mother Infomation)',
					),
				'no_kp_waris2' => array(
					'nama_label' => 'IC No/Passport',
					'jenis_medan' => 'textbox',
					'jenis_data' => null,
					'label_dibawah' => '(Guardion/Mother Infomation)',
					),
				'hubungan_waris2' => array(
					'nama_label' => 'Relation*',
					'jenis_medan' => 'select',
					'jenis_data' => '- Relation -,Bapa,Ibu,Datok,Nenek,Bapa Saudara,Ibu Saudara,Lain-lain',
					'label_dibawah' => '(Guardion/Mother Infomation)',
					),
				);

		$medan2 = array(); # tiada nilai

		return $medan; # pulangkan pemboleubah
	}
#------------------------------------------------------------------------------------------------------------------
	public function datapelajar($jadual)
	{
		# ada nilai
		$medan = array(
			'0' => array(
				'no' => '1','date' => '1994-12-18','m/f' => 'F','name' => 'Janet','ic' => '2015011001',
				'handphone' => '120111001',	'email' => 'student@duduk.mana1','status' => 'Registered',
				'intake' => '2016','level' => '7','adm' => '7w/ict'
				),
			'1' => array (
				'no' => '2','date' => '1994-12-19','m/f' => 'M','name' => 'Darren','ic' => '2015011002',
				'handphone' => '120111002','email' => 'student@duduk.mana2','status' => 'Registered',
				'intake' => '2016',	'level' => '7','adm' =>'7w/ict'
				),
			'2' => array (
				'no' => '3','date' => '1993-12-20','m/f' => 'F','name' => 'Sophie','ic' => '2015011003',
				'handphone' => '120111003','email' => 'student@duduk.mana3','status' => 'Registered',
				'intake' => '2016','level' => '7','adm' =>'7w/ict'
				),
			'3' => array (
				'no' => '4','date' => '1994-12-21','m/f' => 'M','name' => 'Ravi','ic' => '2015011004',
				'handphone' => '120111004','email' => 'student@duduk.mana4','status' => 'Registered',
				'intake' => '2016','level' => '7','adm' => '7w/ict'
				),
			'4' => array (
				'no' => '5','date' => '1993-12-22','m/f' => 'F','name' => 'Daisy','ic' => '2015011005',
				'handphone' => '120111005','email' => 'student@duduk.mana5','status' => 'Registered',
				'intake' => '2016','level' => '7','adm' => '7w/ict'
				),
			'5' => array (
				'no' => '6','date' => '1993-12-22','m/f' => 'M','name' => 'Tom','ic' => '2015011006',
				'handphone' => '120111006','email' => 'student@duduk.mana6','status' => 'Registered',
				'intake' => '2016','level' => '7','adm' => '7w/ict'
				),
			'6' => array (
				'no' => '7','date' => '1994-10-11','m/f' => 'M','name' => 'Brett','ic' => '2015011007',
				'handphone' => '120111007','email' => 'student@duduk.mana7','status' => 'New',
				'intake' => '2016','level' => '8','adm' => '8r/ict'
				),
			'7' => array (
				'no' => '8','date' => '1994-12-03','m/f' => 'M','name' => 'John','ic' => '2015011008',
				'handphone' => '120111008','email' => 'student@duduk.mana8','status' => 'Registered',
				'intake' => '2016','level' => '8','adm' => '8r/ict'
				),
			'8' => array (
				'no' => '9','date' => '1995-02-20','m/f' => 'F','name' => 'Celia','ic' => '2015011009',
				'handphone' => '120111009','email' => 'student@duduk.mana9','status' => 'Registered',
				'intake' => '2016','level' => '8','adm' => '8r/ict'
				),
			'9' => array (
				'no' => '10','date' => '1994-09-21','m/f' => 'M','name' => 'Leo','ic' => '2015011010',
				'handphone' => '120111010','email' => 'student@duduk.mana10','status' => 'Registered',
				'intake' => '2016','level' => '8','adm' => '8r/ict'
				),
			'10' => array (
				'no' => '11','date' => '1995-06-14','m/f' => 'F','name' => 'Shankunthala','ic' => '2015011011',
				'handphone' => '120111011','email' => 'student@duduk.mana11','status' => 'ExistigStudent',
				'intake' => '2016','level' => '8','adm' => '8r/ict'
				),
			'11' => array (
				'no' => '12','date' => '1995-12-18','m/f' => 'F','name' => 'Sally','ic' => '2015011012',
				'handphone' => '120111012','email' => 'student@duduk.mana12','status' => 'Registered',
				'intake' => '2016','level' => '9','adm' => '9m/ict'
				),
			'12' => array (
				'no' => '13','date' => '1995-09-12','m/f' => 'F','name' => 'Jane','ic' => '2015011013',
				'handphone' => '120111013','email' => 'student@duduk.mana13','status' => 'Registered',
				'intake' => '2016','level' => '9','adm' => '9m/ict'
				),
			'13' => array (
				'no' => '14','date' => '1996-04-20','m/f' => 'M','name' => 'Paul','ic' => '2015011014',
				'handphone' => '120111014','email' => 'student@duduk.mana14','status' => 'Registered',
				'intake' => '2016','level' => '9','adm' => '9m/ict'
				),
			'14' => array (
				'no' => '15','date' => '1995-12-11','m/f' => 'F','name' => 'Rachael','ic' => '2015011015',
				'handphone' => '120111015','email' => 'student@duduk.mana15','status' => 'ExistigStudent',
				'intake' => '2016','level' => '9','adm' => '9m/ict'
				),
			'15' => array (
				'no' => '16','date' => '1996-04-02','m/f' => 'M','name' => 'Martin','ic' => '2015011016',
				'handphone' => '120111016','email' => 'student@duduk.mana16','status' => 'Registered',
				'intake' => '2016','level' => '9','adm' => '9m/ict'
				),
			);

		$medan2 = array(); # tiada nilai

		return $medan; # pulangkan pemboleubah
	}
#------------------------------------------------------------------------------------------------------------------
	public function laporanDaftar($jadual)
	{
		# ada nilai
		$medan = array(
			0 => array(
				'status' => 'New',
				'jumSekL' => 0, 'jumSekP' => 0, 'jumSekJum' => 0,
				'SSB2L' => 0, 	'SSB2P' => 0,	'SSB2Jum' => 0,
				'SSB1L' => 0,	'SSB1P' => 0,	'SSB1Jum' => 0,
				'TadikaL' => 0,	'TadikaP' => 0,	'TadikaJum' => 0,
				),
			1 => array(
				'status' => 'Processing',
				'jumSekL' => 17,	'jumSekP' => 12,	'jumSekJum' => 29,
				'SSB2L' => 8,		'SSB2P' => 8, 		'SSB2Jum' => 8,
				'SSB1L' => 8,		'SSB1P' => 4,		'SSB1Jum' => 12,
				'TadikaL' => 1,		'TadikaP' => 0,		'TadikaJum' => 1,
			),
			2 => array(
				'status' => 'Fail / Full',
				'jumSekL' => 0, 'jumSekP' => 0, 'jumSekJum' => 0,
				'SSB2L' => 0, 	'SSB2P' => 0,	'SSB2Jum' => 0,
				'SSB1L' => 0,	'SSB1P' => 0,	'SSB1Jum' => 0,
				'TadikaL' => 0,	'TadikaP' => 0,	'TadikaJum' => 0,
			),
			3 => array(
				'status' => 'Interview',
				'jumSekL' => 0, 'jumSekP' => 0, 'jumSekJum' => 0,
				'SSB2L' => 0, 	'SSB2P' => 0,	'SSB2Jum' => 0,
				'SSB1L' => 0,	'SSB1P' => 0,	'SSB1Jum' => 0,
				'TadikaL' => 0,	'TadikaP' => 0,	'TadikaJum' => 0,
			),
			4 => array(
				'status' => 'Interview Fail',
				'jumSekL' => 0, 'jumSekP' => 0, 'jumSekJum' => 0,
				'SSB2L' => 0, 	'SSB2P' => 0,	'SSB2Jum' => 0,
				'SSB1L' => 0,	'SSB1P' => 0,	'SSB1Jum' => 0,
				'TadikaL' => 0,	'TadikaP' => 0,	'TadikaJum' => 0,
			),
			5 => array(
				'status' => 'Offering',
				'jumSekL' => 0, 'jumSekP' => 0, 'jumSekJum' => 0,
				'SSB2L' => 0, 	'SSB2P' => 0,	'SSB2Jum' => 0,
				'SSB1L' => 0,	'SSB1P' => 0,	'SSB1Jum' => 0,
				'TadikaL' => 0,	'TadikaP' => 0,	'TadikaJum' => 0,
			),
			6 => array(
				'status' => 'Registered',
				'jumSekL' => 16, 'jumSekP' => 17, 'jumSekJum' => 33,
				'SSB2L' => 9, 	'SSB2P' => 10,	'SSB2Jum' => 19,
				'SSB1L' => 5,	'SSB1P' => 6,	'SSB1Jum' => 11,
				'TadikaL' => 2,	'TadikaP' => 1,	'TadikaJum' => 3,
			),
			7 => array(
				'status' => 'KIV',
				'jumSekL' => 0, 'jumSekP' => 0, 'jumSekJum' => 0,
				'SSB2L' => 0, 	'SSB2P' => 0,	'SSB2Jum' => 0,
				'SSB1L' => 0,	'SSB1P' => 0,	'SSB1Jum' => 0,
				'TadikaL' => 0,	'TadikaP' => 0,	'TadikaJum' => 0,
			),
			8 => array(
				'status' => 'Existing Student',			
				'jumSekL' => 0, 'jumSekP' => 0, 'jumSekJum' => 0,
				'SSB2L' => 0, 	'SSB2P' => 0,	'SSB2Jum' => 0,
				'SSB1L' => 0,	'SSB1P' => 0,	'SSB1Jum' => 0,
				'TadikaL' => 0,	'TadikaP' => 0,	'TadikaJum' => 0,
			)
			/*9 => array(
				'status' => 'Total Registered',			
				'jumSekL' => 0, 'jumSekP' => 0, 'jumSekJum' => 0,
				'SSB2L' => 0, 	'SSB2P' => 0,	'SSB2Jum' => 0,
				'SSB1L' => 0,	'SSB1P' => 0,	'SSB1Jum' => 0,
				'TadikaL' => 0,	'TadikaP' => 0,	'TadikaJum' => 0,
			)//*/
		);

		$medan2 = array(); # tiada nilai

		return $medan; # pulangkan pemboleubah
	}
#------------------------------------------------------------------------------------------------------------------
	public function profil($jadual)
	{
		# ada nilai
		$medan = array(
			'0' => array (
				'no' => '1',
				'intake' => '2016',
				'matric' => 'JA0101',
				'm/f' => 'F',
				'name' => 'Janet',
				'class' => '7w/ict',
				'ic' => '150101101002',
				'birth date' => '2015-01-01',
				'register' => '1994-12-18',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111001',
				'status' => 'student',
			),
			'1' => array (
				'no' => '2',
				'intake' => '2016',
				'matric' => 'DA0102',
				'm/f' => 'M',
				'name' => 'Darren',
				'class' => '7w/ict',
				'ic' => '150102101002',
				'birth date' => '2015-01-02',
				'register' => '1994-12-19',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111002',
				'status' => 'student',
			),
			'2' => array (
				'no' => '3',
				'intake' => '2016',
				'matric' => 'SO0103',
				'm/f' => 'F',
				'name' => 'Sophie',
				'class' => '7w/ict',
				'ic' => '150103101002',
				'birth date' => '2015-01-03',
				'register' => '1993-12-20',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111003',
				'status' => 'student',
			),
			'3' => array (
				'no' => '4',
				'intake' => '2016',
				'matric' => 'RA0104',
				'm/f' => 'M',
				'name' => 'Ravi',
				'class' => '7w/ict',
				'ic' => '150104101002',
				'birth date' => '2015-01-04',
				'register' => '1994-12-21',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111004',
				'status' => 'student',
			),
			'4' => array (
				'no' => '5',
				'intake' => '2016',
				'matric' => 'DA0105',
				'm/f' => 'F',
				'name' => 'Daisy',
				'class' => '7w/ict',
				'ic' => '150105101002',
				'birth date' => '2015-01-05',
				'register' => '1993-12-22',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111005',
				'status' => 'student',
			),
			'5' => array (
				'no' => '6',
				'intake' => '2016',
				'matric' => 'TO0106',
				'm/f' => 'M',
				'name' => 'Tom',
				'class' => '7w/ict',
				'ic' => '150106101002',
				'birth date' => '2015-01-06',
				'register' => '1993-12-22',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111006',
				'status' => 'student',
			),
			'6' => array (
				'no' => '7',
				'intake' => '2016',
				'matric' => 'BR0107',
				'm/f' => 'M',
				'name' => 'Brett',
				'class' => '8r/ict',
				'ic' => '150107101002',
				'birth date' => '2015-01-07',
				'register' => '1994-10-11',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111007',
				'status' => 'student',
			),
			'7' => array (
				'no' => '8',
				'intake' => '2016',
				'matric' => 'JO0108',
				'm/f' => 'M',
				'name' => 'John',
				'class' => '8r/ict',
				'ic' => '150108101002',
				'birth date' => '2015-01-08',
				'register' => '1994-12-03',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111008',
				'status' => 'student',
			),
			'8' => array (
				'no' => '9',
				'intake' => '2016',
				'matric' => 'CE0109',
				'm/f' => 'F',
				'name' => 'Celia',
				'class' => '8r/ict',
				'ic' => '150109101002',
				'birth date' => '2015-01-09',
				'register' => '1995-02-20',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111009',
				'status' => 'student',
			),
			'9' => array (
				'no' => '10',
				'intake' => '2016',
				'matric' => 'LE0110',
				'm/f' => 'M',
				'name' => 'Leo',
				'class' => '8r/ict',
				'ic' => '150110101002',
				'birth date' => '2015-01-10',
				'register' => '1994-09-21',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111010',
				'status' => 'student',
			),
			'10' => array (
				'no' => '11',
				'intake' => '2016',
				'matric' => 'SH0111',
				'm/f' => 'F',
				'name' => 'Shankunthala',
				'class' => '8r/ict',
				'ic' => '150111101002',
				'birth date' => '2015-01-11',
				'register' => '1995-06-14',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111011',
				'status' => 'student',
			),
			'11' => array (
				'no' => '12',
				'intake' => '2016',
				'matric' => 'SA0112',
				'm/f' => 'F',
				'name' => 'Sally',
				'class' => '9m/ict',
				'ic' => '150112101002',
				'birth date' => '2015-01-12',
				'register' => '1995-12-18',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111012',
				'status' => 'student',
			),
			'12' => array (
				'no' => '13',
				'intake' => '2016',
				'matric' => 'JA0113',
				'm/f' => 'F',
				'name' => 'Jane',
				'class' => '9m/ict',
				'ic' => '150113101002',
				'birth date' => '2015-01-13',
				'register' => '1995-09-12',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111013',
				'status' => 'student',
			),
			'13' => array (
				'no' => '14',
				'intake' => '2016',
				'matric' => 'PA0114',
				'm/f' => 'M',
				'name' => 'Paul',
				'class' => '9m/ict',
				'ic' => '150114101002',
				'birth date' => '2015-01-14',
				'register' => '1996-04-20',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111014',
				'status' => 'student',
			),
			'14' => array (
				'no' => '15',
				'intake' => '2016',
				'matric' => 'RA0115',
				'm/f' => 'F',
				'name' => 'Rachael',
				'class' => '9m/ict',
				'ic' => '150115101002',
				'birth date' => '2015-01-15',
				'register' => '1995-12-11',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111015',
				'status' => 'student',
			),
			'15' => array (
				'no' => '16',
				'intake' => '2016',
				'matric' => 'MA0116',
				'm/f' => 'M',
				'name' => 'Martin',
				'class' => '9m/ict',
				'ic' => '150116101002',
				'birth date' => '2015-01-16',
				'register' => '1996-04-02',
				'register' => '2016-02-02',
				'end' => '0000-00-00',
				'ic parents' => '120111016',
				'status' => 'student',
			),
		); 

		$medan2 = array(); # tiada nilai

		return $medan; # pulangkan pemboleubah	
	}
#------------------------------------------------------------------------------------------------------------------
	public function profilSeorang($jadual,$id)
	{
		$kosong = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
			. '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
			. '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
			. '';
		# ada nilai
		$medan = array(
			'bhgn1' => array (
				'0' => array (
					'name' => 'JANET',		
					'matric' => 'JA0101',
					'ic no' => '150101101002',
					'school' => 'Sekolah Kebangsaan Darul Iman',
					'class' => '2 Anggerik / 2016',
				),),
			'bhgn2' => array (
				'0' => array (
					'register' => '2016-08-01',		
					'end' => '0000-00-00',
					'status' => 'student',
					'school account' => null,
					'&nbsp;' => null,
				),),
			'bhgn3' => array (
				'0' => array (
					'gender' => 'female',
					'race' => 'cina',
					'religion' => 'budda',
					'birth date' => '2015-01-01',
					'birth place' => 'MUAR',
					'birth cert' => '-',
					'telephone' => '06-95123654',
					'handphone (parent)' => '0123456789',
					'email (parent)' => 'utama@duduk.mana',
					'address' => 'JALAN SATU,TAMAN DUA',
					'city' => 'MUAR',
					'postcode' => '84000',
					'state' => 'JOHOR',
				),),
			'bhgn4' => array (
				'0' => array (
					'transportation' => $kosong,
					'illness / alergic' => $kosong,
					'previous school' => $kosong,
					'hostel' => $kosong,
					'manjaria student' => $kosong,
					'lgb employee' => $kosong,
					'lesb employee2' => null,
					'lesb employee' => null,
					'international' => null,
					'&nbsp;' => null,
					'&nbsp;&nbsp;' => null,
					'&nbsp;&nbsp;&nbsp;' => null,
					'&nbsp;&nbsp;&nbsp;&nbsp;' => null,
				),),
			'bhgn5' => array (
				'0' => array (
					'name' => 'JAMES BOND',
					'ic no' => '120111001',
					'handphone' => '013987654',
					'email' => 'bapa@duduk.mana',
					'occupation' => null,
					'employer' => null,
					'address' => null,
					'telephone' => '06951365',
				),),
			'bhgn6' => array (
				'0' => array (
					'name' => 'MARRY ME',
					'ic no' => '120111002',
					'handphone' => '014987654',
					'email' => 'ibu@duduk.mana',
					'occupation' => 'surirumah',
					'employer' => null,
					'address' => null,
					'telephone' => '06951365',
				),),
		);

		$medan2 = array(); # tiada nilai

		return $medan; # pulangkan pemboleubah
	}	
#------------------------------------------------------------------------------------------------------------------
#==========================================================================================
}
