<?php include '../functions.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/video.css">
</head>

<body>
    <main class="content">
        <div class="video-content">
            <?php 
                $video_id = $_GET['video_id'];
                $sql = "SELECT * FROM video WHERE video_id=$video_id";
                $result = mysqli_query($connection, $sql);

                if (!$result) {
                    echo "Cannot retrieve data from database!";
                }
                $array = mysqli_fetch_assoc($result); 
            ?>
            <div class="video-title">
                <?php echo $array['video_title'];?>
            </div>
            <iframe width="650" height="350" src="
                <?php
                    echo $array['video_link'];
                ?>" 
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="video-description">
                <p>Video Description</p>
                <p><?php echo $array['video_description'];?></p>
            </div>
        </div>
        <div class="recommend-content">
            <div class="video-snapshot">
                <img src="../resource/images/video-snapshot.png"/>
                <div class="video-snapshot-title">
                   
                    Video Title: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </div>
            </div>
            <div class="video-snapshot">
                <img src="../resource/images/video-snapshot.png"/>
                <div class="video-snapshot-title">
                    Video Title: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="video-snapshot">
                <img src="../resource/images/video-snapshot.png"/>
                <div class="video-snapshot-title">
                    Video Title: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="video-snapshot">
                <img src="../resource/images/video-snapshot.png"/>
                <div class="video-snapshot-title">
                    Video Title: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="video-snapshot">
                <img src="../resource/images/video-snapshot.png"/>
                <div class="video-snapshot-title">
                    Video Title: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="video-snapshot">
                <img src="../resource/images/video-snapshot.png"/>
                <div class="video-snapshot-title">
                    Video Title: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="video-snapshot">
                <img src="../resource/images/video-snapshot.png"/>
                <div class="video-snapshot-title">
                    Video Title: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<?php mysqli_close($connection); ?>