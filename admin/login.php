<?php require_once "./includes/header.php";?>
<?php

if ($session->is_signed_in()) {
    redirect('index.php');
}
$the_message = "";

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Method to check database user
    $user_found = User::verify_user($username, $password);

    if ($user_found) {
        $session->login($user_found);
        redirect('/admin');
    } else {
        $the_message = "Your username or password are incorrect ";
    }

} else {
    $username = "";
    $password = "";
    $the_message = "";

}

?>



<div class="col-md-4 col-md-offset-3">
<h6 class='bg-danger text-white'><?php if (!empty($the_message)) {echo $the_message;}?></h6>
    <form id="login-id" action="" method="post">
        <div class="form-group">
            <label for="username" class="text-white">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password" class="text-white">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </div>
    </form>
</div>

<?php require_once "./includes/footer.php";
