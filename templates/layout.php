
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title><?= $title ?></title>
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