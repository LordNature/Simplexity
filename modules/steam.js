//Steam Fetching Gmod Stuff
function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
	document.getElementById( "servername" ).innerHTML = servername;
	// Temp move to PHP
	// document.getElementById( "servermap" ).innerHTML  = mapname;
	document.getElementById( "servergm" ).innerHTML = gamemode;
}