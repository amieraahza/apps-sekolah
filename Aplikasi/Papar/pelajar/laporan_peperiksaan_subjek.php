<?php 
//include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML_Table();
//$classTable = 'excel';
$classTable = 'table table-condensed';
$header = null;
?>

<div class="tabbable tabs-top">
	<ul class="nav nav-tabs putih">
		<li><a href="#kelas" data-toggle="tab">
		<span class="badge badge-success">kelas</span>
		</a></li>
		<li><a href="#graf" data-toggle="tab">
		<span class="badge badge-success">graf</span>
		</a></li>
		<li><a href="#graf2" data-toggle="tab">
		<span class="badge badge-success">graf2</span>
		</a></li>
		<li><a href="#graf3" data-toggle="tab">
		<span class="badge badge-success">graf3</span>
		</a></li>
		<li><a href="#graf4" data-toggle="tab">
		<span class="badge badge-success">graf4</span>
		</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane" id="kelas">
<!-- ********************************************************************* -->
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['kelas'], 'Kelas', 
	$pilih = 1, $classTable, null, 'kelas'); echo "\n\t";
?>	<!-- ********************************************************************* -->
				</div>
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['datatable'], 'datatable',
	$pilih = '4_1', $classTable, null, 'datatable'); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
			</div>
		</div>
	</div>
</div><!-- / class="container" -->
<!-- ********************************************************************* -->
		</div>
		<div class="tab-pane" id="graf">
<!-- ********************************************************************* -->
<div id="container" style="min-width: 500px; height: 500px; margin: 0 auto"></div>
<!-- ********************************************************************* -->
		</div>
		<div class="tab-pane" id="graf2">
<!-- ********************************************************************* -->
<div id="kontena2" style="min-width: 500px; height: 500px; margin: 0 auto"></div>
<!-- ********************************************************************* -->
		</div>
		<div class="tab-pane" id="graf3">
<!-- ********************************************************************* -->
<div id="kontena3" style="min-width: 500px; height: 500px; margin: 0 auto"></div>
<!-- ********************************************************************* -->
		</div>
		<div class="tab-pane" id="graf4">
<!-- ********************************************************************* -->
<div id="kontena4" style="min-width: 500px; height: 500px; margin: 0 auto"></div>
<!-- ********************************************************************* -->
		</div>
	</div><!-- class="tab-content" -->
</div><!-- /tabbable -->
<?php
/*# Semak data $this->senarai
echo '<pre>$this->senarai:<br>'; 
print_r($this->senarai);
echo '</pre>|';//*/
