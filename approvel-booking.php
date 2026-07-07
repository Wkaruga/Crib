<?php

session_start();
include("../includes/db.php");

if(!isset($_SESSION['user_id']) || $_SESSION['role']!="Landlord")
{
    header("Location: ../auth/login.php");
    exit();
}

$id=$_GET['id'];

pg_query($conn,"
UPDATE bookings
SET booking_status='Approved'
WHERE booking_id='$id'
");

header("Location: booking-requests.php");
exit();

?>
