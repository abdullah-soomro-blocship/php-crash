<?php

session_start(); // Must be called before accessing any session data


session_destroy();

header('Location: /php-crash/13_sessions.php');


?>