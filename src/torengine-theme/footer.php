<?php 
/*
 * TorEngine (Wordpress Theme)
 *   Copyright (C) 2011  PTKDev
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *  
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *  
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
*/
?>
	<div id="footer_line">
		<div class="footer_line"></div>
	</div>
	<div id="footer">
		<div class="footer_font1">TorEngine ~ Version 0.1</div>
		<div class="footer_font2">2012 ~ <?php echo date('Y')+1;?></div><br />
	</div>
	<img style="position: absolute; top: 15px; right: 0; border: 0; z-index: 5;" src="<?php bloginfo('template_url'); ?>/img/desktop/AO-Maru_Logo_Sx.png">
	<img style="position: absolute; top: 15px; left: 0; border: 0; z-index: 5;" src="<?php bloginfo('template_url'); ?>/img/desktop/AO-Maru_Logo_Dx.png">
	<?php wp_footer(); ?>
</body>
</html>