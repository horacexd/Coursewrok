<?php include '../functions.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../styles/publish.css">
    </head>
    <body>
        <form method="post">
            <?php
                if (isset($_GET['video_id'])) {
                    $sql = "SELECT * FROM video WHERE video_id=$_GET[video_id];";
                    $result = mysqli_query($connection, $sql);
                    if (!$result) {
                        echo "Cannot retrieve date with video id!";
                    }
                    $array = mysqli_fetch_assoc($result);
                }
            ?>
            <label for="videoTitle">Video Title</label>
            <input class="input-title-box" type="text" id="videoTitle" name="video_title" value=
                '<?php
                    if (isset($_GET['video_id'])) {
                        echo $array['video_title'];
                    } else {
                        echo "";
                    }
                ?>'
            > 
            <label for="videoSourceLink">Video Source Link (.mp4)</label>
            <input class="input-link-box" type="text" id="videoSourceLink" name="video_link" value=
                '<?php
                    if (isset($_GET['video_id'])) {
                        echo $array['video_link'];
                    } else {
                        echo "";
                    }
                ?>'
            >
            <label for="description">Description</label>
            <input class="input-description-box" type="text" id="description" name="video_description" value=
                '<?php
                    if (isset($_GET['video_id'])) {
                        echo $array['video_description'];
                    } else {
                        echo "";
                    }
                ?>'
            >
            <input class="publish-btn" type="submit" name="submit" value="Publish">
            <?php publish(); ?>
        </form>
    </body>
</html>
<?php mysqli_close($connection); ?>

