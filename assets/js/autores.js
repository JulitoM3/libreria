const select_autor = document.getElementById('autor');
window.addEventListener('load', function () {
  axios({
    method: 'get',
    url: '../../controladores/ShowAutorsController.php',
  })
    .then(function (response) {
      let autores = response.data

      for (const autor in autores) {
        
        const nuevo_option = document.createElement('option');
        nuevo_option.textContent = autores[autor].nombre;
        nuevo_option.value = autores[autor].autor_id;
        select_autor.appendChild(nuevo_option);

      }
    });
})

const save_autor = document.getElementById('save_author');
save_autor.addEventListener('click', function () {
  const formulario = document.getElementById('frm-author');
  const ruta = formulario.getAttribute('action');

  let nombre = document.getElementById('nombre_author');
  let apellido_paterno = document.getElementById('apellido_paterno')
  let apellido_materno = document.getElementById('apellido_materno')
  let nobel = document.getElementById('nobel');
  const lista = document.getElementById('errors');

  axios({
    method: 'post',
    url: ruta,
    data: {
      nombre: nombre.value,
      apellido_paterno: apellido_paterno.value,
      apellido_materno: apellido_materno.value,
      nobel: nobel.value
    },
  })
    .then(function (response) {
      console.log(response)
      while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
      }
      const nuevo_option = document.createElement('option');
      const success = document.createElement('li');
      nuevo_option.textContent = nombre.value + ' ' + apellido_paterno.value + ' ' + apellido_materno.value;
      nuevo_option.value = response.data.id.fn_create_autor;
      success.textContent = 'Autor añadido correctamente a la lista';
      success.classList.add('alert');
      success.classList.add('alert-success');
      select_autor.appendChild(nuevo_option);
      lista.appendChild(success);
      
    })
    .catch(function (error) {
      console.log(error.response.data)
      while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
      }
      for (const errors of error.response.data) {
        const nuevo = document.createElement('li');
        nuevo.textContent = errors;
        nuevo.classList.add('alert')
        nuevo.classList.add('alert-danger')
        lista.appendChild(nuevo);
      }
    })
})