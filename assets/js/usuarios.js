let btns_delete = Array.from(document.getElementsByClassName('delete'))
btns_delete.forEach(element => {
    element.addEventListener('click', function (e) {
        e.preventDefault();
        let usuario_row = element.closest("tr");
        let usuario_id = usuario_row.id;

        axios.post('../../controladores/DeleteUserController.php', {
            id: usuario_id
        })
            .then(function (response) {
                console.log(response.data);
                element.setAttribute('disabled', true)
                alert(response.data.message)
                usuario_row.remove();
            })
            .catch(function (error) {
                console.log(error);
            });
    })
});

let btns_update = Array.from(document.getElementsByClassName('update_password'));

btns_update.forEach(element => {
    element.addEventListener('click', function (e) {
        e.preventDefault();
        let usuario_row = element.closest("tr");
        let usuario_id = usuario_row.id;

        axios.post('../../controladores/UpdatePasswordController.php', {
            id: usuario_id
        })
            .then(function (response) {
                console.log(response.data);
                alert(response.data.message);
            })
            .catch(function (error) {
                console.log(error);
            });

    })
});