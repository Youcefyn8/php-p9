<?php

session_start();
session_destroy();

$ur1 = "/login.php";
header("Location: {$ur1}", 302);