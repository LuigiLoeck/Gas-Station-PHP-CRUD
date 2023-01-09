window.onload = function () {
  cadastro.addEventListener('submit', validaFormulario)
}

function validaFormulario(event) {
  var campos = document.querySelectorAll('.input')
  var submeter = true

  campos.forEach(function (campo, indice) {
    if (campo.value == '' || campo.value == 0.0) {
      campo.classList.add('invalid')
      submeter = false
      campo.addEventListener('change', function () {
        campo.classList.remove('invalid')
      })
    } else {
      if (campo.classList.contains('invalid') == true) {
        campo.classList.remove('invalid')
      }
    }
  })

  if (submeter == false) {
    //document.getElementById("cadastro").submit()
    event.preventDefault()
  }
}
