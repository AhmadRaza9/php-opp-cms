<?php include "includes/header.php";?>

<?php if (!$session->is_signed_in()) {redirect("login.php");}?>

<?php

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
                            <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="username">username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div  class="photo-info-box">
                                        <div class="info-box-header">
                                            <h4>Save</h4>
                                            <span data-toggle="collapse" data-target="#demo" id="toggle" class="glyphicon glyphicon-menu-up pull-right"></span>
                                        </div>
                                        <div class="inside collapse in" id="demo">
                                            <div class="box-inner">
                                                <p class="text">
                                                    <span class="glyphicon glyphicon-calendar"></span> Uploaded on: April 22, 2030 @ 5:26
                                                </p>
                                                <p class="text ">
                                                    User Id: <span class="data photo_id_box"></span>
                                                </p>
                                                <p class="text">
                                                    Username: <span class="data"></span>
                                                </p>
                                                <p class="text">
                                                    First Name: <span class="data"></span>
                                                </p>
                                                <p class="text">
                                                    Last Name: <span class="data"></span>
                                                </p>
                                            </div>
                                            <div class="info-box-footer clearfix">
                                                <div class="info-box-delete pull-left">
                                                    <a  href="delete_photo.php?id=1" class="btn btn-danger btn-lg ">Delete</a>
                                                </div>
                                                <div class="info-box-update pull-right ">
                                                    <input type="submit" name="update" value="Update" class="btn btn-primary btn-lg ">
                                                </div>
                                            </div>
                                        </div>
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