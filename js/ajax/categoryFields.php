<?php
include_once '../header.php';

$category2 = $category3 = "";

if (isset($_GET['category2']))
{
    $category2 = $_GET['category2'];
}
if (isset($_GET['category3']))
{
    $category3 = $_GET['category3'];
}

$fields = "<tr class='addedRow'>
                    <td class='valmiddle'><strong>Цена *</strong></td>
                    <td class='valmiddle'>
                        <select name='priceIs' id='priceIs' class='textInput'>
                            <option value='from'>от</option>
                            <option value='equal'>ровно</option>
                        </select>
                        <input type='text' class='textInput' name='price' id='price' size='8' value=''>
                        <select name='pricecurrency' id='pricecurrency' class='textInput'>
                            <option value='kgs'>сом</option>
                            <option value='usd'>доллары</option>
                            <option value='eur'>евро</option>
                        </select>
                        <select name='pricefor' id='pricefor' class='textInput'>
                            <option value='one'>за изделие</option>
                            <option value='meter'>за погонный метр</option>
                        </select>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Цвет</td>
                    <td class>
                        <input type='text' class='textInput' name='color' id='color' size='35' value=''>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Материал</td>
                    <td class>
                        <input type='text' class='textInput' name='material' id='material' size='35' value=''>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Производитель</td>
                    <td class>
                        <input type='text' class='textInput' name='manufacturer' id='manufacturer' size='35' value=''>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Условия доставки</td>
                    <td class>
                        <input type='text' class='textInput' name='shipment' id='shipment' size='35' value=''>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Особенности</td>
                    <td class>
                        <input type='checkbox' id='used' name='used' value='yes'>
                        <label for='used'>Б/у</label>
                        <br>
                        <input type='checkbox' id='to_order' name='to_order' value='yes'>
                        <label for='to_order'>на заказ</label>
                        <br>
                    </td>
                </tr>";

if($category2 == "kitchen" && ($category3 == "sets" || $category3 == "groups" || $category3 == "corners" || $category3 == "tables" || $category3 == "chairs" || $category3 == "sinks" || $category3 == "other"))
{
   $fields = "<tr class='addedRow'>
                    <td class='name'>Стиль</td>
                    <td class>
                        <select name='style' id = 'style' class='textInput'>
                            <option value selected='selected'></option>
                            <option value='modern'>современный</option>
                            <option value='classic'>классический</option>
                        </select>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Каркас</td>
                    <td class>
                        <select name='carcase' id = 'carcase' class='textInput'>
                            <option value selected='selected'></option>
                            <option value='dsp'>ДСП</option>
                            <option value='mdf'>МДФ</option>
                            <option value='wood'>дерево</option>
                        </select>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Фасад</td>
                    <td class>
                        <select name='facade' id = 'facade' class='textInput'>
                            <option value selected='selected'></option>
                            <option value='dsp'>ДСП</option>
                            <option value='mdf'>МДФ</option>
                            <option value='multiplex'>мультиплекс</option>
                            <option value='mdf_veneer'>МДФ + древесный шпон</option>
                            <option value='wood'>дерево</option>
                            <option value='glass'>закалённое стекло</option>
                            <option value='metal'>металл</option>
                        </select>
                    </td>
                </tr>"."
                <tr class='addedRow'>
                    <td class='name'>Столещница</td>
                    <td class>
                        <select name='tabletop' id = 'tabletop' class='textInput'>
                            <option value selected='selected'></option>
                            <option value='dsp'>ламинированная ДСП</option>
                            <option value='steel'>нержавеющая сталь</option>
                            <option value='wood'>дерево</option>
                            <option value='artificial_stone'>искусственный камень</option>
                            <option value='natural_stone'>натуральный камень</option>
                        </select>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='valmiddle'><strong>Цена *</strong></td>
                    <td class='valmiddle'>
                        <select name='priceIs' id='priceIs' class='textInput'>
                            <option value='from'>от</option>
                            <option value='equal'>ровно</option>
                        </select>
                        <input type='text' class='textInput' name='price' id='price' size='8' value=''>
                        <select name='pricecurrency' id='pricecurrency' class='textInput'>
                            <option value='kgs'>сом</option>
                            <option value='usd'>доллары</option>
                            <option value='eur'>евро</option>
                        </select>
                        <select name='pricefor' id='pricefor' class='textInput'>
                            <option value='one'>за изделие</option>
                            <option value='meter'>за погонный метр</option>
                        </select>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Цвет</td>
                    <td class>
                        <input type='text' class='textInput' name='color' id='color' size='35' value=''>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Материал</td>
                    <td class>
                        <input type='text' class='textInput' name='material' id='material' size='35' value=''>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Производитель</td>
                    <td class>
                        <input type='text' class='textInput' name='manufacturer' id='manufacturer' size='35' value=''>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Условия доставки</td>
                    <td class>
                        <input type='text' class='textInput' name='shipment' id='shipment' size='35' value=''>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Особенности</td>
                    <td class>
                        <input type='checkbox' id='used' name='used' value='yes'>
                        <label for='used'>Б/у</label>
                        <br>
                        <input type='checkbox' id='to_order' name='to_order' value='yes'>
                        <label for='to_order'>на заказ</label>
                        <br>
                    </td>
                </tr>";
}

if($category2 == "soft" && $category3 == "sofas")
{
    $fields = "<tr class='addedRow'>
                    <td class='name'>Стиль</td>
                    <td class>
                        <select name='style' id = 'style' class='textInput'>
                            <option value='straight' selected='selected'>прямой</option>
                            <option value='corner'>угловой</option>
                        </select>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Обивка</td>
                    <td class>
                        <select name='upholstery' id = 'upholstery' class='textInput'>
                            <option value selected='selected'></option>
                            <option value='natural_leather'>натуральная кожа</option>
                            <option value='artificial_leather'>искусственная кожа</option>
                            <option value='velure'>велюр</option>
                            <option value='jacquard'>жаккард</option>
                            <option value='microfiber'>микрофибра</option>
                            <option value='hopsack'>рогожка</option>
                            <option value='flock'>флок</option>
                            <option value='chenille'>шениль</option>
                        </select>
                    </td>
                </tr>
    <tr class='addedRow'>
        <td class='name'>Механизм</td>
        <td class>
            <select name='mechanism' id = 'mechanism' class='textInput'>
                <option value='no' selected='selected'>отсутствует</option>
                <option value='book'>книжка</option>
                <option value='eurobook'>еврокнижка</option>
                <option value='folding'>раскладушка</option>
                <option value='rolling'>выкатной</option>
                <option value='dolphin'>дельфин</option>
                <option value='accordion'>аккордеон</option>
            </select>
        </td>
    </tr>
                <tr class='addedRow'>
                    <td class='valmiddle'><strong>Цена *</strong></td>
                    <td class='valmiddle'>
                        <select name='priceIs' id='priceIs' class='textInput'>
                            <option value='from'>от</option>
                            <option value='equal'>ровно</option>
                        </select>
                        <input type='text' class='textInput' name='price' id='price' size='8' value=''>
                        <select name='pricecurrency' id='pricecurrency' class='textInput'>
                            <option value='kgs'>сом</option>
                            <option value='usd'>доллары</option>
                            <option value='eur'>евро</option>
                        </select>
                        <select name='pricefor' id='pricefor' class='textInput'>
                            <option value='one'>за изделие</option>
                            <option value='meter'>за погонный метр</option>
                        </select>
                    </td>
                </tr>";
}

if($category2 == "living" && $category3 == "cupboards")
{
    $fields = "<tr class='addedRow'>
                    <td class='name'>Тип шкафа</td>
                    <td class>
                        <select name='type' id = 'type' class='textInput'>
                            <option value selected='selected'></option>
                            <option value='coupe'>шкаф-купе</option>
                            <option value='opening'>распашной шкаф</option>
                            <option value='no_door'>шкаф без дверей</option>
                        </select>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='name'>Фасад</td>
                    <td class>
                        <input type='checkbox' id='facade_wood_veneer' name='facade_wood_veneer' value='wood_veneer'>
                        <label for='facade_wood_veneer'>древесный шпон</label>
                        <br>
                        <input type='checkbox' id='facade_mirror' name='facade_mirror' value='mirror'>
                        <label for='facade_mirror'>зеркало</label>
                        <br>
                        <input type='checkbox' id='facade_glass' name='facade_glass' value='glass'>
                        <label for='facade_glass'>стекло</label>
                        <br>
                        <input type='checkbox' id='facade_rattan' name='facade_rattan' value='rattan'>
                        <label for='facade_rattan'>ротанг</label>
                        <br>
                        <input type='checkbox' id='facade_bamboo' name='facade_bamboo' value='bamboo'>
                        <label for='facade_bamboo'>бамбук</label>
                        <br>
                        <input type='checkbox' id='facade_photo_printing' name='facade_photo_printing' value='photo_printing'>
                        <label for='facade_photo_printing'>фотопечать, плёнки<</label>
                        <br>
                        <input type='checkbox' id='facade_leather_fur' name='facade_leather_fur' value='leather_fur'>
                        <label for='facade_leather_fur'>кожа, мех</label>
                        <br>
                    </td>
                </tr>
                <tr class='addedRow'>
                    <td class='valmiddle'><strong>Цена *</strong></td>
                    <td class='valmiddle'>
                        <select name='priceIs' id='priceIs' class='textInput'>
                            <option value='from'>от</option>
                            <option value='equal'>ровно</option>
                        </select>
                        <input type='text' class='textInput' name='price' id='price' size='8' value=''>
                        <select name='pricecurrency' id='pricecurrency' class='textInput'>
                            <option value='kgs'>сом</option>
                            <option value='usd'>доллары</option>
                            <option value='eur'>евро</option>
                        </select>
                        <select name='pricefor' id='pricefor' class='textInput'>
                            <option value='one'>за изделие</option>
                            <option value='meter'>за погонный метр</option>
                        </select>
                    </td>
                </tr>";
}

echo $fields;

exit();