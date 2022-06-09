<?php

namespace App\Models\CommentsModels;

function findAllByPostsId(\PDO $connexion, int $postID) {
    $sql = "SELECT *
            FROM comments 
            WHERE post_id = :postID
            ORDER BY created_at DESC;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':postID', $postID, \PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
?>