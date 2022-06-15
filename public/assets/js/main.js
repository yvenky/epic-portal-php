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
        STREET_1: {
          required: true,
        },
        CITY: {
          required: true,
        },
        STATE: {
          required: true,
        },
        ZIP_CODE: {
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
        STREET_1: {
          required: "Street is required"
        },
        CITY: {
          required: "City is required"
        },
        STATE: {
          required: "State is required"
        },
        ZIP_CODE:{
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
        STREET_1: {
          required: true,
        },
        CITY: {
          required: true,
        },
        STATE: {
          required: true,
        },
        ZIP_CODE: {
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
        STREET_1: {
          required: "Street is required"
        },
        CITY: {
          required: "City is required"
        },
        STATE: {
          required: "State is required"
        },
        ZIP_CODE:{
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
        ENTITY_NAME: {
           required: true,
         },
         EIN: { 
           required: true, 
           regex : /^\d{2}\-?\d{7}$/,
           maxlength: 10
         },
         MANAGING_MEMBER_1: {
           required: true,
         },
         MANAGING_MEMBER_2: {
          required: true,
        },
         STREET_1: {
           required: true,
         },
         CITY: {
           required: true,
         },
         STATE: {
           required: true,
         },
         ZIP_CODE: {
           required: true,
           minlength:5,
           maxlength:5,
           digits:true
         }
       },
       messages: {
        ENTITY_NAME: {
           required: "Entity Name is required"
         },
        MANAGING_MEMBER_1: {
           required: "Please Select Member"
         },
         MANAGING_MEMBER_2: {
          required: "Please Select Member"
        },
         EIN: { 
           required: "EIN is required",
           regex : "Please enter valid EIN. ( For Example XX-XXXXXXX )",
         },
         STREET_1: {
           required: "Street is required"
         },
         CITY: {
           required: "City is required"
         },
         STATE: {
           required: "Please Select State"
         },
         ZIP_CODE:{
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
          PROPERTY_ADDRESS: {
            required: true,
          },
          GOOGLE_COORDINATES: {
            required:true,
          },
          ENTITY_COMPANY: {
            required: true,
          },
          NO_OF_ACRES: {
            required: true,
          },
          MAP_URL: {
            required: true,
          },
          PROPERTY_DOCUMENTS: {
            required: true,
          },
          PURCHASE_PRICE: {
            required: true,
          },
          COST_PER_ACRE: {
            required: true,
          },
          POTENTIAL_PER_ACRE: {
            required: true,
          },
          POTENTIAL_MARKET_VALUE: {
            required: true,
          }
        },
        messages: {
          PROPERTY_ADDRESS: {
            required: "Property Address is required"
          },
          GOOGLE_COORDINATES: {
            required: "Property Google Coordinates is required"
          },
          ENTITY_COMPANY: {
            required: "Please Select Entity Company"
          },
          NO_OF_ACRES: {
            required: "Property Of Acres is required"
          },
          MAP_URL: {
            required: "Property Map Right Url required",
          },
          PROPERTY_DOCUMENTS: {
            required: "Property Documents is required"
          },
          PURCHASE_PRICE: {
            required: "Property Purchase Price is required"
          },
          COST_PER_ACRE: {
            required: "Property Per Acre Cost is required"
          },
          POTENTIAL_PER_ACRE: {
            required: "Property Per Acre is required"
          },
          POTENTIAL_MARKET_VALUE: {
            required: "Property Market Value is required"
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

/*$( '#property_select-list' ).on( 'change', function() {

  var sum = $(this).val()
      .map( function( value ) {
          return value.replace( /.+?-(\d+)$/, function( match, num ) { return num; });
      })
      .reduce( function(a, b) { 
          return parseInt(a) + parseInt(b);

          //return $( 'input[name=total_value_value]' ).val( sum );
      });

      $( 'input[name=TOTAL_PROPERTIES_VALUE]' ).val( sum );
})*/
//sum properties value

let total = 0;
let code = [];
$('#property_select-list').on('change', function() {
  total = 0;
  code = [];
  $(this).find('option:selected').each(function() {
    total += +$(this).data('price');
    code.push($(this).val());
  })
  $('#TOTAL_PROPERTIES_VALUE').val(total);
  $('#PROPERTY_SELECT').val(code.join(", "));
});

//get investor first name last name

$( '#investor_select-list' ).on( 'change', function() {

  $(this).find('option:selected').each(function() {
    fname = $(this).data('first');
  })

  $( 'input[name=FIRST_NAME]' ).val( fname);
});

$( '#investor_select-list' ).on( 'change', function() {

  $(this).find('option:selected').each(function() {
    lname = $(this).data('last');
  })

  $( 'input[name=LAST_NAME]' ).val( lname);
});

//total cash sum


$(document).on("change", ".getvalue", function() {
  var sum = 0;
  $(".getvalue").each(function(){
      sum += +$(this).val();
  });
  $("#TOTAL_CASH").val(sum);
});


document.querySelector('.fname').defaultValue = " ";
document.querySelector('.lname').defaultValue = " ";



$( '#entity-newpartner-add-form' ).on( 'change', function() {

  var a=parseInt($("#TOTAL_SHARE").val());
  var b=parseInt($("#TOTAL_PROPERTIES_VALUE").val());
  var cal=(a/b*100).toFixed(4);

      $( 'input[name=SHAREHOLDING]' ).val( cal );
})


$( '#entity-newpartner-update-form' ).on( 'change', function() {

  var a=parseInt($(".tsval").val());
  var b=parseInt($(".tpval").val());
  var cal=(a/b*100).toFixed(4);

      $( 'input[name=SHAREHOLDING]' ).val( cal );
})

$('.entity_filter_item').click(function(){
  $('.entity_filter_item').removeClass('active')
  $(this).addClass('active')
  var dataFilter = $(this).val();
  $('.Investment-list').hide()
  $(dataFilter).show()
})
