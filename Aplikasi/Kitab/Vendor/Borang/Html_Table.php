<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html_Table
{
#==========================================================================================
	public static function papar_jadual($row, $myTable, $pilih, $classTable, $header)
	{# mula untuk kod php+html 
		//echo 'mahu pilih apa?|';
		if ($pilih == '1'):
			//echo 'pilih = ' . $pilih . '|';
			//Html_Table::table_gaya_1($classTable, $myTable, $row);
		elseif ($pilih == '1_header'):
			echo 'pilih = ' . $pilih . '|';
			Html_Table::table_gaya_1_header($classTable, $myTable, $row, $header);
		elseif ($pilih == '1_link'): 
			//echo 'pilih = ' . $pilih . '|';
			Html_Table::table_gaya_1_link($classTable, $myTable, $row);
		elseif ($pilih == '2'): 
			//echo 'pilih = ' . $pilih . '|';
			Html_Table::table_gaya_2($classTable, $myTable, $row);
		elseif ($pilih == '3'): 
			//echo 'pilih = ' . $pilih . '|';
			Html_Table::table_gaya_3($classTable, $myTable, $row);
		elseif ($pilih == '4'):  
			//echo 'pilih = ' . $pilih . '|';
			Html_Table::table_gaya_4($classTable, $myTable, $row);
		elseif ($pilih == '5'): 
			//echo 'pilih = ' . $pilih . '|';
			Html_Table::table_gaya_5($classTable, $myTable, $row);
		endif;
	}
	# tamat untuk kod php+html 
#------------------------------------------------------------------------------------------
	public static function table_gaya_1($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="<?php echo $classTable ?>" id="example">
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
			?></table><?php echo "\r";
	}//////////////////////////////////////////////////////////////////////////////////////////////////////////
#------------------------------------------------------------------------------------------
	public static function table_gaya_1_header($classTable = 'excel', $myTable, $row, $header)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="<?php echo $classTable ?>">
			<?php echo $header; $printed_headers = false; # mula bina jadual
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
			?><td><?php echo $data; //Html_Url::pilihURL($key, $data, $myTable) ?></td>
			<?php endforeach; ?></tr></tbody>
			<?php
			}#-----------------------------------------------------------------
			?></table><?php echo "\r" ?><!-- Jadual <?php echo $myTable ?> --><?php
	}//////////////////////////////////////////////////////////////////////////////////////////////////////////
#------------------------------------------------------------------------------------------
	public static function table_gaya_1_link($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="<?php echo $classTable ?>" id="example">
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
			?><td><?php Html_Url::pilihURL($key, $data, $myTable) ?></td>
			<?php endforeach; ?></tr></tbody>
			<?php
			}#-----------------------------------------------------------------
			?></table><?php echo "\r" ?><!-- Jadual <?php echo $myTable ?> --><?php
	}//////////////////////////////////////////////////////////////////////////////////////////////////////////
#------------------------------------------------------------------------------------------
	public static function table_gaya_2($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="<?php echo $classTable ?>" id="example"><?php
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
				{	?><td><?php echo $data ?></td><?php	} 
				?></tr></tbody>
			<?php
			}#-----------------------------------------------------------------
			?></table><!-- Jadual <?php echo $myTable ?> --><?php
	}//////////////////////////////////////////////////////////////////////////////////////////////////////////
#------------------------------------------------------------------------------------------
	public static function  table_gaya_3($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?>  --><?php
			for ($kira=0; $kira < count($row); $kira++)
			{// ulang untuk $kira++ ?>
			<table border="1" class="<?php echo $classTable ?>" id="example">
			<tbody><?php foreach ( $row[$kira] as $key=>$data ):?>
			<tr><td><?php echo $key ?></td><td><?php echo $data ?></td></tr>
			<?php endforeach; ?></tbody>
			</table>
			<?php
			}# ulang untuk $kira++ ?>
			<!-- Jadual <?php echo $myTable ?> --><?php
	}//////////////////////////////////////////////////////////////////////////////////////////////////////////
#------------------------------------------------------------------------------------------
	public static function  table_gaya_4($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><table class="<?php echo $classTable ?>">
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
			</tr></tbody><?php
			}#-----------------------------------------------------------------?>
			</table><?php echo "\r\t\t\t"; 
	}//////////////////////////////////////////////////////////////////////////////////////////////////////////
#------------------------------------------------------------------------------------------
	public static function table_gaya_5($classTable = 'excel', $myTable, $row)
	{	# nilai akan dipulangkan balik
			$output  = null; 
			$output .= '<table border="1" class="' . $classTable . '" id="example">
			<thead><tr><th><strong>Jadual ' . $myTable . '
			</strong></th></tr></thead>';

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
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}