/*codigo de usuarios*/
var usuarios = new Usuarios();
var loginUser=() =>{
    var email = document.getElementById("email").values;
    var password = document.getElementById("password").values;
    usuarios.loginUser(email, password);
}

$().ready(()=>{

    $("#login").validate()
});