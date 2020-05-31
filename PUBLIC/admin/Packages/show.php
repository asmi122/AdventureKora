<?php require_once('../../../Private/initialize.php'); ?>

<?php

$id = isset($_GET['id'])? $_GET['id']:'1';
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div id="content">

	<a class="back-link" href="<?php echo url_for('/admin/subjects/index.php');?>">&laquo; Back to List </a>

	<div class="subject show">

		Subject ID: <?php echo h($id); ?>
	</div>
</div>
