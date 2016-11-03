<?php

$dbc = mysql_connect('localhost', 'DATABASUSER', 'USERPASSWORD');  // host, user, password
mysql_select_db('DATABASETABLE', $dbc); // databasename

// get the table name
$data_table = 'expfactory';
?>
