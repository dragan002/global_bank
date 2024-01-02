<?php
// Include initialization file
require_once('../../../private/initialize.php'); 

// Sample data for pages
$pages = [
    ['id' => '1', 'page_name' => 'Home'],
    ['id' => '2', 'page_name' => 'Blog'],
    ['id' => '3', 'page_name' => 'Contact Us'],
];

// Set the page title
$page_title = "Pages";

// Include the header
include(SHARED_PATH . '/staff_header.php');
?>

<div id="content">
    <div class="pages_listing">
        <h1><?= $page_title ?></h1>
        <div class="actions">
            <a href="" class="action">Add page</a>
        </div>

        <table class="list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Page Name</th>
                    <th>&nbsp;</th> <!-- Header columns for actions -->
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pages as $page) : ?>
                    <tr>
                        <td><?= h($page['id']); ?></td>
                        <td><?= h($page['page_name']); ?></td>
                        <td><a href="<?= url_for('/staff/pages/show.php?id=' .h(u($page['id']))); ?>" class="action">View</a></td>
                        <td><a href="<?= url_for('/staff/pages/edit.php?id=' . $page['id']) ?>" class="action">Edit</a></td>
                        <td><a href="<?= url_for('/staff/pages/delete.php?id=' . $page['id']) ?>" class="action">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include(SHARED_PATH . '/staff_footer.php');
?>
