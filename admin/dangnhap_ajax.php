<?php
    session_start();
    if (isset($_POST['uid']) && isset($_POST['email']))
    {
        $_SESSION['uid'] = $_POST['uid'];
        $_SESSION['email'] = $_POST['email'];
        return true;
    }
    else
    {
        return false;
    }
?>