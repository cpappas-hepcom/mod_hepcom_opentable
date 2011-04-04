/**
 *  mod_opentable jQuery init script
 *  for mod_opentable
 *  @author   Chris Pappas <cpappas@hepcom.ca>
 *  @date     2011-03-28
 *  @version  0.1
 */

jQuery(function($) {
  $("form.mod_opentable_form input#startDate").datepicker({
    dateFormat: 'dd/mm/yy',
  });
});

