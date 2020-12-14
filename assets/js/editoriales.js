const editorial_id = document.getElementById('editorial_id');
window.addEventListener('load', function(){
    axios({
        method: 'get',
        url: '../../controladores/ShowEditorialsController.php'
    })
    .then(function(response){
        console.log(response)
    })
    .catch(function(error){
        console.log(error.response.data)
        let new_opt = document.createElement('option');
        new_opt.textContent = error.response.data;
        editorial_id.appendChild(new_opt);
    })
})