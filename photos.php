
<?php include "includes/header.php";?>
<?php include "includes/navigation.php";?>
<?php

if (empty($_GET['id'])) {
    redirect("index.php");
}
$message = '';
$photo = Photo::find_by_id($_GET['id']);

if (isset($_POST['submit'])) {
    $author = trim($_POST['author']);
    $body = trim($_POST['body']);

    $new_comment = Comment::create_comment($photo->id, $author, $body);

    if ($new_comment && $new_comment->save()) {
        redirect("photos.php?id={$photo->id}");
    } else {
        $message = "There was some problems saving";
    }
} else {
    $author = "";
    $body = "";
}

$comments = Comment::find_the_comments($photo->id);

?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $photo->title; ?></h1>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="/admin/images/<?php echo $photo->filename; ?>" alt="">
                <hr>
                <p><strong><?php echo $photo->caption; ?></strong></p>
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
                <?php foreach ($comments as $comment): ?>
                    <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $comment->author; ?></h4>
                                <p><?php echo $comment->body; ?></p>
                            </div>
                    </div>
                <?php endforeach;?>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <!-- <div class="col-md-4">
                <#?php include "includes/sidebar.php";?>
            </div> -->

        </div>
        <!-- /.row -->

<?php include "includes/footer.php";?>