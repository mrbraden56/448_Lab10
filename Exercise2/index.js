function Validate(){
var user = document.form.user.value;
if (user=="")
{
 alert("Please enter something");
}
else{
document.getElementById('form').action='pCreateUser.php';
}
}

