<?php require_once('../../../Private/initialize.php'); ?>

<?php

$id = isset($_GET['id'])? $_GET['id']:'1';

echo h($id);

?>

<a href="show.php?name=<?php echo u('John Doe');?>">Link</a></br>
<a href="show.php?company=<?php echo u('Adventure&Kora');?>">Link</a></br>
<a href="show.php?query=<?php echo u('#$%^');?>">Link</a></br>
