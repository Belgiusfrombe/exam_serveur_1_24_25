<?php

// ROUTES USERS
if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';

elseif(isset($_GET['form'])):
    include_once '../app/routers/form.php';

else:
    include_once "../app/controllers/postsController.php";
    App\Controllers\PostsController\indexAction($connexion);
endif;