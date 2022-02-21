<?php include "includes/header.php";?>

<?php

$page = !empty($_GET['page']) ? (int) $_GET['page'] : 1;
$items_per_page = 4;
$items_total_count = Photo::count_all();

$photos = Photo::find_all();

?>

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <div class="img-box-grid">
                    <?php foreach ($photos as $photo): ?>
                        <div>
                            <a href="photos.php?id=<?php echo $photo->id; ?>" class="thumbnail">
                                <img src="admin/<?php echo $photo->picture_path(); ?>" alt="">
                            </a>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <!-- <div class="col-md-4">
                 <#?php include "includes/sidebar.php";?>
            </div> -->
            <!-- Blog Sidebar Widgets Column -->


        <!-- /.row -->
        <?php include "includes/footer.php";?>
