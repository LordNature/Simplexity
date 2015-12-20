var iFilesNeeded = 0;
var iFilesTotal = 0;
var bDownloadingFile = false;

function SetFilesNeeded( iNeeded )
{
	iFilesNeeded = iNeeded;
	RefreshFileBox();
}

function SetFilesTotal( iTotal )
{
	iFilesTotal = iTotal;
	RefreshFileBox();
}

function DownloadingFile( filename )
{
	if ( bDownloadingFile )
	{
		iFilesNeeded = iFilesNeeded - 1;
		RefreshFileBox();
	}

	//document.getElementById( "loadingtext" ).innerHTML = "Downloading " + filename;
	bCanChangeStatus = false;
	setTimeout( "bCanChangeStatus = true;", 1000 );

	bDownloadingFile = true;

}

function SetStatusChanged( status )
{
	if ( bDownloadingFile )
	{
		iFilesNeeded = iFilesNeeded - 1;
		bDownloadingFile = false;
		RefreshFileBox();
	}

	//document.getElementById( "loadingtext" ).innerHTML = status;
	bCanChangeStatus = false;
	setTimeout( "bCanChangeStatus = true;", 1000 );
}

function RefreshFileBox()
{
	//document.getElementById( "files" ).innerHTML = "<img src='download.png' style='position: relative; top: 7px;'> " + iFilesNeeded + " downloads remaining";

	// animate bar
	var perc = Math.floor(iFilesTotal / iFilesNeeded) * 100;
	$('#loadingBarW').animate({ width: perc + "%" }, 100, function() { });

	// show text
	document.getElementById( "loadingbg" ).innerHTML = "Loading " + perc + "%";
}
