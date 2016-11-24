<?
$dopmenu = '<a href="/addhorse">Лошади</a>
<!--<a href="/addbreed">Добавить породу</a>-->
<a href="/showbreed">Породы</a>';

top('Добавить лошадь', $dopmenu) ?>

<h1>Добавить лошадь</h1>
<div class="adbreed">
    <p><label for="horsname">Кличка</label><br><input name="horsname" type="text" placeholder="Кличка" id="horsname"></p>
    <p><label for="sex">пол</label><br>
        <select name="sex" placeholder="пол" id="sex">
            <option value="0">Ж</option>
            <option value="1">М</option>
        </select>
    </p>
    <p><label for="lvl">уровень</label><br><input type="number" value="1" placeholder="уровень" id="lvl"></p>
    <p><label for="breeding">размножения</label><br><input type="number" value="1" placeholder="размножения" id="breeding"></p>
    <p><label for="breed">порода</label><br><input name="breed" type="number" placeholder="порода" id="breed"></p>
    <p><label for="mom">мать</label><br><input name="mom" type="number" placeholder="мать" id="mom"></p>
    <p><label for="dad">отец</label><br><input name="dad" type="number" placeholder="отец" id="dad"></p>
    <p><label for="health">здоровье</label><br><input type="number" placeholder="здоровье" id="health"></p>
    <p><label for="power">энергия</label><br><input type="number" placeholder="энергия" id="power"></p>
    <p><label for="speed">скорость</label><br><input type="number" placeholder="скорость" id="speed"></p>
    <p><label for="accel">ускорение</label><br><input type="number" placeholder="ускорение" id="accel"></p>
    <p><label for="turn">поворот</label><br><input type="number" placeholder="поворот" id="turn"></p>
    <p><label for="brake">торможение</label><br><input type="number" placeholder="торможение" id="brake"></p>
    <p>
        <label><input class="chbs" type="checkbox" id="01">01</label>
        <label><input class="chbs" type="checkbox" id="02">02</label>
        <label><input class="chbs" type="checkbox" id="03">03</label>
        <label><input class="chbs" type="checkbox" id="04">04</label>
        <label><input class="chbs" type="checkbox" id="05">05</label>
        <label><input class="chbs" type="checkbox" id="06">06</label>
        <label><input class="chbs" type="checkbox" id="07">07</label>
        <label><input class="chbs" type="checkbox" id="08">08</label>
        <label><input class="chbs" type="checkbox" id="09">09</label>
        <label><input class="chbs" type="checkbox" id="10">10</label>
        <label><input class="chbs" type="checkbox" id="11">11</label>
        <label><input class="chbs" type="checkbox" id="12">12</label>
        <label><input class="chbs" type="checkbox" id="13">13</label>
        <label><input class="chbs" type="checkbox" id="14">14</label>
        <label><input class="chbs" type="checkbox" id="15">15</label>
        <label><input class="chbs" type="checkbox" id="16">16</label>
        <label><input class="chbs" type="checkbox" id="17">17</label>
        <label><input class="chbs" type="checkbox" id="18">18</label>
        <label><input class="chbs" type="checkbox" id="19">19</label>
        <label><input class="chbs" type="checkbox" id="20">20</label>
        <label><input class="chbs" type="checkbox" id="21">21</label>
        <label><input class="chbs" type="checkbox" id="22">22</label>
        <label><input class="chbs" type="checkbox" id="23">23</label>
        <label><input class="chbs" type="checkbox" id="24">24</label>
    </p>
    <p>
        <button onclick="post_add('adbasehorse', 'addhorse',
    'horsname.sex.lvl.breed.available.speed.breeding.accel.turn.brake.health.power.mom.dad.01.02.03.04.05.06.07.08.09.10.11.12.13.14.15.16.17.18.19.20.21.22.23.24')">
            Добавить лошадь
        </button>
    </p>
</div>
<div id="addhorse"><?include 'adbasehorse.php'?></div>
<? bottom() ?>


