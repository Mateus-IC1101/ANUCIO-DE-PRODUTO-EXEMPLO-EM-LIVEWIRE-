<div class="bg-black">
    <h1 class="text-white text-3xl mt-5"><strong>Seu produto para venda</strong></h1>
    <br><br>
    <form method="POST" wire:submit.prevent="create">
        <div class="columns-3 w-100">
            <div>
                <input
                    class="py-2 px-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring
            focus:ring-indigo-100 focus:border-indigo-300"
                    type="text" wire:model="produto" placeholder="produto">
                @error('produto')
                    <div><span class="text-red-200">{{ $message }}</span></div>
                @enderror
            </div>

            <div>
                <input onkeypress="mascara(this,mreais)"
                    class="py-2 px-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring
        focus:ring-indigo-100 focus:border-indigo-300"
                    type="text"placeholder="valor" wire:model="preco">
                @error('preco')
                    <div><span class="text-red-200">{{ $message }}</span></div>
                @enderror
            </div>

            <div>
                <input
                    class="py-2 px-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring
            focus:ring-indigo-100 focus:border-indigo-300"
                    type="text" placeholder="observação" wire:model="obs">
                @error('obs')
                    <div><span class="text-red-200">{{ $message }}</span></div>
                @enderror
            </div>

        </div>

        <div>
            <label for="dropzone-file"
                class="mx-auto m-5 cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>

                <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">Imagem do produto</h2>

                <p class="mt-2 text-gray-500 tracking-wide">envie uma foto em SVG, PNG, JPG or GIF. </p>

                <input id="dropzone-file" type="file" class="hidden" wire:model="photo" />
                </section>
                @error('photo')
                    <span class="error">{{ $message }}</span>
                @enderror
        </div>

        <button
            class="py-2 mt-5 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
            Enviar
        </button>
    </form>

    <div class="templateNotify">
    </div>
    <br>
    <br>

</div>

<script type="text/javascript" src="{{ '/js/mask/mask_valor.js' }}"></script>

<script type="text/javascript">
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

        // console.log(event);
        // var element_notify = document.querySelector(".templateNotify");
        // var classes = ['bg-green-100', 'rounded-lg', 'py-5', 'px-6', 'mb-4', 'text-base', 'text-green-700',
        //     'mt-5', 'mb-5'
        // ]
        // element_notify.classList.add(...classes);
        // element_notify.innerText = 'Produto anuciado com sucesso!';
        // console.log(element_notify);
    });

    window.addEventListener('notifyError', event => {

        Swal.fire(
            'Não foi possível prosseguir',
            'Por favor, envie uma imagem do produto',
            'error'
        );
        // console.log(event);
        // var element_notify = document.querySelector(".templateNotify");
        // var classes = ['bg-red-100', 'rounded-lg', 'py-5', 'px-6', 'mb-4', 'text-base', 'text-red-700',
        //     'mt-5', 'mb-5'
        // ]
        // element_notify.classList.add(...classes);
        // element_notify.innerText = 'Error! A imagem do produto não foi enviada.';
        // console.log(element_notify);
    });
</script>
