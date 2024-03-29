<?php 
    require_once('../../private/initialize.php');
    $page_title = "Staff menu";
    include(SHARED_PATH . '/staff_header.php');
?>
    
    <div id="content">
        <div id="main-menu">
            <h2>Main Menu</h2>
            <ul>
                <li><a href="<?php echo url_for('staff/subjects/index.php'); ?>">Subject</a></li>
                <li><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Pages</a></li>
            </ul>
        </div>    
    </div>
        
<?php
    include(SHARED_PATH . '/staff_footer.php');
?>