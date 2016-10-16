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
      <script src="/js_assets/weapons.js" type="text/javascript"></script>
      <script src="/js_assets/main-functions.js" type="text/javascript"></script>
   </head>
   <body>
      <div id="fade"></div>
      <div id="modal">
         <img id="loader" src="/img_assets/loading.gif" alt="loading"/><br/><br/>
         <span id="modal_text">
         </span>
      </div>
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
         <li  class="active">
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
                  <img src="/img_assets/banner_top.gif" id="top_banner" alt="top banner"/>
                  <center>
                     <table width="80%">
                        <tr>
                           <td class="td_filler">
                           </td>
                        </tr>
                        <tr>
                           <td height="20%" style="width:65%;">
                              <div class="title_container">
                                 <br/>
                                 <b>
                                 W
                                 </b>
                                 <span class="title_container_lower"> eapon &nbsp;&nbsp;&nbsp;Lookup
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 </span>
                              </div>
                              <br/>
                              <center>
                                 <span class="Rosario_span">
                                 <i>
                                 Quickly look up different weapon items
                                 </i>
                                 </span>
                              </center>
                              <br/>
                           </td>
                           <td style="padding:10px; padding-top:70px; vertical-align: top;">
                              <img src="/img_assets/weapon_slot.png" style="position:absolute; height:200px;" alt="weapon slot"/>
                           </td>
                        </tr>
                        <tr>
                           <td height="80%" style="vertical-align:top;">
                              <img src="/img_assets/custom_hr.png" alt="section" 
                                 id="scrollpoint" class="custom_hr_thin" style="margin-left:-10%; width:114%;"/>
                              <br/>
                              <br/>
                              <table class="item_table" style="width:100%;" cellpadding="10;">
                                 <tr>
                                    <td class="td_filler">
                                    </td>
                                 </tr>
                                 <tr class="item_table_light">
                                    <td colspan="2">
                                       <span class='Rosario_span'><b>Step 1: </b>How many weapon items do you want to lookup?</span>
                                       <br/>
                                    </td>
                                 </tr>
                                 <tr class="item_table_dark">
                                    <td>
                                       <input type="radio" name="amount" value="1" onclick="generate_item_containers(this.value);" checked="checked"/>&nbsp;1
                                    </td>
                                    <td>
                                       <input type="radio" name="amount" value="2" onclick="generate_item_containers(this.value);"/>&nbsp;2
                                    </td>
                                 </tr>
                                 <tr class="item_table_light">
                                    <td colspan="2">
                                       <span class='Rosario_span'>
                                       <b>Step 2: </b>
                                       Search for the item names &amp; add them to the selected items list
                                       </span>
                                    </td>
                                 </tr>
                                 <tr class="item_table_dark" id="item_containers_tr" style="display:none;">
                                    <td colspan="3">
                                    <center>
                                       <div id="itemContainers">
                                       </div>
                                    </center>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </center>
                  <br/>
                  <img src="/img_assets/custom_hr.png" class="custom_hr" alt="section"/>
                  <br/>
                  <br/>
                  <center>
                     <table width="80%" >
                        <tr>
                           <td class="td_filler">
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class='Rosario_span'>
                              <div id="item_nav">
                              </div>
                           </td>
                        </tr>
                        <tr id="item_compare">
                           <td class="td_filler">
                           </td>
                        </tr>
                     </table>
                     <br/>
                  </center>
                  <br/>
                  <center>
                     <a href='submitreport' class='button' id="bottom_button" style="display:none;">
                     <i class='fa fa-pencil-square-o'></i> &nbsp;Submit Correction
                     </a>
                  </center>
                  <br/>
                  <br/>
                  <img src="/img_assets/custom_hr.png" class="custom_hr" id="bottom_hr" style="display:none;" alt="section"/>
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
                     <br/><br/>
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