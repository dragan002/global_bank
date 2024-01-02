<?php
    require_once('../../../private/initialize.php');

    $id = h($_GET['id']) ?? '1';

    $page_title = "Show page";
    include(SHARED_PATH . '/staff_header.php');
?>
<div id="content">
    <a class="back-link" href="<?php echo url_for('staff/pages/index.php'); ?>">&laquo; Back to list</a>
</div>

<div id="page show">
    Page ID: <?php echo h($id); ?>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>