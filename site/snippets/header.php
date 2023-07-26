<div class="header">
	<a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
	<nav class="nav">
		<ul>
			<?php foreach ($site->children()->listed() as $item) : ?>
				<li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
			<?php endforeach ?>
		</ul>
	</nav>
</div>

<div class="wrapper">

	<div class="wrapper__inner">
		<div class="wrapper__header">

			<header class="header " data-header>
				<a href="/" class="header__logo" aria-label="На главную" data-anim="fade-left">
					Главная страница

				</a>
				<button class="header__menu-btn " type="button" data-anim="fade-left">
					<span>Меню</span>
					<span class="header__menu-icon-wrap">
						<svg class="header__menu-icon _open" width="24" height="24" viewBox="0 0 24 24">
							<use xlink:href="#icon-burger" />
						</svg>

						<svg class="header__menu-icon _close" width="24" height="24" viewBox="0 0 24 24">
							<use xlink:href="#icon-close" />
						</svg>

					</span>
				</button>
				<div class="header__inner" data-anim="fade-left">
					<nav class="header__nav">
						<ul class="header__nav-list">
							<li>
								<a href="#" class="header__nav-link ttu">МИНИСТЕРСТВО</a>
							</li>
							<li>
								<a href="#" class="header__nav-link ttu">О РЕСПУБЛИКЕ</a>
							</li>
							<li>
								<a href="#" class="header__nav-link ttu">ДОКУМЕНТЫ</a>
							</li>
							<li>
								<a href="#" class="header__nav-link ttu">ПОДВЕДОМСТВЕННЫЕ ОРГАНИЗАЦИИ</a>
							</li>
							<li>
								<a href="#" class="header__nav-link ttu">ГОССЛУЖБА И КАДРЫ</a>
							</li>
							<li>
								<a href="#" class="header__nav-link ttu">ОБРАЩЕНИЯ И ПРИЕМ ГРАЖДАН</a>
							</li>
							<li>
								<a href="#" class="header__nav-link ttu">ПРЕСС-СЛУЖБА</a>
							</li>
							<li>
								<a href="#" class="header__nav-link ttu">КОНТАКТЫ</a>
							</li>
						</ul>
					</nav>
					<ul class="header__nav-list _contacts">
						<li>
							<a href="tel:+78712226209" class="header__nav-link">
								<svg class="header__nav-icon" width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="#icon-phone" />
								</svg>

								+7 800 8888888
							</a>
						</li>
						<li>
							<a href="mailto:mail@mk-chr.ru" class="header__nav-link">
								<svg class="header__nav-icon" width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="#icon-mail" />
								</svg>

								mail@mail.ru
							</a>
						</li>
					</ul>
				</div>
				<span class="header__line" data-anim="fade-left"></span>
				<div class="header__menu">









					<nav class="menu-nav header__menu-nav">
						<div class="menu-nav__col">
							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">МИНИСТЕРСТВО</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Положение</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Руководство</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Коллегия</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Структура</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Госзакупки</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Статистические данные</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Перечень информационных систем</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Конкурсы и тренды</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Государственные услуги</a>
									</li>
								</ul>
							</div>

							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">О РЕСПУБЛИКЕ</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Гимн</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Карта</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Сайты учреждений</a>
									</li>
								</ul>
							</div>

						</div>
						<div class="menu-nav__col">
							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">ДОКУМЕНТЫ</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Приказы</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Отчеты</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Планы</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Указы президента РФ</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Указы главы </a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Постановления </a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Постановления </a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Приказы </a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Регламенты</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Федеральные законы </a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Ведомственные награды</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Порядок обжалования</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Сведения об использовании средств</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Протоколы</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Реализация</a>
									</li>
								</ul>
							</div>

						</div>
						<div class="menu-nav__col">
							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">ГОССЛУЖБА И КАДРЫ</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Вакансии</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Ведомственные награды</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Кадровый резерв</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Порядок поступления на госслужбу</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Методика проведения конкурсов</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">О проведении аттестации</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Информация для людей с ограниченными возможностями, заинтересованных в поступлении на госслужбу</a>
									</li>
								</ul>
							</div>

							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">КОНТАКТЫ</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Контакты</a>
									</li>
								</ul>
							</div>

						</div>
						<div class="menu-nav__col">
							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">ОБРАЩЕНИЯ И ПРИЕМ ГРАЖДАН</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Интернет-приемная</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Обращения граждан</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Опросы</a>
									</li>
								</ul>
							</div>

							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">ПРЕСС-СЛУЖБА</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Новости</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Архив медиа</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Доступная среда</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Контакты для СМИ</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Символика</a>
									</li>
								</ul>
							</div>

							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">ПОДВЕДОМСТВЕННЫЕ ОРГАНИЗАЦИИ</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Подведомственные организации</a>
									</li>
								</ul>
							</div>

						</div>
						<div class="menu-nav__col">
							<div class="menu-nav__block" data-nav-item>
								<div class="menu-nav__title-wrap">
									<p class="menu-nav__title ttu">ПРОЧИЕ РАЗДЕЛЫ</p>
									<button type="button" aria-label="Открыть" class="menu-nav__title-btn" data-nav-item-btn>
										<svg class="menu-nav__title-icon" width="24" height="24" viewBox="0 0 24 24">
											<use xlink:href="#icon-chevron" />
										</svg>

									</button>
								</div>
								<ul class="menu-nav__list" data-nav-item-content>
									<li>
										<a href="" class="menu-nav__link">Общественный совет</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Пушкинская карта</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Открытые данные</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Сведения о доходах</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Требования при осуществлении контрольно-надзорной деятельности</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Стратегия пространственного развития России</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Перечень информационных систем</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Целевые программы</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Сведения об объектах</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Антимонопольная деятельность</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Извещения</a>
									</li>
									<li>
										<a href="" class="menu-nav__link">Перечень информации о деятельности органов</a>
									</li>
								</ul>
							</div>

						</div>
					</nav>
				</div>
				<a href="#" class="header__menu-link ttu" data-anim="fade-down" data-anim-value="15">
					<span>Версия для слабовидящих</span>
					<svg class="header__menu-link-icon" width="24" height="24" viewBox="0 0 24 24">
						<use xlink:href="#icon-glasses" />
					</svg>

				</a>
			</header>
		</div>