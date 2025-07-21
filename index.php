<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Record Management</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Student Records</h2>
  <a href="add.php">+ Add Student</a>
  <table>
    <tr>
      <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM students");
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['course'] ?></td>
      <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this record?')">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
