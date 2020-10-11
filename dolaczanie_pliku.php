<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Początek pliku
  <?php
    include './3_1_file.php';
    include './3_1_file.php';
    include_once './3_1_file.php';
    include_once './3_2_file.php';
    include_once './3_2_file.php';

    echo 'Require:';
    require './3_2_file.php';
    echo 'Require once:';
    require_once './3_2_file.php';

  ?>
  Koniec pliku
</body>
</html>
