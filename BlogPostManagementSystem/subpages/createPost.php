<?php include '../functions.php';?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/createPost.css">
</head>

<body>
    <form method="post">
        <?php
            if (isset($_GET['id'])) {
                $sql = "SELECT * FROM post WHERE post_id=$_GET[id]";
                $result = mysqli_query($connection, $sql);
                $array = mysqli_fetch_assoc($result);
            }
        ?>
            <label for="postTitle">Post Title</label>
            <input class="post-title-input" type="text" id="postTitle" name="postTitle" value=
                '<?php
                    if (isset($_GET['id'])) {
                        echo $array['post_title'];
                    } else {
                        echo "";
                    }
                ?>'
            >
            <label for="postBody">Post Body</label>
            <input class="post-body-input" type="text" id="postBody" name="postBody" value=
                "<?php
                    if (isset($_GET['id'])) {
                        echo $array['post_body'];
                    } else {
                        echo "";
                    }
                ?>"
            >
            <input class="post-publish-btn" type="submit" name="publish" value="Publish">
    </form>
    <?php publish(); ?>
</body>
</html>
<?php mysqli_close($connection); ?>