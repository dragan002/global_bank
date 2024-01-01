<?php 
    require_once('../../private/initialize.php');
    $page_title = "Staff menu";
    include(SHARED_PATH . '/staff_header.php');
?>
    
    <div id="content">
        <div id="main-menu">
            <h2>Main Menu</h2>
            <ul>
                <li><a href="subjects/index.php">Subject</a></li>
                <?php  echo $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7 . "<br>"; ?>
                <?php  echo $doc_root;?>
            </ul>
        </div>    
    </div>
        
<?php
    include(SHARED_PATH . '/staff_footer.php');
?>