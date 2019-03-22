<?php
/*****************************************************
 * Copyright (c) 2019.
 * @author Silas_229 <contact@silas229.de>
 * @link https:/github.com/silas229/raspi-dashboard/
 ****************************************************/

/****************************
 * Customize your dashboard *
 ****************************/
$customization = [
	"title" => "My Dashboard", // Title of your dashboard
	"description" => "Fast access to all your services", // Subtitle
	"footer" => "By <a href='https://www.silas229.name'>Silas_229</a>. Check out <a href='https://github.com/silas229/raspi-dashboard'>raspi-dashboard on Github</a>!", // Text in footer
	"search" => [ // Search bar
		"url" => "https://www.google.de/search", // URL for search engine
		"param" => "q" // GET parameter (usually 'q')
	]
];

/***************************
 * Configure your services *
 ***************************/
$services = [
	[
		"code" => "example", // Code for CSS class and your icon
		"title" => "Example service", // Title of your service
		"alt" => "", // Alt tag for the icon
		"url" => "http://example.com" // URL to your service
	],
	[
		"code" => "pihole",
		"title" => "Pi-Hole",
		"alt" => "🍓",
		"url" => "/admin/",
	],
	[
		"code" => "wordpress",
		"title" => "Wordpress Site",
		"alt" => "W",
		"url" => "./wordpress/"
	],
	[
		"code" => "nextcloud",
		"title" => "Nextcloud",
		"alt" => "🌐",
		"url" => "./nextcloud/"
	],
	[
		"code" => "printer",
		"title" => "Printer",
		"alt" => "🖨️",
		"url" => "http://printer.local"
	]
];

/*************************
 * Set fallback language *
 *************************/
$i18n->setFallbackLang('de');
