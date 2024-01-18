<?php
session_start();
session_unset();
session_destroy();
header("location: ../user_sign_log.php#user_signup");
?>