<?php

$serverName = "SQL5047.site4now.net"; 
$connectionInfo = array( "Database"=>"DB_A4F590_Libs", "UID"=>"DB_A4F590_Libs_admin", "PWD"=>"VNMGSP2019");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>