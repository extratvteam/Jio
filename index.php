<html>

<!-- DO NO EDIT ANYTHING TO WORK PORPELY -->
<!-- © @AvishkarPatil | https://github.com/avipatilpro -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
	<title>JioTV LIVE</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
	<meta name="robots" content="noindex" />
	<link rel="stylesheet" href="data/css/darkmode.min.css">
	<script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js"></script>
</head>

<body>
	<div id="jtvh1">
		<h1>JioTV Live</h1> 
	<a href="https://ttttt.me/Extra_Tv_IPTV_m3u8_link" target="_blank">
	<img src="data/logo.webp" height="50" width="50"><br><span>Telegram</span>
	</a>
</div>
	<div id="content">
		<div class="container">
			<div id="list" class="row">
				<?php
$json = json_decode(file_get_contents('data/channels.json') , true);
foreach ($json['result'] as $channel)
{
    echo '<div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">' . PHP_EOL;
    printf("<a href=\"play.php?c=%s\" class=\"card\">" . PHP_EOL, $channel['target']);
    printf("<img class=\"lazyload\" data-src=\"http://jiotv.catchup.cdn.jio.com/dare_images/images/%s\" style=\"height: 120px\">" . PHP_EOL, $channel['logoUrl']);
    echo '<div class="card-body">' . PHP_EOL;
    printf("<p class=\"card-text\">%s</p>" . PHP_EOL, $channel['channel_name']);
    echo '</div>' . PHP_EOL;
    echo '</a>' . PHP_EOL;
    echo '</div>' . PHP_EOL;
}
?> </div>
		</div>
	</div>
</body>

</html>