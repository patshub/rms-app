jQuery( document ).ready(function() {

  jQuery('.path-record-labels .organize-fields-btn').remove();
  jQuery('.path-record-labels .print-btn').remove();
  jQuery('.path-record-labels .add-record-btn').remove();

  jQuery('.path-frontpage #print-labels-btn').remove();
  jQuery('.path-frontpage .label-printing').remove();

  jQuery('#record-labels-page-btn').attr('href','record-labels'+location.search);

  function is_node(){
    if(jQuery('body').hasClass('path-node')){
      return true;
    }else{
      return false;
    }
  }

  // Add filter values to href of all "VIEW" buttons
  jQuery('.action-items .item:first-child').each(function(){
    var new_href = jQuery(this).attr('href') + location.search;
    jQuery(this).attr('href',new_href);
  });

  if(is_node()){
    jQuery('ul.menu li #menu-link-health').attr('href','../insurance?field_insurance_type_value=Health');
    jQuery('ul.menu li #menu-link-life').attr('href','../insurance?field_insurance_type_value=Life');
    jQuery('ul.menu li #menu-link-annuity').attr('href','../insurance?field_insurance_type_value=Annuity');
  }else{
    jQuery('ul.menu li #menu-link-health').attr('href','insurance?field_insurance_type_value=Health');
    jQuery('ul.menu li #menu-link-life').attr('href','insurance?field_insurance_type_value=Life');
    jQuery('ul.menu li #menu-link-annuity').attr('href','insurance?field_insurance_type_value=Annuity');
  }

  // Page Descriptions
  var page_desc = '';
  var health_page_desc = '<div class="page-desc"><p>A collection of Health Insurance account holders.</p></div>';
  var life_page_desc = '<div class="page-desc"><p>A collection of Life Insurance account holders.</p></div>';
  var annuity_page_desc = '<div class="page-desc"><p>A collection of Annuity account holders.</p></div>';

  // If an Insurance Type is selected
  if(jQuery('#edit-field-insurance-type-value option:selected').val() != 'All'){
    if(is_node()){
      jQuery('ul.menu li.home-link img').attr('src','../themes/rms/_assets/images/icon-home.svg');
    }else{
      jQuery('ul.menu li.home-link img').attr('src','themes/rms/_assets/images/icon-home.svg');
    }

    jQuery('ul.menu li a').removeClass('active');
    // jQuery('.default-title').hide();

    var insurance_type_value = jQuery('#edit-field-insurance-type-value option:selected').val();

    if(insurance_type_value == 'Health'){ page_desc = health_page_desc; }
    else if(insurance_type_value == 'Life'){ page_desc = life_page_desc; }
    else if(insurance_type_value == 'Annuity'){ page_desc = annuity_page_desc; }

    jQuery('ul.menu li a[name="'+insurance_type_value+'"]').addClass('active');
    jQuery('ul.menu li a[name="'+insurance_type_value+'"]').removeAttr('href');

    if(insurance_type_value != 'Annuity'){ insurance_type_value = insurance_type_value + ' Insurance';  }

    jQuery ('ul.breadcrumbs').append('<li class="bread-insurance-type" name="'+insurance_type_value+'"><a href="insurance'+location.search+'">'+insurance_type_value+'</a>'+page_desc+'</li>');

  }else{
    jQuery('ul.breadcrumbs li.home-breadcrumb .page-desc p').text('A collection of ALL account holders that have either Health, Life, Annuity, or all of the above.');
    jQuery('ul.menu li.home-link a').addClass('active');
  }
  jQuery('.path-record-labels ul.breadcrumbs').append('<li class="label-printing">Print Labels<div class="page-desc"><p>Print labels with pre-set filters.</p></div></li>');
  // Activate menu link corresponding to the applied filter

// SEARCH INPUT
// ************
  // If Search Input has a value, add border
  // Real-time

if(!is_node()){
  // Real-time
    jQuery('.search-options .search-container input').keyup(function(){
      if(jQuery(this).val().length<=0){
        jQuery(this).removeClass('active');
        jQuery('.search-container button').show();
        jQuery('.search-container img.icon.search-close').hide();
      }else{
        jQuery(this).addClass('active');
        jQuery('.search-container button').hide();
        jQuery('.search-container img.icon.search-close').show();
      }
    });
    // If Search Input has a value, add border

    if(jQuery('.search-options .search-container input').val().length>0){
      jQuery('.search-options .search-container input').addClass('active');
      jQuery('.search-container button').hide();
      jQuery('.search-container img.icon.search-close').show();
    }
    // If user clicks the search-close button, removes search input value
    jQuery('.search-container img.icon.search-close').click(function(){
      jQuery('.search-options .search-container input').val('');

      jQuery('.search-options .search-container input').removeClass('active');
      jQuery('.search-container button').show();
      jQuery(this).hide();

      jQuery('.search-options .search-container input').focus();
    });

} // END OF BODY IF (gia)

// FILTER SETTINGS
// ***************
  // "AGE EXPECTATION" FILTER
  jQuery('input#field_age').keyup(function(){

    // Deactivate BIRTH MONTHS field
      jQuery('select#birth_months option:selected').removeAttr('selected'); // Remove 'selected' on option
      jQuery('select#birth_months').removeClass('active'); // Remove class 'Active'
      jQuery('#edit-field-birth-month-value').val(''); // Remove value of generated filter field (hidden)

    // Store age value in session storage for retrieval on page load
    var age = jQuery(this).val();
    sessionStorage.setItem('age-filter',age);

    // Create Date object for today
    var today = new Date();

    var currentYear = today.getFullYear();  // get current year value
    var birth_year = currentYear - age; // get birth year value

    var currentMonth = today.getMonth() + 1; // get month value
    if (currentMonth < 10) { currentMonth = '0' + currentMonth; }

    var currentDay = today.getDate(); // get day value
    if (currentDay < 10) { currentDay = '0' + currentDay; }

    // If age = '', reset both hidden age filters.
    if(age == ''){
      jQuery('#edit-field-date-of-birth-value')[0].value = 0;
      jQuery('#edit-field-date-of-birth-value-min')[0].value = 0;
    }
    // If age has a value, set the hidden age filters to their MIN and MAX values
    else{
      jQuery('#edit-field-date-of-birth-value').val(birth_year+'-12-31');
      jQuery('#edit-field-date-of-birth-value-min').val(birth_year+'-'+currentMonth+'-'+currentDay+'');
      // MIN is the current date and MAX is the last date of the year.
      // PURPOSE: this filter generates records whose birthdays are coming up.
    }
  });
  // Retrieve the age value on page load.
  jQuery('input#field_age').attr('value',sessionStorage.getItem('age-filter'));


  // "BIRTH MONTH" FILTER
  jQuery('select#birth_months').change(function(){

    // Deactivate AGE EXPECTATION field
      jQuery('input#field_age').val(''); // Remove age value
      jQuery('input#field_age').removeClass('active'); // Remove 'Active' class
      // Remove value of generated filter fields (hidden)
      jQuery('#edit-field-date-of-birth-value')[0].value = 0;
      jQuery('#edit-field-date-of-birth-value-min')[0].value = 0;
      sessionStorage.setItem('age-filter',''); // Reset session storage for age

      // Store the selected month for later retrieval on page load
      var selected_month = jQuery(this).find('option:selected').text();
      sessionStorage.setItem('birth-month',selected_month);

      // if selected month is not the first option ("any"/"select option"/etc),
      // set the month value to the hidden filter field.
      if(selected_month != jQuery(this).find('option:first-child').text()){
        jQuery('#edit-field-birth-month-value').val(selected_month);
      } // else, set value of hidden filter field to NULL.
      else{
        jQuery('#edit-field-birth-month-value').val('');
      }
  });
  // Retrieve selected birth month for page load
  // (value is copied from the hidden filter field that generates the value on page load)
  jQuery('select#birth_months option[value="'+jQuery('#edit-field-birth-month-value').val()+'"]').attr('selected','selected');

  // COUNT HOW MANY ACTIVE FILTER FIELDS THERE ARE
    function filter_field_counter(){
      // Generate active fields count
      var active_field_counter = 0;
      jQuery('.filter-container .filter-field.active').not('.hidden .filter-field').each(function(){
        active_field_counter = active_field_counter + 1;
      });

      if(active_field_counter){
        jQuery('.filter-btn .pop-counter').removeClass('hidden');
        jQuery('.filter-btn .pop-counter span').text(active_field_counter);
      }
      else{
        jQuery('.filter-btn .pop-counter').addClass('hidden');
      }

    }
    // Call function on page load
    filter_field_counter();

  // DISPLAY FIELDS AS "ACTIVE" IF VALUE IS ADDED/CHANGE
    function filter_field_activation(obj){
      if(jQuery(obj).prop('tagName') == "INPUT"){  // checks if tag is Input (to perform necessary value checks)
        if(jQuery(obj).val()){
          jQuery(obj).addClass('active');
        }else{
          jQuery(obj).removeClass('active');
        }
      }else if(jQuery(obj).prop('tagName') == "SELECT"){ // checks if tag is Select (to perform necessary value checks)
        if(jQuery(obj).find('option:selected').val() != 'All'){
          jQuery(obj).addClass('active');
        }else{
          jQuery(obj).removeClass('active');
        }
      }
      filter_field_counter()
    }
    // Add "filter-field" class to all inputs, selects, etc.
    jQuery('.filter-container input, .filter-container select').each(function(){
      jQuery(this).addClass('filter-field');
    });
    // Check EACH filter field that has a value and ACTIVATE it.
    jQuery('.filter-container .filter-field').each(function(index) {
      filter_field_activation(jQuery(this));
    });
    // Apply the same function on any value change.
    jQuery('.filter-container .filter-field').on('keyup change', function (){
      filter_field_activation(jQuery(this));
    });

  // VISUAL DISPLAY OF FILTER FIELDS THAT ARE ACTIVE (on page load)
  jQuery('.filter-container .filter-field').not('.hidden .filter-field').each(function() {
    if(jQuery(this).prop('tagName') == "INPUT"){  // checks if tag is Input (to perform necessary value checks)
      if(jQuery(this).val()){
        var id = jQuery(this).attr('id');
        var tag = 'input';

        jQuery('.filter-active').append('<div class="item" data-id="'+id+'" data-tag="'+tag+'"><h4>'+ jQuery(this).prev('label').text() + '<img class="icon close" src="themes/rms/_assets/images/icon-close.svg"></h4> <span>' + jQuery(this).val() +'</span></div>')
        jQuery('.filter-btn .dropdown-main-btn').addClass('filled');
      }
    }else if(jQuery(this).prop('tagName') == "SELECT"){ // checks if tag is Select (to perform necessary value checks)
      if(jQuery(this).find('option:selected').val() != 'All'){
        var id = jQuery(this).attr('id');
        var tag = 'select';

        jQuery('.filter-active').append('<div class="item" data-id="'+id+'" data-tag="'+tag+'"><h4>'+ jQuery(this).prev('label').text() + '<img class="icon close" src="themes/rms/_assets/images/icon-close.svg"></h4> <span>' + jQuery(this).find('option:selected').val() +'</span></div>')
        jQuery('.filter-btn .dropdown-main-btn').addClass('filled');
      }
    }
  });

  // REMOVE VISUAL DISPLAY OF ACTIVE FILTER FIELDS, WHEN CLICKED
  jQuery('.filter-active .item').click(function(){
    if( jQuery(this).attr('data-tag') == 'input' ){
      jQuery('.filter-field#'+jQuery(this).attr('data-id')).val('');
      jQuery('.filter-field#'+jQuery(this).attr('data-id')).removeClass('active');

      // Specific Input Field - Remove HIDDEN value(s) too
      if(jQuery(this).attr('data-id') == 'field_age'){
        jQuery('#edit-field-date-of-birth-value')[0].value = 0;
        jQuery('#edit-field-date-of-birth-value-min')[0].value = 0;
        sessionStorage.setItem('age-filter','');
      }
    }
    else if( jQuery(this).attr('data-tag') == 'select' ){
      jQuery('.filter-field#'+jQuery(this).attr('data-id')).find('option:selected').removeAttr('selected');
      jQuery('.filter-field#'+jQuery(this).attr('data-id')).removeClass('active');

      // Specific Select Field - Remove HIDDEN value(s) too
      if(jQuery(this).attr('data-id') == 'birth_months'){
        jQuery('#edit-field-birth-month-value').val('');
      }
    }
    // Remove actual visual item
    jQuery(this).remove();

    // If visual presentation of active filter fields is NOT displayed,
    // deactivate filter button.
    if(jQuery('.filter-active').children().length == 0){
      jQuery('.filter-btn .dropdown-main-btn').removeClass('filled');
    }

    // Update field counter
    filter_field_counter();

    // SUBMIT filter form with updated fields
    jQuery('.views-exposed-form').submit();
  });

  // RESET FILTER SETTINGS AND SEARCH INPUT
  jQuery(document).delegate('.btn.reset.form-submit','click',function(event) {
    event.preventDefault();

    jQuery('form.views-exposed-form').each(function() {
      jQuery(this).find('select option').not('#edit-field-insurance-type-value option:selected').removeAttr('selected');  // Reset Select Fields
      jQuery(this).find('input').not('input[type="submit"]').attr('value', ''); // Reset Input Fields

      // Reset Radio
      jQuery('input[type=radio]').removeAttr('checked');
      jQuery('.js-form-type-radio:first-child input[type=radio]').attr('checked','checked');

      // Reset age-filter storage
      sessionStorage.setItem('age-filter','');
      jQuery('input#field_age').val(sessionStorage.getItem('age-filter'));

      this.reset();
    });

    jQuery('.filter-btn .btn.apply.form-submit').click();
    return false;
  });



// ****************************************

  // Function to enter print preview (REPORT)
  function printReady_report(){

    // ***** Universal
    jQuery('body').addClass('print-preview');   // Enter print preview mode

    // ***** Listing Page
    jQuery('.print-title h2').text(jQuery('.print-report-title input[type="text"]').val()); // Add user input value as report title
    // Hide "Actions" Column for Print Preview
    jQuery('.field-item:last-child').hide();
    jQuery('#records-block th.col'+ jQuery('.field-item:last-child').attr('data-id')).hide();
    jQuery('#records-block td.col'+ jQuery('.field-item:last-child').attr('data-id')).hide();

    // ***** Single Pages
      // Display all tab-items including hidden ones for Printing.
    jQuery('#profile-block .tab-body .tab-item.active').addClass('last-active');  // Mark the initially active tab-item to be soley displayed after printing
    jQuery('#profile-block .tab-body .tab-item').each(function(index){
      if(!jQuery(this).hasClass('active')){
        jQuery(this).addClass('active');
      }
    });

    window.print();
  }

  // Function to enter print preview (LABELS)
  function printReady_labels(){

    // ***** Universal
    jQuery('body').addClass('print-preview');   // Enter print preview mode
    jQuery('body').addClass('labels-preview');   // Specify Labels preview mode

    jQuery('.print-title h2').text('Print Labels');  // Set Labels preview title
    jQuery('#records-block table').addClass('labels-mode');  // Change table styling to label shapes

    jQuery('#print-report-btn').removeClass('active'); // Hide print report btn dropdown
    jQuery('.print-report-title').fadeOut();

    window.print();
  }

// ****************************************

  // PRINT PREVIEW BUTTON
  jQuery('#print-preview-btn').click(function(){
    printReady_report();
  });
  jQuery('.path-record-labels #print-labels-btn').click(function(){
    printReady_labels();
  });

  // DISPLAY REPORT TITLE INPUT FOR PRINT
  jQuery('#print-report-btn').click(function(){
    if(jQuery(this).hasClass('active')){
      jQuery(this).removeClass('active');
    }else{
      jQuery(this).addClass('active');
    }
    jQuery('#print-report-btn').not(this).removeClass('active');
    jQuery('.print-report-title').slideToggle('fast');
    jQuery('.print-report-title input[type="text"]').focus();
  });

  function manage_actions_column(){
    if(!jQuery('.field-item:last-child').prevAll().hasClass('active')){
      jQuery('.field-item:last-child').removeClass('active');
      jQuery('#records-block th.col'+ jQuery('.field-item:last-child').attr('data-id')).hide();
      jQuery('#records-block td.col'+ jQuery('.field-item:last-child').attr('data-id')).hide();
    }else{
      jQuery('#records-block th.col'+ jQuery('.field-item:last-child').attr('data-id')).show();
      jQuery('#records-block td.col'+ jQuery('.field-item:last-child').attr('data-id')).show();
    }
  }

  // DROPDOWN BUTTON
  jQuery('.dropdown-main-btn').click(function(){
    jQuery(this).siblings('.dimmer').addClass('display');

    // If dropdown button is the organize fields button
    if(jQuery(this).hasClass('organize-fields-btn')){
      jQuery('.dropdown-body input.field-search').focus();
    }
    jQuery('.organize-fields-btn .tooltip').hide();

    // Add/Remove "Active" class
    if(jQuery(this).hasClass('active')){
      jQuery(this).removeClass('active');
      jQuery(this).siblings('.dimmer').removeClass('display');
    }else{
      jQuery(this).addClass('active');
      jQuery(this).siblings('.dimmer').addClass('display');
    }

    // Hide dropdown bodies NOT connected to THIS button.
    jQuery('.dropdown-main-btn').not(this).next('.dropdown-body').css('display','none');
    jQuery('.dropdown-main-btn').not(this).removeClass('active');
    jQuery('.dropdown-main-btn').not(this).siblings('.dimmer').removeClass('display');

    // Slide dropdown body connect to THIS button
    jQuery(this).next('.dropdown-body').slideToggle('fast');
  });

  // CLOSE BUTTONS
  jQuery('.icon.close').click(function(){
    jQuery(this).parent('.dropdown-body').slideToggle('fast');
    jQuery(this).parent('.dropdown-body').prev('.dropdown-main-btn').removeClass('active');

    jQuery(this).siblings('.print-report-title').fadeOut();
    jQuery('.dropdown-btns .btn').removeClass('active');

    // Remove value of Organize Fields search input field
    jQuery('.dropdown-body input.field-search').val('');
    real_time_search();

    manage_actions_column();

    // Remove dimmer when dropdown is closed
    jQuery('.dimmer').removeClass('display');
  });

  // CLOSE BUTTONS
  jQuery('.dimmer').click(function(){
    jQuery(this).siblings('.dropdown-body').slideToggle('fast');
    jQuery(this).siblings('.dropdown-body').prev('.dropdown-main-btn').removeClass('active');

    jQuery(this).siblings('.dropdown-body').find('.print-report-title').fadeOut();
    jQuery('.dropdown-btns .btn').removeClass('active');

    // Remove value of Organize Fields search input field
    jQuery('.dropdown-body input.field-search').val('');
    real_time_search();

    manage_actions_column();

    // Remove dimmer when dropdown is closed
    jQuery('.dimmer').removeClass('display');
  });


  // PRINT PREVIEW MODE
  // ******************

    // PRINT Report / Labels / Single Record
    jQuery('.print-options .print').click(function(){
      window.print();
    });

    // CANCEL PRINT PREVIEW (both Report and Labels)
    jQuery('.print-options .cancel').click(function(){

      // Exit print preview mode
      jQuery('body').removeClass('print-preview');
      jQuery('body').removeClass('labels-preview');

      // ***** Listing Page
      jQuery('#records-block table').removeClass('labels-mode');

      // ***** Single Pages
        // Restore previously active tab-item
      jQuery('#profile-block .tab-body .tab-item').each(function(index){
        if(jQuery(this).hasClass('active')){
          if(!jQuery(this).hasClass('last-active')){
            jQuery(this).removeClass('active');
          }else{
            jQuery(this).removeClass('last-active');
          }
        }
      });

      // Re-Display "Actions" Column after Print Preview (but only if other field columns exist)
      manage_actions_column();

      // Hide all dropdown bodies after Print Preview
      jQuery('.dropdown-main-btn.active').next('.dropdown-body').css('display','none');
      jQuery('.dropdown-main-btn.active').removeClass('active');
      jQuery('.print-report-title').fadeOut();
      jQuery('#print-report-btn').removeClass('active');

      // Remove dimmer
      jQuery('.dimmer').removeClass('display');

      // Remove any hashtags
      window.location.hash="";
    });

    // GET CURRENT DATE FOR PRINTING RECORDS / LABELS
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    jQuery('.date').text(m + "/" + d + "/" + y);



  // RECORD NODE
  // ***********

    // RECORD TABS
    jQuery('.tab-menu .item').click(function(){
      jQuery(this).addClass('active');
      jQuery('.tab-menu .item').not(this).removeClass('active');
      jQuery('.tab-body .tab-item').removeClass('active');
      jQuery('#'+jQuery(this).attr('tab-id')).addClass('active');
    });

    // Set Filter Tab Menu Item to corresponding Insurance Type on Page Load.
    var insurance_type_value = jQuery('#edit-field-insurance-type-value option:selected').val();
    if(insurance_type_value != 'All'){
      jQuery('.filter-container .tab-menu .item').removeClass('active');

      var tab_selector = '.filter-container .tab-menu .item:contains("'+insurance_type_value+'")';
      jQuery(tab_selector).addClass('active');

      jQuery('.filter-container .tab-body .tab-item').removeClass('active');
      jQuery('#'+jQuery(tab_selector).attr('tab-id')).addClass('active');
    }

    // PRINT SINGLE RECORD FROM RECORDS LISTING
    function printSingleRecord(){
      var url = window.location.href;
      var hash = url.substring(url.indexOf("#")+1);

      // Print from Records listing
      if(hash == 'printme'){
        printReady_report();
      }
    }
    printSingleRecord();




  // ORGANIZE FIELDS

    function organize_field_counter(){
      // Generate active fields count
      var active_field_counter = 0;
      jQuery('.field-list .field-item.active').each(function(){
        active_field_counter = active_field_counter + 1;
      });
      if(active_field_counter){
        jQuery('.organize-fields-btn .pop-counter').removeClass('hidden');
        jQuery('.organize-fields-btn .pop-counter span').text(active_field_counter);
      }
      else{
        jQuery('.organize-fields-btn .pop-counter').addClass('hidden');
      }
    }

    // Fill field options with generated table fields
    jQuery( "#records-block th" ).each(function( index ) {
      jQuery('.organize-fields-btn .dropdown-body .field-list').append('<div class="field-item" data-id="'+ index +'">'+ jQuery(this).text() +'</div>');
    });

    // Display / Hide a Table Column when a field option is selected
    jQuery('.field-item').click(function(){
      jQuery('#records-block th.col'+ jQuery(this).attr('data-id')).toggle();
      jQuery('#records-block td.col'+ jQuery(this).attr('data-id')).toggle();

      if(jQuery(this).hasClass('active')){
        jQuery(this).removeClass('active');
      }else{
        jQuery(this).addClass('active');
      }

      // Update field count
      organize_field_counter()
    });

    // Populate th's and td's with col[x] class
    jQuery('.view-content table tr').addClass('table-rows');
    jQuery('.table-rows th').each(function( index ) {
      jQuery(this).addClass('col'+index);
    });
    jQuery('.table-rows').each(function( index ) {
      jQuery(this).find('td').each(function( index2 ) {
        jQuery(this).addClass('col'+index2);
      });
    });

    // Initial State of Column Fields Organization
    if(!sessionStorage.getItem('initial_state')){

      // Activate first 5 fields in field options
      jQuery('.field-item[data-id="0"]').addClass('active');
      jQuery('.field-item[data-id="1"]').addClass('active');
      jQuery('.field-item[data-id="2"]').addClass('active');
      jQuery('.field-item[data-id="3"]').addClass('active');
      jQuery('.field-item[data-id="4"]').addClass('active');

      // Pre-Display Desired Columns in the table
      jQuery('.field-item').each(function( index ) {
        if(jQuery(this).hasClass('active')){
          jQuery('#records-block th.col'+ jQuery(this).attr('data-id')).show();
          jQuery('#records-block td.col'+ jQuery(this).attr('data-id')).show();
        }
      });

      // End initial state - this if statement no longer applies until NEW browser
      sessionStorage.setItem('initial_state','X');
    }

    // Hide all table columns when field RESET button is clicked
    jQuery('.organize-fields-btn .btn.reset').click(function(){
      jQuery('.field-item').each(function( index ) {
        jQuery(this).removeClass('active');
        jQuery('#records-block th.col'+ jQuery(this).attr('data-id')).hide();
        jQuery('#records-block td.col'+ jQuery(this).attr('data-id')).hide();
      });

      // Remove text value in field search bar
      jQuery('.dropdown-body input.field-search').val('');
      jQuery('.dropdown-body input.field-search').focus();
      real_time_search();

      // Update field count
      organize_field_counter();
    });

    // Reload page to update field columns
    jQuery('.organize-fields-btn .btn.apply').click(function() {
      location.reload();
    });

    // Real-time Search for Field Columns
    jQuery('input.field-search').keyup(function(){
      real_time_search();
  	});

    function real_time_search(){

      if (!jQuery('body').hasClass('path-record-labels')) {
        // Retrieve the input field text and reset the count to zero
        escape = function(text) {
          return text.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
        };
    		var filter = escape(jQuery('input.field-search').val());
    		// Loop through the comment list
    		jQuery('.field-item').each(function(){
    			// If the list item does not contain the text phrase fade it out
    			if (jQuery(this).text().search(new RegExp(filter, "i")) < 0) {
    				jQuery(this).addClass('hidden');
    			// Show the list item if the phrase matches and increase the count by 1
    			} else {
    				jQuery(this).removeClass('hidden');
    			}
    		});
      }

    }

    // NODE

    // Add commas every thousandths
    function addCommas(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
    // Generate Commissions TOTAL
    function generate_total_commissions(type){
      var total = 0;
      jQuery(type+' .info-set-item p strong').each(function(){
        var float_value = $(this).text().replace("$", "");
        float_value = float_value.replace(",", "");
        var num_value = parseFloat(float_value);
        total += num_value;
      });
      jQuery(type+' .commissions-total p strong').text('$'+addCommas(total.toFixed(2)));
    }
    generate_total_commissions('.health-commissions');
    generate_total_commissions('.dental-commissions');
    generate_total_commissions('.vision-commissions');

    generate_total_commissions('.life-commissions');
    generate_total_commissions('.life-renewal');
    generate_total_commissions('.life-override');

    generate_total_commissions('.annuity-commissions');


    function closeWindow(){
      var win = window.open("","_self"); /* url = “” or “about:blank”; target=”_self” */
      win.close();
    }
    jQuery('.back-btn').click(function(){
      closeWindow();
    });
});
  window.onbeforeunload = function() {
    // Right before load, go through active field items and save them for retrieval
    jQuery('.field-item').each(function( index ) {
      if(jQuery(this).hasClass('active')){
        sessionStorage.setItem('store'+index, jQuery(this).attr('data-id'));
      }else{
        sessionStorage.setItem('store'+index, 'null');
      }
    });
  }
  window.onload = function() {
    // Iterate through each field item and restore saved active field items
    jQuery('.field-item').each(function( index ) {
      console.log(sessionStorage.getItem('store'+index));
      // If only the "Action" column is displayed, don't display it at all
      if(jQuery(this).is(':last-child') && !jQuery(this).prevAll().hasClass('active')){
        jQuery(this).removeClass('active');
        jQuery('#records-block th.col'+ jQuery(this).attr('data-id')).hide();
        jQuery('#records-block td.col'+ jQuery(this).attr('data-id')).hide();
        jQuery('.organize-fields-btn .tooltip').show();
      }else{
        // Display appropriate field option(s) and column(s)
        jQuery('.field-item[data-id="'+sessionStorage.getItem('store'+index)+'"').addClass('active');
        jQuery('#records-block th.col'+ sessionStorage.getItem('store'+index)).show();
        jQuery('#records-block td.col'+ sessionStorage.getItem('store'+index)).show();
      }
    });
    // Generate active fields count
    var active_field_counter = 0;
    jQuery('.field-list .field-item.active').each(function(){
      active_field_counter = active_field_counter + 1;
    });

    if(active_field_counter){
      jQuery('.organize-fields-btn .pop-counter').removeClass('hidden');
      jQuery('.organize-fields-btn .pop-counter span').text(active_field_counter);
    }
    else{
      jQuery('.organize-fields-btn .pop-counter').addClass('hidden');
    }

  }



jQuery( window ).resize(function() {
});
