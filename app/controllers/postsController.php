<?php

namespace app\controllers\postscontroller;

use \app\models\postsModels;

function indexAction(\PDO $connexion) {
    include_once '../app/models/postsModels.php';
    $posts = \app\models\postsModels\findAll ($connexion);


    GLOBAL $title, $content;
    $title = "Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction(\PDO $connexion, int $id){
    include_once '../app/models/postsModels.php';
    $post = \app\models\postsModels\findOneById($connexion, $id);

    GLOBAL $content, $title;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/shows.php';
    $content = ob_get_clean();
}



?>