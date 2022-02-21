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
                            <li class="next"><a href="?page=<?php echo $paginate->next(); ?>">Next</a></li>
                        <?php endif;?>
                    <?php endif;?>

                    <?php for ($i = 1; $i <= $paginate->page_total(); $i++): ?>
                        <?php if ($i == $paginate->current_page) {
    echo "<li><a class='bg-active' href='?page={$i}'>${i}</a></li>";
} else {
    echo "<li><a href='?page={$i}'>${i}</a></li>";
}?>
                    <?php endfor;?>

                    <?php if ($paginate->has_previous()): ?>
                        <li class="previous"><a href="?page=<?php echo $paginate->previous(); ?>">Previous</a></li>
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
