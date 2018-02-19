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
HTMLStart ('Screenshots');
Menu ('Screenshots');
print ('<h1>Screenshots</h1>');
print ('<div class="div_content">');

/*****************************************************************************/
function SS ($sName)
/*****************************************************************************/
{
print ('<a target="_blank" href="/screenshots/' . $sName . '.png" class="a_ss"><img src="/screenshots/' . $sName . '.gif" alt="screenshot" class="img_ss"></a>' . "\n");
}
/*****************************************************************************/
?>

<?php
	SS ('apoplexy-3.1_PoP1_DOS');
	SS ('apoplexy-3.1_PoP1_SNES');
	SS ('apoplexy-3.1_PoP2_DOS');
?>
<span style="display:block;">Many more screenshots of v2.0 <a target="_blank" href="https://www.popot.org/news.php?id=apoplexy-2.0">here</a>.</span>

<h2>Official Logos</h2>
<p>
<a href="/images/apoplexy.svg">apoplexy.svg</a>
<br>
<a href="/images/apoplexy_1000x1000.png">apoplexy_1000x1000.png</a>
<br>
<a href="/images/apoplexy_32x32.png">apoplexy_32x32.png</a>
<br>
<a href="/images/apoplexy_16x16.png">apoplexy_16x16.png</a>
<br>
<a href="/images/apoplexy_text.png">apoplexy_text.png</a>
</p>

<?php
	print ('</div>');
	HTMLEnd();
?>
