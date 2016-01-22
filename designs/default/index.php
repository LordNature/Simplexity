<!-- "Transparency is Key" Theme by LordNature -->
<div class="bg-overlay"></div>
<?php if ( $config['backgroundStatic'] == TRUE ) {
	echo "<div class=\"bg-container\"></div>";
} else {
	echo "<link rel=\"stylesheet\" href=\"designs/default/assets/css/slide.min.css\">
				<ul class=\"slideshow\">
					<li><span>Image 01</span><div><h3>" . $config['bgTitles'][1] . "</h3></div></li>
					<li><span>Image 02</span><div><h3>" . $config['bgTitles'][2] . "</h3></div></li>
					<li><span>Image 03</span><div><h3>" . $config['bgTitles'][3] . "</h3></div></li>
					<li><span>Image 04</span><div><h3>" . $config['bgTitles'][1] . "</h3></div></li>
					<li><span>Image 05</span><div><h3>" . $config['bgTitles'][2] . "</h3></div></li>
					<li><span>Image 06</span><div><h3>" . $config['bgTitles'][3] . "</h3></div></li>
				</ul>";
}
?>
<header>
	<?php if ( $config['logoType'] = 1 ) {
		echo "<h1>" . $config['name'] . "</h1>";
	} else {
		echo "<img src=\"nologo.png\">";
	}
	?>
	<?php
	if ( $config['music'] == TRUE ) {
		$uTubeName = youtube_title($uTube);
		if ( !empty($uTubeName) ) {
		echo "<div class=\"list-group-item\">" . $uTubeName . "</div>";
		}
	}
	?>
</header>

<main>
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-4">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title text-center">Rules</h3>
				  </div>
				  <div class="panel-body">
						<?php foreach ($config['rules'] as $key=>$rule) { $num = $key++; ?>
							<div class="list-group-item"><?php echo $rule; ?></div>
						<?php } ?>
				  </div>
				</div>
			</div>
		
			<div class="col-md-4">
				<span class="userFloat fa-stack fa-1x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-user fa-stack-1x fa-inverse"></i>
				</span>
				<img class="img-circle center-block" src="<?php echo $fetch['avatarfull']; ?>">
				<div class="username">
					&nbsp;<?php echo $fetch['personaname']; ?>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title text-center">Server Info</h3>
				  </div>
				  <div class="panel-body">
			  		<img class="img-responsive mapIcon"src="<?php echo $mapicon; ?>">
			  		<div class="mapText">
			  			<div class="list-group-item"><i class="fa fa-map-marker"></i><b class="pull-right" id="servermap"><?php echo $map; ?></b></div>
			  			<div class="list-group-item"><i class="fa fa-gamepad"></i><b class="pull-right" id="servergm">terrortown</b></div>
			  		</div>
				  </div>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="progress progress-striped active">
				<div class="progress-bar" id="loadingBarW"></div>
			</div>
		</div>
		
	</div>
</main>