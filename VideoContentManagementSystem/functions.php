<?php
    $connection = mysqli_connect('localhost', 'root', 'root', 'vms');
    if (!$connection) {
        die("Fail to connect to database: " . mysqli_error($connection));
    }



    function view() {
        if (isset($_POST['view'])) {
            header("Location: subpages/video.php?video_id=$_POST[video_id]");
        }
    }

    function delete() {
        global $connection;
        if (isset($_POST['delete'])) {
            $id = $_POST['video_id'];
            $sql = "DELETE FROM video WHERE video_id=$id;";
            $result = mysqli_query($connection, $sql);
            if (!$result) {
                echo "Cannot DELETE video!";
            } else {
                header("Refresh: 0");
            }
        }
    }

    function edit() {
        if (isset($_POST['edit'])) {
            header("Location: subpages/publish.php?video_id=$_POST[video_id]");
        }
    }

    function publish() {
        global $connection;
        if (isset($_POST['submit'])) {
            if (strlen($_POST['video_title']) > 0 && strlen($_POST['video_description']) > 0 && strlen($_POST['video_link']) > 0) {
                // Edit Video Post, Update with information
                if (isset($_GET['video_id'])) {
                    $sql = "UPDATE video SET 
                        video_title='$_POST[video_title]', 
                        video_description='$_POST[video_description]', 
                        video_link='$_POST[video_link]' 
                    WHERE video_id=$_GET[video_id];";

                    $result = mysqli_query($connection, $sql);
                    if (!$result) {
                        echo "Cannot update video post!";
                    } else {
                        header("Location: ../index.php");
                    }
                } else {
                // Create a new post
                    $sql = "INSERT INTO video (video_title, video_description, video_link) VALUES ('$_POST[video_title]', '$_POST[video_description]', '$_POST[video_link]');";
                    $result = mysqli_query($connection, $sql);
                    if (!$result) {
                        echo "Cannot create the new post!";
                    } else {
                        header("Location: ../index.php");
                    }
                }
            }
        }
    }
?>