<?php  require "app/view/partials/head.php"?>
<h1> add student page</h1>

<form action="/student/store" method="post" >
    <input type="text" name="name" placeholder="name">
    <input type="text" name="major" placeholder="major">
    <button type="submit" > create</button>

</form>
<?php  require "app/view/partials/footer.php"?>
