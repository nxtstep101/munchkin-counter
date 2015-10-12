<?php
//defining initial values
$level = 1;
$gear = 0;
$strength = $level + $gear;
//checks which button was clicked
if (isset($_POST['lvl_in'])) {
	$level++;
}
elseif (isset($_POST['lvl_de']) && $level > 1) {
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
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <b>Level</b><br />
         <?php print $level;?>
         <input type="submit" name="lvl_in" value="+"><br />
         <input type="submit" name="lvl_de" value="-">
         <b>Gear</b><br />
         <?php print $gear;?>
         <input type="submit" name="gear_in" value="+"><br />
         <input type="submit" name="gear_de" value="-">
         <b>Strength</b><br />
         <?php print $strength;?>
      </form>
   </body>
</html>
