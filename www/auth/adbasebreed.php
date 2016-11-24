
<?

if ($_POST['addbreed_f']) {

    mysqli_query($CONNECT, 'INSERT INTO `breed_horses` VALUES ("", "' . $_POST['breed'] . '", "' . $_POST['grade'] . '", "' . $_POST['speed'] . '", "' . $_POST['accel'] . '", "' . $_POST['turn'] . '", "' . $_POST['brake'] . '", "' . $_POST['health'] . '", "' . $_POST['power'] . '", "' . $_POST['weight'] . '", "' . $_POST['gwhite'] . '", "' . $_POST['gblack'] . '", "' . $_POST['gred'] . '", "' . $_POST['gblue'] . '" )');

    go('addbreed');

}

?>
