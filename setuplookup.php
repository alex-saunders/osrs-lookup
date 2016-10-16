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
      <script src="/js_assets/setups.js" type="text/javascript"></script>
      <script src="/js_assets/main-functions.js" type="text/javascript"></script>
   </head>
   <body>
      <div id="fade"></div>
      <div id="modal">
         <img id="loader" src="/img_assets/loading.gif" alt="loading" /><br/><br/>
         <span id="modal_text">
         </span>
      </div>
      <center>
         <div id="cookie_bar">
            <i class="fa fa-exclamation-circle"></i>
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
         <li class="active">
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
      <div id="content">
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
                           <td class="td_filler"></td>
                        </tr>
                        <tr>
                           <td height="20%" class="title_td">
                              <div class="title_container setup_title_container">
                                 <br/>
                                 <b>
                                 S
                                 </b>
                                 <span class="title_container_lower">etup &nbsp;&nbsp;&nbsp;Lookup
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 </span>
                              </div>
                           </td>
                        </tr>
                     </table>
                     <table width="90%" border="0" cellspacing="0">
                        <tr>
                           <td class="td_filler"></td>
                        </tr>
                        <tr>
                           <td width="50%" class="vertical_align_top">
                              <div class='Rosario_span setups_desc'>
                                 <b><br/>Here you can design a full setup and view it's stats<br/> added together</b>
                                 <br/><br/>
                                 Click on an equipment icon to choose it's item
                              </div>
                              <br/>
                              <img src="/img_assets/custom_hr.png" class="custom_hr_thin" alt="section" />
                              <br/>
                              <br/><br/>
                              <div>
                                 <table width="10%" border="0" cellspacing="0" cellpadding="10" class="equipment_table">
                                    <tr>
                                       <td class="td_filler"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="9" class="equipment_table_top_row"></td>
                                    </tr>
                                    <tr>
                                       <td class="table_pillar" rowspan="5"></td>
                                       <td class="equipment_table_filler"></td>
                                       <td class="equipment_table_filler"></td>
                                       <td class="equipment_table_filler"></td>
                                       <td align="center" class="table_icon equipment_table_head"
                                          onclick="showFindBox('#head_icon')" id="head_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="head_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td class="equipment_table_filler"></td>
                                       <td class="equipment_table_filler"></td>
                                       <td class="equipment_table_filler"></td>
                                       <td class="table_pillar" rowspan="5"></td>
                                    </tr>
                                    <tr>
                                       <td></td>
                                       <td colspan="2" align="center" class="table_icon equipment_table_cape"
                                          onclick="showFindBox('#cape_icon')" id="cape_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="cape_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td align="center" class="table_icon equipment_table_neck"
                                          onclick="showFindBox('#neck_icon')" id="neck_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="neck_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td colspan="2" align="center" class="table_icon equipment_table_ammo"
                                          onclick="showFindBox('#ammo_icon')" id="ammo_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="ammo_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <td colspan="2" align="center" class="table_icon equipment_table_weapon"
                                          onclick="showFindBox('#weapon_icon')" id="weapon_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="weapon_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td class="equipment_table_horizontal_beam"></td>
                                       <td align="center" class="table_icon equipment_table_torso"
                                          onclick="showFindBox('#torso_icon')" id="torso_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="torso_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td class="equipment_table_horizontal_beam"></td>
                                       <td colspan="2" align="center" class="table_icon equipment_table_shield"
                                          onclick="showFindBox('#shield_icon')" id="shield_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="shield_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td colspan="2" class="equipment_table_vertical_pillar"></td>
                                       <td></td>
                                       <td align="center" class="table_icon equipment_table_legs"
                                          onclick="showFindBox('#legs_icon')" id="legs_icon_cell" >
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="legs_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td></td>
                                       <td colspan="2" class="equipment_table_vertical_pillar"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="2" align="center" class="table_icon equipment_table_gloves"
                                          onclick="showFindBox('#gloves_icon')" id="gloves_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="gloves_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td></td>
                                       <td align="center" class="table_icon equipment_table_boots"
                                          onclick="showFindBox('#boots_icon')" id="boots_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="boots_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                       <td></td>
                                       <td colspan="2" align="center" class="table_icon equipment_table_ring"
                                          onclick="showFindBox('#ring_icon')" id="ring_icon_cell">
                                          <div class='item_container'>
                                             <img src="/img_assets/transparent.png" class="worn_equipment_icon" id="ring_icon" alt="equipment icon" />
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td colspan="9" class="table_tab_bot">    
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </td>
                           <td width="30%" class="vertical_align_top">
                              <img src="/img_assets/worn_equipment_icon.png" class="setups_main_image" alt="worn equipment" />
                              <br/>
                              <br/>
                              <br/>
                              <div class='table_wrapper'>
                                 <table width="100px" cellspacing="0" class='item_table item_stats'>
                                    <tr>
                                       <td class="td_filler"></td>
                                    </tr>
                                    <tr class='item_table_dark left_align_text' >
                                       <td width="30%" class="item_desc_title">Helmet:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="head_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#head_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_light'>
                                       <td width="30%" class="item_desc_title">Cape:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="cape_icon_desc" /> 
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#cape_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_dark left_align_text' >
                                       <td width="30%" class="item_desc_title">Neck:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="neck_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#neck_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_light'>
                                       <td width="30%" class="item_desc_title">Ammo:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="ammo_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#ammo_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_dark left_align_text' >
                                       <td width="30%" class="item_desc_title">Weapon:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="weapon_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#weapon_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_light'>
                                       <td width="30%" class="item_desc_title">Torso:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="torso_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#torso_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_dark left_align_text' >
                                       <td width="30%" class="item_desc_title">Shield:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="shield_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#shield_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_light'>
                                       <td width="30%" class="item_desc_title">Legs:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="legs_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#legs_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_dark left_align_text' >
                                       <td width="30%" class="item_desc_title">Gloves:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="gloves_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#gloves_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_light'>
                                       <td width="30%" class="item_desc_title">Boots:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="boots_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#boots_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                    <tr class='item_table_dark left_align_text' >
                                       <td width="30%" class="item_desc_title">Ring:</td>
                                       <td width="50%" class="item_desc_input_container">
                                          <input class="item_desc_input" disabled="disabled"  id="ring_icon_desc" />
                                       </td>
                                       <td class="item_desc_remove" onclick="removeSetupItem('#ring_icon_desc')">
                                          &#x274C;
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                              <br/>
                              <br/>
                              <center>
                                 <button class='button' onclick='getSetup()'>Lookup!</button>
                              </center>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2">
                              <br/>
                              <br/>
                              <center>
                                 <table>
                                    <tr>
                                       <td class="td_filler"></td>
                                    </tr>
                                    <tr>
                                       <td id="setup_info" valign="top"></td>
                                       <td id="setup_info_gap"></td>
                                        <td id="setup_info_price_weapon" valign="top"></td>
                                    </tr>
                                 </table>
                                 <center>
                                    <a href='submitreport' class='button td_filler' id="bottom_button">
                                    <i class='fa fa-pencil-square-o'></i> &nbsp;Submit Correction
                                    </a>
                                    <br/>
                                    <br/>
                                 </center>
                              </center>
                           </td>
                        </tr>
                     </table>
                     <div class="arrow_box" id="item_find"></div>
                  </center>
                  <img src="/img_assets/custom_hr.png" class="custom_hr" id="bottom_hr" alt="section" />
                  <center>
                     <div id="setup_desc">
                        <br/>
                     </div>
                  </center>
                  <center>
                     <br/>
                     <span class="sub_title_container about_span">
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
                  <img src="/img_assets/banner_top.gif" id="bottom_banner" alt="bottom banner" />
               </td>
            </tr>
         </table>
         <br/>
         <br/>
      </div>
   </body>
</html>