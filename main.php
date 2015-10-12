<?php
//defining initial values
$level = 0;
$gear = 0;
$strength = $level + $gear;
//checks which button was clicked
if (isset($_POST['lvl_in'])) {
	$level++;
}
elseif (isset($_POST['lvl_de'])) {
	$level = $level - 1;
}
elseif (isset($_POST['gear_in'])) {
	$gear++;
}
elseif (isset($_POST['gear_de']) && $gear > 0) {
	$gear = $gear - 1;
}
?>
<!DOCTYPE html>
<html>
  <body>
  
  </body>
</html
