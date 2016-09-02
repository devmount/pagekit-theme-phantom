<!-- show page title except for landing page with title 'Home'  -->
<?php if ($page->title != 'Home') { ?>
	<h1><?= $page->title ?></h1>
<?php } ?>

<!-- show title image if set in page meta section -->
<?php if (array_key_exists('og:image', $app['node']->data['meta'])) { ?>
	<span class="image main"><img src="<?= $app['node']->data['meta']['og:image'] ?>" alt="" /></span>
<?php } ?>

<!-- show page content -->
<?= $page->content ?>