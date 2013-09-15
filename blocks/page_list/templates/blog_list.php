<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<div id="blog-index">

	<?php 
	$isFirst = true; //So first item in list can have a different css class (e.g. no top border)
	$excerptBlocks = ($controller->truncateSummaries ? 1 : null); //1 is the number of blocks to include in the excerpt
	$truncateChars = ($controller->truncateSummaries ? $controller->truncateChars : 0);
	foreach ($cArray as $cobj):
		$title = $cobj->getCollectionName();
		$date = $cobj->getCollectionDatePublic('Y/m/d');
		$author = $cobj->getVersionObject()->getVersionAuthorUserName();
		$link = $nh->getLinkToCollection($cobj);
		$firstClass = $isFirst ? 'first-entry' : '';
		
		$entryController = Loader::controller($cobj);
		if(method_exists($entryController,'getCommentCountString')) {
			$comments = $entryController->getCommentCountString('%s '.t('Comment'), '%s '.t('Comments'));
		}
		$isFirst = false;
	?>
  <section class="mod_pagecontents_sec ex_clearfix">
	<div class="entry mod_entry <?php echo $firstClass; ?>">
  <header class="mod_entry_header">
  <h1><em><?php echo t($date);?></em><span></span></h1>
  <!--mod_entry_header_end--></header>
  <div class="mod_entry_inner">
  <h2><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
  <p>
			<?php
			$a = new Area('Blog Main');
			$a->disableControls();
			$a->display($cobj);
			?>
      </p>
	<div class="ccm-spacer"></div>
  <p class="more ex_opaity"><?php echo $comments; ?> <a href="<?php echo $link; ?>">Read More</a></p>
  <!--mod_entry_inner_end--></div>

	</div>
  <!--mod_pagecontents_sec_end--></section>
	<?php endforeach; ?>

</div>


<div id="blog-index-foot">
	<?php if(!$previewMode && $controller->rss):
		$btID = $b->getBlockTypeID();
		$bt = BlockType::getByID($btID);
		$uh = Loader::helper('concrete/urls');
		$rssUrl = $controller->getRssUrl($b, 'blog_rss');
		$rssIcon = $uh->getBlockTypeAssetsURL($bt, 'rss.png');
		$rssTitle = $controller->rssTitle;
	?>
		<div id="rss">
			<a href="<?php echo $rssUrl; ?>" target="_blank"><?php echo t('Subscribe to RSS Feed')?></a>
			<a href="<?php echo $rssUrl; ?>" target="_blank"><img src="<?php echo $rssIcon; ?>" width="14" height="14" alt="<?php echo t('RSS Icon')?>" title="<?php echo t('RSS Feed')?>" /></a>
		</div>
		<link href="<?php echo BASE_URL.$rssUrl; ?>" rel="alternate" type="application/rss+xml" title="<?php echo $rssTitle; ?>" />
	<?php endif; ?>
	

	<?php if ($paginate && $num > 0 && is_object($pl)): ?>
		<div id="pagination">
			<?php
			$summary = $pl->getSummary();
			if ($summary->pages > 1):
				$paginator = $pl->getPagination();
			?>
				<span class="pagination-left"><?php echo $paginator->getPrevious('&laquo; '); ?></span>
				<?php echo $paginator->getPages(); ?>
			<?php endif; ?>
				<span class="pagination-right"><?php echo $paginator->getNext(' &raquo;'); ?></span>
		</div>
	<?php endif; ?>
</div>
