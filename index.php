<?php
ini_set( "error_reporting", 0 );
require_once( "config.php" );

$ranTube = array_rand( $config['youtubeVids'] );
$uTube   = $config['youtubeVids'][$ranTube];


// Gets URL information
if ( !isset( $_GET['steamid'] ) || empty( $_GET['steamid'] ) || !isset( $_GET['map'] ) || empty( $_GET['map'] ) ) {
    die( "<h1 style=\"color: red;\">It seems you do not have the correct URL format. Please try again using:</h1>
                <code style=\"font-size: 24px;\">http://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . "?steamid=%s&map=%m</code>" );
} else {
    $steamid = $_GET['steamid'];
    $map     = $_GET['map'];
}

// Queries Steam API
if ( !isset( $config['steamKey'] ) ) {
    die( "<h1 style=\"color: red;\">You don't appear to have a Steam API key! Remember to set your API key in the config like this:</h1>
                <code style=\"font-size: 24px;\">\$config['steamKey'] = \"XXXXXXXXXXXXX\";</code>" );
} else {
    $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $config['steamKey'] . "&steamids=" . $steamid;
}

$js = file_get_contents( $url );
$fetcher = json_decode( $js, true );
if ( isset( $fetcher["response"]["players"][0] ) ) {
    $fetch = $fetcher["response"]["players"][0];
} else {
    die( "<h1 style=\"color: red;\">Error querying Steam API Key...</span>" );
}

// Fetches Map Information
if ( !( $mapicon = file_get_contents("http://image.www.gametracker.com/images/maps/160x120/garrysmod/" . $map . ".jpg" ) ) )
    $mapicon = file_get_contents( "http://image.www.gametracker.com/images/maps/160x120/nomap.jpg" );

$mapicon = base64_encode( $mapicon );
$mapicon = 'data:image/jpeg;base64,' . $mapicon;

// Youtube Title Function
function youtube_title( $id ) {
    global $config; // fuck your "bad practice" rules
    $videoTitle = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=" . $id . "&key=" . $config['youtubeKey'] . "&fields=items(id,snippet(title),statistics)&part=snippet,statistics");
    
    if ( $videoTitle ) {
        $json = json_decode( $videoTitle, true );
        
        return $json['items'][0]['snippet']['title'];
    } else {
        return false;
    }
}

// too prevent death from sound
if ( $config['volume'] > 15) {
	$volume = "15";
} else {
	$volume = $config['volume'];
}
?><html>
    <head>
        <meta charset="UTF-8">
        <title>Simplexity <?php echo $config['version']; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/<?php echo $config['bsVersion'] . "/" . $config['theme']; ?>/bootstrap.min.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=<?php echo $config['fontName']; ?>:400,700">
        <link rel="stylesheet" href="<?php echo "designs/" . $config['designName'] . "/assets/css/main.min.css" ?>">
    </head>
    <body style="font-family: <?php echo $config['fontName']; ?>">
        <?php
            if ( file_exists( "designs/" . $config['designName'] ) ) {
                require_once( "designs/" . $config['designName'] . "/index.php" );
            } else {
                die( "<h1 class=\"text-center\">Error 404</h1><h5 class=\"text-center\">Please set \$config['designName'] to a valid theme.</h5>" );
            }
        ?>
        
        <!-- Audio -->
        <?php if ( $config['music'] == TRUE ) { ?>
            <div id="player"></div>
            <script>
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/iframe_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                
                var player;
                function onYouTubeIframeAPIReady() {
                    player = new YT.Player('player', {
                        height: '0',
                        width: '0',
                        videoId: '<?php echo $uTube; ?>',
                        events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                        }
                    });
                }
        
                function onPlayerReady(event) {
                    event.target.playVideo();
                    event.target.setVolume(<?php echo $volume ?>);
                }
                
            function onPlayerStateChange(event) {
              if (event.data == YT.PlayerState.ENDED) {
                        player.playVideo();
              }
            }
            </script>
        <?php } ?>
        
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/<?php echo $config['bsVersion']; ?>/js/bootstrap.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootlint/0.12.0/bootlint.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    </body>
</html>