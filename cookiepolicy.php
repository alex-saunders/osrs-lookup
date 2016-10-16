<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>OSRSLookup</title>
    <link rel="shortcut icon" href="/img_assets/icon/levels.ico?v=2"/>
    <link href="/style/styles.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"
            type="text/javascript"></script>
    <script src="/js_assets/cookies.js" type="text/javascript"></script>
    <script src="/js_assets/main-functions.js" type="text/javascript"></script>
</head>
<body>
<center>
    <div id="cookie_bar">
        <i class="fa fa-exclamation-circle" style="margin-right:10px;"></i>
        In order for this site to work properly, and in order to evaluate and improve the site we need to store small
        files (called cookies) on your computer.
        <a href="cookiepolicy">&nbsp;You can read more about it here</a>

        <div id="cookie_button_wrapper">
   	  <span class="cookie_button" onclick="setCookie('cookieSet', cookieSet, 30);">
   	  <i class="fa fa-check"></i>
   	  That's fine
   	  </span>
   	  <span class="cookie_button_lower" onclick="removeBar();">
   	  <i class="fa fa-times"></i>
   	  I don't agree
   	  </span>
        </div>
    </div>
</center>
<ul id="menu-bar">
    <li onmouseover="changeArrow('up', 0)" onmouseout="changeArrow('down', 0)" class="active">
        <a href="index">
            <img src="/img_assets/levels_icon.png" alt="home" class="home_icon"/>
            &nbsp;OSRSLookup
            <span class="menu_arrow">&#x25BC;</span>
        </a>
        <ul>
            <li>
                <a href="about">
                    <i class="fa fa-question"></i>
                    &nbsp;&nbsp;&nbsp;About
                </a>
            </li>
            <li>
                <a href="changelog">
                    <i class="fa fa-list"></i>
                    &nbsp;Changelog
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="weaponlookup">
            <span class="rpg_span">&#xe00a;</span>
            Weapons
        </a>
    </li>
    <li>
        <a href="armourlookup">
            <span class="rpg_span">&#xe2bd;</span>
            Armour
        </a>
    </li>
    <li>
        <a href="setuplookup">
            <span class="rpg_span">&#xe26e;</span>
            Setups
        </a>
    </li>
    <li onmouseover="changeArrow('up', 1)" onmouseout="changeArrow('down', 1)">
        <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            Feedback
            <span class="menu_arrow">&#x25BC;</span>
        </a>
        <ul>
            <li>
                <a href="submitreport">
                    <i class="fa fa-exclamation"></i>
                    &nbsp;&nbsp;Submit item correction
                </a>
            </li>
            <li>
                <a href="submitrequest">
                    <i class="fa fa-plus"></i>
                    &nbsp;Request new item
                </a>
            </li>
        </ul>
    </li>
</ul>
<div id="content" style="min-height:110vh;">
    <br/>
    <br/>
    <br/>
    <table class="main_table" cellspacing="0" width="80%">
        <tr>
            <td>
                <img src="/img_assets/banner_top.gif" id="top_banner">
                <center>
                    <table width="80%">
                        <tr>
                        </tr>
                        <tr>
                            <td>
                                <div class="title_container" style="margin-left:0px;">
                                    <br/>
                                    <b>
                                        C
                                    </b>
                                 <span class="title_container_lower"> ookie
                                 <br/> Policy
                                 <br/>
                                </div>
                                <div id="info_container">
                                    <center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br/>

                                <div class="sub_title_div">WHAT &nbsp;ARE &nbsp;COOKIES?</div>
                                <br/>

                                <div class='Rosario_div'>
                                    As is common practice with almost all professional websites this site uses cookies,
                                    which are tiny files that are downloaded to your computer, to improve your
                                    experience. This page describes what information they gather, how we use it and why
                                    we sometimes need to store these cookies. We will also share how you can prevent
                                    these cookies from being stored however this may downgrade or 'break' certain
                                    elements of the sites functionality.
                                    <br/><br/>
                                    For more general information on cookies see the
                                    <a href="https://en.wikipedia.org/wiki/HTTP_cookie" class="link">
                                        Wikipedia article on HTTP Cookies...
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <br/>
                                <br/>

                                <div class="sub_title_div">HOW &nbsp;WE &nbsp;USE &nbsp; COOKIES</div>
                                <br/>

                                <div class='Rosario_div'>
                                    We use cookies for a variety of reasons detailed below. Unfortunately in most cases
                                    there are no industry standard options for disabling cookies without completely
                                    disabling the functionality and features they add to this site. It is recommended
                                    that you leave on all cookies if you are not sure whether you need them or not in
                                    case they are used to provide a service that you use.
                                </div>
                                <br/><br/>

                                <div class="sub_title_div">DISABLING &nbsp;COOKIES</div>
                                <br/>

                                <div class='Rosario_div'>
                                    You can prevent the setting of cookies by adjusting the settings on your browser
                                    (see your browser Help for how to do this). Be aware that disabling cookies will
                                    affect the functionality of this and many other websites that you visit. Disabling
                                    cookies will usually result in also disabling certain functionality and features of
                                    the this site. Therefore it is recommended that you do not disable cookies.
                                </div>
                                <br/><br/>

                                <div class="sub_title_div">THE &nbsp;COOKIES &nbsp; WE &nbsp; SET</div>
                                <br/>

                                <div class='Rosario_div'>
                                    When you submit data to through a form such as those found on contact pages or
                                    comment forms cookies may be set to remember your user details for future
                                    correspondence.
                                </div>
                                <br/><br/>

                                <div class="sub_title_div">THIRD &nbsp;PARTY &nbsp; COOKIES</div>
                                <br/>

                                <div class='Rosario_div'>
                                    In some special cases we also use cookies provided by trusted third parties. The
                                    following section details which third party cookies you might encounter through this
                                    site.
                                    <br/><br/>

                                    This site uses Google Analytics which is one of the most widespread and trusted
                                    analytics solution on the web for helping us to understand how you use the site and
                                    ways that we can improve your experience. These cookies may track things such as how
                                    long you spend on the site and the pages that you visit so we can continue to
                                    produce engaging content.
                                    <br/><br/>

                                    For more information on Google Analytics cookies, see the
                                    <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage"
                                       class="link">
                                        official Google Analytics page.
                                    </a>
                                    <br/><br/>

                                    Third party analytics are used to track and measure usage of this site so that we
                                    can continue to produce engaging content. These cookies may track things such as how
                                    long you spend on the site or pages you visit which helps us to understand how we
                                    can improve the site for you.
                                </div>
                                <br/><br/>

                                <div class="sub_title_div">MORE &nbsp;INFORMATION</div>
                                <br/>

                                <div class='Rosario_div'>
                                    Hopefully that has clarified things for you and as was previously mentioned if there
                                    is something that you aren't sure whether you need or not it's usually safer to
                                    leave cookies enabled in case it does interact with one of the features you use on
                                    our site. However if you are still looking for more information then you can contact
                                    us through one of our preferred contact methods.
                                </div>
                                <br/><br/>

                                <div class='Rosario_div'>
                                    <b>Email:</b>
                                    <a href="mailto:alex-saunders@outlook.com" class="link">
                                        alex-saunders@outlook.com
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </center>
                <br/>
                <br/>
                <img src="/img_assets/custom_hr.png" class="custom_hr">
                <center>
                    <br/>
                        <span class="sub_title_container" style="font-size:10px;">
                        <a href='about' class='link'>
                            About
                        </a>
                        | 
                        <a href='about#donate' class='link'>
                            Donate
                        </a>
                        <br/>
                        Thanks to the 
                        <a href='http://2007.runescape.wikia.com/wiki/2007scape_Wiki' class='link'>
                            Oldschool Wiki
                        </a>
                        For the Data & images
                        |
                        <script language="JavaScript"
                                src="http://s1.freehostedscripts.net/ocount.php?site=ID2959361&name="></script>
                        <br/>
                        </span>
                </center>
                <img src="/img_assets/banner_top.gif" id="bottom_banner">
            </td>
        </tr>
    </table>
         <br/>
         <br/>
      </div>
</body>
</html>