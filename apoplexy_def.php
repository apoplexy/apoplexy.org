<?php
/* apoplexy.org
 * Copyright (C) The apoplexy Team <info@apoplexy.org>
 *
 * This program is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation, either version 3 of the License, or (at your option)
 * any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program. If not, see [ www.gnu.org/licenses/ ].
 */

error_reporting (-1);
ini_set ('display_errors', 'On');

ini_set ('output_buffering', 'Off');
while (@ob_end_flush());

date_default_timezone_set ('UTC');

ini_set ('php.internal_encoding', 'UTF-8');
mb_internal_encoding ('UTF-8');

/*****************************************************************************/
function HTMLStart ($sTitle)
/*****************************************************************************/
{
print ('
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Always start with the above 3 meta tags. -->
');
if ($sTitle == 'News')
{
	print ('<meta name="description" content="A level editor of Prince of Persia 1 (for DOS and SNES) and 2 (for DOS).">');
}
print ('
<meta name="keywords" content="apoplexy, level editor, Prince of Persia, DOS, SNES, free software, open source, Linux, Windows">
<meta name="author" content="">
<link rel="icon" href="/images/favicon_16x16.png" sizes="16x16" type="image/png">
<link rel="icon" href="/images/favicon_32x32.png" sizes="32x32" type="image/png">
<link rel="alternate" type="application/rss+xml" title="Recent apoplexy News" href="/news_rss.php">
<title>' . $sTitle . ' · apoplexy</title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/gh-fork-ribbon.css">
<link rel="stylesheet" type="text/css" href="/apoplexy.css?v=2">

<!-- JS -->
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<script src="apoplexy.js?v=1"></script>
</head>
<body>
<a target="_blank" href="https://github.com/apoplexy?tab=repositories" class="github-fork-ribbon" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a>
<a href="/"><div style="background-color:#6e88a8; text-align:center; border-bottom:2px solid #000;">
<img src="/images/header_01.png" alt="apoplexy text" style="max-height:100px; max-width:100%;">
</div></a>
<div class="container-fluid">
<div class="row">
<div class="visible-lg col-lg-2"></div>
<div class="col-lg-8 col-md-12 div_main">
');
}
/*****************************************************************************/
function HTMLEnd ()
/*****************************************************************************/
{
print ('
</div>
<div class="visible-lg col-lg-2"></div>
</div>
</div>

<footer class="footer">
<div class="container-fluid">
<div class="row">
<div class="visible-lg col-lg-2"></div>
<div class="col-lg-8 col-md-12" style="padding:0 20px;">
<p class="footertext">&copy; apoplexy Team | <a target="_blank" href="https://validator.w3.org/check?uri=referer"><img src="/images/W3C_HTML5.png" alt="W3C HTML5"></a> | <a target="_blank" href="https://en.wikipedia.org/wiki/Responsive_web_design"><img src="/images/RWD.png" alt="Responsive web design" title="Responsive web design"></a></p>
</div>
<div class="visible-lg col-lg-2"></div>
</div>
</div>
</footer>

</body>
</html>
');
}
/*****************************************************************************/
function Menu ($sActive)
/*****************************************************************************/
{
	$arMenu = array();
	$arMenu['Download'] = '/d/';
	$arMenu['Screenshots'] = '/s/';
	$arMenu['Tutorials'] = '/t/';
	$arMenu['Contact &amp; Links'] = '/c/';

	print ('<div class="container-fluid">');
	print ('<div class="row div_menu">');
	foreach ($arMenu as $key => $value)
	{
		print ('<div class="col-lg-3 col-xs-6"><a href="' . $value .
			'" class="a_menu');
		if ($key == $sActive) { print (' active'); }
		print ('">' . $key . '</a></div>' . "\n");
	}
	print ('</div>');
	print ('</div>');
}
/*****************************************************************************/
?>
