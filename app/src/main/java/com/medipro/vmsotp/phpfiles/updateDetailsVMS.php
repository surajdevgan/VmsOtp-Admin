<?php

$serverName = "SQL5047.site4now.net"; 
$connectionInfo = array( "Database"=>"DB_A4F590_Libs", "UID"=>"DB_A4F590_Libs_admin", "PWD"=>"VNMGSP2019");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


$id=$_POST['User_ID'];
$name = $_POST['Doneby'];
$zone = $_POST['Zone'];
$client = $_POST['Client'];
$dealer = $_POST['Dealer'];
$count = $_POST['Count'];
$printcnt = $_POST['Printcnt'];
$vmskey = $_POST['vmskey'];
$requestid = $_POST['RequestId'];
$LastBal= $_POST['LastBalance'];
date_default_timezone_set('Asia/Kolkata');
$time = date('d-m-Y H:i');

$filmsize = $_POST['Filmsize'];
$dealerId = $_POST['DealerID'];
$updatedpapercount = $_POST['updatedpapercount'];

if ($dealerId == null)
    $dealerId = 0;


$query = "UPDATE OTPUsers set Count='$count' where User_ID = $id";



$query1 = "INSERT INTO Recharge ([User_id],[DoneBy],[PrintCnt],[Client],[Dealer],[Zone],[Date],[Filmsize],[vmskey],[Dealerid],[Requestid], [LastBal]) VALUES('$id','$name','$printcnt','$client','$dealer','$zone','$time','$filmsize','$vmskey','$dealerId','$requestid','$LastBal')";

$result = sqlsrv_query($conn,$query);
$result1 = sqlsrv_query($conn,$query1);
$response =array();

 if($result && $result1){
 	$response['success']=1;
 	$response['message']="Sucessfully";

	 $query3 = "UPDATE DealerRechargeCheck set Papercount='$updatedpapercount' where Dealerid = '$dealerId' and papersize = '$filmsize'";
	 $result3 = sqlsrv_query($conn,$query3);

 }else{
 	$response['success']=0;
 	$response['message']="Failure";
 }
 echo json_encode($response);

?>





