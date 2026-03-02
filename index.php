<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php viteClient(); ?>
  <?php viteEntry('src/css/style.scss'); ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo viteAsset('src/assets/favicon.ico'); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="src/assets/favicon.ico" />
    <title>Brainwave</title>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
    </body>
</html>