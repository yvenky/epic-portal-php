/* -------------------------------------------------------------------
 * Theme Name            : Epic Estates Dashboard Template
 * Author Name           : Yucel Yilmaz
 * Created Date          : 13 April 2022
 * Version               : 1.0
 * File                  : main.js
------------------------------------------------------------------- */
(function($) {
   
  // Header Toggle Navbar
  var navbarTogglerBtn    = jQuery( '.navbar-toggler' );
  var leftSidebar         = jQuery( '.left-sidebar' );

  navbarTogglerBtn.on( 'click', function(){
     jQuery( this ).toggleClass( 'active-toggle-btn' );
     leftSidebar.toggleClass( 'active-sidebar' );
  } );
  
  jQuery( window ).on( 'resize', function(){
     var documentWidth = jQuery( window ).innerWidth();

     if ( documentWidth < 992 ) {
        leftSidebar.removeClass( 'active-sidebar' );
        navbarTogglerBtn.removeClass( 'active-toggle-btn' );
     }
  } );

  // Datatables
  if(jQuery('.table-data-table').length > 0){
     jQuery('.table-data-table').DataTable(
        {
           "responsive" : true,
           "lengthMenu": [[ 5,10, 25, 50,100, -1], [5, 10, 25, 50, 100, "All"]],
           "language": {
              "paginate": {
                "next": "<i class='fa fa-chevron-right'></i>",
                "previous": "<i class='fa fa-chevron-left'></i>"
              }
            }
        }
     );
  }


  function matchStart(params, data) {
    if ($.trim(params.term) === '') {
      return data;
    }
    if (typeof data.children === 'undefined') {
      return null;
    }
    var filteredChildren = [];
    $.each(data.children, function (idx, child) {
      if (child.text.toUpperCase().indexOf(params.term.toUpperCase()) == 0) {
        filteredChildren.push(child);
      }
    });
    if (filteredChildren.length) {
      var modifiedData = $.extend({}, data, true);
      modifiedData.children = filteredChildren;
      return modifiedData;
    }
    return null;
   }

  if( jQuery(".select-matcher-obj").length > 0)  {
    jQuery(".select-matcher-obj").select2({
      matcher: matchStart
    });
  }

  if( jQuery(".select-dropdown-obj").length > 0)  {
    jQuery(".select-dropdown-obj").select2();
  }

   // Validate
   var val	=	{
       // Specify validation rules
       errorElement: "p",
       rules: {
        FIRST_NAME: {
          required: true,
        },
        LAST_NAME: {
          required: true,
        },
        EMAIL_ADDRESS: {
          required: true,
          email: true
        },
        EMPLOYMENT_STATUS: {
          required: true,
        },
        HOUSEHOLD_INCOME: {
          required: true,
        },
        PHONE_NUMBER: {
          required: true,
        },
        // Step 2
        SPOUSE_FIRSTNAME: {
          required: true,
        },
        SPOUSE_LASTNAME: {
          required: true,
        },
        SPOUSE_EMPLOYMENT_STATUS: {
          required: true,
        },
        SPOUSE_EMAIL: {
          required: true,
          email: true
        },
        SPOUSE_PHONE_NO: {
          required: true,
        },
        // Step 3
        partner_individual_street: {
          required: true,
        },
        partner_individual_city: {
          required: true,
        },
        partner_individual_state: {
          required: true,
        },
        partner_individual_zip_code: {
          required: true,
          minlength:5,
          maxlength:5,
          digits:true
        }
      },

      // Specify validation error messages
      messages: {
        // Step 1
        FIRST_NAME: 		"First name is required",
        LAST_NAME: 		"Last name is required",
        EMAIL_ADDRESS: {
          required: 	"Email is required",
          email: 		"Please enter a valid e-mail",
        },
        EMPLOYMENT_STATUS: {
          required: "Please Select Employment Status"
        },
        HOUSEHOLD_INCOME: {
          required: "Please Select Household Income"
        },
        PHONE_NUMBER: {
          required: "Phone number is required"
        },
        // Step 2
        SPOUSE_FIRSTNAME: {
          required: "Spouse First name is required",
        },
        SPOUSE_LASTNAME: {
          required: "Spouse Last name is required"
        },
        SPOUSE_EMPLOYMENT_STATUS: {
          required: "Please Select Spouse Employment Status"
        },
        SPOUSE_PHONE_NO: {
          required: "Spouse Phone number is required"
        },
        SPOUSE_EMAIL: {
          required: 	"Spouse Email is required",
          email: 		"Please enter a valid e-mail",
        },
        // Step 3
        partner_individual_street: {
          required: "Street is required"
        },
        partner_individual_city: {
          required: "City is required"
        },
        partner_individual_state: {
          required: "State is required"
        },
        partner_individual_zip_code:{
          required: 	"Zip Code is requied",
          maxlength: 	"Zip code must be 5 digits",
          minlength: 	"Zip code must be 5 digits",
          digits: 	"Please enter a valid zip code"
        }
      }
   }

   if( jQuery("#new-partner-invidual-registration-form").length > 0)  {
     $("#new-partner-invidual-registration-form").multiStepForm(
       {
         beforeSubmit : function(form, submit){
         
         },
         validations:val,
       }
     ).navigateTo(0);      
   }


   if( jQuery("#investor-edit-form-modal").length > 0)  {

    jQuery("#investor-edit-form-modal").validate({
      errorElement: "p",
      rules: {
        FIRST_NAME: {
          required: true,
        },
        LAST_NAME: {
          required: true,
        },
        EMAIL_ADDRESS: {
          required: true,
          email: true
        },
        EMPLOYMENT_STATUS: {
          required: true,
        },
        HOUSEHOLD_INCOME: {
          required: true,
        },
        PHONE_NUMBER: {
          required: true,
        },
        // Step 2
        SPOUSE_FIRSTNAME: {
          required: true,
        },
        SPOUSE_LASTNAME: {
          required: true,
        },
        SPOUSE_EMPLOYMENT_STATUS: {
          required: true,
        },
        SPOUSE_EMAIL: {
          required: true,
          email: true
        },
        SPOUSE_PHONE_NO: {
          required: true,
        },
        // Step 3
        partner_individual_street: {
          required: true,
        },
        partner_individual_city: {
          required: true,
        },
        partner_individual_state: {
          required: true,
        },
        partner_individual_zip_code: {
          required: true,
          minlength:5,
          maxlength:5,
          digits:true
        }
      },

      // Specify validation error messages
      messages: {
        // Step 1
        FIRST_NAME: 		"First name is required",
        LAST_NAME: 		"Last name is required",
        EMAIL_ADDRESS: {
          required: 	"Email is required",
          email: 		"Please enter a valid e-mail",
        },
        EMPLOYMENT_STATUS: {
          required: "Please Select Employment Status"
        },
        HOUSEHOLD_INCOME: {
          required: "Please Select Household Income"
        },
        PHONE_NUMBER: {
          required: "Phone number is required"
        },
        // Step 2
        SPOUSE_FIRSTNAME: {
          required: "Spouse First name is required",
        },
        SPOUSE_LASTNAME: {
          required: "Spouse Last name is required"
        },
        SPOUSE_EMPLOYMENT_STATUS: {
          required: "Please Select Spouse Employment Status"
        },
        SPOUSE_PHONE_NO: {
          required: "Spouse Phone number is required"
        },
        SPOUSE_EMAIL: {
          required: 	"Spouse Email is required",
          email: 		"Please enter a valid e-mail",
        },
        // Step 3
        partner_individual_street: {
          required: "Street is required"
        },
        partner_individual_city: {
          required: "City is required"
        },
        partner_individual_state: {
          required: "State is required"
        },
        partner_individual_zip_code:{
          required: 	"Zip Code is requied",
          maxlength: 	"Zip code must be 5 digits",
          minlength: 	"Zip code must be 5 digits",
          digits: 	"Please enter a valid zip code"
        }
      }
    });
  }

   
   if( jQuery("#add-new-entity-partner-form").length > 0 ){

     $.validator.addMethod(
         "regex",
         function(value, element, regexp) {
             var check = false;
             return this.optional(element) || regexp.test(value);
         },
         "Please check your input."
     );

     jQuery("#add-new-entity-partner-form").validate({
       errorElement: "p",
       errorClass: "error-text",
       rules: {
        add_partner_entity_name: {
           required: true,
         },
         add_partner_entity_ein: { 
           required: true, 
           regex : /^\d{2}\-?\d{7}$/,
           maxlength: 10
         },
         add_partner_managing_member_1: {
           required: true,
         },
         add_partner_entity_docs: {
           required:true,
         },
         add_partner_entity_address_street: {
           required: true,
         },
         add_partner_entity_address_city: {
           required: true,
         },
         add_partner_entity_address_state: {
           required: true,
         },
         add_partner_entity_address_zipcode: {
           required: true,
           minlength:5,
           maxlength:5,
           digits:true
         }
       },
       messages: {
        add_partner_entity_name: {
           required: "Entity Name is required"
         },
         add_partner_managing_member_1: {
           required: "Please Select Member"
         },
         add_partner_entity_ein: { 
           required: "EIN is required",
           regex : "Please enter valid EIN. ( For Example XX-XXXXXXX )",
         },
         add_partner_entity_docs: {
          required: "Entity Docs is required",
         },
         add_partner_entity_address_street: {
           required: "Street is required"
         },
         add_partner_entity_address_city: {
           required: "City is required"
         },
         add_partner_entity_address_state: {
           required: "Please Select State"
         },
         add_partner_entity_address_zipcode:{
           required: 	"Zip Code is requied",
           maxlength: 	"Zip code must be 5 digits",
           minlength: 	"Zip code must be 5 digits",
           digits: 	"Please enter a valid zip code"
         }
       }
     });
   }
   if( jQuery("#add-new-property-form").length > 0 ){
      jQuery("#add-new-property-form").validate({
        errorElement: "p",
        errorClass: "error-text",
        rules: {
          property_address: {
            required: true,
          },
          property_map_right_url: {
            required:true,
          },
        },
        messages: {
          property_address: {
            required: "Property Address is required"
          },
          property_map_right_url: { 
            required: "Property Map Right Url required",
          },
        }
      });
    }


   if( jQuery("#add-new-entity-partner-edit-form").length > 0 ){

    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var check = false;
            return this.optional(element) || regexp.test(value);
        },
        "Please check your input."
    );

    jQuery("#add-new-entity-partner-edit-form").validate({
      errorElement: "p",
      errorClass: "error-text",
      rules: {
        add_partner_entity_name: {
          required: true,
        },
        add_partner_entity_ein: { 
          required: true, 
          regex : /^\d{2}\-?\d{7}$/,
          maxlength: 10
        },
        add_partner_managing_member_1: {
          required: true,
        },
        add_partner_entity_docs: {
          required:true,
        },
        add_partner_entity_address_street: {
          required: true,
        },
        add_partner_entity_address_city: {
          required: true,
        },
        add_partner_entity_address_state: {
          required: true,
        },
        add_partner_entity_address_zipcode: {
          required: true,
          minlength:5,
          maxlength:5,
          digits:true
        }
      },
      messages: {
        add_partner_entity_name: {
          required: "Entity Name is required"
        },
        add_partner_managing_member_1: {
          required: "Please Select Member"
        },
        add_partner_entity_ein: { 
          required: "EIN is required",
          regex : "Please enter valid EIN. ( For Example XX-XXXXXXX )",
        },
        add_partner_entity_docs: {
         required: "Entity Docs is required",
        },
        add_partner_entity_address_st1: {
          required: "Street is required"
        },
        add_partner_entity_address_city: {
          required: "City is required"
        },
        add_partner_entity_address_state: {
          required: "Please Select State"
        },
        add_partner_entity_address_zipcode:{
          required: 	"Zip Code is requied",
          maxlength: 	"Zip code must be 5 digits",
          minlength: 	"Zip code must be 5 digits",
          digits: 	"Please enter a valid zip code"
        }
      }
    });
  }

})(window.jQuery);