<div class="container">
<hr><h1>Ruangtamu - Untuk Pelawat</h1><hr>
<div class="hero-unit">
<?php butangHantar(); ?>
<a class="btn btn-primary btn-large" href="<?php echo URL ?>ruangtamu/logout">Keluar<i class="fa fa-binoculars fa-2x"></i></a>

</div><!-- / class="hero-unit" -->
</div><!-- / class="container" -->

<?php
function butangHantar($_jadual = null, $cariID = 'paid')
{
	$_jadual = 'kursus_php';
	$_jadual = 'msic2008';
	$_jadual = 'mcpa2009_tr2015';
	//$cetakXml = URL . 'dataxml/papar/' . $_jadual . '/' . $cariID;
	$cetakXml = URL . 'dataxml/paparXml/' . $_jadual . '/' . $cariID;
	$cetakJson = URL . 'datajson/papar/' . $_jadual . '/' . $cariID;
	$tempahan = URL . 'tempahan/mohon';
	$_jadual = ''; ?>
	<a target="_blank" href="<?php echo $cetakXml ?>" class="btn btn-warning btn-large">Cetak Xml</a>
	<a target="_blank" href="<?php echo $cetakJson ?>" class="btn btn-success btn-large">Cetak Json</a>
	<a target="_blank" href="<?php echo $tempahan ?>" class="btn btn-info btn-large">Tempahan</a>
	<?php
}