<?php
/**
 * Created by PhpStorm.
 * User: a.nurzhanuly
 * Date: 3/20/2021
 * Time: 3:02 PM
 */

spl_autoload_register(function ($className) {
   include dirname(__FILE__) . '/' . str_replace('\\', '/', $className);
});