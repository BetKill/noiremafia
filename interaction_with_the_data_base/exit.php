<?php
  session_start();
  session_unset();
  session_destroy();
	header('Location: https://noiremafia.ru/index.php');
	exit();
?>