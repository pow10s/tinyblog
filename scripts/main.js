/**
 * Created by Dima on 07.10.2015.
 */
$(document).ready(function(){

    $("#reg_form").validate({

        rules:{

            user_name:{
                required: true,
                minlength: 4,
                maxlength: 16
            },

            password:{
                required: true,
                minlength: 6,
                maxlength: 16
            },

            email:{
                required: true,
                minlength: 6,
                maxlength: 25
            }
        }

    });
$('input[name=add_user_btn]').click(
    function()
    {
        var email = $('input[name=add_email]').val();
        var login = $('input[name=add_login]').val();
        var password = $('input[name=add_password]').val();
        $.ajax(
            {
                type: "POST",
                url: "/AddUser/AddUser",
                data: {add_email:email,add_login:login,add_password:password},
                success: function(email,login,password)
                {

                    alert("User was added");
                    location.reload();


                }
            }
        );
    }
);
});



