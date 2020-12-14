const editorial_id = document.getElementById('editorial_id');
window.addEventListener('load', function () {
    axios({
        method: 'get',
        url: '../../controladores/ShowEditorialsController.php'
    })
        .then(function (response) {
            console.log(response)

        })
        .catch(function (error) {
            let new_opt = document.createElement('option');
            new_opt.textContent = error.response.data;
            editorial_id.appendChild(new_opt);
        })
})

const save = document.getElementById('save_editorial');
const formulario = document.getElementById('frm-editorial');
const ruta = formulario.getAttribute('action');
const lista_editorial = document.getElementById('errors_editorial');
let nombre_editorial = document.getElementById('nombre_editorial');
let web_editorial = document.getElementById('web_editorial');
save.addEventListener('click', function () {
    axios({
        method: 'post',
        url: ruta,
        data:{
            nombre_editorial: nombre_editorial.value,
            web_editorial: web_editorial.value
        }
    })
        .then(function (response) {
            
        })
        .catch(function (error) {
            let errors = error.response.data 
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