<?php
define('DBHOST','s165.cyber-folks.pl');
define('DBUSER','grad_konrad');
define('DBPASSWD','Konrad1234_');
define('DBBAZA','grad_konrad');
$con=mysqli_connect(DBHOST,DBUSER,DBPASSWD,DBBAZA);
$con->query('SET NAMES utf8');

?>