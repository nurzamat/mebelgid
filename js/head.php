<?php
/**
 * Created by PhpStorm.
 * User: nurzamat
 * Date: 5/12/15
 * Time: 7:47 PM
 */
?>

<div id="header" class="header">
    <div class="promo-block" style="background-color:#808285;">
        <p><a href="#">Какое-то объявление</a></p>	</div>
    <div class="header-panel" style="background-color:#F8EDE0; height: 40px;">
        <div class="panel-holder" >
            <div class="panel" style="background-color:#F8EDE0; width: 300px; height: 40px; border-color: white">
                <ul class="panel-list">
                    <li class="hover login-link">
                        <a href="login.php">Личный кабинет</a>
                        <div class="drop">
                            <div id="magestore-popup">
                                <div id="magestore-login-form">
                                    <p>Войти в личный кабинет</p>
                                    <div id="sociallogin-forgot" style="display: none">
                                        <p>Введите ваш email и мы пришлем вам ваш пароль.</p>
                                    </div>
                                    <!-- formm Login -->
                                    <form action="" id="magestore-sociallogin-form" class="magestore-login-form-popup">
                                        <!-- email -->
                                        <div class="sociallogin-input-box">
                                            <input id="magestore-sociallogin-popup-email" class="input-text required-entry validate-email" type="text" placeholder="Email" value="" name="socialogin_email" />
                                        </div>
                                        <!-- password -->
                                        <div id="magestore-sociallogin-password" class="sociallogin-input-box">
                                            <input type="password" id="magestore-sociallogin-popup-pass" class="input-text required-entry validate-password" placeholder="Пароль" value="" name="socialogin_password" />
                                        </div>
                                        <!-- image ajax -->
                                        <div id="progress_image_login" class="ajax-login-image" style="display: none">
                                        </div>
                                        <!-- error invalid email -->
                                        <div id="magestore-invalid-email" class="magestore-invalid-email"></div>
                                        <!-- Submit -->
                                        <div class="magestore-login-popup-button">
                                            <p><a id="magestore-forgot-password" href="javascript:void(0);">Забыли пароль?</a></p>
                                            <div class="remember-row">
                                                <input type="checkbox" name="persistent_remember_me" class="checkbox" id="remember_me52ZOkAgoNL" checked="checked" title="Remember Me" />
                                                <label for="remember_me52ZOkAgoNL">Запомнить</label>
                                            </div>
                                            <button id="magestore-button-sociallogin" class="button popup_click_btn" name="send" title="Login" type="button">Войти</button>
                                            <a id="magestore-sociallogin-create-new-customer" class="button grey" href="javascript:void(0);">Регистрация</a>
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
                                <!-- social login -->
                                <div id="magestore-login-social">
                                    <p>Войти через социальную сеть</p>
                                    <!-- default -->
                                    <ul class="magestore-login-social">


                                        <li>
                                            <button id="bt-loginfb-popup" class="bt-login-social" alt="Login by Facebook" title="Login by Facebook" onclick="fbLogin()" href="javascript:void(0);">
                                                <span><span>Facebook Sign in</span></span>
                                            </button>
                                            <script type="text/javascript">
                                                var newwindow;
                                                var intId;
                                                function fbLogin(){
                                                    var  screenX    = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft;
                                                    var	 screenY    = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop;
                                                    var	 outerWidth = typeof window.outerWidth != 'undefined' ? window.outerWidth : document.body.clientWidth;
                                                    var	 outerHeight = typeof window.outerHeight != 'undefined' ? window.outerHeight : (document.body.clientHeight - 22);
                                                    var	 width    = 500;
                                                    var	 height   = 270;
                                                    var	 left     = parseInt(screenX + ((outerWidth - width) / 2), 10);
                                                    var	 top      = parseInt(screenY + ((outerHeight - height) / 2.5), 10);
                                                    var	 features = (
                                                    'width=' + width +
                                                    ',height=' + height +
                                                    ',left=' + left +
                                                    ',top=' + top
                                                    );

                                                    newwindow=window.open('https://www.facebook.com/dialog/oauth?client_id=1490051667875740&redirect_uri=https%3A%2F%2Fwww.furnitureonline.com.au%2Fsociallogin%2Ffblogin%2Flogin%2Fauth%2F1%2F&state=bbc9ccf08c59ab8daa6d398d538b3a1a&display=popup&scope=email','Login_by_facebook',features);

                                                    if (window.focus) {
                                                        newwindow.focus()
                                                    }
                                                    return false;
                                                }
                                            </script>

                                        </li>
                                        <script type="text/javascript">
                                            $('bt-loginfb-popup').addClassName('visible');
                                        </script>



                                        <li> <button id="bt-logingo-popup" class="bt-login-social" alt="Login by Google" title="Login by Google" onclick="goLogin()" href="javascript:void(0);">
                                                <span><span>Google Sign in</span></span>
                                            </button>
                                            <script type="text/javascript">
                                                var newwindow;
                                                var intId;
                                                function goLogin(){
                                                    var  screenX    = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft;
                                                    var	 screenY    = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop;
                                                    var	 outerWidth = typeof window.outerWidth != 'undefined' ? window.outerWidth : document.body.clientWidth;
                                                    var	 outerHeight = typeof window.outerHeight != 'undefined' ? window.outerHeight : (document.body.clientHeight - 22);
                                                    var	 width    = 700;
                                                    var	 height   = 400;
                                                    var	 left     = parseInt(screenX + ((outerWidth - width) / 2), 10);
                                                    var	 top      = parseInt(screenY + ((outerHeight - height) / 2.5), 10);
                                                    var	 features = (
                                                    'width=' + width +
                                                    ',height=' + height +
                                                    ',left=' + left +
                                                    ',top=' + top
                                                    );

                                                    newwindow=window.open('http://www.mebelgid.kg/sociallogin/gologin/login/','Login_by_google',features);

                                                    if (window.focus) {
                                                        newwindow.focus()
                                                    }
                                                    return false;
                                                }
                                            </script>
                                        </li>
                                        <script type="text/javascript">
                                            $('bt-logingo-popup').addClassName('visible');
                                        </script>



                                        <li> <button id="bt-logintw-popup" class="bt-login-social" alt="Login by Twitter" title="Login by Twitter" onclick="twLogin()" href="javascript:void(0);">
                                                <span><span>Twitter Sign in</span></span>
                                            </button>
                                            <script type="text/javascript">
                                                var newwindow;
                                                var intId;
                                                function twLogin(){
                                                    var  screenX    = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft;
                                                    var	 screenY    = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop;
                                                    var	 outerWidth = typeof window.outerWidth != 'undefined' ? window.outerWidth : document.body.clientWidth;
                                                    var	 outerHeight = typeof window.outerHeight != 'undefined' ? window.outerHeight : (document.body.clientHeight - 22);
                                                    var	 width    = 790;
                                                    var	 height   = 350;
                                                    var	 left     = parseInt(screenX + ((outerWidth - width) / 2), 10);
                                                    var	 top      = parseInt(screenY + ((outerHeight - height) / 2.5), 10);
                                                    var	 features = (
                                                    'width=' + width +
                                                    ',height=' + height +
                                                    ',left=' + left +
                                                    ',top=' + top
                                                    );

                                                    newwindow=window.open('http://www.mebelgid.kg/sociallogin/twlogin/login/','Login_by_twitter',features);

                                                    if (window.focus) {
                                                        newwindow.focus()
                                                    }
                                                    return false;
                                                }
                                            </script>
                                        </li>
                                        <script type="text/javascript">
                                            $('bt-logintw-popup').addClassName('visible');
                                        </script>


                                    </ul>
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
                    </li>
                </ul>
            </div>
        </div>
        <ul class="store-tab">
            <li class="marked furniture-item active"><a href="index.php">Объявления</a></li>
            <li><a href="salons.php">Салоны</a></li>
            <li><a href="addNew.php">Подать объявление</a></li>
            <li><a href="addSalon.php">Добавить салон</a></li>
        </ul>
    </div>
    <div class="header-holder">
        <div class="branding">
            <h1 class="logo"><a href="index.php" title="MebelGid" class="logo"><img src="images/logo.png" alt="MebelGid" /></a></h1>
        </div>
        <div class="contact-block">
            <div class="promo-info">
                <a href="addNew.php"><img src="images/sell.png" alt="Sell" /></a></div>
            <div class="phone-block" onclick="javascript:window.open('http://vxml3.delacon.com.au/site/phone/page_3263.jsp','messageWindow1','scrollbars=no,width=230,height=290')"><strong class="title">0312 667788</strong>
                <div class="title">0552124565</div>
            </div>
        </div>
        <p>&nbsp;</p>
        <div class="form-search">
            <form id="search_mini_form_desktop" class="search-holder" action="http://www.mebelgid.kg/search/index/index" method="get">
                <input id="search_desktop" type="text" name="q" placeholder="Поиск" class="input-text" maxlength="128"/>
                <input value="Go" type="submit"/>
            </form>
        </div>
        <div id="search_autocomplete_desktop" class="search-autocomplete" style="display:none;"></div>
        <script type="text/javascript">
            //<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form_desktop', 'search_desktop', 'Search');
            var SolrBridgeAutocomplete = new SolrBridgeSearch('search_desktop',{id:'autocomplete',target:'#search_mini_form_desktop',inputid:'search_desktop',containerid:'search_mini_form_desktop',boxWidth:469,searchTextPlaceHolder:'Search entire store here...',currencySign:'&nbsp;$&nbsp;',currencycode:'AUD',ajaxBaseUrl:'http://www.mebelgid.kg',searchResultUrl:'http://www.mebelgid.kg/search',viewAllResultText:'View all search results for %s',categoryText:'Categories',viewAllCategoryText:'View all categories >>',viewAllBrandsText:'View all brands >>',keywordsText:'Keywords',productText:'product',productsText:'products',brandText:'Brands',storetimestamp:'1430760061',storeid:'6',customergroupid:'0',categoryRedirect:'0',showBrand:'0',showBrandAttributeCode:'manufacturer',displaykeywordsuggestion:'true',displayResultOfText:'Search results for %s',displayResultOfInsteadText:'Search results for %s instead',currencyPos:'before',displayThumb:'1',allowFilter:'1',categoryLimit:'3',brandLimit:'3',fromPriceText:'from'});
            //]]>
        </script>
    </div>
    <div class="nav-container">
        <a class="btn-rug-finder" href="#popup1"><span>Rug Finder</span></a>
        <ul id="nav">
            <li  class="level0 nav-1 first level-top parent">
                <a href="category.php?c=1"  class="level-top"  style="background-color: #F47B4B"><span >Мебель для дома</span></a>
                <div class="drop">
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=1&cat=kitchen"><span class="image-block"><img src="images/beds-mattresses.jpg" alt="" /></span><strong class="title">Кухня</strong></a>
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
                        <a class="category-visual" href="category.php?c=1&cat=living"><span class="image-block"><img src="images/bed-frames.jpg" alt="" /></span><strong class="title">Жилая мебель</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=1&cat=living&subcat=walls">Гостиные, витрины</a></li>
                            <li><a class="" href="category.php?c=1&cat=living&subcat=halls">Прихожие</a></li>
                            <li><a class="" href="category.php?c=1&cat=living&subcat=cupboards">Шкафы, шкафы-купе</a></li>
                            <li><a class="" href="category.php?c=1&cat=living&subcat=offices">Домашние кабинеты</a></li>
                            <li><a class="" href="category.php?c=1&cat=living&subcat=tables">Столы</a></li>
                            <li><a class="" href="category.php?c=1&cat=living&subcat=chairs">Стулья</a></li>
                            <li><a class="" href="category.php?c=1&cat=living&subcat=tallboys">Тумбы, комоды, подставки</a></li>
                            <li><a class="" href="category.php?c=1&cat=living&subcat=coffee-tables">Журнальные столики</a></li>
                            <li><a class="" href="category.php?c=1&cat=living&subcat=braided">Плетеная мебель</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=1&cat=soft"><span class="image-block"><img src="images/bedroom-furniture_2.jpg" alt="" /></span><strong class="title">Мягкая мебель</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=1&cat=soft&subcat=sofas">Диваны, диван-кровати</a></li>
                            <li><a class="" href="category.php?c=1&cat=soft&subcat=armchairs">Кресла, кресла-кровати</a></li>
                            <li><a class="" href="category.php?c=1&cat=soft&subcat=couches">Кушетка, тахта, панчетта</a></li>
                            <li><a class="" href="category.php?c=1&cat=soft&subcat=puffs">Пуфы и мешки</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=1&cat=children"><span class="image-block"><img src="images/bedroom-furniture_2.jpg" alt="" /></span><strong class="title">Детская мебель</strong></a>
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
                        <a class="category-visual" href="category.php?c=1&cat=bedrooms"><span class="image-block"><img src="images/bedroom-furniture_2.jpg" alt="" /></span><strong class="title">Спальня</strong></a>
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
                </div>
            </li>
            <li  class="level0 nav-2 level-top parent">
                <a href="category.php?c=3"  class="level-top" style="background-color: #F47B4B"><span >Мебель для офиса</span></a>
                <div class="drop special-drop">
                    <ul class="sub-category-list">
                        <li><a class="" href="category.php?c=3&cat=boss">Мебель Руководителю</a></li>
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
            <li  class="level0 nav-3 level-top parent">
                <a href="category.php?c=5&cat=profile"  class="level-top" style="background-color: #F47B4B" ><span >Профильная для бизнеса</span></a>
                <div class="drop">
                    <div class="category-col">
                        <a class="category-visual" href=""><span class="image-block"><img src="images/beds-mattresses.jpg" alt="" /></span><strong class="title">Торговое оборудование</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=5&cat=manufacture&subcat=fittings">Мебель</a></li>
                            <li><a class="" href="category.php?c=5&cat=profile&subcat=room">Стелажи, витрины</a></li>
                            <li><a class="" href="category.php?c=5&cat=profile&subcat=technical">Холодильные камеры</a></li>
                            <li><a class="" href="category.php?c=5&cat=profile&subcat=accessoty">Прочие аксессуары</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=5&cat=profile&subcat=cafe">Для кафе и ресторанов</a></li>
                            <li><a class="" href="category.php?c=5&cat=profile&subcat=study">Для учебных заведений</a></li>
                            <li><a class="" href="category.php?c=5&cat=profile&subcat=medical">Медицинские</a></li>
                            <li><a class="" href="category.php?c=5&cat=profile&subcat=other">Прочее</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li  class="level0 nav-4 level-top parent">
                <a href="category.php?c=2"  class="level-top" style="background-color: #F47B4B"><span >Все для интеръера</span></a>
                <div class="drop">
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=2&cat=light"><span class="image-block"><img src="images/beds-mattresses.jpg" alt="" /></span><strong class="title">Свет</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=2&cat=light&subcat=chandelier">Люстры</a></li>
                            <li><a class="" href="category.php?c=2&cat=light&subcat=onoff">Включатели, выключатели</a></li>
                            <li><a class="" href="category.php?c=2&cat=light&subcat=floor-lamp">Бра, торшеры итп</a></li>
                            <li><a class="" href="category.php?c=2&cat=light&subcat=kids">Детские</a></li>
                        </ul>
                    </div>
                    <div class="category-col">
                        <a class="category-visual" href="category.php?c=2&cat=light&subcat=doors"><span class="image-block"><img src="images/beds-mattresses.jpg" alt="" /></span><strong class="title">Двери</strong></a>
                        <ul class="sub-category-list">
                            <li><a class="" href="category.php?c=2&cat=light&subcat=interior">Межкомнатные</a></li>
                            <li><a class="" href="category.php?c=2&cat=light&subcat=steel_doors">Стальные</a></li>
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
                        <a class="category-visual" href=""><strong class="title"></strong></a>
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
            <li class="level0 nav-5 level-top parent">
                <a href="category.php?c=4"  class="level-top" style="background-color: #F47B4B" ><span >Услуги</span></a>
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
    <ul class="services-list">
        <li class="returns-link"><a href="#"><span>30-Day Returns</span></a></li>
        <li class="delivery-link"><a href="#"><span>Fast Delivery</span></a></li>
        <li class="support-link"><a href="#"><span>7 Day Customer Support</span></a></li>
    </ul>
</div>