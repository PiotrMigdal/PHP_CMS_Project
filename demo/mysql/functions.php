<?php
    include "db.php";
    function createUser(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];

            //Sanitize
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);

            //Encrypt
            //there are several methods, we will use Blowfish
            //https://www.php.net/manual/en/function.crypt.php

            //Create hash from the websit
            $hash_format = '$2y$10$';
            //Create salt, it can be anything but longer than 21 characters
            $salt = 'thisiscreazysaltsaltsaltiuseforencryption0';
            $hashF_and_salt = $hash_format . $salt;
            //Encrypt passsword
            $password = crypt($password, $hashF_and_salt);


            $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
            if($connection){
                echo 'good';
            } else {
                die("Db connection failed");
            }
            $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("Error inserting data");
            }
        }
    }

    function readUsers(){
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("Error inserting data");
        }
        while($row = mysqli_fetch_assoc($result)){
        ?>
            <pre>
        <?php
            print_r($row);
        ?>
            </pre>
        <?php
        }
    }

    //Select all
    function selectAll(){
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("Error selecting data" . mysqli_error());
        }
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function updateUser(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];

            $query = "UPDATE users SET username='$username',password = '$password' WHERE id = $id";
            $result = mysqli_query($connection, $query);
            if(!$result){
                die("QUERY FAILED" . mysqli_error($connection));
            }
        }
    }
    function deleteUser(){
        if(isset($_POST['submit'])){
            global $connection;
            $id = $_POST['id'];

            $query = "DELETE FROM users WHERE id = $id";
            $result = mysqli_query($connection, $query);
            if(!$result){
                die("QUERY FAILED" . mysqli_error($connection));
            }
        }
    }
