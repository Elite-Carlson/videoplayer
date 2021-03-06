<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/videoplayer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Informatics.css">
    <link rel="stylesheet" href="css/popups.css">
    <title>Document</title>
</head>
<body style="background-color: #f7f5f5;">
    <div class="header">
        <img src="icons/youtube.png" class="logo">
        <form action="" class="searchbar">
            <input type="text" name="" id="" placeholder="Search" class="search">
            <button type="submit" class="submit">
                <img src="icons/search.png" class="searchlogo">
            </button>
        </form>
        <button class="upload">Upload</button>
    </div>
    <div class="video-player">
        <!--<div class="popup"></div>-->
        <video src="media/mt.mp4" class="video"></video><br>
        <div class="fixedcontrols">
            <div class="bottom">
                <input type="range" name="" id="" class="progressbar" value="0">
                <div class="space">
                    <div class="left">
                        <div class="play"></div>
                        <div class="muted"></div>

                        <!--<div class="rewind"></div>
                <div class="fastforward"></div>-->
                        <div class="time">
                            <p class="currenttime">0:00 </p>
                            <p> / </p>
                            <p class="duration"> 0:00</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="loop"></div>
                        <div class="pip"></div>
                        <!--<div class="cast"></div>-->
                        <div class="fullscreen"></div><!-- too much a pain for a feature i'll probably never use-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="songnamediv">
        <p class="songname">Meghan Trainor - Me Too</p>
        <div>
            <div class="iconsright">
                <div class="like"></div>
                <div class="playlist"></div>
                <div class="menu"></div>
            </div>
        </div>
    </div>
</div>
    <div class="popup">
        <div class="addvideo">
            <div class="cancel"></div>
            <form action="php/upload_script.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="vidtitle" placeholder="Title" value="" name="title"><br>
                <div class="droparea">
                <div class="uploadimg"></div>
                </div>
                <input id="filetext" type="file" onchange="titlechange()" class="fileselect" name="fileupload">
                <label for="filetext" class="filetext">Browse File's</label><br>
                <input type="submit" name="submit" id="" class="uploadfile" value="Upload File"><br>
            </form>
        </div>
    </div>
    <script src="js/videoplayer.js"></script>
    <script src="js/popup.js"></script>
</body>
</html>
<!--https://github.com/Elite-Carlson-->