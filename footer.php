

    <center>
    <strong>Copyright &copy; 2017 <a href="#">developer</a>.</strong> All rights
    reserved.
    <center>


<script>
      jQuery(function ($) {
//       jQuery.validator.addMethod("lettersonly", function(value, element) {
//            return this.optional(element) || /^[a-z]+$/i.test(value);
//        }, "Letters only please"); 
      $('#signupForm').validate({
         
            rules:{
              firstName:{
                required:true,
                lettersonly: true,
              },
              lastName:{
                required:true,
                lettersonly: true,
              },
              email:{
                required:true,
              },
              password:{
                required:true,
                minlength:6,
              },
              confirmPassword:{
                  //required:true,
                  equalTo : "#password"
              },
            },
            messages:{
                firstName:{
                 required:"Please enter first name",   
                },
                lastName:{
                 required:"Please enter last name",   
                },
                email:{
                 required:"Please enter email",   
                },
                password:{
                 required:"Please enter password",   
                },
                confirmPassword:{
                  required:"password not match",     
                },
            },
            
            
      });
        
   });
      
    
</script>