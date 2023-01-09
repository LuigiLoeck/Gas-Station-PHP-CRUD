window.onload = function(){
    // const range = document.querySelector("#range")
    // const input = document.querySelector("#nota")
    // range.textContent = input.value
    // cadastro.nota.addEventListener("input",function(event){range.textContent = event.target.value})

    cadastro.addEventListener("submit", validaFormulario)
    cadastro.cpf.addEventListener("keypress", function(){numeros(event,event.keyCode)})
    cadastro.cpf.addEventListener("keypress", function(){mascara_cpf(this,event)})
    cadastro.senha.addEventListener("keypress", function(){password(this)})
    cadastro.Cfsenha.addEventListener("keypress", function(){password(this)})

    }


    function validaFormulario(event)
    {
        var campos = document.querySelectorAll('.input'); 
        var submeter=true

        campos.forEach(function (campo, indice) {
            if(campo.value=="")
            {
                campo.classList.add('invalid')
                submeter=false
                campo.addEventListener("change", function(){campo.classList.remove('invalid')});
            }else{
                if(campo.classList.contains('invalid')==true)
                {
                    campo.classList.remove('invalid')
                }
            }
        });
        
        var cpf= document.getElementById('cpf').value.replace(/[^\d]+/g,'')
        if(TestaCPF(cpf)==false && document.getElementById('cpf').value!=""){
            document.getElementById('cpf').classList.add('invalid')  
            document.getElementById('cpf_txt').innerHTML="CPF Invalido"
            cadastro.cpf.addEventListener("keypress", function(){document.getElementById('cpf_txt').innerHTML=""})
            submeter=false
        }

        var senha1= document.getElementById('senha').value
        var senha2= document.getElementById('Cfsenha').value
        if (senha1!=senha2){
            submeter=false
            document.getElementById('senha_txt').innerHTML="Senha e Confirmação de Senha devem ser iguais"
            document.getElementById('Cfsenha').classList.add('invalid')
            cadastro.Cfsenha.addEventListener("keypress", function(){document.getElementById('senha_txt').innerHTML=""})
        }
            
        if(submeter==false){
            //document.getElementById("cadastro").submit()
            event.preventDefault()
            }
    }
    
    function password(elemento){
        if(elemento.value.length>15){
              event.preventDefault()
            }
        if(elemento.value.length<6){
            document.getElementById('mensagem2').innerHTML="A senha deve ter no minimo 6 caracteres"
            elemento.classList.add('invalid')
        } else {
            document.getElementById('mensagem2').innerHTML=""
            elemento.classList.remove('invalid')
        }
    }


    function TestaCPF(strCPF) {
        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000") return false;
    
        for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;
    
          if ((Resto == 10) || (Resto == 11))  Resto = 0;
          if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
    
        Soma = 0;
          for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
          Resto = (Soma * 10) % 11;
    
          if ((Resto == 10) || (Resto == 11))  Resto = 0;
          if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
          return true;
    }
    
 function numeros(event,tecla){  
    if (tecla < 47 || tecla > 58){  
        event.preventDefault() 
    }      
}
    
function mascara_cpf(elemento,event){
    if(elemento.value.length>10){
        event.preventDefault()
    }
}

        








        
