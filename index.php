<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
    include __DIR__ . "/partial/element.php";


    echo $response;

    foreach ($response as $disk) { ?>
      <img src="<?php echo $disk["poster"] ?>" />
      <p><?php echo $disk["title"] ?></p>
      <p><?php echo $disk["author"] ?></p>
      <p><?php echo $disk["genre"] ?></p>
      <p><?php echo $disk["year"] ?></p>
    <?php } ?>
   <img src="" alt="">
   <p></p>
</body>
</html>
