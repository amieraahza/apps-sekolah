<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html_Table
{
#==========================================================================================
	public static function papar_jadual($row, $myTable, $pilih, $classTable, $header = null)
	{# mula untuk kod php+html 
		//echo 'mahu pilih apa?|';
		if ($pilih == '1'):
			Html_Table::table_gaya_1($classTable, $myTable, $row);
		elseif ($pilih == '1_header'):
			Html_Table::table_gaya_1_header($classTable, $myTable, $row, $header);
		elseif ($pilih == '1_link'): 
			Html_Table::table_gaya_1_link($classTable, $myTable, $row);
		elseif ($pilih == '2'): 
			Html_Table::table_gaya_2($classTable, $myTable, $row);
		elseif ($pilih == '3'): 
			Html_Table::table_gaya_3($classTable, $myTable, $row);
		elseif ($pilih == '4'):  
			Html_Table::table_gaya_4($classTable, $myTable, $row);
		elseif ($pilih == '4_1'):  
			Html_Table::table_gaya_4_1($classTable, $myTable, $row);
		elseif ($pilih == '5'): 
			Html_Table::table_gaya_5($classTable, $myTable, $row);
		endif;
	}
#------------------------------------------------------------------------------------------
	public static function table_gaya_1($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="<?php echo $classTable ?>" id="example">
			<?php $printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{ $printed_headers = Html_Table::tajukjadual_1(
				$printed_headers, $row, $kira); # cetak tajuk hanya sekali sahaja:
			#- cetak hasil $data --------------------------------------------
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
			<?php echo $header; # bina tajuk khas atas medan sedia ada
			$printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{ $printed_headers = Html_Table::tajukjadual_1(
				$printed_headers, $row, $kira); # cetak tajuk hanya sekali sahaja:
			#- cetak hasil $data --------------------------------------------
			?><tbody><tr>
			<td><?php echo $kira+1 ?></td>	
			<?php foreach ( $row[$kira] as $key=>$data ) : 
				Html_Url::pilihURL($key, $data, $myTable); 
				endforeach; ?></tr></tbody>
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
			{ $printed_headers = Html_Table::tajukjadual_1(
				$printed_headers, $row, $kira); # cetak tajuk hanya sekali sahaja:

			#- cetak hasil $data --------------------------------------------
			?><tbody><tr>
			<td><?php echo $kira+1 ?></td>	
			<?php foreach ( $row[$kira] as $key=>$data ) : 
				Html_Url::pilihURL($key, $data, $myTable); 
				endforeach; ?></tr></tbody>
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
			{	# cetak tajuk hanya sekali sahaja:
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
	public static function table_gaya_3($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
		for ($kira=0; $kira < count($row); $kira++)
		{// ulang untuk $kira++ ?>
		<table border="1" class="<?php echo $classTable ?>" id="example"><tbody>
		<?php foreach ( $row[$kira] as $key=>$data ):?>
		<tr><td><?php echo huruf('Besar_Depan',$key) 
			?></td><td><?php echo $data ?></td></tr>
		<?php endforeach; ?>
		</tbody></table><?php
		}# ulang untuk $kira++ 
	}//////////////////////////////////////////////////////////////////////////////////////////////////////////
#------------------------------------------------------------------------------------------
	public static function table_gaya_4($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><table class="<?php echo $classTable ?>">
			<?php $printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{ $printed_headers = Html_Table::tajukjadual_0(
				$printed_headers, $row, $kira); # cetak tajuk hanya sekali sahaja:
			# cetak hasil $data --------------------------------------------
			?><tbody><tr><?php 
				foreach ( $row[$kira] as $key=>$data ) : ?>
			<td><?php echo $data ?></td><?php 
				endforeach; ?>  
			</tr></tbody><?php
			}#-----------------------------------------------------------------
			?></table><?php echo "\r\t\t\t"; 
	}//////////////////////////////////////////////////////////////////////////////////////////////////////////
#------------------------------------------------------------------------------------------
	public static function table_gaya_4_1($classTable = 'excel', $myTable, $row)
	{//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><table class="<?php echo $classTable ?>">
			<?php $printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{ $printed_headers = Html_Table::tajukjadual_0(
				$printed_headers, $row, $kira); # cetak tajuk hanya sekali sahaja:
			# cetak hasil $data --------------------------------------------
			?><tbody><tr><?php 
				foreach ( $row[$kira] as $key=>$data ) :
					Html_Url::pilihURL($key, $data);
				endforeach; ?>  
			</tr></tbody><?php echo "\n\t\t\t"; 
			}#-----------------------------------------------------------------
			?></table><?php
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
			{	# cetak tajuk hanya sekali sahaja:
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
			#--- cetak hasil $data ------------------------------------------
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
	public static function tajukjadual_0($printed_headers, $row, $kira)
	{# cetak tajuk hanya sekali sahaja:
				if ( !$printed_headers ) : ?><thead><tr>
			<?php foreach ( array_keys($row[$kira]) as $tajuk ) :
			?><th><?php echo $tajuk ?></th><?php endforeach; 
			?></tr></thead>
			<?php	$printed_headers = true; 
				endif;

			return $printed_headers;
	}
#------------------------------------------------------------------------------------------
	public static function tajukjadual_1($printed_headers, $row, $kira)
	{# cetak tajuk hanya sekali sahaja: 
				if ( !$printed_headers ) : ?><thead><tr>
			<th>#</th><?php foreach ( array_keys($row[$kira]) as $tajuk ) :
			?><th><?php echo $tajuk ?></th>
			<?php endforeach; ?></tr></thead>
			<?php	$printed_headers = true; 
				endif;

			return $printed_headers;
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
