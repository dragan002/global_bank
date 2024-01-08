<?php

require_once('../../../private/initialize.php'); 

if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
}

$id = $_GET['id'];


if(is_post_request()) {

    $page = [];
    $$page['id'] = $id;
    $page['menu_name'] = $_POST['menu_name'] ?? '';
    $page['position'] = $_POST['position'] ?? '';
    $page['visible'] = $_POST['visible'] ?? '';

    $result = update_page($page);
    redirect_to(url_for('staff/subjects/show.php?id='. $id));
} else {
  $page = find_pages_by_id($id);
}
?>

<?php $page_title = 'Edit page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Pages</h1>

    <form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo h($page['menu_name']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <?php
              for($i = 1; $i <= page_count($page); $i++) {
                echo "<option value=\"{$i}\"";
                if($subject['position'] == $i) {
                  echo " selected";
                }
                echo ">{$i}</option>";
              }
            ?>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" <?php if($subject['visible'] == '1') {echo 'checked';} ?> />
        </dd>
      </dl>
      <dl>

      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>


