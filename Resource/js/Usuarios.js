class Usuarios{
    constructor(){

    }
    loginUser(email, password){
     //  alert(email);
        if(email == ""){
            document.getElementById("email").focus();
            M.toast({ html:'Ingrese el email', classes: 'rounded'});
        }else {
            if(password == ""){
                document.getElementById("password").focus();
                M.toast({ html:'Ingrese el password', classes: 'rounded'});
            }else {
                if(validarEmail(email)){
                    if(6 <= password.length){
                        $.post(
                            "Index/userLogin",
                            {email, password},
                            (respnose)=>{
                                console.log(respnose);
                            }
                        );
                    }else{
                        document.getElementById("password").focus();
                        M.toast({html: 'Introduzca al menos 6 caracteres',classes: 'rounded'});
                    }
                }else{
                    document.getElementById("email").focus();
                    M.toast({ html: 'Ingrese una dirección de correo electronico valida',classes: 'rounded' });
                }
            }
        }       
    }
}