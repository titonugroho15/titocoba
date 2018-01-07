<?php
define("HOST", "localhost"); // Host database
define("USER", "root"); // Usernama database
define("PASSWORD", ""); // Password database
define("DATABASE", "database"); // Nama database

$condb = mysql_connect(HOST,USER,PASSWORD);
$mysql = mysql_select_db(DATABASE,$condb);
?>