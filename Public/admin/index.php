<?php require_once('../../Private/initialize.php'); ?>

<?php $page_title = 'Admin Menu'; ?>
<?php include(SHARED_PATH. '/admin_header.php'); ?>

<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
        <li><a href="<?php echo url_for('/admin/subjects/index.php');?>">Blogs</a>
            </li>
            <li><a href="<?php echo url_for('/admin/pages/index.php');?>">Trip Types</a>
            </li>
            <li><a href="<?php echo url_for('/admin/packages/index.php');?>">Trip Packages</a>
            </li>
        </ul>
    </div>
</div>

<?php include(SHARED_PATH. '/admin_footer.php'); ?>
