<?php

session_start();
session_destroy();

header('Location: /sqledu/index.php');

?>