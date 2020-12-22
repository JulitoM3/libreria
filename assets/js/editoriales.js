const editorial_id = document.getElementById('editorial_id');
const sav_book = document.getElementById('save_book');


window.addEventListener('load', function () {
    axios({
        method: 'get',
        url: '../../controladores/ShowEditorialsController.php'
    })
        .then(function (response) {
           
             let editoriales = response.data;
             editoriales.forEach(editorial => {
                 let new_editorial = document.createElement('option');
                 new_editorial.textContent = editorial.nombre;
                 new_editorial.id = editorial.id;
                 editorial_id.appendChild(new_editorial);
             })
        })
        .catch(function (errore) {
            
             let new_opt_edit = document.createElement('option');
             new_opt_edit.textContent = errore.response.data;
             new_opt_edit.id = 'default_editorial';
             new_opt_edit.value = 'NA';
             editorial_id.appendChild(new_opt_edit);

             sav_book.setAttribute('disabled', 'true');

        })

})

const save_editorial = document.getElementById('save_editorial');
const formulario_editorial = document.getElementById('frm-editorial');
const ruta_editorial = formulario_editorial.getAttribute('action');
const lista_editorial = document.getElementById('errors_editorial');
let nombre_editorial = document.getElementById('nombre_editorial');
let web_editorial = document.getElementById('web_editorial');

save_editorial.addEventListener('click', function () {
    axios({
        method: 'post',
        url: ruta_editorial,
        data: {
            nombre_editorial: nombre_editorial.value,
            web_editorial: web_editorial.value
        },
    })
        .then(function (response) {
            console.log(response.data)
            while (lista_editorial.firstChild) {
                lista_editorial.removeChild(lista_editorial.firstChild);
            }

            let new_i = document.createElement('li');
            let new_option = document.createElement('option');
            let default_editortial = document.getElementById('default_editorial')
            if (typeof (default_editortial) != 'undefined' && default_editortial != null) {
                default_editortial.remove();
            }
            new_option.textContent = nombre_editorial.value
            new_option.value = response.data.id[0].fn_create_editoriales
            new_i.textContent = 'Editorial añadido correctamente a la lista';
            new_i.classList.add('alert');
            new_i.classList.add('alert-success');
            lista_editorial.appendChild(new_i);
            editorial_id.appendChild(new_option)
        })
        .catch(function (errores) {
            console.log(errores)
            let errors = errores.response.data
            while (lista_editorial.firstChild) {
                lista_editorial.removeChild(lista_editorial.firstChild);
            }
            errors.forEach(error => {

                let new_i = document.createElement('li');
                new_i.textContent = error;
                new_i.classList.add('alert');
                new_i.classList.add('alert-danger');
                lista_editorial.appendChild(new_i);
            });
        })
})