<?php

namespace App\Controllers\formsController;

use \App\Models\FormsModel, \PDO;

include_once '../app/models/formsModel.php';

function showAction(PDO $connexion, int $id, array $data)
{
    $response = formsModel\showAction($connexion);
    header('Location: ' . BASE_ADMIN_URL . 'forms');
}