<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>OSRSLookup</title>
      <link rel="shortcut icon" href="/img_assets/icon/levels.ico?v=2"/>
      <link href="/style/styles.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
      <script src="/js_assets/cookies.js" type="text/javascript"></script>
      <script src="/js_assets/main-functions.js" type="text/javascript"></script>
   </head>
   <body>
      	<center>
   	  <div id="cookie_bar">
   	  <i class="fa fa-exclamation-circle" style="margin-right:10px;"></i>
   	  In order for this site to work properly, and in order to evaluate and improve the site we need to store small files (called cookies) on your computer.
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
         <li onmouseover="changeArrow('up', 0)" onmouseout="changeArrow('down', 0)"  class="active">
            <a href="index">
            <img src="/img_assets/levels_icon.png" alt="home" class="home_icon" />
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
      <div id="content" style="min-height:100vh;">
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
                              <div class="title_container">
                                 <br/>
                                 <b>
                                 W
                                 </b>
                                 <span class="title_container_lower"> elco me 
                                 <br/>
                                 </span>
                                 <u>
                                 <span class="sub_text">
                                 <b>
                                 t
                                 </b>
                                 </span>
                                 <span class="lowercase_sub_text">
                                 o 
                                 </span>
                                 <span class="sub_text">
                                 &nbsp;&nbsp;
                                 <b>
                                 osrs
                                 </b>
                                 </span>
                                 <span class="lowercase_sub_text">
                                 lookup
                                 </span>
                                 </u>
                              </div>
                           </td>
                           <td rowspan="2" style="padding:10px;">
                           <img src="/img_assets/levels_icon.png" style="height:200px; padding:50px; opacity:0.8;">
                           </td>
                        </tr>
                        <tr>
                        <td style="vertical-align:top;">
                        <center>
                        </center>
                        <div class="Rosario_div" style="margin-left:30px;"><span class='Rosario_span' style="">
                        OSRSLookup is a fast and efficient tool to look up, and compare, weapon and armour stats. Quickly lookup what gear is most viable for 						your situation without having to go through the laborious task on searching the item on google!</span>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                        <center>
                        <a class="button" href="setuplookup" style="font-size:15px;">
                        <span class="rpg_span">
                        &#xe26e;
                        </span>
                        Lookup a full setup
                        </a>
                        </center>
                        <br/>
                        </td>
                        </tr>
                     </table>
                     </center>
                     <br/>
                     </div>
                     <img src="/img_assets/custom_hr.png" class="custom_hr">
                     <br/>
                     <center>
                        <span class="sub_title_container" style="font-size:15px;">
                        <br/>
                        Alternatively, lookup and/or compare:
                        </span>
                        <br/><br/><br/>
                        <a href='weaponlookup' class='button' style="margin-right: 2.5em; margin-left: 1em;">
                        <span class="rpg_span">
                        &#xe00a;
                        </span>
                        &nbsp;Weapons
                        </a>
                        <span style="font-family:Rosario, arial">Or</span>
                        <a href="armourlookup" class='button' style="margin-left:2.5em; margin-right:2.5em;">
                        <span class="rpg_span">
                        &#xe2bd;
                        </span>
                        &nbsp;Armour
                        </a>
                        <br/><br/><br/>
                     </center>
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
                        <script language="JavaScript">var fhsh = document.createElement('script');var fhs_id_h = "2959361";
						fhsh.src = "http://s1.freehostedscripts.net/ocount.php?site="+fhs_id_h+"&name=&a=1";
						document.head.appendChild(fhsh);document.write("<span id='h_"+fhs_id_h+"'></span>");
						</script>
                        <script>
						  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
						  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
						
						  ga('create', 'UA-65613471-1', 'auto');
						  ga('send', 'pageview');
						
						</script>
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