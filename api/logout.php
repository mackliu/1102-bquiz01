<?php
include_once "../base.php";

unset($_SESSION['login']);

to("../index.php?do=login");
?>