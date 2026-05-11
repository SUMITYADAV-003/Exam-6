<?php
$conn = mysqli_connect("localhost", "root", "", "collection_db");
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<table border="1">
  <tr>
    <th>ID</th><th>Name</th><th>Email</th>
  </tr>
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
  </tr>
  <?php } ?>
</table>