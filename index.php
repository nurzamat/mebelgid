<?php
include_once 'header.php';

if (isset($_GET['city']))
{
    if ($_GET['city'] == "bishkek")
    {
        $city = "Бишкек";
    }
    if ($_GET['city'] == "osh")
    {
        $city = "Ош";
    }

    if ($_GET['city'] == "cholponata")
    {
        $city = "Чолпон-Ата";
    }

    if ($_GET['city'] == "karakol")
    {
        $city = "Каракол";
    }
}

$_SESSION['city'] = $city;

$current_page = "index";

$query = "SELECT * FROM advertisements WHERE city='$city'";

$query1 = $query." AND catalog='1'";
$query2 = $query." AND catalog='2'";
$query3 = $query." AND catalog='3'";
$query4 = $query." AND catalog='4'";
$query5 = $query." AND catalog='5'";

$records = mysql_num_rows(queryMysql($query));
$records1 = mysql_num_rows(queryMysql($query1));
$records2 = mysql_num_rows(queryMysql($query2));
$records3 = mysql_num_rows(queryMysql($query3));
$records4 = mysql_num_rows(queryMysql($query4));
$records5 = mysql_num_rows(queryMysql($query5));

$recordsKitchen = $recordsSoft = $recordsLiving = $recordsBedrooms = $recordsChildren = $recordsBathroom = $recordsGarden = 0;

if($records1 > 0)
{
    $kitchenQ = $query1." AND cat='kitchen'";
    $softQ = $query1." AND cat='soft'";
    $livingQ = $query1." AND cat='living'";
    $bedroomsQ = $query1." AND cat='bedrooms'";
    $childrenQ = $query1." AND cat='children'";
    $bathroomQ = $query1." AND cat='bathroom'";
    $gardenQ = $query1." AND cat='garden'";

    $recordsKitchen = mysql_num_rows(queryMysql($kitchenQ));
    $recordsSoft = mysql_num_rows(queryMysql($softQ));
    $recordsLiving = mysql_num_rows(queryMysql($livingQ));
    $recordsBedrooms = mysql_num_rows(queryMysql($bedroomsQ));
    $recordsChildren = mysql_num_rows(queryMysql($childrenQ));
    $recordsBathroom = mysql_num_rows(queryMysql($bathroomQ));
    $recordsGarden = mysql_num_rows(queryMysql($gardenQ));
}
if($records2 > 0)
{

}
if($records3 > 0)
{

}
if($records4 > 0)
{

}
if($records5 > 0)
{

}


$hotQuery = "SELECT a.ID as id, a.title, a.catalog, a.cat, a.subcat, a.text, a.name, a.city, a.email, a.phone1, a.phone2, a.style,
a.carcase, a.facade, a.tabletop, a.priceIs, a.price, a.pricecurrency, a.pricefor, a.color, a.material, a.manufacturer,
a.length, a.height, a.width, a.shipment, a.feature, a.createddate, a.status, a.statusChangeDate, a.type, a.upholstery,
a.mechanism, a.foundation, a.enablecomments, a.idUser, u.user_login, u.user_pass, u.user_nicename, u.user_email, u.user_phone,
u.user_registered, u.user_city, u.user_status, u.user_salonname, u.user_salonstatus FROM advertisements AS a LEFT JOIN users as u ON a.idUser = u.ID WHERE a.status = 2";

$queryNews = "SELECT a.ID as id, a.title, a.text, a.createddate, a.status, a.idUser, u.user_login, u.user_pass, u.user_nicename, u.user_email, u.user_phone,
u.user_registered, u.user_city, u.user_status, u.user_salonname, u.user_salonstatus FROM news AS a LEFT JOIN users as u ON a.idUser = u.ID WHERE a.status=2 ORDER BY u.user_city LIMIT  0, 7";


$hotPrivates = queryMysql($hotQuery." AND (u.user_status=0 OR u.user_status=1) LIMIT  0, 12");
$hotSalons = queryMysql($hotQuery." AND u.user_status=2 LIMIT  0, 12");

$newsQ = queryMysql($queryNews);
$obj1 = $obj2 = $obj3 = $obj4 = $obj5 = $obj6 = null;
$s = 0;
while ($news = mysql_fetch_object($newsQ))
{
    $s = $s + 1;
    if($s == 1) $obj1 = $news;
    if($s == 2) $obj2 = $news;
    if($s == 3) $obj3 = $news;
    if($s == 4) $obj4 = $news;
    if($s == 5) $obj5 = $news;
    if($s == 6) $obj6 = $news;

    //$result = mb_substr($myStr, 0, 5);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MebelGid</title>
    <meta name="description" content="Путеводитель мебели по Бишкеку" />
    <meta name="keywords" content="MebelGid" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="css/bee28be882eea735de94a061a6bf1b28_1429528089.css" />
    <link rel="stylesheet" type="text/css" href="css/c75faf8efb186c9fe21955957b238d75_1429528198.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/54b530786bfaad6f6b0b47127b3eb8bf_1429528194.css" media="print" />
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/7306e16e41b7ffe6ec31f4c9d92f7b02_1429528198.js"></script>
    <script type="text/javascript" src="js/assets/jquery.bxslider.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="canonical" href="http://www.mebelgid.kg/" />
    <script>
        jQuery(document).ready(function(){
            jQuery('.bottom-slider').bxSlider({
                slideWidth: 345,
                minSlides: 2,
                maxSlides: 3,
                slideMargin: 0
            });

            jQuery('.sale-slider').bxSlider({
                slideWidth: 1025,
                slideMargin: 0
            });

            jQuery('.salons-slider').bxSlider({
                slideWidth: 1025,
                slideMargin: 0
            });
        });
    </script>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="css/02575c53fc10f8807d8b5cb009e8b505_1429528194.css" media="all" />
    <![endif]-->
    <!--[if lt IE 7]>
    <script type="text/javascript" src="js/7126137572f32ac969e3b5fb4e18227d_1429528198.js"></script>
    <![endif]-->

    <script type="text/javascript">
        //<![CDATA[
        Mage.Cookies.path     = '/';
        Mage.Cookies.domain   = '.mebelgid.kg';
        //]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[
        optionalZipCountries = ["HK","IE","MO","PA"];
        //]]>
    </script>
    <!-- BEGIN GOOGLE ANALYTICS CODEs -->
    <script type="text/javascript">
        //<![CDATA[
        var _gaq = _gaq || [];

        _gaq.push(['_setAccount', 'UA-9324681-3']);

        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        //]]>
    </script>
    <!-- END GOOGLE ANALYTICS CODE -->

    <!-- Magic Zoom Plus Magento module version v4.9.17 [v1.4.7:v4.5.30] -->
    <link type="text/css" href="css/magiczoomplus.css" rel="stylesheet" media="screen" />
    <script type="text/javascript" src="js/magiczoomplus.js"></script>
    <script type="text/javascript">
        MagicZoomPlus.options = {
            'caption-source':'span',
            'zoom-width':'300',
            'zoom-height':'300',
            'zoom-position':'inner',
            'zoom-align':'top',
            'zoom-distance':15,
            'expand-size':'fit-screen',
            'expand-position':'center',
            'expand-align':'screen',
            'expand-effect':'back',
            'restore-effect':'linear',
            'expand-speed':500,
            'restore-speed':500,
            'expand-trigger':'click',
            'expand-trigger-delay':200,
            'restore-trigger':'auto',
            'keep-thumbnail':true,
            'opacity':50,
            'opacity-reverse':false,
            'zoom-fade':true,
            'zoom-window-effect':'shadow',
            'zoom-fade-in-speed':200,
            'zoom-fade-out-speed':200,
            'fps':25,
            'smoothing':true,
            'smoothing-speed':40,
            'pan-zoom':true,
            'selectors-change':'click',
            'selectors-class':'',
            'preload-selectors-small':true,
            'preload-selectors-big':false,
            'selectors-effect':'dissolve',
            'selectors-effect-speed':400,
            'selectors-mouseover-delay':60,
            'initialize-on':'load',
            'click-to-activate':false,
            'click-to-deactivate':false,
            'show-loading':true,
            'loading-msg':'Loading zoom...',
            'loading-opacity':75,
            'loading-position-x':-1,
            'loading-position-y':-1,
            'entire-image':false,
            'show-title':false,
            'caption-width':300,
            'caption-height':300,
            'caption-position':'bottom',
            'caption-speed':250,
            'right-click':'false',
            'background-opacity':30,
            'background-color':'#000000',
            'background-speed':200,
            'buttons':'show',
            'buttons-display':'previous, next, close',
            'buttons-position':'auto',
            'always-show-zoom':false,
            'drag-mode':false,
            'move-on-click':true,
            'x':-1,
            'y':-1,
            'preserve-position':false,
            'fit-zoom-window':true,
            'slideshow-effect':'dissolve',
            'slideshow-loop':true,
            'slideshow-speed':800,
            'z-index':10001,
            'keyboard':true,
            'keyboard-ctrl':false,
            'hint':true,
            'hint-text':'Zoom',
            'hint-position':'tl',
            'hint-opacity':75,
            'disable-expand':false,
            'disable-zoom':false
        }
    </script>

    <script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script>	<script type="text/javascript" src="js/tws_350.js"></script>
    <script type="text/javascript" src="js/trustseal.js"></script>

    <style>
        #mainSalonsNews, .mainSalonsNewsLeft, .mainSalonsNewsRight
        {
            display: inline-block;
            vertical-align: top;
        }
        #mainNewsBlock
        {
            width: 200%;
        }
        #mainNewsBlock div
        {
            display: inline-block;
            max-width: 315px;
            min-width: 250px;
            margin: 10px 30px 0 0;

            font-size: .9em;
            vertical-align: top;
        }
        #mainNewsBlock p
        {
            padding: 7px 0;
        }
        #mainSalonsNews
        {
            width: 68.6%;
            margin: 0 0 40px;
            /*border-bottom: 1px solid #e7e7e7;*/
        }
        .mainSalonsNewsLeft
        {
            width: 46%;
            margin: 0 5% 20px 0;
            line-height: 24px;
        }
        .mainSalonsNewsLeft img
        {
            display: block;
            margin: 4px 0 10px;
            max-width: 100%;
            max-height: 400px;
        }
        .mainSalonsNewsLeft p
        {
            font-size: 14px;
            line-height: 20px;
            margin: 5px 0;
        }
        .mainSalonsNewsRight
        {
            width: 48%;
            font-size: 14px;
            line-height: 20px;
        }
        .mainSalonsNewsBlock
        {
            margin-bottom: 20px;
            clear: both;
        }
        .mainSalonsNewsBlock img
        {
            float: left;
            margin: 4px 0 20px;
            max-width: 38%;
            max-height: 150px;
        }
        .mainSalonsNewsBlock p
        {
            margin-left: 41%;
        }
        .mainSalonsNewsBlock span
        {
            margin: 7px 0 0;
            display: block;
        }
    </style>
</head>
<body class=" cms-index-index cms-home">
<div class="wrapper">
    <div class="page">
  <? include('head.php');?>

        <div class="slideshow-container home-slideshow desktop">
            <div class="content-button">
                <div class="slideshow-prev"><span>&nbsp;</span></div>
                <div class="slideshow-next"><span>&nbsp;</span></div>
            </div>
            <div class="slide-holder">
                <ul class="slideshow">
                    <li>
                        <div class="content">
                            <a href="#"><img src="images/contemporary-collection3.jpg" alt="" />
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <a href="#"><img src="images/sealy-april-2015.jpg" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <a href="#"><img src="images/caped-delivery-april2015.jpg" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <a href="#"><img src="images/scandinavian-april-2015.jpg" alt="" /></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="slideshow-pager"></div>
        </div>
        <script type="text/javascript">
            <!--
            jQuery(document).ready(function () {
                jQuery('.slideshow-container.desktop .slideshow')
                    .cycle({
                        slides: '> li',
                        pager: '.slideshow-container.desktop .slideshow-pager',
                        pagerTemplate: '<span class="pager-box"></span>',
                        speed: 600,
                        timeout:5500,
                        pauseOnHover: true,
                        swipe: true,
                        prev: '.slideshow-container.desktop .slideshow-prev',
                        next: '.slideshow-container.desktop .slideshow-next',
                        fx: 'scrollHorz'
                    });
            });
            //-->
        </script>
        <div class="main col1-layout">
            <div class="col-main">
                <h2 class="sub-title hotsalons"><a href="#">Горячие предложения от салонов и частников</a></h2>
                <div class="category-products">
                    <div class="salons-slider">
                        <ul class="products-grid">
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                    <img data-src="" class="" src="images/prod1.png" alt="Гарнитура ВуМе">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Гарнитура ВуМе</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8" class="product-image">
                                    <img data-src="" class="" src="images/prod6.png" alt="Гарнитура 8">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8">Гарнитура 8</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod7.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2" class="product-image">
                                    <img data-src="" class="" src="images/prod8.png" alt="Гарнитура ВуМе2">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 90000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2">Гарнитура ВуМе2</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>

                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod9.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                        </ul>
                        <ul class="products-grid">
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                    <img data-src="" class="" src="images/prod1.png" alt="Гарнитура ВуМе">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Гарнитура ВуМе</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8" class="product-image">
                                    <img data-src="" class="" src="images/prod6.png" alt="Гарнитура 8">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8">Гарнитура 8</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod7.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2" class="product-image">
                                    <img data-src="" class="" src="images/prod8.png" alt="Гарнитура ВуМе2">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 90000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2">Гарнитура ВуМе2</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>

                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod9.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                        </ul>
                        <ul class="products-grid">
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                    <img data-src="" class="" src="images/prod1.png" alt="Гарнитура ВуМе">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Гарнитура ВуМе</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8" class="product-image">
                                    <img data-src="" class="" src="images/prod6.png" alt="Гарнитура 8">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8">Гарнитура 8</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod7.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2" class="product-image">
                                    <img data-src="" class="" src="images/prod8.png" alt="Гарнитура ВуМе2">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 90000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2">Гарнитура ВуМе2</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>

                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod9.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                        </ul>
                    </div>
                </div>

                <h2 class="sub-title sale"><a href="news.php">Распродажа мебели, скидки и акции</a></h2>
                <div class="category-products">
                    <div class="sale-slider">
                        <ul class="products-grid">
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                    <img data-src="" class="" src="images/prod10.png" alt="Гарнитура ВуМе">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Гарнитура ВуМе</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8" class="product-image">
                                    <img data-src="" class="" src="images/prod2.png" alt="Гарнитура 8">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8">Гарнитура 8</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod3.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2" class="product-image">
                                    <img data-src="" class="" src="images/prod4.png" alt="Гарнитура ВуМе2">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 90000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2">Гарнитура ВуМе2</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>

                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod5.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                        </ul>
                        <ul class="products-grid">
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                    <img data-src="" class="" src="images/prod10.png" alt="Гарнитура ВуМе">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Гарнитура ВуМе</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8" class="product-image">
                                    <img data-src="" class="" src="images/prod2.png" alt="Гарнитура 8">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8">Гарнитура 8</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod3.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2" class="product-image">
                                    <img data-src="" class="" src="images/prod4.png" alt="Гарнитура ВуМе2">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 90000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2">Гарнитура ВуМе2</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>

                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod5.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                        </ul>
                        <ul class="products-grid">
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                    <img data-src="" class="" src="images/prod10.png" alt="Гарнитура ВуМе">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Гарнитура ВуМе</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8" class="product-image">
                                    <img data-src="" class="" src="images/prod2.png" alt="Гарнитура 8">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 5000 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=72" title="Гарнитура 8">Гарнитура 8</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod3.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span></span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                            <li class="item">
                                <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2" class="product-image">
                                    <img data-src="" class="" src="images/prod4.png" alt="Гарнитура ВуМе2">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 90000 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=76" title="Гарнитура ВуМе2">Гарнитура ВуМе2</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>

                            <li class="item">
                                <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона" class="product-image">
                                    <img data-src="" class="" src="images/prod5.png" alt="Офисные стулья от салона">
                                    <span class="loading hidden"></span>
                                    <span class="sale-label hidden" title="Sale">Sale</span>
                                </a>
                                <div class="price-box">
                                    <span class="regular-price" id="product-price">
                                        <span class="price">от 7888888 сом</span>
                                    </span>
                                </div>
                                <h2 class="product-name">
                                    <a href="show.php?type=goods&amp;id=75" title="Офисные стулья от салона">Офисные стулья от салона</a><br>
                                    <span>nurik salon</span>
                                </h2>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="category-products design">
                    <h2 class="sub-title design"><a href="#">Дизайн интерьеров</a></h2>
                    <ul class="products-grid bottom-slider">
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo2.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo3.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo3.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo3.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo3.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo3.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo3.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                        <li class="item">
                            <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе" class="product-image">
                                <img data-src="" class="" src="images/allergo3.png" alt="Гарнитура ВуМе">
                                <span class="loading hidden"></span>
                                <span class="sale-label hidden" title="Sale">Sale</span>
                            </a>
                            <h2 class="product-name">
                                <a href="show.php?type=goods&amp;id=71" title="Гарнитура ВуМе">Спальный гарнитур Аллегро</a><br>
                                <span>Джихаз Мебель</span>
                            </h2>
                        </li>
                    </ul>
                </div>
                <div class="category-products last">
                    <h2 class="sub-title design"><a href="#">Мебельные салоны</a></h2>
                    <div><img src="images/stores.png" /></div>
                    <div class="stores-info">
                        <p><strong>Buy Wooden Furniture Online</strong><br />
                        Pepperfry - India’s largest home shopping destination offers a wide range of home and office furniture online.  The right furniture for your home will add 
                        elegance and functionality to your interior decor, while it will also be cost effective and long lasting at the same time. Enjoy fast shipping as well as cash on 
                        delivery at our online store.</p>
                        <p><strong>Furniture for Every Purpose</strong><br />
                        Here at Pepperfry, we are committed to offering our customers the widest range in home furniture like tables, sofas, chairs for living room as well as beds, 
                        wardrobes, side tables, dressing tables for bedroom and crockery cabinets, chest of drawers for kitchen, so that it is easy and hassle free to buy furniture online. 
                        We also offer office furniture like desks, wheel chairs, shoe racks, storage and reception cabinets. See various designs side by side, compare prices and 
                        finishes and find exclusive modular furniture pieces that you would not find at local furniture stores.</p>
                        <p><strong>Exclusive Range of Furniture Online</strong><br />
                        Our exhaustive range offers multiple options in solid, sheesham wood furniture pieces, while all our wooden furniture can also be customized to suit the 
                        individual needs of our customers. Our furniture is intelligently designed to give both comfort and functionality; while we also go to great lengths to ensure 
                        that we source only the highest quality raw materials and use the latest technologies to manufacture each individual piece. Pepperfry.com is the best place 
                        to buy metal as well as wooden furniture online in India. Check our wide range of products for Home Decor, Bed & Bath, Kitchen& Dining and Appliances. 
                        So go ahead now and take a good look at our online shopping store.</p>
                    </div>
                </div>
                <a class="main-back go-to" href="#header"><span>Вверх</span></a>
            </div>
        </div>
<? include('footer.php');?>

        <script type="text/javascript">
            //<![CDATA[
            Enterprise.Wishlist.list = [];
            if (!Enterprise.Wishlist.url) {
                Enterprise.Wishlist.url = {};
            }
            Enterprise.Wishlist.url.create = 'https://www.mebelgid.kg/wishlist/index/createwishlist/';
            Enterprise.Wishlist.canCreate = false;
            //]]>
        </script>
        <script src="js/performance.js" type="text/javascript"></script>
        <script type="text/javascript">
            Event.observe(window, 'load', function() {

                if(document.getElementById('magestore-sociallogin-popup-email') !=null && document.getElementById('magestore-sociallogin-popup-pass')!=null)
                {
                    var options = {
                        email: document.getElementById('magestore-sociallogin-popup-email').value,
                        pass : document.getElementById('magestore-sociallogin-popup-pass').value,
                        login_url  : "http://www.mebelgid.kg/sociallogin/popup/login",
                        send_pass_url : "http://www.mebelgid.kg/sociallogin/popup/sendPass",
                        create_url : "http://www.mebelgid.kg/sociallogin/popup/createAcc"
                    };
                    Login = new LoginPopup(options);
                }
            });
        </script>
        <script type="text/javascript">
            //<![CDATA[
            var currentSiteSessionId = '401316f67225422587b657ba0145d95f';
            var previousSessionId = getCookie('previousSessionId');
            var hosts = ['http://www.mebelgid.kg/'];
            if(currentSiteSessionId != previousSessionId)
            {
                var date = new Date( new Date().getTime() + 3600*1000 );
                document.cookie="previousSessionId="+currentSiteSessionId+"; path=/; expires="+date.toUTCString();
                setSessionForAllStores();
            }
            //]]>
        </script>
        <!-- ESI END [head.non.cached.part] -->
    </div>
</div>
<!-- Start Tracking Codes -->
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5P8HHB"; height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5P8HHB');</script>
<!-- End Google Tag Manager -->
</body>
</html>

