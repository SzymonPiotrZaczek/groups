<?php
    
    declare(strict_types=1);
    error_reporting(0);

use classes\randomization;

    require_once('../vendor/autoload.php');
    require_once('../classes/randomization.php');

   
    $smarty = new Smarty();
    $smarty->setTemplateDir('../templates');
    $smarty->setCompileDir('../cache/smarty_compiled');
    $smarty->setCacheDir('../cache/smarty_cached');

    try {

        if (!isset($_POST['participants']) and !isset($_POST['group_size'])) {
           $smarty->display('index.tpl');
        } else {
            $randomization = new randomization;
            $smarty->assign('final', $randomization->randomize());
            $smarty->display('new_random.tpl');
        }
     } catch (Exception $e) {
        echo '<h1>Wystąpił błąd w aplikacji, spróbuj ponownie</h1>';
     } catch (Error $r) {
        echo '<h1>Wystąpił błąd w aplikacji, spróbuj ponownie</h1>';
     }

     
    
    

