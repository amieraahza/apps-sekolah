<?php 
include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML(); ?>
<?php 

foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 )
		echo '';
	else
	{
?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<h2><?php echo $myTable ?></h2>
<?php include 'papar_jadual_tambah.php'; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} # if ( count($row)==0 )
} //*/
?>