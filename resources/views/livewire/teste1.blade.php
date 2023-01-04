<div>
    <h3>Route Teste 1</h3>
    <p>{{ $message }}</p>
    <p>{{ $dados[0] }}</p>
    <br><br>
    <form method="POST" wire:submit.prevent="create">
        <input type="text" wire:model="message">
        @error('message')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit">Enviar</button>
    </form>

</div>
