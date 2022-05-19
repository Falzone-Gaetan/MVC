
<p class="mb-5">
              <img src="assets/images/<?php echo $post['image'];?>" alt="" class="img-fluid">
            </p>

            <h1 class="mb-3 h1"><?php echo $post['title'];?></h1>
            <div class="">
            <?php echo $post['content'];?>
            </div>
        
<?php
include_once '../app/models/tagsModels.php';
$tags = findAllByPostsId($connexion, $post['id']);
include '../app/views/tags/_indexByPostId.php';

?>
<?php
include_once '../app/models/authorsModels.php';
$authors = findAllByPostsId($connexion, $post['id']);
include '../app/views/authors/_indexByPostId.php';

?>