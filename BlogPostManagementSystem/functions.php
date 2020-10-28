<?php
    $connection = mysqli_connect('localhost', 'root', 'root', 'bms');
    if (!$connection) {
        die('Database connection failed. '. mysqli_error($connection));
    }

    function edit() {
        if (isset($_POST['edit'])) {
            header("Location: subpages/createPost.php?id=" . $_POST['id']);
        }
    }

    function delete() {
        global $connection;
        if (isset($_POST['delete'])) {
            $sql = "DELETE FROM post WHERE post_id = $_POST[id];";
            $result = mysqli_query($connection, $sql);
            if (!$result) {
                echo "Failed to Delete the post";
            } else {
                header("Refresh: 0");
            }
        }
    }

    function view() {
        if (isset($_POST['view'])) {
            header("Location: subpages/main.php?id=" . $_POST['id']);
        }
    }

    function publish() {
        global $connection;
        if (isset($_POST['publish'])) {
            if (strlen($_POST['postTitle']) > 0 && strlen($_POST['postBody']) > 0) {
                // Edit the post
                if (isset($_GET['id'])) {
                    $sql = "UPDATE post SET post_title='$_POST[postTitle]', post_body='$_POST[postBody]' WHERE post_id=$_GET[id]";
                    $result = mysqli_query($connection, $sql);
                    if (!$result) {
                        echo "Failed to edit the post";
                    } else {
                        header("Location: ../index.php");
                    }
                } else {
                // publish new post
                    $sql = "INSERT INTO post (post_title, post_body) VALUES('$_POST[postTitle]', '$_POST[postBody]');";
                    $result = mysqli_query($connection, $sql);
                    if (!$result) {
                        echo "Failed to create a new post";
                    } else {
                        header("Location: ../index.php");
                    }
                }
            }
        }
    }
?>