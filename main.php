<?php
function counterStart()
{
	//starts session
	session_start();
	//defines initial values
	$_SESSION['level']    = ((isset($_SESSION['level'])) ? $_SESSION['level'] : 1);
	$_SESSION['gear']     = ((isset($_SESSION['gear'])) ? $_SESSION['gear'] : 0);
	$_SESSION['strength'] = $_SESSION['level'] + $_SESSION['gear'];
	//checks which button was clicked
	if (isset($_POST['lvl_in'])) {
		$_SESSION['level']++;
	}
	elseif (isset($_POST['lvl_de']) && $_SESSION['level'] > 1) {
		$_SESSION['level']--;
	}
	elseif (isset($_POST['gear_in'])) {
		$_SESSION['gear']++;
	}
	elseif (isset($_POST['gear_de']) && $_SESSION['gear'] > 0) {
		$_SESSION['gear']--;
	}
	elseif (isset($_POST['restart'])) {
		session_unset();
	}
}
counterStart();
?>
<!DOCTYPE html>
<html>
   <body>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <b>Level:</b>
	 <?php print $_SESSION['level'];?><br />
         <input type="submit" name="lvl_in" value="+">
         <input type="submit" name="lvl_de" value="-"><br />
         <b>Gear:</b>
         <?php print $_SESSION['gear'];?><br />
         <input type="submit" name="gear_in" value="+">
         <input type="submit" name="gear_de" value="-"><br />
         <b>Strength:</b>
         <?php print $_SESSION['strength'];?><br />
         <input type="submit" name="restart" value="Restart">
      </form>
   </body>
</html>
