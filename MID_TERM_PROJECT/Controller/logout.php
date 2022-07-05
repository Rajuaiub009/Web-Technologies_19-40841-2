<?php
session_start();
if (isset($_SESSION['uname']))
{
    session_destroy();
    header("../View/Login.php");
}
else{
    header("../View/Login.php");
}

