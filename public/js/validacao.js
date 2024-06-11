
const form = document.getElementById('formuCriar');
const spans = document.querySelectorAll('.span-required');
const borda = document.querySelectorAll('.required');

function Error(index) {
    spans[index].style.display = 'flex';
    borda[index].style.border = '3px solid red';
}

function ErroVerificado(index) {
    spans[index].style.display = 'none';
    borda[index].style.border = '3px solid green';
}

function nameValidate() {
    const username = document.querySelector('.username');

    if (username < 3) {
        Error(0);
    } else {
        ErroVerificado(0);
        console.log('VALIDADO O NOME');
    }
}

function emailValidate() {   
    const email = document.querySelector('.email');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]w\+)*$/;

    if (email != emailRegex){
        Error(1);
    }else{
        ErroVerificado(1);
        console.log('VALIDADO O EMAIL');
    }
}

function senhaValidate() {
    const password = document.querySelector('.password');

    if (password < 8) {
        Error(2);
    } else {
        console.log('VALIDADO O EMAIL');
    }
}

function senhaRepeatValidate() {
    const password = document.querySelector('.password');
    const passwordr = document.querySelector('.passwordr');

    if (password != passwordr) {
        Error(3);
    } else {
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