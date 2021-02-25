<?php
    include "db.php";
    include "functions.php";
    updateUser();
    $title = "Update";
    include "includes/header.php";
?>
    <form action="login_update.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
            <select name="id" id="">
                <?php
                    selectAll();
                ?>
            </select>
        </div>
        <input type="submit" name="submit" value="submit">
    </form>
<?php
include "includes/footer.php";
?>