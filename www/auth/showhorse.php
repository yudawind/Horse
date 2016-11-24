<?


$lvl =  " AND `lvl` = 30";
$breding = " AND `breeding` > 0";



$sql = "SELECT * FROM `horses` WHERE `available` = 1 ORDER BY `breed` DESC";
$res = mysqli_query($CONNECT,$sql) or die(mysqli_error() ."<br/>". $sql);
$rows = [];
while ($row = mysqli_fetch_assoc($res))
{
    $rows[] = $row;
}

echo json_encode($rows);


?>
