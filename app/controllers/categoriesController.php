<?php
namespace App\Controllers\CategoriesController;

use PDO;
use App\Models\CategoriesModel;

function indexAction(PDO $connexion) {
    include_once '../app/models/categoriesModel.php';
    $categories = CategoriesModel\findAll($connexion);

    global $contentCategories, $title;
    $title = 'Liste des Catégories';

    ob_start();
    include '../app/views/categories/index.php';
    $contentCategories = ob_get_clean();
}