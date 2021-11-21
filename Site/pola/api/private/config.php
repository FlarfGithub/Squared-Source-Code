<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("SITE_CONFIG", 
	[
		"database" =>
		[
			"host" => "127.0.0.1",
			"schema" => "exoro_polygon",
			"username" => "root",
			"password" => "88aYy`A$P>3qXWJz"
		],

		"site" =>
		[
			"name" => "Project Polygon",
			"name_secondary" => "Polygon",
			"currencyName" => "Pizzas"
		],

		"captcha" =>
		[
			"siteKey" => "undefined",
			"privateKey" => "undefined"
		]
	]);