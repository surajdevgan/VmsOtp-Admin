<?php
$dbhost = 'SQL5047.site4now.net';
$dbuser = 'DB_A4F590_Libs_admin';
$dbpass = 'VNMGSP2019';
$db = 'DB_A4F590_Libs';


$serverName = "SQL5047.site4now.net"; 
$connectionInfo = array( "Database"=>"DB_A4F590_Libs", "UID"=>"DB_A4F590_Libs_admin", "PWD"=>"VNMGSP2019");

sqlsrv_connect( $serverName, $connectionInfo);

@sqlsrv_select_db($db);
?>