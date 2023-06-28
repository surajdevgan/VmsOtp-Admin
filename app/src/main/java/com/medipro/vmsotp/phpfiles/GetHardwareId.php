
<?php

$serverName = "SQL5047.site4now.net"; 
$connectionInfo = array( "Database"=>"DB_A4F590_Libs", "UID"=>"DB_A4F590_Libs_admin", "PWD"=>"VNMGSP2019");
$conn = sqlsrv_connect( $serverName, $connectionInfo);



$hardware = $_POST['HardwareId'];
$dealerId = $_POST['dealerid'];



$query = "SELECT * from Vmslist where Hardwareid = '$hardware'";

$result = sqlsrv_query($conn,$query);
$rows=sqlsrv_has_rows($result);


if(!$rows===false)
{ 

	$response['students'] = array();

	
while($row=sqlsrv_fetch_array($result))

		{
			array_push($response['students'], $row);

		break;
			
}



	

			$response['message']="Login Sucessful";

}



		

	
else{

 	$response['message']="Login Failure";

 }

 echo json_encode($response);


?>


