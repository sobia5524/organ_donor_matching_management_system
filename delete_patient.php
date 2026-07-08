<?php
include 'db.php';
$conn->query("DELETE FROM Patients WHERE patient_id=$_GET[id]");
header("Location: patients.php");
?>