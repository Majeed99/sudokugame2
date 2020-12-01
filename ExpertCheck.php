<?php
session_start();
if (!isset($_SESSION['username']))
    header('location:signin.php?error=Please login again!');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Expert Check</title>
    <link rel="stylesheet" type="text/css" href="ExpertCSS.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.13.0-web/css/all.css">

</head>
<body>
<div class="username"><i class="fas fa-user-tie user"></i> <?php echo $_SESSION['username'] ?></php></div>

<video class="SudokuVid" width="1050" height="600" controls autoplay>
    <source src="sudokuVid.mp4" type="video/mp4">
</video>

<div class="d-flex justify-content-center h-100">
    <div class="card ">
                <div class="card-header">
                    <p class="titleB">Beginners</p>
                    <p class="intro">If you never played or dont know much about the game, we recommend you watch the video. After watching the
                        video press the button below to try a tutorial.</p>
                    <a class="btn float-right  begin_btn" href ="EasyMode.php">Continue</a>
                </div>


                    <div class="card-body">
                        <p class="titleE">Experts</p>
                        <div>
                            <p class="intro"> If you have played more than you can count or you just wanna skip the tutorial then press the button below.</p>
                                   <a class="btn float-right  skip_btn" href ="index.php">Skip</a>
                                 </div>
                          </div>
                    </div>
</div>
        </div>


</body>




</html>
