<?php include "includes/header.php";?>

<?php if (!$session->is_signed_in()) {redirect("login.php");}?>

<?php

$message = '';
$user = new User();

if (isset($_POST['submit'])) {

    if ($user) {

        $user->username = $_POST['username'];
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->password = $_POST['password'];
        $user->set_file($_FILES['user_image']);
        $user->save_user_and_image();
        $user->save();
        $message = "User Successfully Added";
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
                            Add new user
                        </h1>

                        <form method="POST" enctype="multipart/form-data">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" name="user_image" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-primary pull-right">
                                    </div>
                                    <?php echo $message; ?>
                                </div>
                            </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->



  <?php include "includes/footer.php";?>