<?php include "../functions.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <main>
        <a name="post1"></a>
        <article>
            <?php 
            $sql = "SELECT * FROM post WHERE post_id=$_GET[id]";
            $result = mysqli_query($connection, $sql);
            $array = mysqli_fetch_assoc($result);
            echo "<h2 class='post-title-border'>$array[post_title]</h2>";
            echo "<div class='post-body-border'>";
            
            echo "<p>$array[post_body]</p>";    
            echo "</div>";
            ?>
        </article>
        <p>Comment: </p>
        <?php
            $sql = "SELECT * FROM comment WHERE post_id=$_GET[id]";
            $result = mysqli_query($connection, $sql);
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div>";

                echo "Comment ID: " . $row['comment_id'] . ": " . $row['comment_body'];

                echo "</div>";
            }
        ?>
    </main>
</body>
</html>
<?php mysqli_close($connection); ?>