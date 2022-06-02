<?php
namespace App\Models\TagsModels;


function findAllByPostsId(\PDO $connexion, int $postID) {
    $sql = "SELECT *
            FROM tags t
            JOIN posts_has_tags pht ON t.id = pht.tag_id
            WHERE pht.post_id = :postID
            ORDER BY t.name ASC;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':postID', $postID, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

?>
