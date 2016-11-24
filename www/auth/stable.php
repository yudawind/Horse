<?
$dopmenu = '<a href="/addhorse">Лошади</a>
    <!--<a href="/addbreed">Добавить породу</a>-->
<a href="/showbreed">Породы</a>';

top('Конюшня',$dopmenu) ?>

    <h1>Добавить лошадь</h1>
    <div class="adbreed">
        <p><label for="horsname">Кличка</label><br><input name="horsname" type="text" placeholder="Кличка" id="horsname"></p>
        <p><label for="sex">пол</label><br>
            <select name="sex" placeholder="пол" id="sex">
                <option value="0">Ж</option>
                <option value="1">М</option>
            </select>
        </p>
        <p><input hidden type="number" value="1" placeholder="уровень" id="lvl"></p>
        <p><input hidden type="number" value="1" placeholder="наличие в стойле" id="available"></p>
        <p><label for="breeding">размножения</label><br><input type="number" value="1" placeholder="размножения" id="breeding"></p>
        <p><label for="breed">порода</label><br><input name="breed" type="number" placeholder="порода" id="breed"></p>
        <p><label for="mom">мать</label><br><input name="mom" type="number" placeholder="мать" id="mom"></p>
        <p><label for="dad">отец</label><br><input name="dad" type="number" placeholder="отец" id="dad"></p>
        <p>
            <button onclick="post_add('adbasehorse', 'addhorse',
    'horsname.sex.lvl.breed.mom.dad.available.breeding')">
                Добавить лошадь
            </button>
        </p>
    </div>
    <button onclick="post_stable('showhorse', 'addhorse',
    'lvl.breeding')">
        показать только в конюшнях
    </button>
<div id="addhorse"><?include 'adbasehorse.php'?></div>


<? bottom($dopmenu) ?>