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

include ('../apoplexy_def.php');

$GLOBALS['last_release'] = 19;

/*** $iRelease ***/
$iRelease = 0;
if (isset ($_GET['r']))
{
	$iRelease = intval ($_GET['r']);
	if (($iRelease < 1) || ($iRelease > $GLOBALS['last_release']))
		{ $iRelease = 0; }
}

if ($iRelease == 0)
{
	HTMLStart ('Download');
	Menu ('Download');
	print ('<h1>Download apoplexy 3.1</h1>');
} else {
	SetRelease ($iRelease);
	HTMLStart ($GLOBALS['rtitleh1']);
	Menu ($GLOBALS['rtitleh1']);
	print ('<h1>' . $GLOBALS['rtitleh1'] . '</h1>');
}
print ('<div class="div_content">');

/*****************************************************************************/
function SetRelease ($iRelease)
/*****************************************************************************/
{
	switch ($iRelease)
	{
		case 19:
			$sVersion = '3.1';
			$GLOBALS['rdate'] = '2018-02-07';
$GLOBALS['rchanges'] = 'Back from \'retirement\' to implement two frequently requested features.
+ When editing PoP1 for DOS, a separate Map window can now be opened ("m"), that displays a movable and zoomable abstract representation of the entire level, which highlights related tiles when hovering over buttons, gates, exits left, loose tiles, etc.
+ PoP1 for DOS guard details can now be modified via the EXE screen (F2). This makes it easy to, for example, use guards with different amounts of hit points in the same level.
* Minor bug fixes.';
			break;
		case 18:
			$sVersion = '3.0';
			$GLOBALS['rdate'] = '2016-02-04';
$GLOBALS['rchanges'] = 'This is the - or at least my - final version of apoplexy. It\'s time to move on. I enjoyed working on the program and I\'ve learned a lot through the years. This program is free software (libre, also gratis), so feel free to redistribute and/or modify it without my permission.';
			break;
		case 17:
			$sVersion = '3.0 RC3';
			$GLOBALS['rdate'] = '2016-01-15';
$GLOBALS['rchanges'] = '* Updated SDLPoP support to v1.16.
* SNES playtesting now also skips the main menu.
* Slightly changed the Compress() function.
* The Windows port is now also 64-bit.
- Removed the "AMD64 32-bit" SDLPoP text.';
			break;
		case 16:
			$sVersion = '3.0 RC2';
			$GLOBALS['rdate'] = '2015-12-21';
$GLOBALS['rchanges'] = '+ Added support for SDLPoP (v1.16b4).
* Fixed two minor bugs (teleport marker, sprite zooming).';
			break;
		case 15:
			$sVersion = '3.0 RC1';
			$GLOBALS['rdate'] = '2015-12-13';
$GLOBALS['rchanges'] = '+ The program can now also edit PoP1 for SNES levels!
* Minor bug fixes.
This is a code complete release candidate. Version 3.0 will be released on February 4th, 2016. If you run into any bugs or defects with this release candidate, please report them before February.';
			break;
		case 14:
			$sVersion = '2.7';
			$GLOBALS['rdate'] = '2015-08-21';
$GLOBALS['rchanges'] = '+ Now auto-enables all PoP1 resources, if necessary (and possible).
+ For PoP1, the "0"-"9" keys are now shortcuts for various tiles.
+ The "i" key now toggles tile information.
* Improved several of the PoP1 spike images.
* Cleaned up the code a bit (e.g. simplified PreLoadSet()).
* Less #define\'s are used for the calculation of tile offsets.
* Changed various iEditPoP if/else statements to switches.';
			break;
		case 13:
			$sVersion = '2.6b';
			$GLOBALS['rdate'] = '2014-09-17';
$GLOBALS['rchanges'] = '+ Expanded the screen where PoP1\'s PRINCE.EXE can be changed.[1]
* Better handling of PoP2 (static and dynamic) guards with unexpected values.
[1] Users can now also change whether the prince has his sword (default, never, always), where the prince wins (level, room), and the environments and enemy resources used for each level.';
			break;
		case 12:
			$sVersion = '2.5.1';
			$GLOBALS['rdate'] = '2014-09-13';
$GLOBALS['rchanges'] = '* Changed PoP2\'s "spawn if guard(s) alive" to "prince row".';
			break;
		case 11:
			$sVersion = '2.5';
			$GLOBALS['rdate'] = '2014-08-11';
$GLOBALS['rchanges'] = '+ Added (optional, togglable) fullscreen support.
+ Added a screen where PoP1\'s PRINCE.EXE can be changed.
* Fixed a minor event-related bug.';
			break;
		case 10:
			$sVersion = '2.4';
			$GLOBALS['rdate'] = '2014-08-01';
$GLOBALS['rchanges'] = '+ Levels can now also be imported from XML.
* Swapped the guard directions in the XML output.';
			break;
		case 9:
			$sVersion = '2.3.1';
			$GLOBALS['rdate'] = '2014-07-30';
$GLOBALS['rchanges'] = '* Fixed the XML output format (empty-element tags).';
			break;
		case 8:
			$sVersion = '2.3';
			$GLOBALS['rdate'] = '2014-07-06';
$GLOBALS['rchanges'] = '+ Added (Xbox) game controller support.
* Fixed two minor bugs (PoP1 guard selection typo, black rectangle scaling).
* Included executable now 64-bit.';
			break;
		case 7:
			$sVersion = '2.2b';
			$GLOBALS['rdate'] = '2014-06-01';
$GLOBALS['rchanges'] = '* Workaround for SDL bug #2274.
* Freeing message surfaces to prevent memory usage increase.
* When zoomed, properly displays large ruins and temple backgrounds.
* Fixed a mouse with interface buttons interaction problem.';
			break;
		case 6:
			$sVersion = '2.1b';
			$GLOBALS['rdate'] = '2014-02-01';
$GLOBALS['rchanges'] = '* Migrated from SDL 1.2 to 2.0.
+ Added several additional gcc warning options in the Makefile.
+ The cursor now changes on the loading screen and when hovering over web links.
* Improved the code quite a bit after receiving new gcc warnings (see above) and after using cppcheck and clang for the first time.';
			break;
		case 5:
			$sVersion = '2.0';
			$GLOBALS['rdate'] = '2013-12-28';
$GLOBALS['rchanges'] = '+ The program can now also edit Prince of Persia 2 levels!
+ Some tiles in the editor are now animated.
+ Better loading screen, including animations.
+ Now displays a warning when hovering over marked tiles.
* Moved the images to various subdirectories.';
			break;
		case 4:
			$sVersion = '1.9b';
			$GLOBALS['rdate'] = '2013-09-20';
$GLOBALS['rchanges'] = '+ Added a screen that can be used to place custom tiles.
+ It\'s now possible to double the interface size.
+ Users can now copy and paste rooms, and flip rooms (horizontally and vertically).
+ Levels can now also be exported to XML.
+ The events screen now displays the target tile.
+ It\'s now possible to sprinkle levels with random decorations.
+ Added a simple help screen.
+ Added two extra guard levels.
+ A LEVELS.BAK file is now being created before saving a level.
+ The application can now immediately display any level on startup.
+ It\'s now possible to switch between dungeon and palace environments.
* Several aesthetic and interaction improvements.[1]
* Clearing a room now also removes the guard.
* It\'s now easier to re-use the last used tile.
* The scroll wheel can now also be used for horizontal scrolling.
* Immediately playtesting specific levels now also works with non-default cheat codes.
* Randomize no longer uses - now marked - distorting tiles.
* It\'s now easier to decrease room numbers on the broken room links screen.
* Fixed the image of one of the palace tiles.
[1] Displays the room under the current room. If there is no room to the left, displays a wall. Better response to the selection of persons. Key repeat on. Less unnecessary screen updates.';
			break;
		case 3:
			$sVersion = '1.2b';
			$GLOBALS['rdate'] = '2012-07-16';
$GLOBALS['rchanges'] = '+ Added a screen that can be used to (deliberately) create, change and fix so-called broken room links.
* Fixed a minor bug that sometimes caused unintentional changes to events.';
			break;
		case 2:
			$sVersion = '1.1';
			$GLOBALS['rdate'] = '2011-01-30';
$GLOBALS['rchanges'] = '+ All actions can now also be performed with the keyboard. The keyboard shortcuts are listed in docs/keys.txt, and they\'re also shown when running the application. In order to ensure consistency, the "h/j/u/n keys" are not used on the main screen.
+ On the room links screen, a room that is being moved is now marked with red stripes.
+ Added seven additional interface sound effects.
+ The application now warns the user about unsaved changes.
* Changed popup.wav (3.7MB to 6kB) in order to decrease the total size of the package.
* There\'s now always a tile selected, to allow for faster switching between mouse and keyboard.
* Cleaned up the code a bit, mostly by adding more functions.
* The Princed Resources editor has been moved into the pr/ directory.';
			break;
		case 1:
			$sVersion = '1.0b';
			$GLOBALS['rdate'] = '2008-04-03';
$GLOBALS['rchanges'] = '+ Initial release.';
			break;
	}
	$GLOBALS['rtitleh1'] = 'ChangeLog Version ' . $sVersion;
}
/*****************************************************************************/
function DownAndNews ()
/*****************************************************************************/
{
print ('
<span style="display:block; float:left; width:calc(50% - 10px); text-align:center; margin-right:10px;">
<span style="display:block; margin:16px 0;">for Windows</span>
<img src="/images/Windows.png" alt="Windows">
<a href="/releases/apoplexy-3.1-win64.zip" class="download">Download Now</a>
</span>
<span style="display:block; float:left; width:calc(50% - 10px); text-align:center; margin-left:10px;">
<span style="display:block; margin:16px 0;">for GNU/Linux</span>
<img src="/images/GNULinux.png" alt="GNU/Linux">
<a href="/releases/apoplexy-3.1.tar.gz" class="download">Download Now</a>
</span>
<span style="display:block; clear:both;"></span>
<span style="display:block; text-align:center;">A <a target="_blank" href="/ChangeLog.txt">changelog</a> is available.</span>

<h2>News</h2>
');

	$xml = simplexml_load_file ('../news.xml',
		'SimpleXMLElement', LIBXML_NOCDATA);
	$arXML = (array)$xml;
	foreach ($arXML['item'] as $key => $value)
	{
		$sDate = strval ($value['date']);
		$sDateH = date ('F j, Y', strtotime ($sDate));
		$sText = strval ($value->html);
		print ('<span id="' . $sDate . '" style="font-size:20px;">' . $sDateH . '</span>' . "\n");
		print ('<p>' . $sText . '</p>' . "\n");
	}
}
/*****************************************************************************/
function Release ($iRelease)
/*****************************************************************************/
{
	$sDateH = date ('F j, Y', strtotime ($GLOBALS['rdate']));
	print ('<p style="font-size:20px;"><a href="/d/">&laquo; Back</a></p>');
	print ('<h2>' . $GLOBALS['rtitleh1'] . '</h2>');
	print ('<img src="/images/apoplexy_32x32.png" style="float:left; padding:10px;">');
	print ('<span style="display:block; font-size:16px; margin-bottom:20px;">');
	print ('Released by <a target="_blank" href="https://www.popot.org/profile.php?user_id=1">Norbert</a> on ' . $sDateH . '.');
	print ('<br>');
	print ('<span class="italic">Thoughts? E-mail <span class="rtl">gro.yxelpopa@ofni</span> or leave a comment on our <a target="_blank" href="http://forum.princed.org/viewforum.php?f=112">forum</a>.</span>');
	print ('</span>');
	print ('<span class="changes">' . nl2br ($GLOBALS['rchanges']) . '</span>');
}
/*****************************************************************************/
?>

<div class="container-fluid">
<div class="row">
<div class="col-sm-6">
<p style="text-align:justify;">A level editor of <span style="font-style:italic;">Prince of Persia</span> 1 (for DOS and SNES) and 2 (for DOS). This program is free software: you can redistribute it and/or modify it under the terms of the <a target="_blank" href="https://www.gnu.org/licenses/gpl-3.0.en.html">GNU General Public License</a> as published by the <a target="_blank" href="https://www.fsf.org/">Free Software Foundation</a>, either version 3 of the License, or (at your option) any later version.</p>
<?php
	if ($iRelease != 0)
	{
		Release ($iRelease);
	} else {
		DownAndNews();
	}
?>
</div>
<div class="col-sm-6">

<div class="polaroid rotate_right">
	<a target="_blank" href="/screenshots/apoplexy-3.1_PoP1_DOS.png">
		<img src="/screenshots/apoplexy-3.1_PoP1_DOS.png" alt="PoP1 for DOS">
	</a>
	<p class="caption"><i>Prince of Persia 1</i> for DOS</p>
</div>
<span style="display:block; clear:both;"></span>
<div class="polaroid rotate_left">
	<a target="_blank" href="/screenshots/apoplexy-3.1_PoP2_DOS.png">
		<img src="/screenshots/apoplexy-3.1_PoP2_DOS.png" alt="PoP2 for DOS">
	</a>
	<p class="caption" style="text-align:right;"><i>Prince of Persia 2</i> for DOS</p>
</div>
<span style="display:block; clear:both;"></span>
<div class="polaroid rotate_right">
	<a target="_blank" href="/screenshots/apoplexy-3.1_PoP1_SNES.png">
		<img src="/screenshots/apoplexy-3.1_PoP1_SNES.png" alt="PoP1 for SNES">
	</a>
	<p class="caption"><i>Prince of Persia 1</i> for SNES</p>
</div>

</div>
</div>
</div>

<?php
	print ('</div>');
	HTMLEnd();
?>
