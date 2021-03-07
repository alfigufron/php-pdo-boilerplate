<?php
  require './services/user.php';

  $user = new User();
  $user_data = $user->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice LSP</title>
</head>
<body>
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
    </tr>
    <?php foreach ($user_data as $key => $val): ?>
    <tr>
      <th><?= $key+1 ?></th>
      <th><?= $val->name ?></th>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>