<?php
if(isset($_GET['postID'])):
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\showAction($connexion, $_GET['postID']);
// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsController
// ACTION: index
else:
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\indexAction($connexion);
endif;
?>