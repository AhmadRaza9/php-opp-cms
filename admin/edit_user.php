<?php include "includes/header.php";?>

<?php if (!$session->is_signed_in()) {redirect("login.php");}?>

<?php

if (empty($_GET['id'])) {
    redirect("users.php");
}

$user = User::find_by_id($_GET['id']);

if (isset($_POST['update'])) {

    if ($user) {

        $user->username = $_POST['username'];
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->password = $_POST['password'];

        $user->save();
        redirect("users.php");
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

                        <form method="POST" >
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php echo $user->username; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo $user->first_name; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="<?php echo $user->last_name; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $user->password; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="update" value="Update" class="btn btn-primary pull-right">
                                    </div>
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