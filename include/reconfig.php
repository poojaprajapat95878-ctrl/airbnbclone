<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Hostname me ye dalna hai:
    $rstate = new mysqli("srv1995.hstgr.io", "u202559097_developer", "kumarsanu@#$1245", "u202559097_houssie");
    $rstate->set_charset("utf8mb4");
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "Database connection failed!";
    exit;
}

$set = $rstate->query("SELECT * FROM `tbl_setting`")->fetch_assoc();
date_default_timezone_set($set['timezone']);

$main = $rstate->query("SELECT * FROM `tbl_prop`")->fetch_assoc();
?>

