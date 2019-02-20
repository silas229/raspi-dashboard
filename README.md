# raspi-dashboard
Web dashboard for your local network

![Screenshot](../master/screenshot.png)

## Features
* Fully customizable buttons for your services (color, icon, URL, additional CSS)
* Search bar
* Multi-language support using [PHP i18n](https://github.com/Philipp15b/php-i18n) (English, French, German and Spanish are included!)
* Change the search engine, footer text and much more!

## Setup
Clone repository.

Run `npm i` in your repository folder.
### Modify your dashboard in `config.inc.php`
```php
$customization = [
	"title" => "My Dashboard", // Title of your dashboard
	"description" => "Fast access to all your services", // Subtitle
	"footer" => "By <a href='https://www.silas229.name'>Silas_229</a>. Check out <a href='https://github.com/silas229/raspi-dasboard'>raspi-dashboard on Github</a>!", // Text in footer
	"search" => [ // Search bar
		"url" => "https://www.google.de/search", // URL for search engine
		"param" => "q" // GET parameter (usually 'q')
	]
];
```
### Add your services in `config.inc.php`
```php
$services = [
	[
		"code" => "example", // Code for CSS class and your icon
		"title" => "Example service", // Title of your service
		"alt" => "", // Alt tag for the icon
		"url" => "http://example.com" // URL to your service
	],
];
```
Now create for your service an icon in `/lib/img` named `code.png` and add in `_sass/services.css` the css code for it:
```css
.service-your-service {background-color: hsl(0, 100%, 50%); color: white;}
```
### Set the default language in `config.inc.php`
```php
$i18n->setFallbackLang('de');
```
## License
This project is under MIT license. Feel free to fork it!

This project uses [PHP i18n](https://github.com/Philipp15b/php-i18n) is licensed under MIT License.