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
	HTMLStart ('Contact &amp; Links');
	Menu ('Contact &amp; Links');
	print ('<h1>Contact &amp; Links</h1>');
	print ('<div class="div_content">');
?>

<h2>Contact</h2>
<p>
<a data-name="info" data-domain="apoplexy" data-tld="org" href="#" class="cryptedmail" onclick="window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld"></a>
<br>
<a target="_blank" href="https://forum.princed.org/viewforum.php?f=112">Forum board</a>
</p>

<h2>Links</h2>
<p>
<a target="_blank" href="https://www.popot.org/">Prince of Persia: Original Trilogy</a> (popot.org)
<br>
<a target="_blank" href="https://www.princed.org/">Princed Project</a> (princed.org)
<br>
<a target="_blank" href="https://www.popuw.com/">Prince of Persia Unofficial Website</a> (popuw.com)
<br>
<a target="_blank" href="http://www.princeofpersia.ppa.pl/">Nieoficjalny Serwis Gry PoP</a> (<span class="italic">Polish</span>)
<br>
<a target="_blank" href="https://www.jordanmechner.com/projects/prince-of-persia/">Jordan Mechner's PoP Page</a>
<br>
<a target="_blank" href="https://github.com/NagyD/SDLPoP">SDLPoP</a> and <a target="_blank" href="https://oitofelix.github.io/mininim/">MININIM</a>
</p>

<?php
	print ('</div>');
	HTMLEnd();
?>
