function navhamshow() {
    let hamMenu = document.querySelector('.navhamMenu');
    let closeIcon = document.querySelector('.navhamLiClosed');
    let openIcon = document.querySelector('.navhamLiOpen');
    if (hamMenu.classList.contains('open')){
        hamMenu.classList.remove('open');
        closeIcon.classList.remove('hidden');
        openIcon.classList.add('hidden');
    }
    else{
        hamMenu.classList.add('open');
        closeIcon.classList.add('hidden');
        openIcon.classList.remove('hidden');
    }
}