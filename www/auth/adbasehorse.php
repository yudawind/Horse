
<?

if ($_POST['addhorse_f']) {

    mysqli_query($CONNECT, 'INSERT INTO `horses` VALUES ("", "' . $_POST['available'] . '", "' . $_SESSION['id'] . '", "' . $_POST['breed'] . '", "' . $_POST['horsname'] . '", "' . $_POST['sex'] . '", "' . $_POST['lvl'] . '", "' . $_POST['breeding'] . '", "' . $_POST['speed'] . '", "' . $_POST['accel'] . '", "' . $_POST['turn'] . '", "' . $_POST['brake'] . '", "' . $_POST['health'] . '", "' . $_POST['power'] . '","' . $_POST['mom'] . '","' . $_POST['dad'] . '","' . $_POST['01'] . '","' . $_POST['02'] . '","' . $_POST['03'] . '","' . $_POST['04'] . '","' . $_POST['05'] . '","' . $_POST['06'] . '","' . $_POST['07'] . '","' . $_POST['08'] . '","' . $_POST['09'] . '","' . $_POST['10'] . '","' . $_POST['11'] . '","' . $_POST['12'] . '","' . $_POST['13'] . '","' . $_POST['14'] . '","' . $_POST['15'] . '","' . $_POST['16'] . '","' . $_POST['17'] . '","' . $_POST['18'] . '","' . $_POST['19'] . '","' . $_POST['20'] . '","' . $_POST['21'] . '","' . $_POST['22'] . '","' . $_POST['23'] . '","' . $_POST['24'] . '" )');

//    go('addhorse');

}

$order = 'id';

//if ($_POST['swbred_f']) {
//    $order = $_POST['orderby']; // WHERE `available` = 1 AND `breeding` > 0 AND `lvl` = 30
//}



$sql = "SELECT * FROM `horses` ORDER BY `available` DESC, `breed` DESC";
$res = mysqli_query($CONNECT,$sql) or die(mysqli_error() ."<br/>". $sql);
echo '

<div id="moikoni">';

$table = "";
//вывод построчно

while ($row = mysqli_fetch_assoc($res))
{
    $table .= '<div class="odlosh"><a href="/edithorse/'.$row['id'].'">';
    $table .= "<span class='img'><img src='/tpl/img/".$row['breed'].".png'> </span>";
    $table .= "<span class='sex'><img width='14' src='/tpl/img/sex0".$row['sex'].".png'> </span>";
    $table .= "<p class='center'><b>&laquo;".$row['horsname']."&raquo;</b><br>";
    $table .= "<span class='fleft'>#<span >".$row['id']."</span></span> ";
    $table .= "<span class='fright'>порода ".$row['breed']."</span></p>";
    $row['speed'] = sprintf("%.1f",$row['speed']/10);
    $row['accel'] = sprintf("%.1f",$row['accel']/10);
    $row['turn'] = sprintf("%.1f",$row['turn']/10);
    $row['brake'] = sprintf("%.1f",$row['brake']/10);
    $table .= "<div class='param'>
            <table>
                <tr>
                    <td>здоровье<br>
                    ".$row['health']."
                    </td>
                    <td>энергия<br>
                    ".$row['power']."
                    </td>
                </tr>
                <tr>
                    <td>скорость<br>
                    ".$row['speed']."
                    </td>
                    <td>поворот<br>
                    ".$row['turn']."
                    </td>
                </tr>
                <tr>
                    <td>ускорение<br>
                    ".$row['accel']."
                    </td>
                    <td>торможение<br>
                    ".$row['brake']."
                    </td>
                </tr>
            </table>";

    $table .= '</a></div>
</div>';
}
echo $table;
echo "</div>";

?>
