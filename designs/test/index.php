<!-- Default Material Design Theme -->
<div class="bg-overlay"></div>
<?php if ( $config['holiday'] ) {
	echo "<div class=\"bg-container\" style\"background: url(\"../img/ea1.jpg\")\"></div>";
} else {
	echo "<div class=\"bg-container\"></div>";
}
?>
<div class="container-fluid">
	<header>
		<?php if ( $config['logoType'] = 1 ) {
			echo "<h1>" . $config['name'] . "</h1>";
		} else {
			echo "<img src=\"nologo.png\">";
		}
		?>
	</header>
	<main>
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-3">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title text-center"><?php echo $fetch['personaname']; ?></h3>
					  </div>
					  <div class="panel-body text-center">
					    <img class="img-circle center-block" src="<?php echo $fetch['avatarfull']; ?>">
					    
					    <b><?php echo $steamid; ?></b>
					  </div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title text-center">Description</h3>
					  </div>
					  <div class="panel-body">
					    <img class="img-responsive" src="<?php echo $mapImage; ?>">
					  </div>
					</div>
				</div>
		
			</div>
			
		</div>
	</main>
</div>