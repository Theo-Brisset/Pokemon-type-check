
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title><?= $title ?></title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
      <link href="styles/style.css" rel="stylesheet" /> 
   </head>

   <body>
      <?php require_once('header.php'); ?>
      <?= $header ?>
      <?= $content ?>
      <?php require_once('footer.php'); ?>
      <?= $footer ?>
   </body>
</html>