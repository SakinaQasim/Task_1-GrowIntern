<?php
session_start();
session_destroy();
header('location: /jobportal/account/login');
?>