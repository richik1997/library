<?php

include "db_connect.php";
session_start();
session_destroy();
header('Location: login_page.php')
?>