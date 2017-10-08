<?php 
//include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML_Table();
//$classTable = 'excel';
$classTable = 'table table-condensed';
$header = null;
?>
<div class="container">
<!-- ********************************************************************* -->
	<div class="row">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['Kelas'], 'Kelas', 
	$pilih = 1, $classTable); echo "\n\t";
?>	<!-- ********************************************************************* -->
				</div>
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['Summary'], 'Summary',
	$pilih = '4_1', $classTable, null, 'summary'); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
			</div>
		</div>
	</div>
<!-- ********************************************************************* -->
</div><!-- / class="container" -->

<div id="container" style="min-width: 500px; height: 500px; margin: 0 auto"></div>

<?php
/*# Semak data $this->senarai
echo '<pre>$this->senarai:<br>'; 
print_r($this->senarai);
echo '</pre>|';//*/
