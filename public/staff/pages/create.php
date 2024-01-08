<?php
require_once('../../../private/initialize.php'); 

if(is_post_request()) {
    $page = [];
    $page['page_name'] = $_POST['page_name'] ?? '';
    $page['position'] = $_POST['position'] ?? '';
    $page['visible'] = $_POST['visible'] ?? '';

    $result = insert_subject($page);
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for("/staff/subjects/show.php?id=" . $new_id));
    echo $_GET['id'];
} else {
    redirect_to(url_for('/staff/pages/new.php'));
}
?>
