/**
 * Created by Dima on 07.10.2015.
 */
var buttonObj = document.getElementById('processBtn');
//buttonObj.onclick = function() {alert(document.getElementById('username').value);}
function validate_form ()
{

    if ( document.usersData.user_name.value == "" || document.usersData.password.value == "" )
    {
        alert ( "Please input name or password" );
        return false;
    }
    return true;
}