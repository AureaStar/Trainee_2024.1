
const form = document.getElementById('formuCriar');
const spans = document.querySelectorAll('.span-required');
const borda = document.querySelectorAll('.required');
const botao = document.querySelector('.fecharCriarUsuario');

function Error(index) {
    spans[index].style.display = 'flex';
    borda[index].style.border = '3px solid red';
    botao.disabled = true;
}

function ErroVerificado(index) {
    spans[index].style.display = 'none';
    borda[index].style.border = '3px solid green';
    botao.disabled = false;
}

function nameValidate(id) {
    const username = document.querySelector(id);

    if (username.value.length < 3) {
        Error(0);
    }else{
        ErroVerificado(0);
        console.log('VALIDADO O NOME');
    }
}

function emailValidate(id) {   
    const email = document.querySelector(id);
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]w\+)*$/;

    if (!emailRegex.test(email.value)){
        Error(1);
    }else{
        ErroVerificado(1);
        console.log('VALIDADO O EMAIL');
    }
}

function senhaValidate(id) {
    const password = document.querySelector(id);

    if (password.value.length < 8) {
        Error(2);
    } else {
        ErroVerificado(2);
        console.log('VALIDADO O EMAIL');
    }
}

function senhaRepeatValidate(id, id2) {
    const password = document.querySelector(id);
    const passwordr = document.querySelector(id2);

    if (password.value != passwordr.value) {
        Error(3);
    } else {
        ErroVerificado(3);
        console.log('VALIDADO O EMAIL');
    }
}




/*

const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]w\+)*$/;

function setError(index)
{
    campos[index].style.border = '5px solid red';
    spans[index].style.display = 'block';
}

function nameValidate()
{
    const form = document.getElementById('formuCriar');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
    if (campos[0].value.length < 3){
        setError(0);
    }else{
        console.log('VALIDADO O NOME');
    }
}

*/

/*
function setError(div, index)
{
    div.style.border = '5px solid red';
    spans[index].style.display = 'block';
}

function nameValidate(input)
{
    
    let div = input.parentElement;
    if (input.value.length < 3){
        setError(div, 0);
    }else{
    console.log('VALIDADO O NOME')
    }
}*/