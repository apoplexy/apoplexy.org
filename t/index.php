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
HTMLStart ('Tutorials');
Menu ('Tutorials');
print ('<h1>Tutorials</h1>');
print ('<div class="div_content">');

/*****************************************************************************/
function VideoWebM ($sFile, $sTitle, $sDate)
/*****************************************************************************/
{
print ('
<h2>' . $sTitle . ' <span style="font-size:20px;">(' . $sDate . ')</span></h2>
<video src="/tutorials/' . $sFile . '" controls preload="metadata" style="width:100%;">Your browser does not properly support the HTML5 video tag.</video>
');
}
/*****************************************************************************/
function VideoYT ($sCode, $sTitle)
/*****************************************************************************/
{
	print ('<a target="_blank" href="https://www.youtube.com/watch?v=' . $sCode . '">' . $sTitle . '</a>');
}
/*****************************************************************************/
?>

<div class="container-fluid">
<div class="row">
<div class="col-sm-6">

<span class="span_tutorialh">Official Videos</span>
<?php
	VideoWebM ('apoplexy_1_1.webm', 'Instructional Video', '30 January 2011');
	VideoWebM ('apoplexy_1_9b.webm', 'Supplement 1', '20 September 2013');
	VideoWebM ('apoplexy_3_0_RC1.webm', 'Supplement 2', '13 December 2015');
?>

</div>
<div class="col-sm-6" style="text-align:center;">

<span class="span_tutorialh">Various</span>
<h2>Documents</h2>
<span class="span_tutoriall">Special Events</span>
<p>
<a href="https://www.popot.org/documentation/documents/2015-08-07_PoP1_Special_Events.pdf">PoP1 for DOS</a>
<br>
<a href="https://www.popot.org/documentation/documents/2014-07-10_PoP2_Special_Events.pdf">PoP2 for DOS</a>
</p>
<h2>Community Videos</h2>
<span class="span_tutoriall">by Aram Sev.</span>
<p>
<?php VideoYT ('zA6kbNRleiI', 'quickly build a level'); ?>
<br>
<?php VideoYT ('6JF2gayyI_w', 'Prince test - quickly create a mod'); ?>
<br>
<?php VideoYT ('n1o3sAI0VYs', 'How to use the new 3.1 (part 1)'); ?>
<br>
<?php VideoYT ('fitfN32CkW4', 'How to use the new 3.1 (part 2)'); ?>
<br>
<?php VideoYT ('7sJ5rKTUk4U', 'only Prince of Persia 1'); ?>
</p>
<span class="span_tutoriall">by yaqxsw</span>
<p>
<?php VideoYT ('wumqeXAv_Aw', '1. "For beginners"'); ?>
<br>
<?php VideoYT ('XrbF5ujwymk', '2. "Create gates"'); ?>
<br>
<a target="_blank" href="https://www.youtube.com/watch?v=51Du9x1kDWk">3. "Blue potion"</a>
<br>
<a target="_blank" href="https://www.youtube.com/watch?v=ZxrOWyCIXbY">4. "Creating broken room"</a>
<br>
<a target="_blank" href="https://www.youtube.com/watch?v=Jouzt7EGszI">5. "Create Time, Texture, Life!!!"</a>
<br>
<a target="_blank" href="https://www.youtube.com/watch?v=N9HfuDeg8XY">6. "Modifier objects"</a>
<br>
<a target="_blank" href="https://www.youtube.com/watch?v=uW6NJkss8h0">7. "SDLPoP and how pass levelset"</a>
<br>
<a target="_blank" href="https://www.youtube.com/watch?v=P6aXc_SnmBI">8. "Change Graphic and Texture"</a>
<br>
<a target="_blank" href="https://www.youtube.com/watch?v=3Ho9C_sWHg8">9. "Screenshot and upload MOD"</a>
</p>

</div>
</div>
</div>

<?php
	print ('</div>');
	HTMLEnd();
?>
