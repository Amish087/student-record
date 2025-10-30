<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $attendance = $_POST['attendance'];
  $course = $_POST['course'];

  $conn->query("UPDATE students SET name='$name', attendance='$attendance', course='$course' WHERE id=$id");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Student</title></head>
<body>
  <h2>Edit Student</h2>
  <form method="POST">
    Name: <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>
    Email: <input type="attendance" name="attendance" value="<?= $student['attendance'] ?>" required><br><br>
    Course: <input type="text" name="course" value="<?= $student['course'] ?>" required><br><br>
    <button type="submit">Update</button>
  </form>
</body>
</html>
