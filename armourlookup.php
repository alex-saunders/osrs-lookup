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
      <script src="/js_assets/armour.js" type="text/javascript"></script>
      <script src="/js_assets/cookies.js" type="text/javascript"></script>
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
         <li>
            <a href="weaponlookup">
            <span class="rpg_span">&#xe00a;</span>
            Weapons
            </a>
         </li>
         <li  class="active">
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
                  <img src="/img_assets/banner_top.gif" alt="top banner" id="top_banner"/>
                  <center>
                     <table width="80%">
                        <tr style="display:none;">
                           <td>
                           </td>
                        </tr>
                        <tr>
                           <td height="20%" style="width:75%;">
                              <center>
                                 <div class="title_container" style="margin-left:0%;">
                                    <br/>
                                    <b>
                                    A
                                    </b>
                                    <span class="title_container_lower">rmour &nbsp;&nbsp;&nbsp;Lookup
                                    <br/>
                                    </span>
                                 </div>
                              </center>
                              <br/>
                              <center>
                                 <span class="Rosario_span">
                                 <i>
                                 Quickly look up different armour items
                                 </i>
                                 </span>
                              </center>
                              <br/>
                           </td>
                           <td style="padding:10px; padding-top:70px; vertical-align: top;">
                              <img src="/img_assets/head_slot.png" alt="weapon" style="position:absolute; height:150px;"/>
                           </td>
                        </tr>
                        <tr>
                           <td height="80%" style="vertical-align:top;">
                              <img src="/img_assets/custom_hr.png" alt="section" 
                                 id="scrollpoint" class="custom_hr_thin" style="margin-left:-10%; width:114%;"/>
                              <br/><br/>
                              <div class="table_wrapper" style="width:95%;">
                                 <table class="item_table" style="width:100%;" cellpadding="10;">
                                    <tr style="display:none;">
                                       <td >
                                       </td>
                                    </tr>
                                    <tr class="item_table_light">
                                       <td colspan="3">
                                          <span class='Rosario_span'><b>Step 1: </b>What armour items do you want to lookup?</span>
                                       </td>
                                    </tr>
                                    <tr class="item_table_dark" style="text-align:left;">
                                       <td>
                                          <br/>
                                          <input type="checkbox" name="armourType" id="head" class="css-checkbox" checked="checked"/>
                                          <label for="head" class="css-label">Helmet</label><br/><br/>
                                          <input type="checkbox" name="armourType" id="cape" class="css-checkbox" checked="checked"/>
                                          <label for="cape" class="css-label">Cape</label><br/><br/>
                                          <input type="checkbox" name="armourType" id="neck" class="css-checkbox" checked="checked"/>
                                          <label for="neck" class="css-label">Necklace</label><br/><br/>
                                       </td>
                                       <td>
                                          <br/>
                                          <input type="checkbox" name="armourType" id="torso" class="css-checkbox" checked="checked"/>
                                          <label for="torso" class="css-label">Torso</label><br/><br/>
                                          <input type="checkbox" name="armourType" id="shield" class="css-checkbox" checked="checked"/>
                                          <label for="shield" class="css-label">Shield</label><br/><br/>
                                          <input type="checkbox" name="armourType" id="legs" class="css-checkbox" checked="checked"/>
                                          <label for="legs" class="css-label">Legs</label><br/><br/>
                                       </td>
                                       <td>
                                          <br/>
                                          <input type="checkbox" name="armourType" id="gloves" class="css-checkbox" checked="checked"/>
                                          <label for="gloves" class="css-label">Gloves</label><br/><br/>
                                          <input type="checkbox" name="armourType" id="boots" class="css-checkbox" checked="checked"/>
                                          <label for="boots" class="css-label">Boots</label><br/><br/>
                                          <input type="checkbox" name="armourType" id="ring" class="css-checkbox" checked="checked"/>
                                          <label for="ring" class="css-label">Rings</label><br/><br/>
                                       </td>
                                    </tr>
                                    <tr class="item_table_light">
                                       <td colspan="3">
                                          <span class='Rosario_span'><b>Step 2: </b>How many armour items do you want to lookup?</span>
                                          <br/>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="td_filler">
                                       </td>
                                    </tr>
                                    <tr class="item_table_dark">
                                       <td colspan="3">
                                       <span class="right_padding">
                                          <input type="radio" name="amount" value="1" onclick="generate_item_containers(this.value);" checked="checked"/>&nbsp;1
                                       </span>
                                       <span class="left_padding">
                                          <input type="radio" name="amount" value="2" onclick="generate_item_containers(this.value);"/>&nbsp;2
                                       </span>
                                       </td>
                                    </tr>
                                    <tr class="item_table_light">
                                       <td colspan="3">
                                          <span class='Rosario_span'>
                                          <b>Step 3: </b>
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
                              </div>
                           </td>
                           <td style="padding:10px; padding-top:70px; vertical-align: top;">
                              <img src="/img_assets/torso_slot.png" alt="weapon" style="height:150px; width:150px"/>
                              <img src="/img_assets/legs_slot.png" alt="weapon" style=" height:150px; margin-top:-5px;"/>
                           </td>
                        </tr>
                        <tr>
                           <td class="td_filler">
                           </td>
                        </tr>
                     </table>
                     <br/>
                  </center>
                  <br/>
                  <img src="/img_assets/custom_hr.png" alt="section" class="custom_hr"/>
                  <br/>
                  <br/>
                  <center>
                     <table width="80%" >
                        <tr style="display:none;">
                           <td>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class='Rosario_span'>
                           </td>
                        </tr>
                        <tr id="item_compare">
                           <td>
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
                  <img src="/img_assets/custom_hr.png" alt="section" class="custom_hr" id="bottom_hr" style="display:none;"/>
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
                  <img src="/img_assets/banner_top.gif" alt="banner" id="bottom_banner"/>
               </td>
            </tr>
         </table>
         <br/>
         <br/>
      </div>
   </body>
</html>