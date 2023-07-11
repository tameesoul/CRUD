<?php  require "app/view/partials/head.php"?>
<?php  if(!empty($students)) ?>
<?php  foreach($students as $student) :?>
    <h1><?= $student->name ?></h1>
    <h1><?= $student->major ?></h1>
<?php  require "app/view/partials/footer.php"?>
<?php endforeach ?>