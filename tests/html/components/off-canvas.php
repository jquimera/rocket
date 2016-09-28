<?php 
  $navP = 'inside';
  $navN = 'slide-in';
  $pagegroup = 'off-canvas';
 ?>
<?php include '../part/head.php'; ?>
<body>
<div class="container">
  <h2 class="main-heading"><span>components: </span>off-canvas<span></span></h2>
</div>

<?php 
  $navs = array('slide-in', 'slide-along', 'slide-out', 'rotate-in', 'rotate-out', 'rotate-in-reverse', 'scale-down', 'scale-up', 'open-door', 'push', 'reveal', 'drawer');

  foreach ($navs as $nav) {
    echo '<div class="container"><h3><a href="off-canvas-' . $nav . '.html">' . $nav . '</a></h3></div><iframe src="off-canvas-' . $nav . '.html" scrolling="no" frameborder="0"></iframe>';
  };
?>

</body>
</html>