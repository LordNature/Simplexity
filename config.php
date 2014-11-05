<?php
/* Simplexity's Main Configuration
This is the main configuration for Simplexity. Everything in hear modifies the main loading screen.
*/

$config = array(); // This makes $config into an array.
$config['version'] = "v0.1"; // This is the version of Simplexity.
$config['bsversion'] = "3.3.0"; // This is the version of Bootstrap.

/* Misc Section
These configurations don't belong in a group, so they are miscellaneous.
*/
$config['name'] = "Simplexity"; // This is the name of the server.
$config['fontname'] = "Play"; // This is the font name from Google Fonts.
$config['theme'] = "flatly"; // This is the Bootswatch Theme. (Type 'css' for default)


/* Music Section
This allows you to change the music.
*/
$config['music'] = true; // This enables/disables music.
$config['type'] = "youtube"; // This is the type of music. Choices: youtube or ogg
$config['youtubevid'] = ""
$config['volume'] = "30"; // This is the volume of the ogg file.