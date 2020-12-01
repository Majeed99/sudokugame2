<?php
session_start();
if (!isset($_SESSION['username']))
    header('location:signin.php?error=Please login again!');
?>

    <!DOCTYPE html>



    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>SudokuHomePage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="homepageStyle.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.13.0-web/css/all.css">

    </head>
    <body>

    <div class="username"><i class="fas fa-user-tie user"></i> <?php echo $_SESSION['username'] ?></php></div>


    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <p class="title">Welcome To sudoku</p>
            </div>
            <div class="card-body">
                <div id="navi">
                    <a class="btn float-right btn-lg  w-50 menu_btn"  href ="LeaderBoard.php" ><i class="fas fa-crown crown"></i>LeaderBoard</a>
                    <button class="btn float-right btn-lg  w-50 dropbtn menu_btn" onclick="myFunction()"><i class="fas fa-gamepad gamepad"></i>New Game</button>
                    <a class="btn float-right btn-lg  w-50 menu_btn" id="tutorial" href ="ExpertCheck.php"><i class="far fa-question-circle QuestionMark"></i>Tutorial</a></div>

                <div class="list" id="myDropdown">
                    <a href="EasyMode.php"><div class="mode"><i class="far fa-star star"></i>Easy Mode</div></a>
                    <a href="NormalMode.php"><div class="mode"><i class="fas fa-star-half-alt star"></i>Normal Mode</div></a>
                <a href="HardMode.php"><div class="mode"><i class="fas fa-star star"></i>Hard Mode</div></a>
                </div>


                <a  href="signout.php" class="btn float-right btn-lg signout_btn">Logout</a>
            </div>
        </div>

    </div>
    <script>

    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }
    </script>
    </body>
    </html>

<?php
