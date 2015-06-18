<?php
//salons query
error_reporting(0);
$queryS = "SELECT * FROM users WHERE user_status='2' AND user_city='$city'";
$salon_records = mysql_num_rows(queryMysql($queryS));
if($salon_records == 0)
    $salon_records = "";

$queryBishkek = "SELECT * FROM advertisements WHERE city='Бишкек'";
$queryOsh = "SELECT * FROM advertisements WHERE city='Ош'";
$queryCholponata = "SELECT * FROM advertisements WHERE city='Чолпон-Ата'";
$queryKarakol = "SELECT * FROM advertisements WHERE city='Каракол'";

$recordsBishkek = mysql_num_rows(queryMysql($queryBishkek));
$recordsOsh = mysql_num_rows(queryMysql($queryOsh));
$recordsCholponata = mysql_num_rows(queryMysql($queryCholponata));
$recordsKarakol = mysql_num_rows(queryMysql($queryKarakol));

/*
$q1 = queryMysql("SELECT * FROM rubrica WHERE Name='Мебель для дома'");
$q2 = queryMysql("SELECT * FROM rubrica WHERE Name='Мебель для офиса'");
$q3 = queryMysql("SELECT * FROM rubrica WHERE Name='Профильная для бизнеса'");
$q4 = queryMysql("SELECT * FROM rubrica WHERE Name='Все для интеръера'");
$q5 = queryMysql("SELECT * FROM rubrica WHERE Name='Услуги'");

$id_home = mysql_fetch_object($q1)->ID;
$id_office = mysql_fetch_object($q2)->ID;
$id_business = mysql_fetch_object($q3)->ID;
$id_interior = mysql_fetch_object($q4)->ID;
$id_service = mysql_fetch_object($q5)->ID;
*/


?>
<style>
    #logo, #logo-new
    {
        width: 17.6%;
        padding: 10px 0 20px;
        position: relative;
    }
    #logo-new
    {
        width: 16.6%;
        padding: 40px 1% 0 0;
    }
    #logo-new img
    {
        vertical-align: bottom;
        margin-left: -10px;
    }
    #citySelect, #citySelectSalon
    {
        position: relative;
        margin-left: 50px;
        font-size: .9em;
        color: #010101;
    }
    #citySelectSalon
    {
        margin-left: 0;
        margin-right: 15px;
        font-size: 1em;
        color: #010101;
    }
    #citySelect IMG, #citySelectSalon IMG
    {
        position: absolute;
        right: -10px;
        top: .6em;
    }
    #selectCity, #selectCitySalon
    {
        position: absolute;
        left: 28px;
        top: 70px;
        padding: 1em 1.3em;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 2px 2px 2px 0px #ccc;
        font-size: .9em;
        display: none;
        z-index: 11;
    }
    #selectCitySalon
    {
        left: -20px;
        top: 0;
        font-size: 1.3em;
        width: 520px;
    }
    #selectCitySalon ul
    {
        position: relative;
        display: inline-block;
        width: 170px;
        vertical-align: top;
        font-size: .9em;
    }
    #selectCity a { color: #000 }
    #selectCity li
    {
        padding: .2em;
    }

    #citySelected
    {
        position: relative;
    }
    #citySelected span
    {
        position: absolute;
        bottom: -0.2em;
        right: -0.9em;
    }
</style>
<!--<script src="js/jquery-1.11.1.min.js"></script>-->
<div id="header" class="header">
    <div class="promo-block" style="background-color:#808285;">
        <a href="#"><img src="images/ad-banner.png" class="img-responsive"></a>
    </div>
    <div class="header-panel" style="background-color:#F8EDE0; height: 40px;">
        <div class="panel-holder" >
            <div class="panel" style="background-color:#F8EDE0; height: 40px;">
                <ul class="panel-list store-tab">
                    <li <?if($current_page == "index") echo "class='marked furniture-item active'";?>><a href="index.php">Объявления</a></li>
                    <li <?if($current_page == "salons") echo "class='marked furniture-item active'";?>><a href="salons.php">Салоны</a></li>
                    <li <?if($current_page == "addNew") echo "class='marked furniture-item active'";?>><a href="addNew.php">Подать объявление</a></li>
                    <!--<li><a href="addSalon.php">Добавить салон</a></li>-->
                    <?if($loggedin)
                    {?>
                        <li <?if($current_page == "mySalon") echo "class='marked furniture-item active'";?>><a href='mySalon.php'>Добавить салон</a></li>;
                    <?}
                    else {?>
                        <li <?if($current_page == "addSalon") echo "class='marked furniture-item active'";?>><a href='login.php?salon=addSalon'>Добавить салон</a></li>
                    <?}?>
                    <li class="hover login-link">
                        <?if($loggedin)echo "<a href='my.php' class='flink' rel='nofollow'>$user</a>";
                        else { ?>
                        <a href="login.php">Личный кабинет</a>
                        <div class="drop">
                            <div id="magestore-popup">
                                <div id="magestore-login-form">
                                    <p>Войти в личный кабинет</p>
                                    <div id="sociallogin-forgot" style="display: none">
                                        <p>Введите ваш email и мы пришлем вам ваш пароль.</p>
                                    </div>
                                    <!-- formm Login Б-->
                                    <form action="login.php" method="post" id="magestore-sociallogin-form" class="magestore-login-form-popup">
                                        <!-- email -->
                                        <div class="sociallogin-input-box">
                                            <input id="magestore-sociallogin-popup-email" class="input-text required-entry validate-email" type="text" placeholder="Email" value="" name="user" />
                                        </div>
                                        <!-- password -->
                                        <div id="magestore-sociallogin-password" class="sociallogin-input-box">
                                            <input type="password" id="magestore-sociallogin-popup-pass" class="input-text required-entry validate-password" placeholder="Пароль" value="" name="password" />
                                        </div>
                                        <!-- image ajax -->
                                        <div id="progress_image_login" class="ajax-login-image" style="display: none">
                                        </div>
                                        <!-- error invalid email -->
                                        <div id="magestore-invalid-email" class="magestore-invalid-email"></div>
                                        <!-- Submit -->
                                        <div class="magestore-login-popup-button">
                                            <p><a href="forgot.php">Забыли пароль?</a></p>
                                            <div class="remember-row">
                                                <input type="checkbox" name="persistent_remember_me" class="checkbox" id="remember_me52ZOkAgoNL" checked="checked" title="Remember Me" />
                                                <label for="remember_me52ZOkAgoNL">Запомнить</label>
                                            </div>
                                            <button id="magestore-button-sociallogin" class="button popup_click_btn" name="send" title="Login" type="submit">Войти</button>
                                            <a class="button grey" href="register.php">Регистрация</a>
                                        </div>
                                    </form>
                                    <!-- form forgot -->
                                    <form id="magestore-sociallogin-form-forgot" class="magestore-login-form-popup" style="display: none">
                                        <div class="sociallogin-input-box">
                                            <input id="magestore-sociallogin-popup-email-forgot" class="input-text required-entry validate-email" type="text" placeholder="Email" value="" name="socialogin_email_forgot" />
                                        </div>
                                        <!-- image ajax -->
                                        <div id="progress_image_login_forgot" class="ajax-login-image" style="display: none">
                                        </div>
                                        <!-- error invalid email -->
                                        <div id="magestore-invalid-email-forgot" class="magestore-invalid-email"></div>
                                        <!-- Submit -->
                                        <div class="magestore-login-popup-button">
                                            <p><a id="magestore-forgot-back" href="javascript:void(0);">Назад</a></p>
                                            <button id="magestore-button-sociallogin-forgot" class="button popup_click_btn" title="Send PassWord" type="button">Получить пароль</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- create new user -->
                                <div id="magestore-create-user" style="display:none" >
                                    <p>Регистрация</p>
                                    <form id="magestore-sociallogin-form-create" class="magestore-login-form-popup">
                                        <ul class="form-list">
                                            <li class="fields">
                                                <div class="field name-firstname sociallogin-field">
                                                    <div class="input-box">
                                                        <input id="socialogin.firstname" class="input-text required-entry" type="text" placeholder="Имя" name="firstname" />
                                                    </div>
                                                </div>
                                                <div class="field name-lastname sociallogin-field">
                                                    <div class="input-box">
                                                        <input id="socialogin.lastname" class="input-text required-entry" type="text" placeholder="Фамилия" name="lastname" />
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-box">
                                                    <input id="socialogin.email" class="input-text required-entry validate-email" type="text" placeholder="Email" name="email" />
                                                </div>
                                            </li>
                                            <li class="fields">
                                                <div class="field sociallogin-field">
                                                    <div class="input-box">
                                                        <input id="socialogin.pass" class="input-text required-entry validate-password" type="password" placeholder="Пароль" name="pass" />
                                                    </div>
                                                </div>
                                                <div class="field sociallogin-field">
                                                    <div class="input-box">
                                                        <input id="socialogin.pass.confirm" class="input-text required-entry validate-cpassword" type="password" placeholder="Повтор пароля" name="passConfirm" />
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- image ajax -->
                                        <div id="progress_image_login_create" class="ajax-login-image" style="display: none">
                                        </div>
                                        <!-- error invalid create ACC -->
                                        <div id="magestore-invalid-create" class="magestore-invalid-email"></div>
                                        <div class="magestore-create-popup-button">
                                            <p><a id="magestore-create-back" href="javascript:void(0);">Назад</a></p>
                                            <button id="magestore-button-sociallogin-create" class="button popup_click_btn" title="Submit" type="button" style="margin-right: 17px">Зарегистрироваться</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end code create account -->
                            </div>
                            <script type="text/javascript">
                                //<![CDATA[
                                jQuery(document).ready(function(){
                                    jQuery(document).click(function(event) {
                                        if(jQuery(event.target).closest(".login-link").length) return;
                                        jQuery('.login-link').removeClass('active');
                                        event.stopPropagation();
                                    });
                                });
                                //]]>
                            </script>
                        </div>
                        <?}?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-holder">
        <div class="branding">
            <h1 class="logo"><a href="index.php" title="MebelGid" class="logo"><img src="images/logo.png" alt="MebelGid" /></a></h1>
        </div>

        <div class="form-search">
            <?if($current_page == "salons"){?>
            <form id="search_mini_form_desktop" class="search-holder" action="salons.php" method="get">
                <?}
                else {?>
                <form id="search_mini_form_desktop" class="search-holder" action="category.php" method="get">
                <?}?>
                <input id="search_desktop" type="text" name="q" placeholder="Поиск" class="input-text" maxlength="128"/>
                <input value="Go" type="submit"/>
            </form>
            <div class="enter-like">
                <a href="#"><img src="images/usericon.png" /><span>Войти</span></a>
                <a href="#"><img src="images/heart.png" /><span>Нравится (0)</span></a>
            </div>
        </div>


        <div class="contact-block">
            <div class="promo-info">
                <a href="addNew.php"><img src="images/promo.png" alt="Sell" /></a>
            </div>
        </div>

        <div id="search_autocomplete_desktop" class="search-autocomplete" style="display:none;"></div>
        <script type="text/javascript">
            //<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form_desktop', 'search_desktop', 'Поиск');
            var SolrBridgeAutocomplete = new SolrBridgeSearch('search_desktop',{id:'autocomplete',target:'#search_mini_form_desktop',inputid:'search_desktop',containerid:'search_mini_form_desktop',boxWidth:469,searchTextPlaceHolder:'Search entire store here...',currencySign:'&nbsp;$&nbsp;',currencycode:'AUD',ajaxBaseUrl:'http://www.mebelgid.kg',searchResultUrl:'http://www.mebelgid.kg/search',viewAllResultText:'View all search results for %s',categoryText:'Categories',viewAllCategoryText:'View all categories >>',viewAllBrandsText:'View all brands >>',keywordsText:'Keywords',productText:'product',productsText:'products',brandText:'Brands',storetimestamp:'1430760061',storeid:'6',customergroupid:'0',categoryRedirect:'0',showBrand:'0',showBrandAttributeCode:'manufacturer',displaykeywordsuggestion:'true',displayResultOfText:'Search results for %s',displayResultOfInsteadText:'Search results for %s instead',currencyPos:'before',displayThumb:'1',allowFilter:'1',categoryLimit:'3',brandLimit:'3',fromPriceText:'from'});
            //]]>
        </script>
    </div>
    <div class="content">
    </div>
    <div class="nav-container">
        <a class="btn-rug-finder" href="#popup1"><span>Mebel Finder</span></a>
        <ul id="nav">
            <li  class="level0 nav-1 first level-top parent house">
                <a href="category.php?c=1"  class="level-top"><span >Мебель для дома</span></a>
                <div class="drop">
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=1&cat=kitchen"><span class="image-block"><img src="images/house1.png" alt="" /></span><strong class="title">Кухня</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=1&cat=kitchen&subcat=sets">Гарнитуры</a></li>
                            <li><a class="" href="category.php?c=1&cat=kitchen&subcat=groups">Обеденные группы</a></li>
                            <li><a class="" href="category.php?c=1&cat=kitchen&subcat=corners">Уголки</a></li>
                            <li><a class="" href="category.php?c=1&cat=kitchen&subcat=tables">Столы</a></li>
                            <li><a class="" href="category.php?c=1&cat=kitchen&subcat=chairs">Стулья</a></li>
                            <li><a class="" href="category.php?c=1&cat=kitchen&subcat=sinks">Мойки и смесители</a></li>
                            <li><a class="" href="category.php?c=1&cat=kitchen&subcat=other">Другое</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=1&cat=soft"><span class="image-block"><img src="images/house2.png" alt="" /></span><strong class="title">Мягкая мебель</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=1&cat=soft&subcat=sofas">Диваны, диван-кровати</a></li>
                            <li><a class="" href="category.php?c=1&cat=soft&subcat=armchairs">Кресла, кресла-кровати</a></li>
                            <li><a class="" href="category.php?c=1&cat=soft&subcat=couches">Кушетка, тахта, панчетта</a></li>
                            <li><a class="" href="category.php?c=1&cat=soft&subcat=puffs">Пуфы и мешки</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=1&cat=children"><span class="image-block"><img src="images/house3.png" alt="" /></span><strong class="title">Детская мебель</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=1&cat=children&subcat=sets">Гарнитуры</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=modules">Комбинированные модули</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=maneges">Манежы, манежные комнаты</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=soft">Мягкая мебель</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=beds">Кровати, комоды</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=two-tier">Двухярусные кровати</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=tables">Столы, стулья</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=cities">Детские городки</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=comp-tables">Компьютерные столы</a></li>
                            <li><a class="" href="category.php?c=1&cat=children&subcat=wardrobe">Шкафы</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=1&cat=bedrooms"><span class="image-block"><img src="images/house4.png" alt="" /></span><strong class="title">Спальня</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=1&cat=bedrooms&subcat=beds">Кровати</a></li>
                            <li><a class="" href="category.php?c=1&cat=bedrooms&subcat=sets">Гарнитуры</a></li>
                            <li><a class="" href="category.php?c=1&cat=bedrooms&subcat=mattresses">Матрацы</a></li>
                            <li><a class="" href="category.php?c=1&cat=bedrooms&subcat=mattress-pad">Наматрасники</a></li>
                            <li><a class="" href="category.php?c=1&cat=bedrooms&subcat=foundation">Основания для кроватей</a></li>
                            <li><a class="" href="category.php?c=1&cat=bedrooms&subcat=blanket">Одеяла</a></li>
                            <li><a class="" href="category.php?c=1&cat=bedrooms&subcat=pillow">Подушки</a></li>
                            <li><a class="" href="category.php?c=1&cat=bedrooms&subcat=shawl">Покрывала</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=1&cat=bedrooms"><span class="image-block"><img src="images/house5.png" alt="" /></span><strong class="title">Ванная и туалет</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="#">Смесители</a></li>
                            <li><a class="" href="#">Раковины</a></li>
                            <li><a class="" href="#">Ванны</a></li>
                            <li><a class="" href="#">Унитазы</a></li>
                            <li><a class="" href="#">Биде</a></li>
                            <li><a class="" href="#">Писсуары</a></li>
                            <li><a class="" href="#">Душевые кабины</a></li>
                            <li><a class="" href="#">Сауны</a></li>
                            <li><a class="" href="#">Аксессуары</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li  class="level0 nav-2 level-top parent office">
                <a href="category.php?c=3"  class="level-top"><span >Мебель для офиса</span></a>
                <div class="drop special-drop">
                    <ul class="sub-category-list">
                        <li><a class="" href="category.php?c=3&cat=boss">Мебель руководителю</a></li>
                        <li><a class="" href="category.php?c=3&cat=staff">Мебель персоналу</a></li>
                        <li><a class="" href="category.php?c=3&cat=chamber">Приемная</a></li>
                        <li><a class="" href="category.php?c=3&cat=armchairs">Кресла</a></li>
                        <li><a class="" href="category.php?c=3&cat=chair">Офисные стулья</a></li>
                        <li><a class="" href="category.php?c=3&cat=tables">Письменные и компьютерные столы</a></li>
                        <li><a class="" href="category.php?c=3&cat=boxes">Шкафы</a></li>
                        <li><a class="" href="category.php?c=3&cat=safe">Сейфы</a></li>
                        <li><a class="" href="category.php?c=3&cat=other">Прочее интересное</a></li>
                    </ul>
                    <div class="category-image">
                        <img src="images/dining-tables.jpg" alt="Dining Room" />
                    </div>
                </div>
            </li>
            <li  class="level0 nav-3 level-top parent business">
                <a href="#"  class="level-top"><span >Профильная для бизнеса</span></a>
                <div class="drop special-drop">
                    <ul class="sub-category-list">
                        <li><a class="" href=""><strong>Торговое оборудование</strong></a></li>
                        <li><a class="" href="category.php?c=5&cat=fittings">Мебель</a></li>
                        <li><a class="" href="category.php?c=5&cat=room">Стелажи, витрины</a></li>
                        <li><a class="" href="category.php?c=5&cat=technical">Холодильные камеры</a></li>
                        <li><a class="" href="category.php?c=5&cat=accessory">Прочие аксессуары</a></li>
                        <li><a class="" href="category.php?c=5&cat=cafe">Для кафе и ресторанов</a></li>
                        <li><a class="" href="category.php?c=5&cat=study">Для учебных заведений</a></li>
                        <li><a class="" href="category.php?c=5&cat=medical">Медицинские</a></li>
                        <li><a class="" href="category.php?c=5&cat=other">Прочее</a></li>
                    </ul>
                    <div class="category-image">
                        <img src="images/dining-tables.jpg" alt="Dining Room" />
                    </div>
                </div>
            </li>
            <li  class="level0 nav-4 level-top parent interior">
                <a href="category.php?c=2"  class="level-top"><span >Все для интеръера</span></a>
                <div class="drop">
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=2&cat=light"><span class="image-block"><img src="images/beds-mattresses.jpg" alt="" /></span><strong class="title">Свет</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=2&cat=light&subcat=chandelier">Люстры</a></li>
                            <li><a class="" href="category.php?c=2&cat=light&subcat=onoff">Включатели, выключатели</a></li>
                            <li><a class="" href="category.php?c=2&cat=light&subcat=floorlamp">Бра, торшеры итп</a></li>
                            <li><a class="" href="category.php?c=2&cat=light&subcat=kids">Детские</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=2&cat=doors"><span class="image-block"><img src="images/beds-mattresses.jpg" alt="" /></span><strong class="title">Двери</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=2&cat=doors&subcat=interior">Межкомнатные</a></li>
                            <li><a class="" href="category.php?c=2&cat=doors&subcat=steel_doors">Стальные</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=2&cat=kitchen"><span class="image-block"><img src="images/beds-mattresses.jpg" alt="" /></span><strong class="title">Для кухни</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=2&cat=kitchen&subcat=sets">Наборы посуды</a></li>
                            <li><a class="" href="category.php?c=2&cat=kitchen&subcat=ceramics">Фарфор</a></li>
                            <li><a class="" href="category.php?c=2&cat=kitchen&subcat=crystal">Хрусталь</a></li>
                            <li><a class="" href="category.php?c=2&cat=kitchen&subcat=pots">Кастрюли, казаны, сковороды</a></li>
                            <li><a class="" href="category.php?c=2&cat=kitchen&subcat=other">Прочие интересные аксессуары</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <span class="image-block"><img src="images/beds-mattresses.jpg" alt="" /></span>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=2&cat=textile">Шторы</a></li>
                            <li><a class="" href="category.php?c=2&cat=jalousie">Жалюзи</a></li>
                            <li><a class="" href="category.php?c=2&cat=mats">Ковры</a></li>
                            <li><a class="" href="category.php?c=2&cat=fireplace">Камины</a></li>
                            <li><a class="" href="category.php?c=2&cat=pictures">Картины, живопись</a></li>
                            <li><a class="" href="category.php?c=2&cat=souvenir">Сувениры</a></li>
                            <li><a class="" href="category.php?c=2&cat=clock">Часы</a></li>
                            <li><a class="" href="category.php?c=2&cat=vase">Вазы</a></li>
                            <li><a class="" href="category.php?c=2&cat=antiques">АНТИКВАРИАТ</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="level0 nav-5 level-top parent service">
                <a href="category.php?c=4"  class="level-top"><span >Услуги</span></a>
                <div class="drop special-drop">
                    <ul class="sub-category-list">
                        <li><a class="" href="category.php?c=4&cat=design">Услуги дизайна</a></li>
                        <li><a class="" href="category.php?c=4&cat=compile">Разборка/сборка мебели</a></li>
                        <li><a class="" href="category.php?c=4&cat=ceiling">Установка натяжных потолков</a></li>
                        <li><a class="" href="category.php?c=4&cat=repair">Ремонт, реставрация, чистка мебели</a></li>
                        <li><a class="" href="category.php?c=4&cat=repair_room">Ремонт квартир</a></li>
                        <li><a class="" href="category.php?c=4&cat=transport">Транспортные услуги</a></li>
                        <li><a class="" href="category.php?c=4&cat=other">Прочее</a></li>
                    </ul>
                    <div class="category-image">
                        <img src="images/outdoor-wicker.jpg" alt="Услуги" />
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
        <!--
        jQuery('#nav').sameHeight({
            elements: 'a.level-top',
            multiLine: true,
            flexible: true,
            useMinHeight: false,
            biggestHeight: true
        });
        var parentLinksMainNav = jQuery('#nav').children('.parent').find('a.level-top').doubleTapToGo();
        //-->
    </script>
</div>