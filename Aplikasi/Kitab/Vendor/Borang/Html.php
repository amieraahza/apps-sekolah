<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html
{
#==========================================================================================
	public function tambah1Input($paparSahaja,$jadual,$kira,$medan,$data)
	{	# istihar pembolehubah 
		$name = 'name="' . $jadual  . '[' . $kira . ']' . '[' . $medan . ']"';
		$tabline = "\n\t\t";
		$tabline2 = "\n\t\t\t\t";

		if(in_array($medan,array('nama','alamat1','alamat2','bandar'))):
			$input = '<textarea ' . $name . ' rows="1" cols="20"' . $tabline2 
				   . ' class="form-control">' . $data . '</textarea>'
				   . $tabline2 //. '<pre>' . $data . '</pre>'
				   . '';
		else:
			$input = '' //. '<span class="input-group-addon"></span>'
				   . '<input type="text" ' . $name 
				   . ( (empty($data)) ? '': ' value="' . $data . '"')
				   . ' placeholder=' . $medan . '[' . $kira . ']' 
				   . ' class="form-control">'
				   . '';
		endif;

		# pulangkan nilai
		return '<td>' . $input . '</td>' . $tabline;
	}

	public function tambahInput($paparSahaja,$jadual,$kira,$key,$data)
	{	# istihar pembolehubah 
		$name = 'name="' . $jadual . '[' . $key . ']"';
		$inputText = $name . ' value="' . $data . '"';
		$tabline = "\n\t\t\t\t\t";
		$tabline2 = "\n\t\t\t\t";
		# butang 
		$birutua = 'btn btn-primary btn-mini';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger btn-mini';

		//if ( in_array($key,array(...)) )
		if(in_array($key,array('nota','catatan')))
		{#kod utk textarea
			$input = '<textarea ' . $name . ' rows="1" cols="20"' . $tabline2 
				   . ' class="form-control">' . $data . '</textarea>'
				   . $tabline2 . '<pre>' . $data . '</pre>'
				   . '';
		}
		elseif(in_array($key,array('nama','email','responden','fe')))
		{#kod utk input text saiz besar
			$input = '<div class="input-group input-group-lg">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('respon','respon2')))
		{#kod utk input text 3 aksara sahaja
			$input = '<div class="input-group input-group">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('notel','nofax','nohp')))
		{#kod utk input text saiz kecil
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('hasil','belanja','staf','gaji','aset','stok')))
		{#kod utk input paparkan nilai asal sebelum ubah
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">Nilai</span>'
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . kira($data) . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('password')) )
		{#kod untuk input password
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="password" ' . $name
				   . $tabline . ' placeholder="Tukar kata laluan"'
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('lawat','terima','hantar','hantar_prosesan')) )
		{#kod utk input tarikh
		#terima - style="font-family:sans-serif;font-size:10px;"
			$tandaX = 'name="' . $jadual . '[' . $key . 'X]"';
			$dataX = ($key=='hantar_prosesan') ?
				'<input type="checkbox" ' . $tandaX . ' value="x">Utk Prosesan : ' . $data
				: '<input type="checkbox" ' . $tandaX . ' value="x">' . $data;
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $dataX . '</span>' . $tabline
				   . '<input type="date" ' . $inputText //. 'class="input-date tarikh" readonly>'
				   . $tabline . ' class="form-control date-picker"'
				   . $tabline . ' placeholder="Cth: 2014-05-01"'
				   . $tabline . ' id="date' . $key . '" data-date-format="yyyy/mm/dd"/>'
				   . $tabline2 . '</div>'
				   . '';			   
		}
		elseif ( in_array($key,array('jantina')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$senaraiJantina = array('lelaki','perempuan');

			foreach ($senaraiJantina as $key => $value)
			{
				$input2 .= '<option value="' . $value . '"';
				$input2 .= ($value == $data) ? ' selected>*' : '>';
				$input2 .= ucfirst(strtolower($value));
				$input2 .= '</option>' . $tabline;
			}

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<select ' . $name . ' class="form-control">' . $tabline
				   . $input2 . '</select>'
				   . $tabline2 . '</div>'
				   . '';
		}
		# kod html untuk bukan input type
		elseif ( in_array($key,array('keterangan')) )
		{#kod untuk papar jadual
			//echo '$paparSahaja-><pre>'; print_r($paparSahaja) . '<pre>';
			//var_export($paparSahaja) . '<pre>';
			# set nama class untuk jadual
			$jadual1 = ' table-striped'; # tambah zebra
			$jadual2 = ' table-bordered';
			$jadual3 = ' table-hover';
			$jadual4 = ' table-condensed'; 
			$classJadual = 'table' . $jadual4 . $jadual3;
			foreach ($paparSahaja as $myTable => $bilang)
			{# mula ulang $bilang
				$this->papar_jadual($bilang, $myTable, $pilih=4, $classJadual);
			}# tamat ulang $bilang //*/

			$input = '';
		}
		elseif ( in_array($key,array('alamat_baru')) )
		{#kod untuk  blockquote
			$input = '<blockquote>'
				   . '<p class="form-control-static text-info">' . $data . '</p>'
				   //. '<small>Alamat <cite title="Source Title">baru</cite></small>'
				   . '</blockquote>';
		}
		else
		{#kod untuk lain2
			$input = '<p class="form-control-static text-info">' . $data . '</p>';
		}

		return $input; # pulangkan nilai
	}
#==========================================================================================
	public function cariInput($paparSahaja,$jadual,$kira,$key,$data)
	{	# istihar pembolehubah 
		$name = 'name="' . $jadual . '[' . $key . ']"';
		$inputText = $name . ' value="' . $data . '"';
		$dataType = myGetType($data);
		$tabline = "\n\t\t\t\t\t";
		$tabline2 = "\n\t\t\t\t";
		# butang 
		$birutua = 'btn btn-primary btn-mini';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger btn-mini';

		//if ( in_array($key,array(...)) )
		if(in_array($key,array('nota','catatan','Mesej')))
		{#kod utk textarea
			$input = '<textarea ' . $name . ' rows="1" cols="20"' . $tabline2 
				   . ' class="form-control">' . $data . '</textarea>'
				   . $tabline2 . '<pre>' . $data . '</pre>'
				   . '';
		}
		elseif(in_array($key,array('posdaftar')))
		{#kod utk kesan API dan input text saiz besar
			# tatasusuan API posdaftar
			list($k,$btn) = $this->posdaftar($data);
			$data2 = ($data==null) ? $data :
				'<a target="_blank" href="' . $k[3] . '">' . $data . '</a>';
			$input = '<div class="input-group input-group-lg">' . $tabline
				   . '<span class="input-group-addon">' . $data2 . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('namax','emailx','responden','fe')))
		{#kod utk input text saiz besar
			$input = '<div class="input-group input-group-lg">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('respon','nobatch','feprosesan')))
		{#kod utk input text 3 aksara sahaja
			$input = '<div class="input-group input-group">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('Bayaran','Status','temujanji')))
		{#kod utk input text saiz biasa
			$input = '<div class="input-group input-group">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('notel','nofax','nohp')))
		{#kod utk input text saiz kecil
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('hasil','belanja','bilpekerja','gaji','hartatetap','stokakhir',
			'staf','aset','stok')))
		{#kod utk input paparkan nilai asal sebelum ubah
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">Nilai</span>'
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . kira($data) . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('output','input','nilaitambah','ioratio')))
		{#kod utk input paparkan nilai asal sebelum ubah
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">Nilai</span>'
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . kira($data) . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}//*/
		elseif ( in_array($key,array('password','kataLaluan')) )
		{#kod untuk input password
			$input = ''//'<div class="input-group input-group-sm">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="password" ' . $name
				   . $tabline . ' placeholder="Tukar kata laluan"'
				   . ' class="form-control">'
				   //. $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('lawat','terima','hantar','hantar_prosesan')) )
		{#kod utk input tarikh
		#terima - style="font-family:sans-serif;font-size:10px;"
			$tandaX = 'name="' . $jadual . '[' . $key . 'X]"';
			$dataX = ($key=='hantar_prosesan') ?
				'<input type="checkbox" ' . $tandaX . ' value="x">Utk Prosesan : ' . $data
				: '<input type="checkbox" ' . $tandaX . ' value="x">' . $data;
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $dataX . '</span>' . $tabline
				   . '<input type="date" ' . $inputText //. 'class="input-date tarikh" readonly>'
				   . $tabline . ' class="form-control date-picker"'
				   . $tabline . ' placeholder="Cth: 2014-05-01"'
				   . $tabline . ' id="date' . $key . '" data-date-format="yyyy/mm/dd"/>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('posdaftar_terima')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$senaraiInput = array('Belum','Proses','Terima','KadKuning','Borang');

			foreach ($senaraiInput as $key => $value)
			{
				$input2 .= '<option value="' . $value . '"';
				$input2 .= ($value == $data) ? ' selected>*' : '>';
				$input2 .= ucfirst(strtolower($value));
				$input2 .= '</option>' . $tabline;
			}

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<select ' . $name . ' class="form-control">' . $tabline
				   . $input2 . '</select>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('jantina')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$senaraiJantina = array('lelaki','perempuan');

			foreach ($senaraiJantina as $key => $value)
			{
				$input2 .= '<option value="' . $value . '"';
				$input2 .= ($value == $data) ? ' selected>*' : '>';
				$input2 .= ucfirst(strtolower($value));
				$input2 .= '</option>' . $tabline;
			}

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<select ' . $name . ' class="form-control">' . $tabline
				   . $input2 . '</select>'
				   . $tabline2 . '</div>'
				   . '';
		}
		# kod html untuk bukan input type
		elseif ( in_array($key,array('keterangan')) )
		{#kod untuk papar jadual
			//echo '$paparSahaja-><pre>'; print_r($paparSahaja) . '<pre>';
			//var_export($paparSahaja) . '<pre>';
			# set nama class untuk jadual
			$jadual1 = ' table-striped'; # tambah zebra
			$jadual2 = ' table-bordered';
			$jadual3 = ' table-hover';
			$jadual4 = ' table-condensed'; 

			$classJadual = 'table' . $jadual4 . $jadual3;
			foreach ($paparSahaja as $myTable => $bilang)
			{# mula ulang $bilang
				$this->papar_jadual($bilang, $myTable, $pilih=4, $classJadual);
			}# tamat ulang $bilang //*/

			$input = '';
		}
		elseif ( in_array($key,array('alamat_baru')) )
		{#kod untuk  blockquote
			$input = '<blockquote>'
				   . '<p class="form-control-static text-info">' . $data . '</p>'
				   //. '<small>Alamat <cite title="Source Title">baru</cite></small>'
				   . '</blockquote>';
		}
		/*elseif($dataType=='string' && !in_array($key,array('level')))
		{
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>'
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">' . $tabline
				   . $tabline2 . '</div>'
				   . '';
		}*/
		//elseif($dataType=='numeric')
		//elseif($dataType=='NULL')
		else
		{#kod untuk lain2
			$input = '<p class="form-control-static text-info">' . $data . '</p>';
		}

		return $input; # pulangkan nilai
	}
###///////////////////////////////////////////////////////////////////////////////////////////////////////
	# tambah input berasaskan type
	function tambahIkutType($jadual,$namaMedan,$senarai)
	{	# istihar pembolehubah 
		$jenisMedan = isset($senarai['jenis_medan'])? $senarai['jenis_medan']: '';
		$jenisData = isset($senarai['jenis_data'])? $senarai['jenis_data']: '';
		$labelDibawah = isset($senarai['label_dibawah'])? $senarai['label_dibawah']: '';
		$name = 'name="' . $jadual . '[' . $namaMedan . ']"';
		//$input = $name . ' value="' . $data . '"';
		$inputText = $name;
		$tabline = "\n\t\t\t";
		$tabline2 = "\n\t\t";
		$tabline4 = "\n\t\t\t\t";
		# butang 
		$birutua = 'btn btn-primary btn-mini';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger btn-mini';

		//if ( in_array($jenisMedan,array(...)) )
		if(in_array($jenisMedan,array('textbox')))
		{#kod utk input text 
			$data = null;
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $name . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . $labelDibawah . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('textboxtik')) )
		{#kod untuk textbox dan tik
			$data = null;
			$pecah = explode('|', $jenisData);
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText . ' value="' . $pecah[0] . '"'
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">'
				   . $tabline . '<input type="checkbox" value="x">'
				   . $pecah[1] . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('password','kataLaluan')) )
		{#kod untuk input password
			$input = ''//'<div class="input-group input-group-sm">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="password" ' . $name
				   . $tabline . ' placeholder="Tukar kata laluan"'
				   . ' class="form-control">'
				   //. $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('select')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$tatasusunan = explode(',', $jenisData);
			$data = null;

			foreach ($tatasusunan as $key => $value)
			{
				$input2 .= '<option value="' . $value . '">';
				$input2 .= ucfirst($value);
				$input2 .= '</option>' . $tabline;
			}

			$paparLabelBawah = ($labelDibawah==null) ? '' : 
				'<span class="input-group-addon">' 
				. $labelDibawah . '</span>';
			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   //. '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<select ' . $name . ' class="form-control">' . $tabline
				   . $input2 . '</select>'
				   . $paparLabelBawah
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('manyselect')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$pecahan = @explode('|', $jenisData);
			
			$input2 .= '<div class="row"><!-- added div.row -->';
			for($mula = 0; $mula < count($pecahan); $mula++):
				$tatasusunan = @explode(',', $pecahan[$mula]);
				$input2 .= $tabline . '<div class="col-sm-4">'
						. $tabline4 . '<select ' . $name 
						. ' class="form-control">';
				foreach ($tatasusunan as $key => $value)
				{
					$input2 .= $tabline4;
					$input2 .= '<option value="' . $value . '">';
					$input2 .= ucfirst($value);
					$input2 .= '</option>';
				}
				$input2	.= $tabline4 . '</select>' . $tabline
						. '</div><!-- class="col-sm-4" -->';
			endfor;
			$input2 .= $tabline . '</div><!-- class="row" -->';

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
			       . $input2 . $tabline2 . '</div>' . '';
		}
		elseif ( in_array($jenisMedan,array('selecttiktextbox')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$kosong = '&nbsp;&nbsp;';
			$tatasusunan = explode(',', $jenisData);
			$input2 .= '<span class="input-group-addon">';
			foreach ($tatasusunan as $key => $value)
			{
				$input2 .= $tabline 
						. '<input type="radio" ' . $name
						. ' value="' . ucfirst($value) . '">'
						. $kosong . ucfirst($value) . $kosong;
			}
			$lain2 = $tabline . ' | ' //'<input type="radio">' 
				. $kosong . $labelDibawah . $kosong;
			$input2 .= $tabline . $lain2
					. '</span>' . $tabline;

			# cantum dengan textbox
			$input = '<input type="text" ' . $name . ' class="form-control">';

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . $input2 . $input
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('blockquote')) )
		{#kod untuk blockquote
			$data = null;
			$input = '<blockquote>'
				   . '<p class="form-control-static text-info">' . $data . '</p>'
				   //. '<small>Alamat <cite title="Source Title">baru</cite></small>'
				   . '</blockquote>';
		}
		else
		{#kod untuk lain2
			$data = $jenisData;
			$input = '<p class="form-control-static text-info">' . $data . '</p>';
		}

		return $input; # pulangkan nilai		
	}
###///////////////////////////////////////////////////////////////////////////////////////////////////////
	# mula untuk kod php+html 
	function papar_jadual($row, $myTable, $pilih, $classTable = null)
	{
		if ($pilih == 1) 
		{
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="excel" id="example">
			<?php $printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{	# print the headers once: 
				if ( !$printed_headers ) : ?><thead><tr>
			<th>#</th><?php foreach ( array_keys($row[$kira]) as $tajuk ) :
			?><th><?php echo $tajuk ?></th>
			<?php endforeach; ?></tr></thead>
			<?php	$printed_headers = true; 
				endif;
			#- print the data row --------------------------------------------
			?><tbody><tr>
			<td><?php echo $kira+1 ?></td>	
			<?php foreach ( $row[$kira] as $key=>$data ) : 
			?><td><?php echo $data ?></td>
			<?php endforeach; ?></tr></tbody>
			<?php
			}#-----------------------------------------------------------------
			?></table><?php echo "\r" ?><!-- Jadual <?php echo $myTable ?> --><?php
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		} elseif ($pilih == 2) {
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="excel" id="example"><?php
			$printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{	# cetak tajuk hanya sekali sahaja :
				if ( !$printed_headers ) : ?>
			<thead><tr>
			<th>#</th><?php
					foreach ( array_keys($row[$kira]) AS $tajuk ) 
					{ 	if ( !is_int($tajuk) ) :
							$paparTajuk = ($tajuk=='nama') ?
							$tajuk . '(jadual:' . $myTable . ')'
							: $tajuk; ?>
			<th><?php echo $paparTajuk ?></th>
			<?php		endif;
					}
			?></tr></thead><?php
					$printed_headers = true; 
				endif; 
			#- cetak hasil $data ---------------------------------------------?>
			<tbody><tr>
			<td><?php echo $kira+1 ?></td>	
			<?php
				foreach ( $row[$kira] AS $key=>$data ) 
				{
					?><td><?php echo $data ?></td><?php
				} 
				?></tr></tbody>
			<?php
			}
			#-----------------------------------------------------------------
			?></table><!-- Jadual <?php echo $myTable ?> --><?php
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		} elseif ($pilih == 3) {
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?>  --><?php
			for ($kira=0; $kira < count($row); $kira++)
			{// ulang untuk $kira++ ?>
			<table border="1" class="excel" id="example">
			<tbody><?php foreach ( $row[$kira] as $key=>$data ):?>
			<tr>
			<td><?php echo $key ?></td>
			<td><?php echo $data ?></td>
			</tr>
			<?php endforeach; ?></tbody>
			</table>
			<?php
			}# ulang untuk $kira++ ?>
			<!-- Jadual <?php echo $myTable ?> --><?php
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		} elseif ($pilih == 4) { 
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table class="<?php echo $classTable ?>">
			<?php $printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{	# cetak tajuk hanya sekali sahaja :
				if ( !$printed_headers ) : ?><thead><tr>
			<th>#</th><?php foreach ( array_keys($row[$kira]) as $tajuk ) :
			?><th><?php echo $tajuk ?></th><?php endforeach; 
			?></tr></thead>
			<?php	$printed_headers = true; 
				endif;
			# cetak hasil $data --------------------------------------------
			?><tbody><tr>
			<td><?php echo $kira+1 ?></td><?php 
				foreach ( $row[$kira] as $key=>$data ) : 
			?><td><?php echo $data ?></td><?php 
				endforeach; ?>  
			</tr></tbody>
			<?php
			}
			#-----------------------------------------------------------------
			?></table><?php echo "\r\t\t\t"; ?><!-- Jadual <?php echo $myTable ?> --><?php echo "\r\t\t\t";
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		} elseif ($jadual == 5) { 
		# nilai akan dipulangkan balik
			$bil_tajuk = $row['bil_tajuk'];// => 8
			$bil_baris = $row['bil_baris']; 

			$output  = null; 
			//$output .= '<br>$bil_tajuk=' . $bil_tajuk;
			//$output .= '<br>$bil_baris=' . $bil_baris;
			$output .= '<table border="1" class="excel" id="example">
			<thead><tr>
			<th colspan="' . $bil_tajuk . '">
			<strong>Jadual ' . $myTable . ' : ' . $bil_tajuk . '
			</strong></th>
			</tr></thead>';

			$printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < $bil_baris; $kira++)
			{	# print the headers once:
				if ( !$printed_headers ) 
				{##=================================================
				$output .= "\r\t<thead><tr>\r\t<th>#</th>";
				foreach ( array_keys($row[$kira]) as $tajuk ) :
					$output .= "\r\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\r\t" . '</tr></thead>';
				##==================================================
					$printed_headers = true; 
				} 
			#--- print the data row ------------------------------------------
				$output .= "\r\t<tbody><tr>\r\t<td>" . ($kira+1) . '</td>';
				foreach ( $row[$kira] as $key=>$data ) :
					$output .= "\r\t" . '<td>' . $data . '</td>';
				endforeach; 
				$output .= "\r\t" . '</tr></tbody>';
			}
			#-----------------------------------------------------------------
			$output .= "\r\t" . '</table>';

			return $output;

		} # tamat if ($jadual == 5
	}
	# tamat untuk kod php+html 
#==========================================================================================
	function paparURL($key, $data, $myTable = null, $cariA= null, $cariB = null)
	{
		# kod warna butang
		$warnaPrimary = $this->butang('primary'); # birutua
		$warnaDanger = $this->butang('danger'); # merah
		$warnaSuccess = $this->butang('success'); # hijau

		if ($key=='no')
		{# primary key
				$k0 = URL . 'pelajar/papar/profil/' . $data;
				$p0 = '<a target="_blank" href="' . $k0 . '">'
				. $this->iconFA(0) . '</a>&nbsp;';

				$k1 = URL . 'pelajar/ubah/profil/' . $data;
				$p1 = '<a target="_blank" href="' . $k1 . '">'
				. $this->iconFA(1) . '</a>&nbsp;';

			?><td><?php echo $p0 . $p1 ?></td><?php
			?><td><?php echo $data ?></td><?php
		}
		elseif(in_array($key,array('posdaftar')))
		{
				list($k,$btn) = $this->posdaftar($data);
				$pautan = ($data==null) ? $data :
				'<a target="_blank" href="' . $k[3] . '" class="' 
				. $this->butang . '">' . $data . '</a>';

			?><td><?php echo $pautan ?></td><?php
		}
		elseif ($key=='pegawaiborang')
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
		elseif ($key=='hantar_prosesan')
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
		elseif ($key=='terimaProsesan')
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
		elseif(in_array($key,array('Mesej')))
		{
			?><td><?php echo nl2br($data) ?></td><?php
		}
		else
		{
			?><td><?php echo $data ?></td><?php
		}

	}
#==========================================================================================
	public function paparLink($jenis = '0')
	{
		# papar URL yang terlibat
		$k[0] = URL . 'kawalan/posdaftar/';
		
		if ($jenis == '2')
		{	
			echo $pautan = '<a target="_blank" href="#" class="' 
			. $this->butang . '">' . $a . '</a>';
		}
		elseif($jenis == '1')
		{
			echo '<td>' . $a[0] . '&nbsp;' . $a[1] . '</td>';
		}
		else
		{
			echo '<td><input type="checkbox" value="x"></td>';
		}//*/
	}
#==========================================================================================
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
#==========================================================================================
	public function iconFA($pilih)
	{# icon font awesome
		$a[0] = '<i class="fa fa-user-o" aria-hidden="true"></i>';
		$a[1] = '<i class="fa fa-pencil" aria-hidden="true"></i>';

		return $a[$pilih];
	}
#==========================================================================================
	public function pautanTD($target, $href, $class, $data)
	{
		if ($target == null) { $t = ''; }
		else { $t = ' target="' . $target . '"'; }
	
		?><a<?php echo $t ?> href="<?php echo $href ?>" class="<?php
		echo $class ?>"><?php echo $data ?></a><?php
	}
#==========================================================================================
	public function posdaftar($data)
	{
		$k[0] = URL . 'kawalan/posdaftar/' . $data;
		$k[1] = 'http://poslajutracking.herokuapp.com/track/' . $data;
		$k[2] = 'http://www.pos.com.my/postal-services/quick-access/?track-trace#trackingIds=' . $data;
		$k[3] = 'https://track.aftership.com/malaysia-post/' . $data;

		# butang 
		$btn = $this->butang('birumuda');

		return array($k,$btn);
	}
#==========================================================================================
}
