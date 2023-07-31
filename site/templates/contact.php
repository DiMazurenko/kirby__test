<?php snippet('head') ?>

<body>
	<?php snippet('header') ?>

	<main class="wrapper__main main">

		<div data-anim="fade-up" data-anim-value="50">
			<h1 class="h1 page-title _md-4"><?= $page->title() ?></h1>
			<section class="form-block" data-form-validate="data-form-validate" data-callback="base">


				<form method="post" action="<?= $page->url() ?>" class="form-block__form">

					<div class="form-block__block">
						<p class="form-block__label">ВАШЕ ИМЯ*</p>
						<div class="input" data-validate-type="text" data-message-base="Поле обязательно к заполнению" data-required="data-required" data-limitation="name">
							<input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required class="input__input">
							<?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
						</div>
					</div>

					<div class="form-block__block">
						<p class="form-block__label">ВАШ EMAIL*</p>
						<div class="input" data-validate-type="email" data-required="data-required" data-message-base="Поле обязательно к заполнению" data-message-extra="Проверьте корректность заполнения поля" data-limitation="email">
							<input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required class="input__input">
							<?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>

						</div>

					</div>

					<div class="form-block__block">
						<p class="form-block__label">ВАШЕ СООБЩЕНИЕ*</p>
						<div class="input" data-validate-type="text" data-required="data-required" data-message-base="Поле обязательно к заполнению">

							<textarea class="input__input _textarea" id="text" name="text" required>
                    <?= esc($data['text'] ?? '') ?>
                </textarea>
							<?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>

						</div>

					</div>

					<button class="button main-hero__btn _full-width" type="submit" name="submit" value="Submit">
						<svg class='button__icon' width="35" height="54" viewBox="0 0 35 54" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_1407_48188)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.19325 19.7886C8.08162 16.6751 10.5217 12.6521 14.218 7.875C20.3115 0 30.4799 1.5301e-07 36.0783 1.4733e-07L181.46 0L277.922 2.1989e-07C283.52 2.1431e-07 293.689 0 299.782 7.875C303.478 12.6521 305.919 16.6751 307.806 19.7886C310.291 23.8847 311.82 26.4065 314 27C311.82 27.5935 310.291 30.1153 307.806 34.2114C305.919 37.3249 303.478 41.3479 299.782 46.125C293.689 54 283.52 54 277.922 54H180.96H36.0783C30.4799 54 20.3115 54 14.218 46.125C10.5217 41.3479 8.08162 37.3249 6.19325 34.2114C3.70889 30.1153 2.17937 27.5935 0 27C2.17937 26.4065 3.70888 23.8847 6.19325 19.7886Z" fill="currentColor" />
							</g>
							<defs>
								<clipPath id="clip0_1407_48188">
									<rect width="35" height="54" fill="white" />
								</clipPath>
							</defs>
						</svg>
						<span class="button__inner">
							<span class="button__text">Отправить</span>
						</span>
						<svg class='button__icon _right' width="35" height="54" viewBox="0 0 35 54" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_1407_48188)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.19325 19.7886C8.08162 16.6751 10.5217 12.6521 14.218 7.875C20.3115 0 30.4799 1.5301e-07 36.0783 1.4733e-07L181.46 0L277.922 2.1989e-07C283.52 2.1431e-07 293.689 0 299.782 7.875C303.478 12.6521 305.919 16.6751 307.806 19.7886C310.291 23.8847 311.82 26.4065 314 27C311.82 27.5935 310.291 30.1153 307.806 34.2114C305.919 37.3249 303.478 41.3479 299.782 46.125C293.689 54 283.52 54 277.922 54H180.96H36.0783C30.4799 54 20.3115 54 14.218 46.125C10.5217 41.3479 8.08162 37.3249 6.19325 34.2114C3.70889 30.1153 2.17937 27.5935 0 27C2.17937 26.4065 3.70888 23.8847 6.19325 19.7886Z" fill="currentColor" />
							</g>
							<defs>
								<clipPath id="clip0_1407_48188">
									<rect width="35" height="54" fill="white" />
								</clipPath>
							</defs>
						</svg>
					</button>



				</form>




			</section>
		</div>
	</main>
	</div>


	<?php snippet('sitemap') ?>

	<?php snippet('footer') ?>