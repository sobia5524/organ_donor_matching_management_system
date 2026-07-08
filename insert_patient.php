<?php
include 'db.php';

$conn->query("INSERT INTO Patients (name,blood_group,organ_required,urgency,status)
VALUES ('$_POST[name]','$_POST[blood]','$_POST[organ]','$_POST[urgency]','Waiting')");

header("Location: index.php");
?>