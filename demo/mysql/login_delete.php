<?php
    include "db.php";
    include "functions.php";
    deleteUser();
    $title = "Delete";
    include "includes/header.php";
?>
    <form action="login_delete.php" method="post">
        <div class="form-group">
            <select name="id" id="">
                <?php
                    selectAll();
                ?>
            </select>
        </div>
        <input type="submit" name="submit" value="delete">
    </form>
<?php
include "includes/footer.php";
?>