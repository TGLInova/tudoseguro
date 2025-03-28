<div>
    @if($msg = $errors->first())
        <x-ui::card :variant="['danger']" class="mb-5">{{ $msg }}</x-ui::card>
    @elseif($sucesso)
        <x-ui::card variant="primary" class="mb-5">Mensagem enviada com sucesso!</x-ui::card>
    @endif

    <form @class(["text-neutral-500", 'grid gap-4', 'lg:grid-cols-2' => $grid === 2]) wire:submit="submit">
        <x-ui::input name="form.nome" wire:model="form.nome" maxlength="100" placeholder="Nome" />
        <x-ui::input name="form.email" wire:model="form.email" type="email"  placeholder="E-mail" />
        <x-ui::input name="form.telefone" wire:model="form.telefone" type="tel" x-mask="(99) 99999-9999" placeholder="Celular" />
        <x-ui::input name="form.assunto" wire:model="form.assunto" maxlength="200" placeholder="Assunto" />
        <x-ui::textarea rows="1" name="form.mensagem" wire:model="form.mensagem"  placeholder="Digite uma mensagem" />

        <x-ui::button type="submit"  class="w-full" wire:loading.attr="disabled">
            <span wire:loading.remove>Enviar</span>
            <span wire:loading>Enviando...</span>
        </x-ui::button>
    </form>
</div>
