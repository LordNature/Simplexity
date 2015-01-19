How designs work
================

You need to download the designTemplate.zip from Kasaract.com - NOT DONE.

Things Needed:
Folder must be named something.
Theme must be in index.php.
Theme 'can' have a config.php.
All included files must be in the theme's folder unless using a CDN.

Make sure to include files like so:
```PHP
<?php
require_once ( "Designs/" . $config['designName'] . "/config.php" );
?>
```
```HTML
<img src="Designs/<?php echo $config['designName']; ?>/main.png" />
```