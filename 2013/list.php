<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/head.php'); ?>

<body id="pagetop" class="list">
<?php 
$this->inc('elements/header.php'); ?>

<article id="area_main">
<header class="mod_pageheader ex_clearfix">
<h1><span>List</span><strong>加盟リスト</strong></h1>
<!--mod_pageheader_end--></header>

<div class="mod_breadcrumbs">
			<?php 
			$a = new GlobalArea('Breadcrumbs');
			$a->display($c);
			?>
<!-- mod_breadcrumbs_end --></div>

<section class="mod_pagecontents">
			<?php 
			$a = new Area('Main');
			$a->display($c);
			?>
<!--mod_contents_end--></section>


<footer class="mod_mainfooter">
		<?php 
		$a = new GlobalArea('Footer lead');
		$a->display();
		?>
</footer>
<!--area_main_end--></article>


<?php $this->inc('elements/footer.php'); ?>