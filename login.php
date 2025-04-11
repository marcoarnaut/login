<?php
session_start();
include "../../incl/lib/connection.php";
require "../incl/dashboardLib.php";
$dl = new dashboardLib();


if(isset($_POST["userName"])) {
    $_SESSION["accountID"] = 1;
    header('Location: ..');
    exit();
}

$loginbox = '<form action="" method="post">
    <div class="form-group">
        <label for="usernameField">Username</label>
        <input type="text" class="form-control" id="usernameField" name="userName">
    </div>
    <div class="form-group">
        <label for="passwordField">Password</label>
        <input type="password" class="form-control" id="passwordField" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Log In</button>
</form>';

$dl->printLoginBox($loginbox);
?>
