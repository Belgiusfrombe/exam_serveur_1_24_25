<?php

use \App\Controllers\FormsController;

include_once '../app/controllers/FormsController.php';

switch ($_GET['forms']):
    default:
        FormsController\showAction($connexion);
        break;
endswitch;
