<?php 

require_once('../../../Private/initialize.php'); 

$test = $_GET['test'] ?? '';

if($test == '404') {
	error_404();
} elseif($test == '500') {
	error_500();
} elseif($test == 'redirect') {
	redirect_to(url_for('/admin/subjects/index.php'));
}
?>

<?php $page_title='Create Subject';?>
<?php include(SHARED_PATH. '/staff_header.php');?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/admin/subjects/index.php'); ?>">&laquo; Back to List </a>

	<div class="subject new">
		<h1>Create Subject</h1>

		<form action="" method="post">
			<dl>
				<dt>Menu Name</dt>
				<dd><input type="text" name="menu_name" value="" /></dd>
			</dl>
			<dl>
				<dt>Position</dt>
				<dd>
					<select name="Position">
						<option value="1">1</option>
					</select>

				</dd>
			</dl>
			<dl>
				<dt>Visible</dt>
				<dd>
					<input type="hidden" name="Visible" value="0" />
					<input type="checkbox" name="Visible" value="1" />
				</dd>
			</dl>
			<div id="operations">
				<input type="submit" value="Create Subject" />

			</div>
		</form>
	</div>
</div>

<?php include(SHARED_PATH. '/admin_footer.php'); ?>