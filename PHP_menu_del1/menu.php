<div class="menu">

<?php
$curpage = basename ($_SERVER['PHP_SELF']);
    
    
?>
<?php
$curpage = basename ($_SERVER['PHP_SELF']);
?>
<ul>
    <li><a href="index.php"<?php if ($curpage =='index.php') { echo 'class="active"';} ?>>Hjem</a> </li>
   <li><a href="ommig.php" <?php if ($curpage =='ommig.php') { echo 'class="active"';} ?> >Hvem er jeg</a> </li>
   <li><a href="arbejde.php" <?php if ($curpage =='arbejde.php') { echo 'class="active"';} ?> >Her ses hvordan det dur</a> </li>
</ul>






<?php //if ($curpage =='index.php') { echo 'class="active"';} ?>