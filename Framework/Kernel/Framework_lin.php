<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 18/09/2019
 * Time: 08:59
 */

class Framework_lin
{
    public static function run()
    {
        self::initialize();
        self::autoloader();
        self::header();
        self::switcher();
        self::footer();

    }

    private static function initialize()
    {
        $getParamUrl= $_SERVER['REQUEST_URI'];
        $getParamUrlArray = explode("/",$getParamUrl);


        define('DIRSEP',DIRECTORY_SEPARATOR);
        define('ROOT', getcwd().DIRSEP);
        define('APPPATH',ROOT.'Application'.DIRSEP);
        define('FRAMEWORK_PATH',ROOT.'Framework'.DIRSEP);
        define('PUB_PATH',dirname($_SERVER['SCRIPT_NAME']));
        define('CTRL_PATH', APPPATH. 'Controller'.DIRSEP);
        define('MDL_PATH', APPPATH. 'Model'.DIRSEP);
        define('VIEW_PATH', APPPATH. 'View'.DIRSEP);
        define('KERNEL_PATH',FRAMEWORK_PATH. 'Kernel'.DIRSEP);
        if (count($getParamUrlArray) == 3) {

            if ($getParamUrlArray[1] != "" && $getParamUrlArray[2] != "") {
                define('CONTROLLER', $getParamUrlArray[1]);
                define('ACTION', $getParamUrlArray[2]);
            }
        }

    }
    private static function autoloader()
    {
        spl_autoload_register(array(__CLASS__,'loading'));
    }
    private static function loading($class)
    {
        if (substr($class,-10) == "Controller"){
            require_once "Framework_lin.php";
        }
        elseif (substr($class,-5) == "Model"){
            require_once "Framework_lin.php";
        }
    }
    private static function switcher()
    {
        $getParamUrl = $_SERVER['REQUEST_URI'];
        $getParamUrlArray = explode("/", $getParamUrl);

        if (count($getParamUrlArray) == 3 && $getParamUrlArray[2] == "") {
            include VIEW_PATH . "accueil.php";
        }else{
            if (isset($getParamUrlArray[3])) {
                if ($getParamUrlArray[2] != "" && $getParamUrlArray[3] != "") {
                    if (file_exists(CTRL_PATH . CONTROLLER . "Controller.php")) {
                        $controllerName = CONTROLLER . "Controller";
                        $actionName = ACTION;

                        $controller = new $controllerName;
                        if (method_exists($controller, ACTION)) {
                            $controller->$actionName();
                        } else {
                            echo 'MArche aps ';
                        }
                    } else {
                        echo 'MArche aps ';
                    }
                } else {
                    echo 'MArche aps ';

                }
            } else {
                echo 'MArche aps ';

            }
        }



    }
    private static function footer(){
        include_once LAYOUT_PATH.'footer.php';
    }
    private static function header(){
        include_once LAYOUT_PATH.'header.php';
    }

}