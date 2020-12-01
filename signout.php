<?php
session_start();
session_unset();
session_destroy();
header('location:signin.php?bye=Hope we see you later!');
?>