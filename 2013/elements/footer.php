<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<footer id="area_footer">
<div class="mod_footer">
<nav class="mod_footernav ex_clearfix">
		<?php 
		$a = new GlobalArea('Footer Site Name');
		$a->display();
		?>
<div class="mod_footernav_block">
<section>
		<?php 
		$a = new GlobalArea('Footer Navi01');
		$a->display();
		?>
</section>
<!--mod_footernav_block_end--></div>
<div class="mod_footernav_block">
<section>
		<?php 
		$a = new GlobalArea('Footer Navi02');
		$a->display();
		?>
</section>
<section>
		<?php 
		$a = new GlobalArea('Footer Navi03');
		$a->display();
		?>
</section>
<section>
		<?php 
		$a = new GlobalArea('Footer Navi06');
		$a->display();
		?>
</section>
<!--mod_footernav_block_end--></div>
<div class="mod_footernav_block">
<section>
		<?php 
		$a = new GlobalArea('Footer Navi04');
		$a->display();
		?>
</section>
<section>
		<?php 
		$a = new GlobalArea('Footer Navi05');
		$a->display();
		?>
</section>
<!--mod_footernav_block_end--></div>
<!--mod_footernav_end--></nav>

<div class="mod_relation ex_clearfix">
<ul class="ex_opaity">
<li><a href="https://www.facebook.com/bccjp.net"><span class="icon-fb" aria-hidden="true"></span></a></li>
<li><a href="https://twitter.com/bccjpnet"><span class="icon-tweeter" aria-hidden="true"></span></a></li>
</ul>

		<?php 
		$a = new GlobalArea('Search Form');
		$a->display();
		?>
<!-- mod_relation_end --></div>

<!--mod_footer_end--></div>

<!--area_footer_end--></footer>

<?php  Loader::element('footer_required'); ?>
</body>
</html>
