<!-- Default Design by LordNature -->
<?php
require_once( "Designs/" . $config['designName'] . "/config.php" );
?>

<section class="design" style="font-family: <?php echo $config['fontname']; ?>">

	<div class="container">

		<!-- Logo -->
		<div class="row" style="margin-top: 5px;">
			<?php 
			if ( $config['logoType'] == 2 ) {
				echo '<img src="modules/logo.png">';
			} else {
				echo '<span style="font-size: 100px; color: #000; text-align: center;">' . $config['name'] . '</span>';
			}
			?>
		</div>

		

</section>
<!-- /Second Design -->