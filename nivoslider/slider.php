<?php
	include("nivoslider.php");
	$nivo=new NivoSlider('nivoslider',0,0);		// base path is same directory (618,200 default)

	//$nivo->add_slide(ImagePath,URL,Caption);
	$nivo->add_slide('Gambar_Slider/j1.jpg','','');
	$nivo->add_slide('Gambar_Slider/j2.jpg','','');
	$nivo->add_slide('Gambar_Slider/b1.jpg','','');	
	$nivo->add_slide('Gambar_Slider/b2.jpg','','');
	$nivo->add_slide('Gambar_Slider/m1.jpg','','');
	$nivo->add_slide('Gambar_Slider/s1.jpg','','');
	
?>

<?php $nivo->render_includes(); ?>
<?php $nivo->render_slides() ?>
