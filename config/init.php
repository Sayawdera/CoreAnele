<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . "/public");
define("APP", ROOT . "/app");
define("CORE", ROOT . "/vendor/CoreAnele");
define("HELPERS", ROOT . "/vendor/CoreAnele/helpers");
define("CACHE", ROOT . "/tmp/cache");
define("LOGS", ROOT . "/tmp/logs");
define("CONFIG", ROOT . "/config");
define("LAYOUT", "Anele");
define("PATH", "http://wft.com:81/");
define("ADMIN", "http://wft.com:81/admin");
define("NO_IMAGE", "uploads/no_image.jpg");

require_once ROOT . "/vendor/autoload.php";
