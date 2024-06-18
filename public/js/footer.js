let startCounter = 0;
let counter = 0;

function fotfechaModal(idModal){
    let close = document.getElementById(idModal);
    close.classList.remove('verModal');
    let filtro = document.querySelector('.footerfiltro');
    filtro.classList.remove('verModal');
}
function fotabreModal(idModal){
    let open = document.getElementById(idModal);
    open.classList.add('verModal');
    let filtro = document.querySelector('.footerfiltro');
    filtro.classList.add('verModal');
}

function easterCounter(){
    startCounter++; 
}

function easterEgg(idModal){
    counter++;
    if(counter == 3 && startCounter == 4){
    let open = document.getElementById(idModal);
    open.classList.add('verModal');
    let filtro = document.querySelector('.footerfiltro');
    filtro.classList.add('verModal');
    }
}