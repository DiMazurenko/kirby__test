<?php snippet('head') ?>

<body>
	<?php snippet('header') ?>

	<main class="wrapper__main main">

		<div data-anim="fade-up" data-anim-value="50">
			<h1 class="h1 page-title _md-4"><?= $page->title() ?></h1>


			<section class="management">

				<ul>
					<?php foreach ($page->children()->listed() as $item) : ?>
						<li class="management__item">
							<div class="person-card-management">
								<div class="person-card-management__img">
									<?= $item->image() ?>
								</div>
								<div class="person-card-management__content">
									<p class="h3 person-card-management__name"><?= $item->name() ?></p>
									<p class="person-card-management__description"><?= $item->purpose() ?></p>
									<p class="person-card-management__schedule"><?= $item->description() ?></p>
									<a href="tel:+78712223510" class="person-card-management__link link">
										<svg class="person-card__link-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-phone" />
										</svg>

										<span><?= $item->telephone() ?></span>
									</a>
								</div>
								<a href="<?= $item->url() ?>" class="person-card-management__href">
									<span>Подробнее</span>
									<svg class="person-card-management__href-icon" width="24" height="24" viewBox="0 0 24 24">
										<use xlink:href="#icon-arrow" />
									</svg>

								</a>
							</div>

						</li>
					<?php endforeach ?>
				</ul>
			</section>
		</div>
	</main>
	</div>
	<?php snippet('sitemap') ?>

	<?php snippet('footer') ?>