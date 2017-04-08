
<?
$horseid = array_shift($URL_Parts);
$_POST['id'] = $horseid;

if ($_POST['edithorse_f']) {
    mysqli_query($CONNECT, 'UPDATE `horses` SET  `breed`="' . $_POST['breed'] . '", `available`="' . $_POST['available'] . '", `horsname`="' . $_POST['horsname'] . '", `sex`="' . $_POST['sex'] . '", `lvl`="' . $_POST['lvl'] . '", `breeding`="' . $_POST['breeding'] . '", `speed`="' . $_POST['speed'] . '", `accel`="' . $_POST['accel'] . '", `turn`="' . $_POST['turn'] . '", `brake`="' . $_POST['brake'] . '", `health`="' . $_POST['health'] . '", `power`="' . $_POST['power'] . '", `mom`="' . $_POST['mom'] . '", `dad`="' . $_POST['dad'] . '", `01`="' . $_POST['01'] . '", `02`="' . $_POST['02'] . '", `03`="' . $_POST['03'] . '", `04`="' . $_POST['04'] . '", `05`="' . $_POST['05'] . '", `06`="' . $_POST['06'] . '", `07`="' . $_POST['07'] . '", `08`="' . $_POST['08'] . '", `09`="' . $_POST['09'] . '", `10`="' . $_POST['10'] . '", `11`="' . $_POST['11'] . '", `12`="' . $_POST['12'] . '", `13`="' . $_POST['13'] . '", `14`="' . $_POST['14'] . '", `15`="' . $_POST['15'] . '", `16`="' . $_POST['16'] . '", `17`="' . $_POST['17'] . '", `18`="' . $_POST['18'] . '", `19`="' . $_POST['19'] . '", `20`="' . $_POST['20'] . '", `21`="' . $_POST['21'] . '", `22`="' . $_POST['22'] . '", `23`="' . $_POST['23'] . '", `24`="' . $_POST['24'] . '" WHERE `id` = "' . $_POST['id'] . '"');
//    go('edithorse/179');
}

$sql = "SELECT * FROM `horses` WHERE `id` = '" . $_POST['id'] . "'";
$res = mysqli_query($CONNECT,$sql) or die(mysqli_error() ."<br/>". $sql);
$row = mysqli_fetch_assoc($res);

$sqlm = "SELECT * FROM `horses` WHERE `id` = '" . $row['mom'] . "'";
$resm = mysqli_query($CONNECT,$sqlm) or die(mysqli_error() ."<br/>". $sql);
$rowm = mysqli_fetch_assoc($resm);

$sqld = "SELECT * FROM `horses` WHERE `id` = '" . $row['dad'] . "'";
$resd = mysqli_query($CONNECT,$sqld) or die(mysqli_error() ."<br/>". $sql);
$rowd = mysqli_fetch_assoc($resd);

echo '
<div id="moikoni">';

$table = "";

    $table .= "<div class='odlosh'><div class='rod'><a href='/edithorse/".$rowm['id']."'> ";
    $table .= "<span class='img'><img src='/tpl/img/".$rowm['breed'].".png'> </span>";
    $table .= "<span class='sex'><img width='14' src='/tpl/img/sex0".$rowm['sex'].".png'> </span>";
    $table .= "</a></div>";

    $table .= "<div class='rod'><a href='/edithorse/".$rowd['id']."'>";
    $table .= "<span class='img'><img src='/tpl/img/".$rowd['breed'].".png'> </span>";
    $table .= "<span class='sex'><img width='14' src='/tpl/img/sex0".$rowd['sex'].".png'> </span>";
    $table .= "</a></div></div>";

    $table .= "<div class='odlosh'>";
    $table .= "<span class='img'><img src='/tpl/img/".$row['breed'].".png'> </span>";
    $table .= "<span class='sex'><img width='14' src='/tpl/img/sex0".$row['sex'].".png'> </span>";
    $table .= "</div>";
echo $table;

if ($row['sex']==1) {
    $select = '>Ж</option><option selected';
} else $select = ' selected>Ж</option><option';

for ($i=1;$i<10;$i++) {
    if ($row['0'.$i]==1) $row['0'.$i]='1" checked';
    else $row['0'.$i]='0"';
}
for ($i=10;$i<25;$i++) {
    if ($row[$i]==1) $row[$i]='1" checked';
    else $row[$i]='0"';
}
echo '</div>

    <div class="adbreed"><span>#'.$row['id'].'</span>
        <p><label for="horsname">Кличка</label><br><input name="horsname" type="text" value="'.$row['horsname'].'" id="horsname"></p>
        <p><label for="sex">пол</label><br>
            <select name="sex" id="sex">
                <option value="0" '.$select.' value="1">М</option>
            </select>
        </p>
        <p><label for="lvl">уровень</label><br><input type="number" value="'.$row['lvl'].'" id="lvl"></p>
        <p><label for="available">наличие в стойле</label><br><input type="number" value="'.$row['available'].'" id="available"></p>
        <p><label for="breeding">размножений</label><br><input type="number" value="'.$row['breeding'].'" id="breeding"></p>
        <p><label for="breed">порода</label><br><input name="breed" type="number" value="'.$row['breed'].'" id="breed"></p>
        <p><label for="mom">мать</label><br><input name="mom" type="number" value="'.$row['mom'].'" id="mom"></p>
        <p><label for="dad">отец</label><br><input name="dad" type="number" value="'.$row['dad'].'" id="dad"></p>
        <p><label for="health">здоровье</label><br><input type="number" value="'.$row['health'].'" id="health"></p>
        <p><label for="power">энергия</label><br><input type="number" value="'.$row['power'].'" id="power"></p>
        <p><label for="speed">скорость</label><br><input type="number" value="'.$row['speed'].'" id="speed"></p>
        <p><label for="accel">ускорение</label><br><input type="number" value="'.$row['accel'].'" id="accel"></p>
        <p><label for="turn">поворот</label><br><input type="number" value="'.$row['turn'].'" id="turn"></p>
        <p><label for="brake">торможение</label><br><input type="number" value="'.$row['brake'].'" id="brake"></p>
        <p>
            <label class="skil sk01"><input class="chbs" type="checkbox" value="'.$row['01'].' id="01">01</label>
            <label class="skil sk02"><input class="chbs" type="checkbox" value="'.$row['02'].' id="02">02</label>
            <label class="skil sk03"><input class="chbs" type="checkbox" value="'.$row['03'].' id="03">03</label>
            <label class="skil sk04"><input class="chbs" type="checkbox" value="'.$row['04'].' id="04">04</label>
            <label class="skil sk05"><input class="chbs" type="checkbox" value="'.$row['05'].' id="05">05</label>
            <label class="skil sk06"><input class="chbs" type="checkbox" value="'.$row['06'].' id="06">06</label>
            <label class="skil sk07"><input class="chbs" type="checkbox" value="'.$row['07'].' id="07">07</label>
            <label class="skil sk08"><input class="chbs" type="checkbox" value="'.$row['08'].' id="08">08</label>
            <label class="skil sk09"><input class="chbs" type="checkbox" value="'.$row['09'].' id="09">09</label>
            <label class="skil sk10"><input class="chbs" type="checkbox" value="'.$row['10'].' id="10">10</label>
            <label class="skil sk11"><input class="chbs" type="checkbox" value="'.$row['11'].' id="11">11</label>
            <label class="skil sk12"><input class="chbs" type="checkbox" value="'.$row['12'].' id="12">12</label>
            <label class="skil sk13"><input class="chbs" type="checkbox" value="'.$row['13'].' id="13">13</label>
            <label class="skil sk14"><input class="chbs" type="checkbox" value="'.$row['14'].' id="14">14</label>
            <label class="skil sk15"><input class="chbs" type="checkbox" value="'.$row['15'].' id="15">15</label>
            <label class="skil sk16"><input class="chbs" type="checkbox" value="'.$row['16'].' id="16">16</label>
            <label class="skil sk17"><input class="chbs" type="checkbox" value="'.$row['17'].' id="17">17</label>
            <label class="skil sk18"><input class="chbs" type="checkbox" value="'.$row['18'].' id="18">18</label>
            <label class="skil sk19"><input class="chbs" type="checkbox" value="'.$row['19'].' id="19">19</label>
            <label class="skil sk20"><input class="chbs" type="checkbox" value="'.$row['20'].' id="20">20</label>
            <label class="skil sk21"><input class="chbs" type="checkbox" value="'.$row['21'].' id="21">21</label>
            <label class="skil sk22"><input class="chbs" type="checkbox" value="'.$row['22'].' id="22">22</label>
            <label class="skil sk23"><input class="chbs" type="checkbox" value="'.$row['23'].' id="23">23</label>
            <label class="skil sk24"><input class="chbs" type="checkbox" value="'.$row['24'].' id="24">24</label>
        </p>
        <p>
            <button onclick="post_add(\'editbasehorse/'.$_POST['id'].'\', \'edithorse\',
        \'horsname.sex.lvl.breed.speed.available.breeding.accel.turn.brake.health.power.mom.dad.01.02.03.04.05.06.07.08.09.10.11.12.13.14.15.16.17.18.19.20.21.22.23.24\')">
                Редактировать
            </button>
        </p>
    </div>

';
//go('edithorse/179');


?>
