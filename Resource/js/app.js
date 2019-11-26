/*codigo de usuarios*/
var usuarios = new Usuarios();
var loginUser=() =>{
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    usuarios.loginUser(email, password);
}

$().ready(()=>{

    $("#login").validate()
});