<?php require"partials/head.php"?>

<?php if(!empty($home))?>
<?php foreach($home as $art) : ?>
   <h1><?= $art["name"]?></h1> 
  <?php require"partials/footer.php"?>
<?php endforeach ?>