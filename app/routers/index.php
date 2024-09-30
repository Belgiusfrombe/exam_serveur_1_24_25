<?php

// ROUTES USERS
if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';

else:
    include_once "../app/controllers/pagesController.php";
    \App\Controllers\PagesController\homeAction($connexion);
endif;
