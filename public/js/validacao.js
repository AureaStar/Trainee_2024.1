
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

function setError(div, index)
{
    div.style.border = '5px solid red';
    spans[index].style.display = 'block';
}

/*
function nameValidate(input)
{
    /*
    let div = input.parentElement;
    if (input.value.length < 3){
        setError(div, 0);
    }else{
    console.log('VALIDADO O NOME')*/