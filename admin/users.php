<?php include "includes/header.php";?>

<?php if (!$session->is_signed_in()) {redirect("login.php");}?>

<?php

$users = User::find_all();

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
                        <div class="col-lg-12 my-flex">
                            <h1 class="page-header">
                                Users
                            </h1>
                            <p class="alert alert-info">You Can't Change Profile Image.</p>
                        </div>
                        <div class="col-lg-12">
                            <a href="add_user.php" class="btn btn-success mb-4">Add New</a>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> users
                            </li>
                        </ol>
                        </div>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td><?php echo $user->id; ?></td>
                                            <td><img style="width:100px;" src= "images/placeholder.png"></td>
                                            <td>
                                                <?php echo $user->username; ?>
                                                <div class="pictures_links">
                                                    <a href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>
                                                    <a href="edit_user.php?id=<?php echo $user->id; ?>">Edit</a>
                                                    <a href="">View</a>
                                                </div>
                                            </td>
                                            <td><?php echo $user->first_name; ?></td>
                                            <td><?php echo $user->last_name; ?></td>
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