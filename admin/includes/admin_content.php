            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheadings</small>
                        </h1>
<?php

// $users = new User();
// $result_set = User::find_all_users();
// while ($user = mysqli_fetch_array($result_set)) {
//     echo $user['username'] . "<br>";

// }

// $found_user = User::find_user_by_id(2);
// $user = User::instantiation($found_user);
// var_dump($user);

// $users = User::find_all_users();
// foreach ($users as $user) {
//     echo $user->username . "<br>";
// }

$found_user = User::find_user_by_id(2);
echo $found_user->username

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
