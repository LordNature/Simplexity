<!-- Default Design by LordNature -->
<?php
require_once ( "Designs/" . $config['designName'] . "/config.php" );
?>

	<div class="container">

		<!-- Logo -->
		<div class="row" style="margin-top: 5px;">
			<?php if($config['logoType'] == 2){ ?>
			<img src="modules/logo.png" />
			<?php } else { ?>
			<span style="font-size: 100px; font-family: Play; color: #000; float: center;"><?php echo $config['name']; ?></span>
			<?php } ?>
		</div>

		<!-- First Row -->
		<div class="row">
			
			<!-- First Panel -->
			<div class="col-md-3">
				<div class="panel panel-success" style="margin-top: 5px;">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-steam fa-lg"></i> Welcome <?php echo $fetch['personaname']; ?></h3>
					</div>
					<div class="panel-body">
						<img src="<?php echo $fetch['avatarfull'] ?>" class="<?php echo 'img-' . $config['avatarBorder']; ?>" />
					</div>
				</div>
			</div>
			<!-- /First Panel -->

			<!-- Second Panel -->
			<div class="col-md-9">
				<div class="panel panel-danger" style="margin-top: 5px; height: 253px;">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-list fa-lg"></i> Rules</h3>
					</div>
					<div class="panel-body">

						<div class="col-md-4">
							<?php if(isset($config['rules'][0])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][0]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][1])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][1]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][2])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][2]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][3])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][3]; ?></li>
							<?php } ?>
						</div>

						<div class="col-md-4">
							<?php if(isset($config['rules'][4])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][4]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][5])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][5]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][6])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][6]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][7])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][7]; ?></li>
							<?php } ?>
						</div>

						<div class="col-md-4">
							<?php if(isset($config['rules'][8])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][8]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][9])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][9]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][10])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][10]; ?></li>
							<?php } ?>
							<?php if(isset($config['rules'][11])){ ?>
							<li class="list-group-item" align="left"><?php echo $config['rules'][11]; ?></li>
							<?php } ?>
						</div>

					</div>
				</div>
			</div>
			<!-- /Second Panel -->

		</div>
		<!-- /First Row -->

		<!-- Second Row -->
		<div class="row">

			<!-- First Panel -->
			<div class="col-md-6">
				<div class="panel panel-info" >
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-info fa-lg"></i> Info</h3>
					</div>
					<div class="panel-body" style="text-align: left;">
						<!-- Aligned to Left -->
						<img style="float: left;" src="http://placehold.it/184x184">
						<!-- Aligned to Right -->
						<span class="fa-stack fa-2x">
							<i class="fa fa-square-o fa-stack-2x"></i>
							<i class="fa fa-pencil fa-stack-1x"></i>
						</span>
						<span id="servername">Server Name</span><br>
						
						<span class="fa-stack fa-2x">
							<i class="fa fa-square-o fa-stack-2x"></i>
							<i class="fa fa-gamepad fa-stack-1x"></i>
						</span>
						<span id="servergm">Server Gamemode</span><br>

						<span class="fa-stack fa-2x">
							<i class="fa fa-square-o fa-stack-2x"></i>
							<i class="fa fa-map-marker fa-stack-1x"></i>
						</span>
						<span><?php echo $map; ?></span><br>
					</div>
				</div>
			</div>
			<!-- /First Panel -->

			<!-- Second Panel -->
			<div class="col-md-6">
				<div class="panel panel-warning" style="height:225px;">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-cloud-download fa-lg"></i> Downloads</h3>
					</div>
					<div class="panel-body">
						<h1><span class="fa fa-spinner fa-spin"></span> Connecting...</h1>
					</div>
				</div>
			</div>
			<!-- /Second Panel -->

		</div>
		<!-- /Second Row -->

	</div>

	<!--<div style="position: absolute;bottom: 0px;left: 20px;font-size: 12px;min-width: 260px;" class="well well-sm">
		<b><?php echo $fetch['personaname']; ?></b> is listening to "Some Cool Music by CoolGuy".
	</div>-->

<!-- /Second Design -->