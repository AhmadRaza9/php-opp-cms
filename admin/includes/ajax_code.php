<?php require_once "init.php";?>

<?php

$user = new User;
if (isset($_POST['image_name'])) {
    $user->ajax_save_user_image($_POST['image_name'], $_POST['user_id']);
    redirect("edit_user.php?id=$user->id");

}

?>
