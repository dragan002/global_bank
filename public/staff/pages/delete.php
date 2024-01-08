<?php
require_once('../../../private/initialize.php');

$page = [];
$page['id'] = $_GET['id'];

if (delete_page($page)) {
    redirect_to(url_for('staff/pages/index.php'));
} else {
    echo "Delete failed";
}
?>
