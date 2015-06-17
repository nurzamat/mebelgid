<?php
include_once '../header.php';

$parentId = "";
$json = json_encode(array('id' => '0', 'name' => 'null'));

if (isset($_GET['parentId']))
{
    $parentId = $_GET['parentId'];
}
//start parentId = 1
if($parentId == "1")
{
    $a = array(
        array('id' => 'kitchen', 'name' => 'Кухня'),
        array('id' => 'soft', 'name' => 'Мягкая мебель'),
        array('id' => 'living', 'name' => 'Жилая мебель'),
        array('id' => 'bedrooms', 'name' => 'Спальня'),
        array('id' => 'children', 'name' => 'Детская мебель'));
    $json = json_encode($a);
}

if($parentId == "kitchen")
{
    $a = array(
        array('id' => 'sets', 'name' => 'Гарнитуры'),
        array('id' => 'groups', 'name' => 'Обеденные группы'),
        array('id' => 'corners', 'name' => 'Уголки'),
        array('id' => 'tables', 'name' => 'Столы'),
        array('id' => 'chairs', 'name' => 'Стулья'),
        array('id' => 'sinks', 'name' => 'Мойки и смесители'),
        array('id' => 'other', 'name' => 'Другое'));
    $json = json_encode($a);
}
if($parentId == "soft")
{
    $a = array(
        array('id' => 'sofas', 'name' => 'Диваны, диван-кровати'),
        array('id' => 'armchairs', 'name' => 'Кресла, кресла-кровати'),
        array('id' => 'couches', 'name' => 'Кушетки, тахта, панчетта'),
        array('id' => 'puffs', 'name' => 'Пуфы и мешки'));
    $json = json_encode($a);
}
if($parentId == "living")
{
    $a = array(
        array('id' => 'walls', 'name' => 'Гостиные, витрины'),
        array('id' => 'halls', 'name' => 'Прихожие'),
        array('id' => 'cupboards', 'name' => 'Шкафы, шкафы-купе'),
        array('id' => 'offices', 'name' => 'Домашние кабинеты'),
        array('id' => 'tables', 'name' => 'Столы'),
        array('id' => 'chairs', 'name' => 'Стулья'),
        array('id' => 'tallboys', 'name' => 'Тумбы, комоды, подставки'),
        array('id' => 'coffee_tables', 'name' => 'Журнальные столики'),
        array('id' => 'braided', 'name' => 'Плетеная мебель'));
    $json = json_encode($a);
}
if($parentId == "bedrooms")
{
    $a = array(
        array('id' => 'beds', 'name' => 'Кровати'),
        array('id' => 'sets', 'name' => 'Гарнитуры'),
        array('id' => 'mattresses', 'name' => 'Матрацы'),
        array('id' => 'mattresses_pad', 'name' => 'Наматрасники'),
        array('id' => 'foundation', 'name' => 'Основания для кроватей'),
        array('id' => 'blanket', 'name' => 'Одеяла'),
        array('id' => 'pillow', 'name' => 'Подушки'),
        array('id' => 'shawl', 'name' => 'Покрывала'));
    $json = json_encode($a);
}
if($parentId == "children")
{
    $a = array(
        array('id' => 'sets', 'name' => 'Гарнитуры'),
        array('id' => 'modules', 'name' => 'Комбинированные модули'),
        array('id' => 'maneges', 'name' => 'Манежы, манежные комнаты'),
        array('id' => 'soft', 'name' => 'Мягкая мебель'),
        array('id' => 'beds', 'name' => 'Кровати, комоды'),
        array('id' => 'two_tier', 'name' => 'Двухярусные кровати'),
        array('id' => 'tables', 'name' => 'Столы, стулья'),
        array('id' => 'comp_tables', 'name' => 'Компьютерные столы'),
        array('id' => 'wardrobe', 'name' => 'Шкафы'));
    $json = json_encode($a);
}
//end parentId = 1
echo $json;

exit();
