<?php include "functions.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/index.css">
    </head>
    <body>
        <a class="button" href="subpages/publish.php">Upload and Post a New Video</a>
        <hr />
        
        <?php
            $sql = "SELECT video_id, video_title FROM video;";
            $result = mysqli_query($connection, $sql);
        
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div style='display:flex;'>";
                echo "<span style='flex-grow:3;'>$row[video_title]</span>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='video_id' value=$row[video_id] />";
                echo "<input type='submit' name='edit' value='Edit' />";
                echo "<input type='submit' name='delete' value='Delete' />";
                echo "<input type='submit' name='view' value='View' />";
                echo "</form>";
                echo "</div>";
            }

            delete();
            view();
            edit();
        ?> 
    </body>
</html>

<?php mysqli_close($connection); ?>