<?php
/**
 * Created by PhpStorm.
 * User: a.nurzhanuly
 * Date: 3/20/2021
 * Time: 4:06 PM
 */

namespace app\sys;

class Registry
{
    private static $oDB = null;

    public static function getConnection()
    {
        if (self::$oDB) {
            return self::$oDB;
        }
        $sUsername = 'super';
        $sPassword = 'root';
        $sDatabaseName = 'hacknu';
        $sServerName = 'localhost';
        try {
            self::$oDB = new \PDO("mysql:host=" . $sServerName . ";dbname=" . $sDatabaseName, $sUsername, $sPassword);
            self::$oDB->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return self::$oDB;
        } catch (\PDOException $exception) {
            echo "<pre>";
            echo $exception->getMessage();
            echo "</pre>";
        }
    }
}