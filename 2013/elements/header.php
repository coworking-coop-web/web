<header id="area_header">
<div class="mod_header">
		<?php 
		$a = new GlobalArea('Site Name');
		$a->display();
		?>

<nav class="mod_header_nav">
<h1 class="navtitle"><a class="open" href="#nav">MENU</a></h1>
		<?php 
		$a = new GlobalArea('Global Navi');
		$a->display();
		?>

<ul><li class="navtitle"><a href="#pagetop">メニューを閉じる</a></li></ul>
<!--mod_header_nav_end--></nav>

<!--mod_header_end--></div>
<!--area_header_end--></header>