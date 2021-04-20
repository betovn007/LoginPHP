const form = document.getElementById('formLogin');
const usuario = document.getElementById('user')
const password = document.getElementById('password')
const boton = document.getElementById('btn')

form.addEventListener('submit', (ev)=>{
    // ev.preventDefault();
    alert('se esta mandando algo')
    validationInputs();
})

function validationInputs(){
    const user = usuario.nodeValue.trim();
    const pass = password.value.trim()

    console.log(user);
    if(user === '' || pass === ''){
        alert('Este campo no puede ir vacio')
    }
}