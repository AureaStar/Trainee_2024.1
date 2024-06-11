const form = document.getElementById('formuCriar');
const botao = document.querySelector('.botaoUser');
//const array = [];

function Error(index) {
    let span = document.getElementById('span-required-' + index);
    let borda = document.getElementById('required-' + index);
    span.style.display = 'flex';
    borda.style.border = '3px solid red';
    botao.disabled = true;
    //array[index] = false;
    //Validacao();
}

function ErroVerificado(index) {
    let span = document.getElementById('span-required-' + index);
    let borda = document.getElementById('required-' + index);
    span.style.display = 'none';
    borda.style.border = '3px solid green';
    botao.disabled = false;
    //array[index] = true;
    //Validacao();
}

// function Validacao () {
//     array.map((element)=>{
//         console.log("FOREACH");
//         if(element == true){
//             console.log("IF");
//             botao.disabled = false;
//         }else{
//             console.log("ELSE");
//             botao.disabled = true;
//             return 0;
//         }
//     });
// }

function nameValidate(id) {
    const username = document.querySelector(id);

    if (username.value.length < 3) {
        Error(id);
    }else{
        ErroVerificado(id);
        console.log('VALIDADO O NOME');
    }
}

function emailValidate(id) {
    const email = document.querySelector(id);
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]w\+)*$/;

    if (!emailRegex.test(email.value)){
        Error(id);
    }else{
        ErroVerificado(id);
        console.log('VALIDADO O EMAIL');
    }
}

function senhaValidate(id) {
    const password = document.querySelector(id);

    if (password.value.length < 8) {
        Error(id);
    } else {
        ErroVerificado(id);
        console.log('VALIDADO O EMAIL');
    }
}

function senhaRepeatValidate(id, id2) {
    const password = document.querySelector(id);
    const passwordr = document.querySelector(id2);

    if (password.value != passwordr.value) {
        Error(id2);
    } else {
        ErroVerificado(id2);
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