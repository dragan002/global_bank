<?php
require_once('../../../private/initialize.php');

$subject = [];
$subject['id'] = $_GET['id'];

if (delete_subject($subject)) {
    redirect_to(url_for('staff/subjects/index.php'));
} else {
    echo "Delete failed";
}
?>
