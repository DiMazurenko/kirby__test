<?php snippet('head') ?>

<body>
	<?php snippet('header') ?>

	<main class="wrapper__main main">


		<nav class="mobile-back ttu">
			<a href="management.html" class="mobile-back__link">
				<svg class="mobile-back__icon" width="24" height="24" viewBox="0 0 24 24">
					<use xlink:href="#icon-chevron" />
				</svg>

				<span class="mobile-back__span">назад</span>
			</a>
		</nav>

		<div data-anim="fade-up" data-anim-value="50">


			<section class="biography-card">
				<div class="biography-card__header">
					<div class="biography-card__img">
						<?= $page->image() ?>
					</div>
					<div class="biography-card__description">
						<h1 class="h1 biography-card__name"><?= $page->name() ?></h1>
						<p class="p1 biography-card__job"><?= $page->purpose() ?></p>
					</div>
				</div>
				<button class="biography-card__title" data-accordion="accordion-bio">
					<span class="h3">Описание</span>
					<svg class="biography-card__icon">
						<use xlink:href="#icon-accordion-arrow" />
					</svg>

				</button>
				<div class="biography-card__panel" data-panel="accordion-bio">
					<p class="biography-card__text"><?= $page->specification() ?></p>

				</div>
				<button class="biography-card__title" data-accordion="accordion-honor">
					<span class="h3">Характеристики</span>
					<svg class="biography-card__icon">
						<use xlink:href="#icon-accordion-arrow" />
					</svg>

				</button>
				<div class="biography-card__panel" data-panel="accordion-honor">
					<p class="biography-card__text"><?= $page->property() ?></p>
				</div>
				<button class="biography-card__title" data-accordion="accordion-activity">
					<span class="h3">Доставка</span>
					<svg class="biography-card__icon">
						<use xlink:href="#icon-accordion-arrow" />
					</svg>

				</button>
				<div class="biography-card__panel" data-panel="accordion-activity">
					<p class="biography-card__text"><?= $page->delivery() ?></p>
				</div>
			</section>
		</div>
	</main>
	</div>


	<?php snippet('sitemap') ?>

	<?php snippet('footer') ?>