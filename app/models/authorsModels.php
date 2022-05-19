<?php



function findAllByPostsId(\PDO $connexion, int $postID) {
    $sql = "SELECT *
            FROM authors a
            JOIN posts p ON a.id = p.authors_id
            WHERE p.id = :postID";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':postID', $postID, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

?>