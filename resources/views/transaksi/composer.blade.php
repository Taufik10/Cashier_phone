{
	"name": "laravel/laravel",
	"description": "The Laravel Framework.",
	"keywords": ["framework", "laravel"],
	"license": "MIT",
	"type": "project",
	"require": {
		"php": ">=5.5.9",
		"laravel/framework": "5.0.*",
		"barryvdh/laravel-dompdf": "^0.6.0"
	},
	"require-dev": {
		"phpunit/phpunit": "~4.0",
		"phpspec/phpspec": "~2.1"
	},
	"autoload": {
		"classmap": [
			"database"
		],
		"psr-4": {
			"App\\": "app/"
		}
	},
	"autoload-dev": {
		"classmap": [
			"tests/TestCase.php"
		]
	},
	"scripts": {
		"post-install-cmd": [
			"php artisan clear-compiled",
			"php artisan optimize"
		],
		"post-update-cmd": [
			"php artisan clear-compiled",
			"php artisan optimize"
		],
		"post-create-project-cmd": [
			"php -r \"copy('.env.example', '.env');\"",
			"php artisan key:generate"
		]
	},
	"config": {
		"preferred-install": "dist"
	}
}
