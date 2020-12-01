<?php
session_start();
if (!isset($_SESSION['username']))
    header('location:signin.php?error=Please login again!');
?>
<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <title>Sudoku LeaderBoard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="LeaderBoard.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.13.0-web/css/all.css">

</head>
<body>

<table class="ET">
    <p class="titelEM">Highest completions in Easy mode</p>
    <tr>
        <td>Rank</td>
        <td>User</td>
        <td>Completions</td>
    </tr>

    <?php
    $db=mysqli_connect("localhost","root","","Sudoku");
    $result = mysqli_query($db,"SELECT username,rankEasy FROM users ORDER BY rankEasy DESC");
    $rankE = 1;

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['rankEasy'] != 0) {
                echo "<tr><td>{$rankE}</td>
                      <td>{$row['username']}</td>
                      <td>{$row['rankEasy']}</td>
                      </tr>";

                $rankE++;
            }
        }

    }
    ?>
</table>


<table class="NT">
    <p class="titelNM">Highest completions in Normal mode</p>
    <tr>
        <td>Rank</td>
        <td>User</td>
        <td>Completions</td>
    </tr>
    <?php
    $db=mysqli_connect("localhost","root","","Sudoku");
    $result = mysqli_query($db,"SELECT username,rankNormal FROM users ORDER BY rankNormal DESC");
    $rankN = 1;

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['rankNormal'] != 0) {
                echo "<tr><td>{$rankN}</td>
                      <td>{$row['username']}</td>
                      <td>{$row['rankNormal']}</td>
                      </tr>";

                $rankN++;
            }
        }

    }
    ?>
</table>
<p class="titelHM">Highest completions in Hard mode</p>
<table class="HT">
    <tr>
        <td>Rank</td>
        <td>User</td>
        <td>Completions</td>
    </tr>
    <?php
    $db=mysqli_connect("localhost","root","","Sudoku");
    $result = mysqli_query($db,"SELECT username,rankHard FROM users ORDER BY rankHard DESC");
    $rankH = 1;

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['rankHard'] != 0) {
                echo "<tr><td>{$rankH}</td>
                      <td>{$row['username']}</td>
                      <td>{$row['rankHard']}</td>
                      </tr>";

                $rankH++;
            }
        }

    }
    ?>
</table>
</body>

</html>


