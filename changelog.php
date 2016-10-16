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
                  <img src="/img_assets/banner_top.gif" id="top_banner" alt="top banner" />
                  <center>
                     <table width="80%">
                        <tr>
                           <td class="td_filler">
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="title_container" style="margin-left:0px;">
                                 <br/>
                                 <b>
                                 C
                                 </b>
                                 <span class="title_container_lower"> 
                                 &nbsp;hangelog
                                 <br/>
                                 </span>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <br/>
                              <div class="sub_title_div">
                              <span class="code">
                              All notable changes to OSRSLookup will be documented here.
                              </span>
                              </div>
                              <br/>
                              <div class='Rosario_div'>
                                 <div class="code">
                                    <b>## [0.1.0] - 2015-07-26 (Beta Release) </b><br/>
                                    <b>### Added </b>
                                    <ul>
                                       <li>
                                          Home Page
                                       </li>
                                       <li>
                                          Weapons Lookup
                                       </li>
                                       <li>
                                          Setup Lookup
                                       </li>
                                       <li>
                                          Feedback Section
                                       </li>
                                    </ul>
                                    <br/>
                                    <b>## [0.1.1] - 2015-07-28 </b><br/>
                                    <b>### Added </b>
                                    <ul>
                                       <li>
                                          Cookie warning bar
                                       </li>
                                       <li>
                                          Cookie policy description
                                       </li>
                                    </ul>
                                    <br/>
                                    <b>## [1.0.0] - 2015-07-28 (First Full Release) </b><br/>
                                    <b>### Added </b>
                                    <ul>
                                       <li>
                                          Armour Lookup
                                       </li>
                                    </ul>
                                    <b>### Changed </b>
                                    <ul>
                                       <li> 
                                          Unavailable links to armour lookup enabled
                                       </li>
                                    </ul>
                                    <br/>
                                    <b>## [1.1.0] - 2016-01-06 </b><br/>
                                    <b>### Added </b>
                                    <ul>
                                       <li>
                                          Changelog page
                                       </li>
                                       <li>
                                          Generic functions Javascript file
                                       </li>
                                    </ul>
                                    <b>### Changed </b>
                                    <ul>
                                       <li>
                                          Underlying algorithms (PHP &amp; Javascript) vastly improved for efficiency and a lot of redundant code removed/refreshed
                                       </li>
                                       <li>
                                       	  Algorithm to retrieve item's icons altered to be much more stable/reliable and display loading progress
                                       </li>
                                        <br/>
                                       <li>
                                          Nav Bar updated to include changelog and about page under home
                                       </li>
                                        <br/>
                                       <li>
                                          Armour &amp; Weapon lookup pages GUI's altered
                                       </li>
                                    </ul>
                                    <b>### Removed</b>
                                    <ul>
                                       <li>
                                          Old PHP &amp; Javascript Scripts, functions replaced with more transferable versions now found in main functions file
                                       </li>
                                    </ul>
                                     <br/>
                                     <b>## [1.2.0] - 2016-01-19 </b><br/>
                                     <b>### Added </b>
                                     <ul>
                                         <li>
                                             OSRS GE API support
                                         </li>
                                         <li>
                                             GE Price calculations for both individual items and full setups <br/>
                                             (note: untradeable items do not have high alch price alternatives yet so prices only given for tradeable items)
                                         </li>
                                         <br/>
                                         <li>
                                         <b>## [1.2.1] - 2016-01-20 </b>
                                         <ul>
                                         	<li>
                                         	Minor Bug fixes - item (g) and (t) etc. prices now working correctly
                                         	</li>
                                         </ul>
                                         </li>
                                         <br/>
                                         <li>
                                             <b>## [1.2.2] - 2016-01-22 </b><br/>
                                             <b>### Added </b>
                                             <ul>
                                                 <li>
                                                     Price Breakdown for setup price estimations - expand the 'Price Breakdown' Row of the price table
                                                     to see individual prices of every tradeable item in the requested setup.
                                                 </li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     </table>
                     <br/>
                  </center>
                  <img src="/img_assets/custom_hr.png" class="custom_hr" alt="section"/>
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
                     For the Data &amp; images
                     <br/>
                     </span>
                  </center>
                  <img src="/img_assets/banner_top.gif" id="bottom_banner" alt="bottom banner"/>
               </td>
            </tr>
         </table>
         <br/>
         <br/>
      </div>
   </body>
</html>