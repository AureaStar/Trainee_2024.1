function fechaModal(){
    let close = document.querySelectorAll('.modall');
    close.forEach(modal=>{
        modal.style.display = 'none';
    });
}

function abreModal(idModal){
    fechaModal();
    let open = document.getElementById(idModal);
    open.style.display = 'block';
}