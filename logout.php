<?php
include "connect.php";
include "functionssignin.php";
session_destroy();
header('location:index.php');
?>