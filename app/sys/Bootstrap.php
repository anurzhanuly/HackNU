<?php
/**
 * Created by PhpStorm.
 * User: a.nurzhanuly
 * Date: 3/20/2021
 * Time: 7:31 PM
 */

namespace app\sys;
use app\route;

class Bootstrap
{

    private $oRequest;
    private $oAction;

    public function __construct()
    {
        $this->oRequest = new route\Request();
        $this->route();
    }

    public function route()
    {
        $sAppPath = WWW_PATH . DIRECTORY_SEPARATOR . 'app';
        $sPath = (isset($_GET['APP_PATH'])) ? $_GET['APP_PATH'] : '/';
        $this->oRequest->handleRequest();
        if ($this->oRequest->isPostRequest()) {
            $sActionName = $this->oRequest->getActionName();
            $sActionName = $this->prefixActionName($sActionName);
            $this->oAction = new $sActionName();
            $this->process();
        }
    }

    private function prefixActionName($sActionName)
    {
        return "app\habits\action\\" . $sActionName . "Action";
    }

    private function process()
    {
        $this->oAction->processPostRequest();
    }
}