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

    document.querySelector('input[name="produto"]').value = null;
    document.querySelector('input[name="preco"]').value = null;
    document.querySelector('input[name="obs"]').value = null;

});

window.addEventListener('notifyValidation', event => {

    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'error',
        title: 'É necessário preencher todos os campos'
      })
});
