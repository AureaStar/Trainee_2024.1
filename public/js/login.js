function mudaolho(id, ido)
{
    let input = document.getElementById(id);
    let olhinho = document.getElementById(ido);

    if (input.type == 'password'){
        // input.setAttribute("type", 'text');
        input.type = 'text';
        olhinho.textContent = 'visibility_off';
    } else {
        input.type = 'password';
        olhinho.textContent = 'visibility';
    }

}