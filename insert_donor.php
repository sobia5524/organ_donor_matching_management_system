<?php
include 'db.php';

$conn->query("INSERT INTO Donors (name,blood_group,organ_type,availability_status)
VALUES ('$_POST[name]','$_POST[blood]','$_POST[organ]','Available')");

header("Location: index.php");
?>