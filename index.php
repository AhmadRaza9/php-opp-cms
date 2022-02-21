<?php include "includes/header.php";?>

<?php

$page = !empty($_GET['page']) ? (int) $_GET['page'] : 1;
$items_per_page = 4;
$items_total_count = Photo::count_all();

$paginate = new Paginate($page, $items_per_page, $items_total_count);

$sql = "SELECT * FROM photos LIMIT {$items_per_page} OFFSET {$paginate->offset()}";

$photos = Photo::find_by_query($sql);

// $photos = Photo::find_all();

?>

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-12 text-center">
                <div class="img-box-grid">
                    <?php foreach ($photos as $photo): ?>
                        <div>
                            <a href="photos.php?id=<?php echo $photo->id; ?>" class="thumbnail">
                                <img src="admin/<?php echo $photo->picture_path(); ?>" alt="">
                            </a>
                        </div>
                    <?php endforeach;?>
                </div>
                <ul class="pager">
                    <?php if ($paginate->page_total() > 1): ?>
                        <?php if ($paginate->has_next()): ?>
                            <li class="next"><a href="">Next</a></li>
                        <?php endif;?>
                    <?php endif;?>
                </ul>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <!-- <div class="col-md-4">
                 <#?php include "includes/sidebar.php";?>
            </div> -->
            <!-- Blog Sidebar Widgets Column -->


        <!-- /.row -->
        <?php include "includes/footer.php";?>
