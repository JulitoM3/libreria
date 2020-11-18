let check = document.getElementById('defect');
let pass_input = document.getElementById('pass');
check.addEventListener('click',()=>{
    if(check.checked){
        pass_input.value = 'defectopass';
        pass_input.toggleAttribute('disabled');
    }else{
        pass_input.value = '';
        pass_input.toggleAttribute('disabled');
    }
});