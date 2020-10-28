<?php include "functions.php"; ?>
<?php session_start(); ?>
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <button><a href="subpages/createPost.php">Write a New Post</a></button>
    <hr /> 

        <?php 

            $sql = "SELECT * FROM post";
            $result = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            echo <<<HEREDOC
                <div style="display: flex;">
                    <span style="flex-grow:3;">$row[post_title]</span>
                    <div>
                        <form method="post">
                            <input type="hidden" name="id" value=$row[post_id] />
                            <input type="submit" name="edit" value="Edit" />
                            <input type="submit" name="delete" value="Delete" />
                            <input type="submit" name="view" value="View" />
                        </form>
                    </div>
                </div>
            HEREDOC;
            }

            edit();
            delete();
            view();
        ?>
</body>
</html>
<?php mysqli_close($connection); ?>