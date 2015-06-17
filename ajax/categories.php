<?php
include_once '../header.php';

$level = "";
$parentId = "";
$subParent = "";
$a = "";
$json = json_encode(array('id' => '0', 'name' => 'null'));

if (isset($_GET['parentId']))
{
    $parentId = $_GET['parentId'];
}
if (isset($_GET['subParent']))
{
    $subParent = $_GET['subParent'];
}
if (isset($_GET['level']))
{
    $level = $_GET['level'];
}

//level = 1
if($level == "1")
{
    if($parentId == "1")
    {
        $a = array(
            array('id' => 'kitchen', 'name' => 'Кухня'),
            array('id' => 'soft', 'name' => 'Мягкая мебель'),
            array('id' => 'living', 'name' => 'Жилая мебель'),
            array('id' => 'bedrooms', 'name' => 'Спальня'),
            array('id' => 'children', 'name' => 'Детская мебель'));
    }
    if($parentId == "2")
    {
        $a = array(
            array('id' => 'light', 'name' => 'Свет'),
            array('id' => 'doors', 'name' => 'Двери'),
            array('id' => 'kitchen', 'name' => 'Для кухни'),
            array('id' => 'textile', 'name' => 'Шторы'),
            array('id' => 'jalousie', 'name' => 'Жалюзи'),
            array('id' => 'mats', 'name' => 'Ковры'),
            array('id' => 'fireplace', 'name' => 'Камины'),
            array('id' => 'pictures', 'name' => 'Картины, живопись'),
            array('id' => 'souvenir', 'name' => 'Сувениры'),
            array('id' => 'clock', 'name' => 'Часы'),
            array('id' => 'vase', 'name' => 'Вазы'),
            array('id' => 'antiques', 'name' => 'АНТИКВАРИАТ'));
    }
    if($parentId == "3")
    {
        $a = array(
            array('id' => 'boss', 'name' => 'Мебель руководителю'),
            array('id' => 'staff', 'name' => 'Мебель персоналу'),
            array('id' => 'chamber', 'name' => 'Приемная'),
            array('id' => 'armchairs', 'name' => 'Кресла'),
            array('id' => 'chair', 'name' => 'Офисные стулья'),
            array('id' => 'tables', 'name' => 'Письменные и компьютерные столы'),
            array('id' => 'boxes', 'name' => 'Шкафы'),
            array('id' => 'safe', 'name' => 'Сейфы'),
            array('id' => 'other', 'name' => 'Прочее интересное'));
    }
    if($parentId == "4")
    {
        $a = array(
            array('id' => 'design', 'name' => 'Услуги дизайна'),
            array('id' => 'compile', 'name' => 'Разборка/сборка мебели'),
            array('id' => 'ceiling', 'name' => 'Установка натяжных потолков'),
            array('id' => 'repair', 'name' => 'Ремонт, реставрация, чистка мебели'),
            array('id' => 'repair_room', 'name' => 'Ремонт квартир'),
            array('id' => 'transport', 'name' => 'Транспортные услуги'),
            array('id' => 'other', 'name' => 'Прочее'));
    }
    if($parentId == "5")
    {
        $a = array(
            array('id' => 'fittings', 'name' => 'Мебель'),
            array('id' => 'room', 'name' => 'Стелажи, витрины'),
            array('id' => 'technical', 'name' => 'Холодильные камеры'),
            array('id' => 'accessory', 'name' => 'Прочие аксессуары'),
            array('id' => 'cafe', 'name' => 'Для кафе и ресторанов'),
            array('id' => 'study', 'name' => 'Для учебных заведений'),
            array('id' => 'medical', 'name' => 'Медицинские'),
            array('id' => 'other', 'name' => 'Прочее'));
    }
}

if($level == "2")
{
    if($subParent == "1")
    {
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
    }
    if($subParent == "2")
    {
        if($parentId == "light")
        {
            $a = array(
                array('id' => 'chandelier', 'name' => 'Люстры'),
                array('id' => 'onoff', 'name' => 'Включатели, выключатели'),
                array('id' => 'floorlamp', 'name' => 'Бра, торшеры итп'),
                array('id' => 'kids', 'name' => 'Детские'));
        }

        if($parentId == "doors")
        {
            $a = array(
                array('id' => 'interior', 'name' => 'Межкомнатные'),
                array('id' => 'steel_doors', 'name' => 'Стальные'));
        }

        if($parentId == "kitchen")
        {
            $a = array(
                array('id' => 'sets', 'name' => 'Наборы посуды'),
                array('id' => 'ceramics', 'name' => 'Фарфор'),
                array('id' => 'crystal', 'name' => 'Хрусталь'),
                array('id' => 'pots', 'name' => 'Кастрюли, казаны, сковороды'),
                array('id' => 'other', 'name' => 'Прочие интересные аксессуары'));
        }
    }
    if($subParent == "3")
    {

    }
    if($subParent == "4")
    {

    }
    if($subParent == "5")
    {

    }
}


$json = json_encode($a);

echo $json;

exit();
