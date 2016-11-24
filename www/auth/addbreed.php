<?
$dopmenu = '<a href="/addhorse">Добавить лошадь</a>
<!--<a href="/addbreed">Добавить породу</a>-->
<a href="/showbreed">Породы</a>';

top('Добавим лошадь',$dopmenu) ?>

    <h1>Добавим лошадь</h1>

    <p>Привет <?echo $_SESSION['email']?></p>


    <h2>добавить породу</h2>
<div hidden class="adbreed">
    <p><input type="number" placeholder="порода" id="breed"></p>
    <p><input type="number" placeholder="ранг" id="grade"></p>
    <p><input type="number" placeholder="скорость" id="speed"></p>
    <p><input type="number" placeholder="ускорение" id="accel"></p>
    <p><input type="number" placeholder="поворот" id="turn"></p>
    <p><input type="number" placeholder="торможение" id="brake"></p>
    <p><input type="number" placeholder="здоровье" id="health"></p>
    <p><input type="number" placeholder="энергия" id="power"></p>
    <p><input type="number" placeholder="вес" id="weight"></p>
    <p><input type="number" placeholder="белый ген" id="gwhite"></p>
    <p><input type="number" placeholder="черный ген" id="gblack"></p>
    <p><input type="number" placeholder="краный ген" id="gred"></p>
    <p><input type="number" placeholder="синий ген" id="gblue"></p>
    <p><button onclick="post_query('adbasebreed', 'addbreed', 'breed.grade.speed.accel.turn.brake.health.power.weight.gwhite.gblack.gred.gblue')">Добавить породу</button> </p>

</div>
<select name="orderby" id="orderby">
    <option value="id">id</option>
    <option value="breed" selected="selected">ПОРОДА</option>
</select>
<button onclick="post_order('basebreed','swbred', 'orderby')" >СОРТИРОВКА</button>
<div class="swbreed" id="swbred addbreed">
    <?include 'basebreed.php'?>
</div>
<? bottom() ?>


