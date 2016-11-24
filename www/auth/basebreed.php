<?
    $order = 'breed';

    if ($_POST['swbred_f']) {
        $order = $_POST['orderby'];
    }

    $sql = "SELECT * FROM `breed_horses` ORDER BY ".$order." DESC";
    $res = mysqli_query($CONNECT,$sql) or die(mysqli_error() ."<br/>". $sql);

echo '

<div id="moikoni">';

$table = "";
//вывод построчно

while ($row = mysqli_fetch_assoc($res))
{
    $table .= "<div class='odlosh'>";
    $table .= "<span class='fleft'>#".$row['id']."</span> ";
    $table .= "<span class='fright'>порода ".$row['breed']."</span>";
    $table .= "<br><span class='img'><img src='/tpl/img/".$row['breed'].".png'> </span>";
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

    $table .= "</div></div>";
}
echo $table;
echo "</div>";

?>
