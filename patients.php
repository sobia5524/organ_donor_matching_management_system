<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>👨‍⚕️ Patients</h2>

<form method="post">
Name: <input name="name">
Blood: <input name="blood">
Organ: <input name="organ">
Urgency: <input name="urgency">
<button name="add">Add Patient</button>
</form>

<?php
if(isset($_POST['add'])){
$conn->query("INSERT INTO Patients (name,blood_group,organ_required,urgency,status)
VALUES ('$_POST[name]','$_POST[blood]','$_POST[organ]','$_POST[urgency]','Waiting')");

header("Location: index.php?msg=added");
exit();
}
?>

<table>
<tr><th>Name</th><th>Blood</th><th>Organ</th><th>Urgency</th></tr>

<?php
$result=$conn->query("SELECT * FROM Patients");
while($row=$result->fetch_assoc()){
echo "<tr>
<td>{$row['name']}</td>
<td>{$row['blood_group']}</td>
<td>{$row['organ_required']}</td>
<td>{$row['urgency']}</td>

<td>
<a href='update_patient.php?id={$row['patient_id']}'>Edit</a>
</td>

<td>
<a href='delete_patient.php?id={$row['patient_id']}'>Delete</a>
</td>

</tr>";
}
?>
</table>