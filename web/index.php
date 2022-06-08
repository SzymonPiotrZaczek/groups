<?php
    
    declare(strict_types=1);

use classes\randomization;

    require_once('../vendor/autoload.php');
    require_once('../classes/randomization.php');

    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    
    $smarty = new Smarty();
    $smarty->setTemplateDir('../templates');
    $smarty->setCompileDir('../cache/smarty_compiled');
    $smarty->setCacheDir('../cache/smarty_cached');

    if (!isset($_POST['participants']) and !isset($_POST['group_size'])) {
        $smarty->display('index.tpl');
    } else {
        $randomization = new randomization;
        $smarty->assign('final', $randomization->randomize());
        $smarty->display('new_random.tpl');
    }
    
    

    die('<br/>' . 'lol');