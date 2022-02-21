<?php include "includes/header.php";?>

<?php if (!$session->is_signed_in()) {redirect("login.php");}?>

<?php

$page = !empty($_GET['page']) ? (int) $_GET['page'] : 1;
$items_per_page = 4;
$items_total_count = Photo::count_all();

$paginate = new Paginate($page, $items_per_page, $items_total_count);

$sql = "SELECT * FROM photos LIMIT {$items_per_page} OFFSET {$paginate->offset()}";

$photos = Photo::find_by_query($sql);

?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">


        <?php include "includes/top_nav.php";?>



            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <?php include "includes/sidebar.php";?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Photos
                            <small>Subheading</small>
                        </h1>
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
                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>File Name</th>
                                        <th>Size</th>
                                        <th>View Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($photos as $photo): ?>
                                    <tr>
                                        <td>
                                            <img class="admin-photo-thumbnail"  src= "<?php echo $photo->picture_path(); ?>">
                                            <div class="pictures_links">
                                                <a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
                                                <a href="edit_photo.php?id=<?php echo $photo->id; ?>">Edit</a>
                                                <a href="/photos.php?id=<?php echo $photo->id; ?>">View</a>
                                            </div>
                                        </td>

                                        <td><?php echo $photo->id; ?></td>
                                        <td><?php echo $photo->title; ?></td>
                                        <td><?php echo $photo->filename; ?></td>
                                        <td><?php echo $photo->size; ?></td>
                                        <td>
                                            <p class="badge"><?php $comments = Comment::find_the_comments($photo->id);
echo count($comments);?></p>
                                            <a href="comments_photo.php?id=<?php echo $photo->id; ?>">View All Comments</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>

                        </div>




                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php";?>