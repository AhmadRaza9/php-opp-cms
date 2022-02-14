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
$all_users = User::find_all_users();
while ($user = mysqli_fetch_array($all_users)) {
    echo $user['username'] . "<br>";

}

$user_by_id = User::find_user_by_id(2);
echo $user_by_id['username'] . "<br>";

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
