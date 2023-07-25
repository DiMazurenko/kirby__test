<header class="header">
	<a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
	<nav class="nav">
		<ul>
			<?php foreach ($site->children()->listed() as $item) : ?>
				<li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
			<?php endforeach ?>
		</ul>
	</nav>
</header>