<?php
/*****************************************************
 * Copyright (c) 2019.
 * @author Silas_229 <contact@silas229.de>
 * @link https:/github.com/silas229/raspi-dashboard/
 ****************************************************/

require_once 'i18n.class.php';
$i18n = new i18n('./lang/lang_{LANGUAGE}.json', 'langcache/', 'en');

if (isset($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}

require_once 'config.inc.php';

$i18n->init();

?>
<!DOCTYPE html>
<html lang="<?php echo L::language_code_short; ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php echo $customization['title']; ?></title>
	<meta itemprop="name" content="<?php echo $customization['title']; ?>">
	<meta itemprop="description" content="<?php echo $customization['description']; ?>">
	<meta name="title" content="<?php echo $customization['title']; ?>">
	<meta name="description" content="<?php echo $customization['description']; ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo $customization['title']; ?>">
	<meta name="twitter:description" content="<?php echo $customization['description']; ?>">
	<meta name="og:title" content="<?php echo $customization['title']; ?>">
	<meta name="og:description" content="<?php echo $customization['description']; ?>">
	<meta name="og:locale" content="<?php echo L::language_code_long; ?>">
	<meta name="og:type" content="website">
	<meta name="robots" content="index, nofollow">
	<meta name="language" content="<?php echo L::language_code_name ?>">
	<meta name="author" content="Silas Meyer">
	
	<link rel="stylesheet" href="lib/css/style.min.css">
</head>
<body>
<main>
	<div class="pageloader"><span class="title"><?php echo $customization['title']; ?></span></div>
	<section class="hero is-medium is-primary is-bold">
		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column is-8-desktop is-offset-2-desktop">
						<h1 class="title is-2 is-spaced">
							<?php echo $customization['title']; ?>
						
						</h1>
						<h2 class="subtitle is-4">
							<?php echo $customization['description']; ?>
						
						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="columns is-centered">
			<form class="columns is-half" method="GET" accept-charset="UTF-8"
			      action="<?php echo $customization['search']['url']; ?>">
				<div class="field has-addons">
					<div class="control">
						<input class="input is-large" type="text" name="<?php echo $customization['search']['param']; ?>"
						       placeholder="<?php echo L::search_placeholder; ?>" required>
					</div>
					<div class="control">
						<button class="button is-primary is-large" type="submit">
							<?php echo L::search_button; ?>
						
						</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="columns is-multiline">
				<?php
				foreach ($services as $service) {
					echo <<<EOT
			<div class="column is-half-tablet is-one-third">
				<a href="{$service['url']}">
					<div class="tile notification service-{$service['code']}">
						<p class="title"><img class="appicon" src="./lib/img/{$service['code']}.png" alt="{$service['alt']}">{$service['title']}</p>
					</div>
				</a>
			</div>

EOT;
				} ?>
			</div>
		</div>
	</section>
</main>
<footer class="footer has-text-left">
	<div class="container">
		<div class="columns">
			<div class="column is-8-desktop is-offset-2-desktop has-text-left">
				<p class="has-text-centered">
					<small>
						<?php echo $customization['footer']; ?>
					
					</small>
				</p>
				<p class="has-text-centered" style="margin-top: 1rem;">
					<a href="http://bulma.io">
						<img src="./lib/img/made-with-bulma.png" alt="Made with Bulma" width="128" height="24">
					</a>
				</p>
				<div class="dropdown is-up" id="language-select-wrapper">
					<div class="dropdown-trigger">
						<button class="button" aria-haspopup="true" aria-controls="language-select"
						        onclick="document.getElementById('language-select-wrapper').classList.toggle('is-active')">
							<span><?php echo L::language_label; ?></span>
						</button>
					</div>
					<div class="dropdown-menu" id="language-select" role="menu">
						<div class="dropdown-content has-text-left">
							<a href="?lang=<?php echo $i18n->getAppliedLang(); ?>"
							   class="dropdown-item is-active"><?php echo L::language_code_name; ?></a>
							<?php
							$otherLangs = json_decode(file_get_contents($i18n->getLangFilePath()))->language->other;
							foreach ($otherLangs as $langCode => $langName) {
								printf('<a href="?lang=%1$s" class="dropdown-item">%2$s</a>', $langCode, $langName);
							}
							?>
						
						</div>
					</div>
				</div>
				<button onclick="document.getElementsByTagName('body')[0].classList.toggle('is-dark')" class="button is-pulled-right"><?php echo L::dark_mode; ?></button>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
