window.onload = function () {
  let input = document.getElementById('img')
  let imgNome = document.getElementById('img_name')
  input.addEventListener('change', function () {
    let inputImage = document.querySelector('input[type=file]').files[0]
    imgNome.innerText = inputImage.name
  })

  cadastro.addEventListener('submit', validaFormulario)
}

function validaFormulario(event) {
  var campos = document.querySelectorAll('.input')
  var submeter = true

  campos.forEach(function (campo, indice) {
    if (campo.value == '' && campo.classList.contains('img') == false) {
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

var loadFile = function (event) {
  var image = document.getElementById('output')
  image.src = URL.createObjectURL(event.target.files[0])
}
