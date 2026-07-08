<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<br><br>

<div style="display:flex; justify-content:center; align-items:center; gap:30px;">

    <!-- Left nurse -->
    <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png" width="120">

    <!-- Center doctor -->
    <img src="https://cdn-icons-png.flaticon.com/512/2785/2785482.png" width="180">

    <!-- Right female doctor -->
    <img src="https://cdn-icons-png.flaticon.com/512/3304/3304567.png" width="120">

</div>

<p style="font-size:18px; color:#444;">
    Saving lives, one match at a time ❤️
</p>
<body>
<img src="https://cdn-icons-png.flaticon.com/512/2966/2966487.png" width="80">

<h2>Dashboard</h2>
<?php
if(isset($_GET['msg'])){
    echo "<script>alert('Action completed successfully!');</script>";
}
?>

<div>
    <button onclick="location.href='patients.php'">👨‍⚕️ Patients</button>
<button onclick="location.href='donors.php'">❤️ Donors</button>
<button onclick="location.href='matching.php'">🔗 Matching</button>
<button onclick="location.href='available_organs.php'">🫀 Organs</button>
<button onclick="location.href='priority_patients.php'">⚠️ Priority</button></div>
<button onclick="location.href='logout.php'">Logout</button>

</body>
</html>