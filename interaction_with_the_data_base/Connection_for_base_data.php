<?php
$defline_DB_HOST = 'localhost';
$defline_DB_USER = 'betkill_bd_auto';
$defline_DB_PASSWORD = '!Arturmen1991';
$defline_DB_DB_NAME = 'betkill_bd_auto';
$mysql = @new mysqli($defline_DB_HOST, $defline_DB_USER, $defline_DB_PASSWORD, $defline_DB_DB_NAME);
$mysql->set_charset('utf8');
?>