<?php 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

jimport( 'joomla.html.html' );

$jquery_js_base = 'https://ajax.googleapis.com/ajax/libs/jquery/1.5/';
$jquery_js_filename = 'jquery.min.js';

$jqueryui_js_base = 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/';
$jqueryui_js_filename = 'jquery-ui.min.js';

$jqueryui_css_base = 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/';
$jqueryui_css_filename = 'jquery-ui.css';

if ($params->get('include_jquery', 1) == 1) {
  // include the jQuery libraries
  JHTML::script($jquery_js_filename, $jquery_js_base, false);
}

if ($params->get('include_jquery_noconflict', 1) == 1) {
  JHTML::script('jquery.noconflict.js', 'modules/mod_opentable/tmpl/');
}

if ($params->get('include_jquery_ui', 1) == 1) {
  // include the jQuery UI libraries
  JHTML::script($jqueryui_js_filename, $jqueryui_js_base, false);
}

if ($params->get('include_jquery_ui_css', 1) == 1) {
  
  $theme = $params->get('jquery_ui_css_theme', 'base');
  
  // include the jQuery UI libraries
  JHTML::stylesheet($jqueryui_css_filename, $jqueryui_css_base . $theme . '/');
}


// now include the datepicker init script
JHTML::script('jquery.initOpenTable.js', 'modules/mod_opentable/tmpl/', false);

// and the OpenTable form styling
JHTML::stylesheet('default.css', 'modules/mod_opentable/tmpl/');

$title = $params->get('title_text', 'Book A Table');

?>

<form action="http://www.opentable.com/ism/interim.aspx" method="post" id="ism" name="ism" class="mod_opentable_form">
<div id="mod_opentable_title"><?php echo $title ?></div>
<table class="opentable">
<tr>
  <td class="partySize">
    <label for="partySize">Party Size:</label>
    <select name="PartySize" id="partySize">
      <option value="1">1</option>
      <option selected value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
  </td>
  <td class="date">
    <label for="startDate">Date:</label>
    <input type="text" value="<?php echo date('d/m/Y') ?>" name="startDate" id="startDate" />
    <p id="dateDisplay">dd/mm/yyyy</p>
  </td>
  <td class="resTime">
    <label for="resTime">Time:</label>
    <select name="ResTime" id="resTime">
      <option value="12:00 AM">12:00 AM</option>
      <option value="12:30 AM">12:30 AM</option>
      <option value="1:00 AM">1:00 AM</option>
      <option value="1:30 AM">1:30 AM</option>
      <option value="2:00 AM">2:00 AM</option>
      <option value="2:30 AM">2:30 AM</option>
      <option value="3:00 AM">3:00 AM</option>
      <option value="3:30 AM">3:30 AM</option>
      <option value="4:00 AM">4:00 AM</option>
      <option value="4:30 AM">4:30 AM</option>
      <option value="5:00 AM">5:00 AM</option>
      <option value="5:30 AM">5:30 AM</option>
      <option value="6:00 AM">6:00 AM</option>
      <option value="6:30 AM">6:30 AM</option>
      <option value="7:00 AM">7:00 AM</option>
      <option value="7:30 AM">7:30 AM</option>
      <option value="8:00 AM">8:00 AM</option>
      <option value="8:30 AM">8:30 AM</option>
      <option value="9:00 AM">9:00 AM</option>
      <option value="9:30 AM">9:30 AM</option>
      <option value="10:00 AM">10:00 AM</option>
      <option value="10:30 AM">10:30 AM</option>
      <option value="11:00 AM">11:00 AM</option>
      <option value="11:30 AM">11:30 AM</option>
      <option value="12:00 PM">12:00 PM</option>
      <option value="12:30 PM">12:30 PM</option>
      <option value="1:00 PM">1:00 PM</option>
      <option value="1:30 PM">1:30 PM</option>
      <option value="2:00 PM">2:00 PM</option>
      <option value="2:30 PM">2:30 PM</option>
      <option value="3:00 PM">3:00 PM</option>
      <option value="3:30 PM">3:30 PM</option>
      <option value="4:00 PM">4:00 PM</option>
      <option value="4:30 PM">4:30 PM</option>
      <option value="5:00 PM">5:00 PM</option>
      <option value="5:30 PM">5:30 PM</option>
      <option value="6:00 PM">6:00 PM</option>
      <option value="6:30 PM">6:30 PM</option>
      <option selected value="7:00 PM">7:00 PM</option>
      <option value="7:30 PM">7:30 PM</option>
      <option value="8:00 PM">8:00 PM</option>
      <option value="8:30 PM">8:30 PM</option>
      <option value="9:00 PM">9:00 PM</option>
      <option value="9:30 PM">9:30 PM</option>
      <option value="10:00 PM">10:00 PM</option>
      <option value="10:30 PM">10:30 PM</option>
      <option value="11:00 PM">11:00 PM</option>
      <option value="11:30 PM">11:30 PM</option>
    </select>
  </td>
  <td class="button">
    <input border="0" type="image" src="http://www.opentable.com/img/buttons/btn_findatableNew.png" name="submit" id="submit" />
  </td>
</tr>
</table>

<div class="OT_hidden">
  <input type="hidden" value="<?php echo $params->get('restaurant_id', 35740) ?>" name="RestaurantID" class="OT_hidden">
  <input type="hidden" value="<?php echo $params->get('geo_id', 54) ?>" name="GeoID" class="OT_hidden">
  <input type="hidden" value="<?php echo date('j/n/Y g:i A') ?>" name="txtHidServerTime" class="OT_hidden">
  <input type="hidden" value="<?php echo $params->get('date_format', 'dd/MM/yyyy') ?>" name="txtDateFormat" class="OT_hidden">
</div>

</form>

