<?php
if(isset($_GET['postID'])):
    include_once '../app/controllers/postsController.php';
    \app\controllers\postsController\showAction($connexion, $_GET['postID']);
// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsController
// ACTION: index
else:
include_once '../app/controllers/postsController.php';
\app\controllers\postsController\indexAction($connexion);
endif;
?>