<form wire:submit="submit">
    <div class="mb-5">
        @if($msg = $errors->first())
            <x-ui::card :variant="['danger']">{{ $msg }}</x-ui::card>
        @elseif($sucesso)
            <x-ui::card variant="primary">Mensagem enviada com sucesso!</x-ui::card>
        @endif

    </div>
    <div class="flex max-lg:flex-col gap-4">
        <x-ui::input variant="normal" placeholder="Nome" name="form.nome" wire:model="form.nome" />
        <x-ui::input variant="normal" placeholder="Telefone + DDD" name="form.telefone" wire:model="form.telefone" type="tel" x-mask="(99)99999-9999" />
        <x-ui::button variant="primary" type="submit" class="flex-none lg:w-40" wire:loading.attr="disabled" >
            <span wire:loading.remove>Enviar</span>
            <span wire:loading>Enviando...</span>
        </x-ui::button>
    </div>
</form>
