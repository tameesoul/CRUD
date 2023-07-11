<?php  require "app/view/partials/head.php"?>
<h1>all student page</h1>
<?php  foreach($students as $student) :?>
<a href="/student/show?student_id" <?= $student->student_id?>>
<h1> <?= $student->name ?> </h1>
</a>
<h1> <?= $student->major?> </h1>
<?php endforeach  ?>
<?php  require "app/view/partials/footer.php"?>