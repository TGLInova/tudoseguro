<div>
    <x-ui::hero container-class="flex flex-col" class="!bg-[center_13%] !max-lg:bg-center max-lg:bg-[size:auto_100%]" :image="$image" :variant="['metalic', 'normal']">
        <x-ui::container class="flex flex-col justify-center gap-8 grow" x-bind:class="{ '*:animate-fade-up': enable }">
            <x-ui::h1>Equipe<br>Tudo Seguro</x-ui::h1>
            <p>Conheça quem faz tudo isso acontecer!</p>
        </x-ui::container>
    </x-ui::hero>

    <x-colaborador.section :$colaboradores :ver-mais="false" />

    <x-contato.card />
</div>
