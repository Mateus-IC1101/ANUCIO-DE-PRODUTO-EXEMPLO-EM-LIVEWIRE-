window.addEventListener('notifySuccess', event => {

    const ToastSucess = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    ToastSucess.fire({
        icon: 'success',
        title: "<h1 style='color:white'>Produto anuciado com sucesso</h1>",
        background: '#2dd259',
    });

    document.querySelector('input[name="produto"]').value = '';
    document.querySelector('input[name="preco"]').value = '';
    document.querySelector('input[name="obs"]').value = '';

});

window.addEventListener('notifyError', event => {

    Swal.fire(
        'Não foi possível prosseguir',
        'Por favor, envie uma imagem do produto',
        'error'
    );
});
