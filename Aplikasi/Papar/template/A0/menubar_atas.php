<?php 
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
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<ul class="<?php echo $classUL ?>">
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-money fa-2x" aria-hidden="true"></i>
	Student Finance</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>
	Dashboard</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-users fa-2x" aria-hidden="true"></i>
	Staf</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
	Pendaftaran<b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a href="<?php echo URL ?>pelajar/daftarBaru">
		<i class="fa fa-user-plus fa-2x" aria-hidden="true"></i>
		Baru</a></li>
	<li><a href="<?php echo URL ?>pelajar/paparSemua">
		<i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
		Profil</a></li>
	<li><a href="<?php echo URL ?>pelajar/ibubapa">
		<i class="fa fa-female fa-2x" aria-hidden="true"></i>
		<i class="fa fa-male fa-2x" aria-hidden="true"></i>
		Ibubapa</a></li>
	</ul>
</li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
	Ko-kurikulum</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">
	<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>
	Displin</a></li>
</ul>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<?php 
