<?
$dopmenu = '<a href="/addhorse">Лошади</a>
<!--<a href="/addbreed">Добавить породу</a>-->
<a href="/showbreed">Породы</a>';

top('Добавим лошадь',$dopmenu) ?>


    <h1>Породы</h1>
<select name="orderby" id="orderby">
    <option value="id">id</option>
    <option value="breed" selected="selected">ПОРОДА</option>
</select>
<button onclick="post_order('basebreed','swbred', 'orderby')" >СОРТИРОВКА</button>
<div class="swbreed" id="swbred">
<?include 'basebreed.php'?>
</div>

<? bottom() ?>


