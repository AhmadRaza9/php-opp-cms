            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheadings</small>
                        </h1>
<?php

// $user = new User();
// $user->username = "username";
// $user->password = "password";
// $user->first_name = "first_name";
// $user->last_name = "last_name";

// $user->create();

$user = User::find_user_by_id(12);
$user->delete();

?>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <!-- <li class="active">
                                <i class="fa fa-file"></i>
                            </li> -->
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
