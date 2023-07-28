<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title><?= $site->title() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/assets/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="/assets/images/favicon/safari-pinned-tab.svg" color="#6a7584">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<link rel="preload" href="/assets/fonts/gratimoclassiccy-regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/assets/fonts/gratimoclassiccy-medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/assets/fonts/wermut.woff2" as="font" type="font/woff2" crossorigin>

	<script type="text/javascript">
		;
		(function() {
			var modificators = [],
				nv = navigator,
				pl = nv.platform.toLowerCase(),
				ua = nv.userAgent.toLowerCase(),
				an = nv.appName.toLowerCase(),
				htmlElement = document.documentElement,
				ls = localStorage;

			function pli(s) {
				return pl.indexOf(s) > -1;
			}

			function uai(s) {
				return ua.indexOf(s) > -1;
			}

			function ani(s) {
				return an.indexOf(s) > -1;
			}

			// Platform
			var platformClass = uai('iphone') || uai('ipod') || uai('ipad') || uai('android') || uai('iemobile') || uai('blackberry') || uai('bada') ? '_mobile' : '_desktop';
			modificators.push(platformClass);

			// OS
			var osClass = '';
			if (uai('ipad') || uai('iphone') || uai('ipod')) {
				osClass = '_ios';
			} else if (uai('android')) {
				osClass = '_android';
			} else if (pli('win')) {
				osClass = '_win';
			} else if (pli('mac')) {
				osClass = '_mac';
			} else if (pli('linux')) {
				osClass = '_linux';
			}
			modificators.push(osClass);

			// Browser
			var browserClass = '';
			if (uai('firefox')) {
				browserClass = '_ff';
			} else if (uai('opr')) {
				browserClass = '_opera';
			} else if (uai('yabrowser')) {
				browserClass = '_yandex';
			} else if (uai('edge')) {
				browserClass = '_edge';
			} else if (uai('trident') || ani('explorer') || ani('msie')) {
				browserClass = '_ie';
			} else if (uai('safari') && !uai('chrome')) {
				browserClass = '_safari';
			} else if (uai('chrome')) {
				browserClass = '_chrome';
			}
			modificators.push(browserClass);

			window.environmentObject = {
				platform: platformClass,
				os: osClass,
				browser: browserClass,
				isLocal: window.location.href.indexOf('http://localhost:') == 0
			};
			htmlElement.className += ' ' + modificators.join(' ');

			// SVG sprites
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'assets/svg/sprite.svg', true);
			xhr.overrideMimeType('image/svg+xml');

			xhr.onreadystatechange = function() {
				if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
					function waitForBody() {
						if (document.body) {
							var containerClass = 'invisible-container';
							var container = document.querySelector('.' + containerClass);
							if (!container) {
								container = document.createElement('div');
								container.className = containerClass;
								document.body.insertBefore(container, document.body.firstChild);
							}
							container.appendChild(xhr.responseXML.documentElement);
						} else {
							setTimeout(waitForBody, 16);
						}
					}

					waitForBody();
				};
			}

			xhr.send('');
		})();
	</script>
	<?= css('/assets/css/styles.css') ?>
	<?= css('/assets/css/styles-management.css') ?>
	<?= css('/assets/css/styles-biography.css') ?>
	<?= css('/assets/css/styles-report-corruption.css') ?>
	<!-- <?= css('/assets/css/index.css') ?> -->

</head>