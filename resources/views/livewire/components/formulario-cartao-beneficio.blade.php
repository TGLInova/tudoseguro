<form wire:submit="submit">
    <div class="mb-5">
        @if($msg = $errors->first())
            <x-ui::card :variant="['danger']">{{ $msg }}</x-ui::card>
        @elseif($sucesso)
            <x-ui::card variant="gray-300" class="text-gray-700">Cartão de benefício solicitado com sucesso!</x-ui::card>
        @endif

    </div>
    <div class="space-y-5">
        <x-ui::input variant="transparent" placeholder="Nome:" wire:model="form.nome" name="nome" />
        {{-- <x-ui::input variant="transparent" placeholder="CPF:" wire:model="form.cpf" name="cpf" x-mask="999.999.999-99" type="tel" /> --}}
        <x-ui::input variant="transparent" placeholder="Celular:" wire:model="form.celular" name="celular" type="tel" x-mask="(99) 99999-9999"/>
        <x-ui::button variant="primary-400" class="w-full">
            <span wire:loading.remove>Solicitar meu cartão</span>
            <span wire:loading>Enviando...</span>
        </x-ui::button>
    </div>
</form>
