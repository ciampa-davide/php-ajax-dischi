<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/app.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <?php
      include __DIR__ . "/partial/element.php";
      foreach ($response as $disk) { ?>
        <div class="box">
          <img src="<?php echo $disk["poster"] ?>" />
          <h4><?php echo $disk["title"] ?></h4>
          <p><?php echo $disk["author"] ?></p>
          <h5><?php echo $disk["year"] ?></h5>
          </div>
        <?php } ?>

  </div>
</body>
</html>
