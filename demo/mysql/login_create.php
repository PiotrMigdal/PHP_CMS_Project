<?php
    include "db.php";
    include "functions.php";
    createUser();
    $title = "Create";
    include "includes/header.php";
?>
    <form action="login_create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control">
        </div>
        <input type="submit" name="submit" value="submit">
    </form>
<?php
include "includes/footer.php";
?>