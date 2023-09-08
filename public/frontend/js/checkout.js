$(document).ready(function () {
    $('.bKashpay-button').click(function (e) { 
        e.preventDefault();

        var firstname = $('.firstname').val();
        var lastname = $('.lastname').val();
        var email = $('.email').val();
        var phone = $('.phone').val();
        var address1 = $('.address1').val();
        var address2 = $('.address2').val();
        var city = $('.city').val();
        var state = $('.state').val();
        var country = $('.country').val();
        var pincode = $('.pincode').val();

        if(!firstname)
        {
            fname_error = "First name is required <b class='ml-2 mb-5 '>*</b>";
            $('#fname_error').html('');
            $('#fname_error').html(fname_error);

        }
        else
        {
            fname_error = "";
            $('#fname_error').html('');
            
        }
// lastname.....................................................
        if(!lastname)
        {
            lname_error = "Last name is required <b class='ml-2 mb-5 '>*</b>";
            $('#lname_error').html('');
            $('#lname_error').html(lname_error);

        }
        else
        {
            lname_error = "";
            $('#lname_error').html('');
            
        }
        // email.....................................................
        if(!email)
        {
            email_error = "email is required <b class='ml-2 mb-5 '>*</b>";
            $('#email_error').html('');
            $('#email_error').html(email_error);

        }
        else
        {
            email_error = "";
            $('#email_error').html('');
            
        }
          // email.....................................................
          if(!phone)
          {
            phone_error = "Phone number is required <b class='ml-2 mb-5 '>*</b>";
              $('#phone_error').html('');
              $('#phone_error').html(phone_error);
  
          }
          else
          {
            phone_error = "";
              $('#phone_error').html('');
              
          }
              // address1.....................................................
              if(!address1)
              {
                address1_error = "Address1 is required <b class='ml-2 mb-5 '>*</b>";
                  $('#address1_error').html('');
                  $('#address1_error').html(address1_error);
      
              }
              else
              {
                address1_error = "";
                  $('#address1_error').html('');
                  
              }

                // address2.....................................................
                if(!address2)
                {
                  address2_error = "Address2 is required <b class='ml-2 mb-5 '>*</b>";
                    $('#address2_error').html('');
                    $('#address2_error').html(address2_error);
        
                }
                else
                {
                    address2_error = "";
                    $('#address2_error').html('');
                    
                }
                  // City.....................................................
              if(!city)
              {
                city_error = "City is required <b class='ml-2 mb-5 '>*</b>";
                  $('#city_error').html('');
                  $('#city_error').html(city_error);
      
              }
              else
              {
                  city_error = "";
                  $('#city_error').html('');
                  
              }

            // State.....................................................
            if(!state)
                     {
                        state_error = "State is required <b class='ml-2 mb-5 '>*</b>";
                         $('#state_error').html('');
                         $('#state_error').html(state_error);
             
                     }
                     else
                     {
                        state_error = "";
                         $('#state_error').html('');
                         
                     }

            // Country....................................................
            if(!country)
            {
                country_error = "Country is required <b class='ml-2 mb-5 '>*</b>";
                $('#country_error').html('');
                $('#country_error').html(country_error);
    
            }
            else
            {
                country_error = "";
                $('#country_error').html('');
                
            }

            // Pincode....................................................
                     if(!pincode)
                     {
                        pincode_error = "Pin Code required <b class='ml-2 mb-5 '>*</b>";
                         $('#pincode_error').html('');
                         $('#pincode_error').html(pincode_error);
             
                     }
                     else
                     {
                        pincode_error = "";
                         $('#pincode_error').html('');
                         
                     }
                     
               if( fname_error != '' || lname_error != '' || email_error != '' || phone_error != '' || address1_error != '' || address2_error != '' || city_error != '' || state_error != '' || country_error != '' || pincode_error != '' ) 
               {
                   return false;
               } 
               else
               {

                 var data = {

                     'firstname':firstname,
                     'lastname' :lastname ,
                     'email'    :email ,
                     'phone'    :phone ,
                     'address1' :address1, 
                     'address2' :address2, 
                     'city'     :city, 
                     'state'    :state, 
                     'country'  :country, 
                     'pincode'  :pincode 


                 }

                 $.ajax({
                    method: "POST",
                     url: "/proceed-to-pay",
                     data: "data",
                     success: function (response) {

                        // swal(response.status)
                        swal("",response.status,"success")
                        
                        .then((value)=>window.location.href = "/my-orders");
                    }

                     
                 });



               }    

        
        
    });// 2nd function
}); 
// 1st function