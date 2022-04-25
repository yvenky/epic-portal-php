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
  // Search Select 
  function matchStart(params, data) {
     if (jQuery.trim(params.term) === '') {
       return data;
     }

     if (typeof data.children === 'undefined') {
       return null;
     }
     var filteredChildren = [];
     jQuery.each(data.children, function (idx, child) {
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
   if( jQuery(".select-member-1-wrap").length > 0)  {
     jQuery(".select-member-1-wrap").select2({
       matcher: matchStart
     });
   }
   if( jQuery(".select-member-2-wrap").length > 0)  {
     jQuery(".select-member-2-wrap").select2({
       matcher: matchStart
     });
   }

   // Validate
   var val	=	{
       // Specify validation rules
       errorElement: "p",
       rules: {
         partner_individual_first_name: {
           required: true,
         },
         partner_individual_last_name: {
           required: true,
         },
         partner_individual_employment_status: {
           required: true,
         },
         partner_individual_household_income: {
           required: true,
         },
         partner_individual_email_address: {
           required: true,
           email: true
         },
         // Step 2
         partner_individual_spouse_first_name: {
           required: true,
         },
         partner_individual_spouse_last_name: {
           required: true,
         },
         partner_individual_employment_status_spouse: {
           required: true,
         },
         partner_individual_spouse_email_address: {
           required: true,
           email: true
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
         partner_individual_first_name: 		"First name is required",
         partner_individual_last_name: 		"Last name is required",
         partner_individual_email_address: {
           required: 	"Email is required",
           email: 		"Please enter a valid e-mail",
         },
         partner_individual_employment_status: {
           required: "Please Select Employment Status"
         },
         partner_individual_household_income: {
           required: "Please Select Household Income"
         },
         // Step 2
         partner_individual_spouse_first_name: {
           required: "Spouse First name is required",
         },
         partner_individual_spouse_last_name: {
           required: "Spouse Last name is required"
         },
         partner_individual_employment_status_spouse: {
           required: "Please Select Spouse Employment Status"
         },
         partner_individual_spouse_email_address: {
           required: 	"Email is required",
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
    $("#investor-edit-form-modal").multiStepForm(
      {
        beforeSubmit : function(form, submit){
        
        },
        validations:val,
      }
    ).navigateTo(0);      
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
         add_partner_add_partner_managing_member_1: {
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