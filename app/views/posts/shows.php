
<p class="mb-5">
              <img src="assets/images/<?php echo $post['image'];?>" alt="" class="img-fluid">
            </p>

            <h1 class="mb-3 h1"><?php echo $post['title'];?></h1>
            <div class="">
            <?php echo $post['content'];?>
            </div>

        
<?php
include_once '../app/models/tagsModels.php';
$tags = \App\Models\TagsModels\findAllByPostsId($connexion, $post['id']);
include '../app/views/tags/_indexByPostId.php';

?>


<?php
 
include_once '../app/models/authorsModels.php';
$author = \App\Models\AuthorsModels\findOneById($connexion, $post['author_id']);
include '../app/views/authors/_shows.php';

?>

<?php
 
include_once '../app/models/commentsModels.php';
$comments = \App\Models\commentsModels\findAllByPostsId($connexion, $post['id']);
include '../app/views/comments/_indexByPostId.php';

?>







        

