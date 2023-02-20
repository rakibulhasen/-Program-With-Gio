<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php
  $title = 'This is a Heading';
  $des = 'This is a paragraph.';
?>

<?php
  $x = 12;
  $y = &$x;

  $x = 23;

  echo $y;
?>

<h1><?= $title ?></h1>
<p><?= $des ?></  p>

</body>
</html>