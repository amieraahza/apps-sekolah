<?php 
//$nav = 'data-toggle="dropdown" class="dropdown-toggle active"';
$nav = 'class="dropdown-toggle" data-toggle="dropdown"';
$url = URL;
$kini = ( !isset($this->kini) ) ? null : $this->kini;
//<ul class="nav navbar-nav navbar-right">
$classUL = 'nav navbar-nav navbar-right';
$icon['User'] = '<span class="glyphicon glyphicon-user"></span>';
$icon['Barcode'] = '<span class="glyphicon glyphicon-barcode"></span>';
$icon['Filter'] = '<span class="glyphicon glyphicon-filter"></span>';
$icon['Stats'] = '<span class="glyphicon glyphicon-stats"></span>';
?>
<ul class="<?php echo $classUL ?>">
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
	Student Finance</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>
	Dashboard</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-users fa-2x" aria-hidden="true"></i>
	Staf</a></li>
<li><a href="<?php echo URL ?>pelajar/daftarBaru">
	<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
	Pendaftaran</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
	Ko-kurikulum</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>
	Displin</a></li>
</ul>
