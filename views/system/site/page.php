<?php if ($page->title != 'Home') { ?>
	<h1><?= $page->title ?></h1>
<?php } ?>

<?php if (array_key_exists('og:image', $app['node']->data['meta'])) { ?>
	<span class="image main"><img src="<?= $app['node']->data['meta']['og:image'] ?>" alt="" /></span>
<?php } ?>

<?= $page->content ?>