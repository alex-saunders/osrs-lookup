
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
      <script src="/js_assets/newitem.js"></script>
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
         <li onmouseover="changeArrow('up', 0)" onmouseout="changeArrow('down', 0)">
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
         <li onmouseover="changeArrow('up', 1)" onmouseout="changeArrow('down', 1)"  class="active">
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
                           <td height="20%">
                              <div class="title_container" style="margin-left:2%;">
                                 <br/>
                                 <b>
                                 R
                                 </b>
                                 <span class="title_container_lower">
                                 equest 
                                 </span>
                                 <br/>
                                 <span style="font-size:24px">
                                 <span style="margin-right:15px;">New </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item
                                 </span>
                              </div>
                           </td>
						 </tr>
						 <tr>
						 <td>
						 <div class='Rosario_span'>
						 <br/>You are submitting a new item which is currently not in our database, please try all possible spellings of the item before concluding that it is not in the current database and submitting a request here.<br/><br/><br/>
						 <center><span class="alert_div">Any items submitted that are already currently in the database will be disregarded.</span></center>
						 </div>
						 <br/>
						 </td>
						 </tr>
                     </table>
                     <img src="/img_assets/custom_hr.png" class="custom_hr_thin" style="width:90%;">
                     <br/><br/>
                     <table style="width:70%">
                     <tr>
                     </tr>
                        <tr>
                        <td>
                        <div class="table_wrapper">
                        <table class="item_table" style="width:100%;" cellpadding="10">
                        <tr></tr>
                        <tr class="item_table_dark">
                        <td colspan="2">
                        <b>
                        Item Info
                        </b>
                        </td>
                        </tr>
                        <tr class="item_table_light">
                        <td>
                        <b>*Item name:</b>
                        </td>
                        <td>
                        <table style="width:100%" cellspacing="0">
                        <tr>
                        </tr>
                        <tr>
                        <td>
                        <input type='text' id='txtInput' value='' style='width:97%; height:30px' placeholder='empty' autocomplete='off'>
                        </td>
                        </tr>
                        </table>
                        </td>
                        </tr>
                        <tr class="item_table_dark">
                        <td colspan="2">
                        <b>
                        Your info
                        </b>
                        </td>
                        </tr>
                        <tr class="item_table_light">
                        <td>
                        Your name: (optional)
                        </td>
                        <td>
                        <input type="text" id="name_input" placeholder="name" style="width:98%; height:30px">
                        </td>
                        </tr>
                        <tr class="item_table_light">
                        <td>
                        Your email: (optional)
                        </td>
                        <td>
                        <input type="text" id="email_input" placeholder="email" style="width:98%; height:30px">
                        </td>
                        </tr>
                        <tr class="item_table_dark">
                        <td colspan="2">
                        Your new item submission: (max 500 characters) (optional)
                        </td>
                        </tr>
                        <tr class="item_table_light">
                        <td colspan="2">
                        <textarea rows="10" cols="1" maxlength="500" style="width:99%; resize:vertical;" id="submission_input"
                        placeholder="Please enter any item info (stats, attack speed, styles etc.) that you already know about here"></textarea>
                        </td>
                        </tr>
                        <tr class="item_table_dark">
                        <td colspan="2">
                        <center>
                        The information provided within this form is, to the best of my knowledge, accurate, and I am not deliberately providing incorrect 						information. <br/><br/>
                        <button class="button" onclick="submitForm()">I agree - submit my item request</button>
                        </center>
                        </td>
                        </tr>
                        </table>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
						<center>
                        <br/>
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
                        <script language="JavaScript" src="http://s1.freehostedscripts.net/ocount.php?site=ID2959361&name="></script>
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
                        </td>
                        </tr>
                     </table>
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