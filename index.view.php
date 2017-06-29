<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learning PHP</title>
    <style media="screen">
      header {
        background: #e3e3e3;
        padding: 1rem;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php foreach ($tasks as $task): ?>
      <li>
        <?php if ($task->completed): ?>
          <strike><?php echo $task->description ?></strike>
        <?php else: ?>
          <?php echo $task->description ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </body>
</html>
