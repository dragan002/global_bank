<?php

require_once('../../../private/initialize.php'); 

$test = $_GET['test'] ?? '';

if($test == '404') {
    error_404();
} elseif($test == '500') {
    error_500();
} elseif($test == 'redirect') {
    redirect_to(url_for('/staff/subjects/index.php'));
} 
?>

<?php $page_title = 'Create Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="pages new">
    <h1>Create Page</h1>

    <form action="<?php echo url_for('/staff/pages/create.php'); ?>" method="post">
      <dl>
        <dt>Page Name</dt>
        <dd><input type="text" name="page_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Pages" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>


