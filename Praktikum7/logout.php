<?php
session_start();
session_destroy();
header("Location: 1formlogin.php");
