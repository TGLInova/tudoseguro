<div>
    <x-ui::hero container-class="flex flex-col"
        image-class="max-lg:bg-top max-lg:bg-cover bg-[size:100%_auto] bg-[center_25%]"
        :mobile-image="$image"
        :image="asset('static/img/equipe-4.webp')"
        :variant="['metalic', 'normal']">
        <x-ui::container class="flex flex-col justify-center gap-8 grow" x-bind:class="{ '*:animate-fade-up': enable }">
            <x-ui::h1>Equipe<br>Tudo Seguro</x-ui::h1>
            <p>Conheça quem faz tudo isso acontecer!</p>
        </x-ui::container>
    </x-ui::hero>

    <x-colaborador.section :$colaboradores :ver-mais="false" />

    <x-contato.card />
</div>
