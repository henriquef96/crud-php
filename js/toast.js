document.getElementById('submitBtn').addEventListener('click', () => {
    const input = document.getElementById('input');
    const toastContainer = document.getElementById('toastContainer');

    let toastMessage, toastClass;

    if (input.value.trim() === '') {
        toastMessage = 'Favor adicionar uma tarefa!';
        toastClass = 'toast-danger';
    } else {
        toastMessage = 'Tarefa adicionada com sucesso!';
        toastClass = 'toast-success';
    }

    const toastElement = document.createElement('div');
    toastElement.setAttribute('role', 'alert');
    toastElement.setAttribute('aria-live', 'assertive');
    toastElement.setAttribute('aria-atomic', 'true');

    toastElement.innerHTML = `
        <div class="d-flex">
            <div class="p-3 d-flex toast-body ${toastClass}">${toastMessage}
            <button type="button" class="ms-2 btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    `;

    toastContainer.appendChild(toastElement);

    const toast = new bootstrap.Toast(toastElement);
    toast.show();

    toastElement.addEventListener('click', () => {
        toastElement.remove();
    });
});