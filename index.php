<?php
/* Simplexity v0.2
Note: Do NOT touch this script unless you are sending a GitHub Pull Request (aka editing the script to fix a bug or add a feature)
You may break something if you do not know what you are doing. -- LordNature <3
*/

require_once( "config.php" );

// This is the theme IF statement.
if ( $config['theme'] == "1" ) {
	$theme = "cerulan";
} else if ( $config['theme'] == "2" ) {
	$theme = "cosmo";
} else if ( $config['theme'] == "3" ) {
	$theme = "cyborg";
} else if ( $config['theme'] == "4" ) {
	$theme = "darkly";
} else if ( $config['theme'] == "5" ) {
	$theme = "flatly";
} else if ( $config['theme'] == "6" ) {
	$theme = "journal";
} else if ( $config['theme'] == "7" ) {
	$theme = "lumen";
} else if ( $config['theme'] == "8" ) {
	$theme = "paper";
} else if ( $config['theme'] == "9" ) {
	$theme = "readable";
} else if ( $config['theme'] == "10" ) {
	$theme = "sandstone";
} else if ( $config['theme'] == "11" ) {
	$theme = "simplex";
} else if ( $config['theme'] == "12" ) {
	$theme = "slate";
} else if ( $config['theme'] == "13" ) {
	$theme = "spacelab";
} else if ( $config['theme'] == "14" ) {
	$theme = "superhero";
} else if ( $config['theme'] == "15" ) {
	$theme = "united";
} else if ( $config['theme'] == "16" ) {
	$theme = "yeti";
} else {
	$theme = "css";
}

?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
		require_once( "modules/cdn.php" );
		?>
		<title>Simplexity <?php echo $config['version']; ?></title>
	</head>
	<body>

		Nothing as of this moment.

	</body>
</html>