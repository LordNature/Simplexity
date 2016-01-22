Simplexity
==========

![GIF](https://scr.metagala.xyz/1453436893.jpg)

Simplexity is a __simple__, yet __stylish__ loading screen.
This loading screen has the capability of allowing others to create designs for it.
The 'designs' are layouts of the information.

Current build is __[v3.3.1](https://github.com/LordNature/Simplexity/releases/tag/v3.3.1-alpha)__(stable).  
We have a [Trello](https://trello.com/b/pXQcpmIa/simplexity)  
Send recommendations [here](https://github.com/LordNature/Simplexity/issues/new).

## Features

* Slideshow w/ changing images
* Different designs
* Built on the responsive framework [Bootstrap](https://getbootstrap.com)
* Randomized youtube playlist w/ automatic fetching of title
* Gametracker map fetcher for map image

## Requires

* Website w/ PHP5 support
* Human brain

## How-to Install

* Install the loading screen on webhost. I highly recommend finding a free host if you plan on using only this on the webhost.
* Get a [Steam API Key](https://steamcommunity.com/dev/apikey) and [Youtube API Key](https://console.developers.google.com/). _Youtube API Key is optional_
* Substitute information as stated in config.php
* Edit your server config and set sv_loadingurl to where the loading screen is hosted. eg: https://{DOMAIN}/{DIRECTORY}/?steamid=%s&map=%m
* Change the Garry's Mod level to apply the config updates
* ... and that's it!