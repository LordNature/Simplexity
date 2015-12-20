<?php
/* Simplexity's Main Configuration
 * This is for modifying the default theme.
 * DISCLAIMER: If this script was SOLD to you, you were scammed. Attempt getting your money back. This is FREE on GitHub <3
 */
$config = array();
$config['version'] = "v3.3";
$config['bsVersion'] = "3.3.5";
 
/* Miscellanous
 * These configurations don't belong in a group, so they are miscellaneous.
 */
$config['name'] = "Simplexity ALPHA"; // This is the server's name.
//$config['logoType'] = 1; // This is the type of logo. 1 being the text and 2 being the image. Image directory depends on the theme developer.
$config['steamKey'] = "GG LEFT API KEY"; // Steam API Key @ http://steamcommunity.com/dev/apikey
$config['youtubeKey'] = "GG LEFT API KEY"; // Not required unless you want utube title to display Youtube API Key @ https://www.youtube.com/watch?v=9fNP_fJsxX0

/* Aesthetics Section
 * This allows to change the main 'themes' or 'designs' (layouts) of Simplexity.
 */
$config['fontName']   = "Play"; // This is the font name from Google Fonts. Find more @ https://www.google.com/fonts
$config['theme'] = "flatly"; // Bootswatch theme. Choose from one of the themes @ https://bootswatch.com/
$config['designName'] = "default"; // This is the design (aka layout) for Simplexity. (Hint: The name of the folder.)
$config['backgroundStatic'] = FALSE; // TRUE means you will have a static background (edit bg1.jpg). FALSE means you will have a slideshow. (edit bg1.jpg-bg6.jpg).
$config['bgTitles'] = array();
$config['bgTitles'][1] = "Custom";
$config['bgTitles'][2] = "Friendly";
$config['bgTitles'][3] = "No RDM";

//$config['holiday'] = true; N/A

/* Rules
 * This allows you to change the rules IF the design supports it. Even then not all rules will be supported.
 */
$config['rules'] = array();
$config['rules'][0] = "Please obey the Staff.";
$config['rules'][1] = "Do not RDM.";
$config['rules'][2] = "Do not camp in T rooms for over 2 minutes.";
$config['rules'][3] = "Do not harass or bully others.";
$config['rules'][4] = "Do not be annoying.";
$config['rules'][5] = "Do not propkill.";
$config['rules'][6] = "Do not metagame.";
$config['rules'][7] = "Do not hack or exploit.";
$config['rules'][8] = "Do not micspam.";
$config['rules'][9] = "Do not kill AFK players.";

/* Music Section
 * This allows you to change the music.
 */
$config['music'] = true; // This enables/disables music.
//$config['type'] = "youtube"; // This is the type of music. Choices: youtube, ogg, or soundcloud

// Add YouTube IDs to the list below. Make sure you follow the same format as is there already (e.g. 'one', 'two', 'three')
$config['youtubeVids'] = array(
		'I36sQtb9oiU',
		'tPmwiQaGauI',
		'aDdO2PHo7Fc',
		'GpLDMsYCoAs',
		'Tg1-7yL2kSg',
		'rGtlkStatOM',
		'IhchfhxvPKI',
		'Q4CyvM0HF6M',
		'QuR-s8IkhzU',
		'goRGKll_zE0',
		'AybGJn52nxo',
		'-Cqit7G4O-E',
		'vViSeEUGM9g',
		'1-0-4HqyvXE'
	);
$config['volume'] = "10"; // This is the volume of youtube songs.
?>
