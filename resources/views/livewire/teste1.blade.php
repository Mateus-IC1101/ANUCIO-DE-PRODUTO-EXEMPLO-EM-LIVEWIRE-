<div style="background-color:indigo">
    <h1 class="text-white text-3xl"><strong>Seu produto para venda</strong></h1>
    <br><br>
    <form method="POST" wire:submit.prevent="create">
        <div>
            <label for="dropzone-file"
                class="mx-auto m-5 cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
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
        <div class="d-flex">
            <input
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                type="text" name="produto" wire:model="produto" placeholder="produto">
            @error('produto')
                <div><span class="text-red-200">{{ $message }}</span></div>
            @enderror

            <input
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                onkeypress="mascara(this,mreais)" type="text"placeholder="valor" name="preco" wire:model="preco">
            @error('preco')
                <div><span class="text-red-200">{{ $message }}</span></div>
            @enderror

            <input class="rounded-md" type="text" placeholder="observação" name="obs" wire:model="obs">
            @error('obs')
                <div><span class="text-red-200">{{ $message }}</span></div>
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

<script type="text/javascript" src="{{ '/js/teste1/mask_valor.js' }}"></script>
<script type="text/javascript" src="{{ '/js/teste1/listener_escuta_evento.js' }}"></script>
