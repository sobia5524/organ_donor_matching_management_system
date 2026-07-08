<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>Patients by Priority</h2>

<table>
<tr><th>Name</th><th>Urgency</th></tr>

<?php
$r=$conn->query("SELECT name, urgency FROM Patients 
ORDER BY 
FIELD(urgency, 'Critical', 'High', 'Medium', 'Low')");

while($row=$r->fetch_assoc()){
echo "<tr>
<td>{$row['name']}</td>
<td>{$row['urgency']}</td>
</tr>";
}
?>
</table>