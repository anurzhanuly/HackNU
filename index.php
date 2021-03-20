<?php
/**
 * Created by PhpStorm.
 * User: a.nurzhanuly
 * Date: 3/20/2021
 * Time: 2:37 PM
 */

require_once "vendor/autoload.php";
require_once "app/sys/helper.php";

define('WWW_PATH', str_replace('\\', '/', __DIR__));
define('APP_PATH', dirname(WWW_PATH));


new \app\sys\Bootstrap();

