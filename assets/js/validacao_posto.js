window.onload = function(){
    const range = document.querySelector("#range")
    const input = document.querySelector("#nota")
    range.textContent = input.value
    cadastro.nota.addEventListener("input",function(event){range.textContent = event.target.value})

    cadastro.addEventListener("submit", validaFormulario)
    cadastro.cnpj.addEventListener("keypress", function(){numeros(event,event.keyCode)})
    cadastro.cnpj.addEventListener("keypress", function(){mascara_cnpj(this,event)})

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
        var cnpj= document.getElementById('cnpj').value
         if(validarCNPJ(cnpj)==false){
             document.getElementById('cnpj').classList.add('invalid')  
             document.getElementById('cnpj_txt').innerHTML="CNPJ Invalido"
             cadastro.cnpj.addEventListener("keypress", function(){document.getElementById('cnpj_txt').innerHTML=""})
             submeter=false
        }

        if(submeter==false){
            //document.getElementById("cadastro").submit()
            event.preventDefault()
            }
    }


    
 function numeros(event,tecla){  
    if (tecla < 47 || tecla > 58){  
        event.preventDefault() 
    }      
}
    
function mascara_cnpj(elemento,event){
    if(elemento.value.length>13){
        event.preventDefault()
    }
}

function validarCNPJ(cnpj) {

    if (cnpj.length != 14 && cnpj.length>0){
        return false;
    }
        
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999"){
            return false;
        }
        
         
    // Valida DVs
    tamanho = cnpj.length - 2;
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2){
        pos = 9;
      } 
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0)){
        return false;
    }
        
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1)){
        return false;
    }
          
           
    return true;
    
}