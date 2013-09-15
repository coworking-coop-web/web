<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/head.php'); ?>

<body id="pagetop" class="blog blogentry">
<?php 
$this->inc('elements/header.php'); ?>

<article id="area_main">
<header class="mod_pageheader ex_clearfix">
<h1><span>Blog</span><strong>ブログ</strong></h1>
<!--mod_pageheader_end--></header>

<div class="mod_breadcrumbs">
			<?php 
			$a = new GlobalArea('Breadcrumbs');
			$a->display($c);
			?>
<!-- mod_breadcrumbs_end --></div>

<section class="mod_pagecontents">
<h1 class="pagetitle">blog</h1>

<section class="mod_pagecontents_sec ex_clearfix">
<div class="mod_entry">
<header class="mod_entry_header">
<h1><em><?php echo $c->getCollectionDatePublic('Y/m/d')?></em><span></span></h1>
<!--mod_entry_header_end--></header>
<div class="mod_entry_inner">
<h2><?php echo $c->getCollectionName(); ?></h2>

			<?php 
			$a = new Area('Blog Main');
			$a->display($c);
			?>
      
      			<?php 
			$a = new Area('Blog More');
			$a->display($c);
			?>

<div id="main-content-post-author">
			
				<?php 
				$u = new User();
				if ($u->isRegistered()) { ?>
					<?php  
					if (Config::get("ENABLE_USER_PROFILES")) {
						$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
					} else {
						$userName = $u->getUserName();
					}
				}
				?>

<p><?php echo t('Posted by:');?> <span class="post-author"><?php  echo $userName; ?></span></p>	
<!--main-content-post-author_end--></div>
<!--mod_entry_inner_end--></div>


<!--mod_entry_end--></div>

<!--mod_pagecontents_sec_end--></section>
<!--mod_contents_end--></section>

<footer class="mod_mainfooter">
		<?php 
		$a = new GlobalArea('Footer lead');
		$a->display();
		?>
</footer>
<!--area_main_end--></article>


<?php $this->inc('elements/footer.php'); ?>