class Usuarios{
    constructor(){

    }
    loginUser(email, password){
        if(email == ""){
            document.getElementById("email").focus();
            M.toast({ html:'Ingrese el email', classes: 'rounded'});
        }else {
            if(password == ""){
                document.getElementById("password").focus();
                M.toast({ html:'Ingrese el password', classes: 'rounded'});
            }else {
                
            }
        }
    }
}