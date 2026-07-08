<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>❤️ Donors</h2>

<form method="post">
Name: <input name="name">
Blood: <input name="blood">
Organ: <input name="organ">
<button name="add">Add Donor</button>
</form>

<?php
if(isset($_POST['add'])){
$conn->query("INSERT INTO Donors (name,blood_group,organ_type,availability_status)
VALUES ('$_POST[name]','$_POST[blood]','$_POST[organ]','Available')");
}
?>

<table>
<tr><th>Name</th><th>Blood</th><th>Organ</th></tr>

<?php
$r=$conn->query("SELECT * FROM Donors");
while($row=$r->fetch_assoc()){
echo "<tr>
<td>{$row['name']}</td>
<td>{$row['blood_group']}</td>
<td>{$row['organ_type']}</td>
</tr>";
}
?>
</table>