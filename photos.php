
<?php include "includes/header.php";?>
<?php include "includes/navigation.php";?>
<?php include "admin/includes/init.php";?>
<?php

if (empty($_GET['id'])) {
    redirect("index.php");
}

$photo = Photo::find_by_id($_GET['id']);

if (isset($_POST['sumbit'])) {

}

?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>Blog Post Title</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="/admin/images/<?php echo $photo->filename; ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $photo->title; ?></p>
                <p><?php echo $photo->description; ?></p>
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->


                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="POST">
                        <div class="form-group">
                            <input type="text" name="author" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <textarea name="body" class="form-control" rows="3" placeholder="Comment"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>



                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <?php include "includes/sidebar.php";?>
            </div>

        </div>
        <!-- /.row -->

<?php include "includes/footer.php";?>