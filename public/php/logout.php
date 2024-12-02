<?php

session_start();
session_destroy();
header('Refresh: 2; URL = ../index.php');

?>