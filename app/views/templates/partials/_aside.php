<?php
?>

<?php include '../app/views/templates/partials/_search.php'; ?>

<?php 
include_once '../app/models/categoriesModel.php'; 
$categories = \App\Models\CategoriesModel\findAll($connexion);
include '../app/views/categories/_index.php'; ?>    

<?php
include_once '../app/models/postsModels.php';
$posts = \App\Models\PostsModels\findRecents($connexion);
include '../app/views/posts/_recents.php'; ?> 


                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">cat</a>
                            <a href="#" class="tag-cloud-link">abstract</a>
                            <a href="#" class="tag-cloud-link">people</a>
                            <a href="#" class="tag-cloud-link">person</a>
                            <a href="#" class="tag-cloud-link">model</a>
                            <a href="#" class="tag-cloud-link">delicious</a>
                            <a href="#" class="tag-cloud-link">desserts</a>
                            <a href="#" class="tag-cloud-link">drinks</a>
                        </div>
                    </div>

               