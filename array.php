<?php
$link   = mysql_connect('localhost', 'raju', 'newnew');
$status = explode('  ', mysql_stat($link));
print_r($status);
?>