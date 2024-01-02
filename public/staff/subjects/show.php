<?php
 require_once('../../../private/initialize.php');

echo htmlspecialchars($id = $_GET['id'] ?? '1');;
?>

<a href="show.php?name=<?php echo u("John Doe"); ?>">Link1</a>
<a href="show.php?company=<?php echo u("Widgets&More"); ?>">Link2</a>
<a href="show.php?query=<?php echo u("!#*?"); ?>">Link3</a>