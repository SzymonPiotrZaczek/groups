<?php
    
    declare(strict_types=1);

    require_once('../vendor/autoload.php');

    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    
    $smarty = new Smarty();
    $smarty->setTemplateDir('../templates');
    $smarty->setCompileDir('../cache/smarty_compiled');
    $smarty->setCacheDir('../cache/smarty_cached');

    $smarty->display('index.tpl');

    die('<br/>' . 'lol');