<?php
include 'db.php';
$id=$_GET['id'];

$result=$conn->query("SELECT * FROM Patients WHERE patient_id=$id");
$row=$result->fetch_assoc();
?>

<form method="post">

Name: <input name="name" value="<?php echo $row['name']; ?>"><br><br>

Blood: <input name="blood" value="<?php echo $row['blood_group']; ?>"><br><br>

Organ: <input name="organ" value="<?php echo $row['organ_required']; ?>"><br><br>

Urgency: <input name="urgency" value="<?php echo $row['urgency']; ?>"><br><br>

<button name="update">Update</button>

</form>

<?php
if(isset($_POST['update'])){
$conn->query("UPDATE Patients SET 
name='$_POST[name]',
blood_group='$_POST[blood]',
organ_required='$_POST[organ]',
urgency='$_POST[urgency]'
WHERE patient_id=$id");

header("Location: patients.php");
}
?>