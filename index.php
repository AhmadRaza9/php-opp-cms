<?php include "includes/header.php";?>

<?php

$photos = Photo::find_all();

?>

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-12">

            <?php foreach ($photos as $photo): ?>

            <?php endforeach;?>
                <div class="thumbnails row">
                    <div class="col-xs-6 col-md-3">
                        <a href="" class="thumbnail">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <!-- <div class="col-md-4">
                 <#?php include "includes/sidebar.php";?>
            </div> -->
            <!-- Blog Sidebar Widgets Column -->


        <!-- /.row -->
        <?php include "includes/footer.php";?>
