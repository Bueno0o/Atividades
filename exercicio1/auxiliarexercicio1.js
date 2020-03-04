function verifica_cadastro(nome,email,sexo,data){
    if(nome=="" && email=="" && sexo=="" && data==""){
        alert("seus dados são nome:"+ nome +"email:"+ email +"sexo:"+ sexo +"data:"+ data);
    }else{
        if(nome==""){
            nome=="nome não preenchido";
        }if(email==""){
            email=="email não preenchido";
        }if(sexo==""){
            sexo=="sexo não preenchido";
        }if(data==""){
            data=="data não preenchido";
        }
        alert("seus dados são nome:"+ nome +"email:"+ email +"sexo:"+ sexo +"data:"+ data);
    }
    
}