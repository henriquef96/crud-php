function editar(id) {
    let form = document.createElement('form');
    form.action = '#act';
    form.method = 'post'

    let input = document.createElement('input')
    input.type = 'text';
    input.name = 'tarefa';
    input.className = 'form-control'

    let button = document.createElement('button')
    button.type = 'submit';
    button.className = 'btn btn-primary';
    button.innerHTML = 'Atualizar';

    form.appendChild(input);
    form.appendChild(button);

    console.log(form)

    alert(id)
}