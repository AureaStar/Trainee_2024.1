function openModal(id){
    document.getElementById(id).style.display = "flex";
    let filtro = document.querySelector('.footerfiltro');
    filtro.classList.add('verModal');
}

function closeModal(id){
    document.getElementById(id).style.display = "none";
    let filtro = document.querySelector('.footerfiltro');
    filtro.classList.remove('verModal');
}