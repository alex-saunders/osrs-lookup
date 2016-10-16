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
                                 A
                                 </b>
                                 <span class="title_container_lower"> bout
                                 <br/>
                              </div>
                              <div id="info_container">
                                 <center>
                           </td>
                           <td rowspan="2" style="padding:10px;">
                           <img src="/img_assets/tutor_icon.png" style="height:200px; margin:10px; opacity:0.8;">
                           </td>
                        </tr>
                        <tr>
                        <td>
                        <br/>
                        <div class="sub_title_div">WHAT &nbsp;IS &nbsp;THIS?</div>
                        <br/>
                        <div class='Rosario_div'>
                        OSRSLookup is a tool for looking up either single weapons/pieces of armour's stats or multiple items in order to compare their bonuses. <br/>I developed this over a couple of weeks in my summer holidays (100% from scratch, not using any cheaty website design tools like wordpress, or stealing anyone else's code!) I am looking to update it regularly so any feedback or suggested ideas for features is greatly appreciated (I will be adding a feedback page soon, along with a permanent email address you can use to message me if need be), though please be kind as this is an ongoing project done with no funding and only in my free time!
                        
                        <br/><br/>
                        <a href="https://www.reddit.com/r/2007scape/comments/3y07a8/weapon_armour_setup_lookup_tool_ive_been_working/" class='link'>
                        Main Reddit Post
                        
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                        <br/>
                        <br/>
                        <div class="sub_title_div">WHO &nbsp;AM &nbsp;I?</div>
                        <br/>
                        <div class='Rosario_div'>
                        My name is Alex and i'm a computer science student at the University of Liverpool. I've played Runescape for a large proportion of my life (probably going on for 8~ years) my IGN is 'Smouldering'. I created this as project that I hope to add to and expand over time, hopefully becoming more than just a gear lookup service (potentially adding monster stats, player lookup etc.) so please keep checking back for future updates!
                        </div>
                        <br/><br/>
                        <div class="sub_title_div">UPCOMING &nbsp;FEATURES</div>
                        <br/>                     
	                     <div class='Rosario_div' >
	                     (Subject to change)
	                     <ul>
	                     <li>Item level & quest requirement info</li>
	                     <li>Special attack info</li>
	                     <li>Item price info</li>
	                     <li>Armour lookup</li>
	                     <li>Monster/player lookup <br/>(undecided on what one to focus on first)</li>
	                     </ul>
	                     </div>
                        </td>
                        </tr>
                     </table>
                     </center>
                     <br/>
                     </div>
                     <img src="/img_assets/custom_hr.png" class="custom_hr"><a name="donate"></a>
                     <br/>
                     <div class="title_container">
                                 <br/>
                                 <b>
                                 D
                                 </b>
                                 <span class="title_container_lower"> onate
                                 <br/>
                              </div>
                              <br/>
                              <div class='Rosario_div' style="margin-left:10%; margin-right:10%;">
                        If you're crazy enough to think this is worthy of a donation (which would be insanely appreciated!) Then a donation link can be found below:
                        </div>
                        <br/>
                     <center>
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						 <input type="hidden" name="cmd" value="_s-xclick">
						 <input type="hidden" name="hosted_button_id" value="E6VDPWTDCCATS">
						 <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, 							easier way to pay online.">
						 <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<br/>
                     </center>
                     <img src="/img_assets/custom_hr.png" class="custom_hr">
                     <br/>
                     <div class="title_container">
                                 <br/>
                                 <b>
                                 A
                                 </b>
                                 <span class="title_container_lower"> cknowledgements
                                 <br/>
                              </div>
                              <br/>
                              <div class='Rosario_div' style="margin-left:10%; margin-right:10%;">
                        <ul>
                        	<li>All data and most images taken from the osrs wiki: <a href="http://2007.runescape.wikia.com/wiki/2007scape_Wiki" class='link'>http://2007.runescape.wikia.com/wiki/2007scape_Wiki</a></li>
                        	<br/>
                        	<li>Some images taken from the <a href="http://oldschool.runescape.com/" class="link">oldschool runescape site</a></li>
                        	<br/>
                        	<li>Special thanks to <a href="https://www.reddit.com/user/JofoRS" class='link'>JofoRS</a> (owner and creator of <a href="http://rsclues.com/" class='link'>rsclues.com</a>), as well as obviously the oldschool website, for the design inspiration!
                        </ul>
                        </div>
                     <br/>
                     <br/>
                     <img src="/img_assets/custom_hr.png" class="custom_hr">
                     <br/>
                     <div class="title_container">
                                 <br/>
                                 <b>
                                 C
                                 </b>
                                 <span class="title_container_lower"> ookies
                                 <br/> 
                              </div>
                              <br/>
                              <div class='Rosario_div' style="margin-left:10%; margin-right:10%;">
								  In order for this site to work properly, and in order to evaluate and improve the site we need to store small files (called cookies) on your computer.
   	  <a href="cookiepolicy" class="link">&nbsp;You can read more about it here</a>
							  </div>
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
                        <script language="JavaScript" src="http://s1.freehostedscripts.net/ocount.php?site=ID2959361&name="></script>
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