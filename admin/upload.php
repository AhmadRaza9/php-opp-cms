<?php include "includes/header.php";?>
<?php if (!$session->is_signed_in()) {redirect("login.php");}?>

<?php
$message = "";
if (isset($_POST['submit'])) {

    $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->set_file($_FILES['file_upload']);

    if ($photo->save()) {
        $message = "Photo uploaded Successfully";
    } else {
        $message = join("<br>", $photo->errors);
    }

}

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
                            Uploads
                        </h1>

                        <?php echo $message; ?>
                        <div class="col-md-4">
                            <form action="upload.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" placeholder="Enter Image Title">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="file_upload" class="form-control">
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
  <?php include "includes/footer.php";?>