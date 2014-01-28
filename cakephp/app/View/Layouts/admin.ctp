<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $title_for_layout; ?>
  </title>
  <?php
  echo $this->Html->meta('icon');

  echo $this->Html->css('dist/css/bootstrap');
  echo $this->Html->css('style');

  echo $this->fetch('meta');
  echo $this->fetch('css');
  echo $this->fetch('script');
  ?>
</head>
<body>
    <?php echo $this->Session->flash(); ?>

    <?php echo $this->fetch('content'); ?>

  </body>
  </html>

