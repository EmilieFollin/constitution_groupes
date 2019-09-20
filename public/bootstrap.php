<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 17/09/2019
 * Time: 14:31
 */
require_once './Framework/Kernel/Framework.php';
require_once './Framework/Kernel/Model.php';
require_once './Framework/Kernel/Framework_lin.php';


//$d = new Framework();
//$d::run();

$dw = PHP_OS.'';

// Condition pour détecter si le framework est configuré pour windows ou linux
if ($dw == 'WINNT') {
    $dwrun = new Framework();
    $dwrun::run();
} else {
    if ($dw != 'WINNT') {
        $dlrun = new Framework_lin();
        $dlrun::run();
    } else {
        echo "JE NE SUIS AUCUN FRAMEWORK";
    }
}
