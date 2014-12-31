<?php
/* Simplexity v0.2
Note: Do NOT touch this script unless you are sending a GitHub Pull Request (aka editing the script to fix a bug or add a feature)
You may break something if you do not know what you are doing. -- LordNature <3
*/

require_once( "config.php" );

// Fetches SteamID
if ( !isset( $_GET["steamid"] ) ) {
	echo "<span style='color:#FF0000;font-size:50px;font-family:Arial,sans-serif;'>You are not using the correct URL format. Make sure it looks like this:</span>\n<pre><code style='font-size:40px;'>" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . "?steamid=%s&map=%m</code></pre>";
	die();
} else {
	$steamid = $_GET["steamid"];
	$map = $_GET['map'];
}


/* Fetches MapIcon
$mapiconURL = "http://image.www.gametracker.com/images/maps/160x120/garrysmod/" . $map . ".jpg";

if ( !$mapicon = file_get_contents($mapicon) ) {
	$mapicon = file_get_contents( "http://image.www.gametracker.com/images/maps/160x120/nomap.jpg" );
}

$mapicon = base64_encode($mapicon);
$mapicon = 'data: ' . mime_content_type($mapiconURL) . ';base64,' . $imageData;
*/

// Queries the SteamAPIKey
if ($config['SteamAPIKey'] == "") {
	echo "<span style='color: #FF0000; font-size: 50px; font-family: Arial,sans-serif;'>You don't appear to have a Steam API key! Remember to set your API key in the config like this:</span>\n<pre><code style='font-size: 40px;'>\$config['SteamAPIKey'] = \"YOUR STEAM API KEY\";</code></pre>";
	die();
} else {
	$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $config['SteamAPIKey'] . "&steamids=" . $steamid;
}
$js = file_get_contents($url);
$fetcher = json_decode($js, true);
if (isset($fetcher["response"]["players"][0])) {
	$fetch = $fetcher["response"]["players"][0];
} else {
	echo "<span style='color: #FF0000; font-size: 50px; font-family: Arial,sans-serif;'>Error querying Steam API...</span>";
	die();
}

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
		
		<?php
		if ( file_exists( "designs/" . $config['designName'] ) ) { // This checks to see if the design exists.
			require_once( "designs/" . $config['designName'] . "/index.php" ); // Includes the design.
		} else {
			echo "Error 404: File not found."; // Not found? 404 them.
		}
		?>

	</body>
</html>