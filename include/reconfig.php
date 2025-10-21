<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  $rstate = new mysqli("sql105.ezyro.com", "ezyro_40218432", "59076358d4df375", "ezyro_40218432_houssie");
  $rstate->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  //Should be a message a typical user could understand
}
    
	$set = $rstate->query("SELECT * FROM `tbl_setting`")->fetch_assoc();
	date_default_timezone_set($set['timezone']);
	
	$main = $rstate->query("SELECT * FROM `tbl_prop`")->fetch_assoc();
	
?>
