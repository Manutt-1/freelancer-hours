@props(['project'])
<x-ui.card class="col-span-2 ">
    <div class="flex items-start justify-between pb-4">
        <div class="flex flex-col gap-[16px]">
            <div>
                <span
                    class="bg-[#C0F7B4] text-[#1D8338] rounded-full font-bold text-center uppercase py-[6px] px-[14px] text-[12px] tracking-wide ">
                    {{ $project->status->label() }}
                </span>
            </div>
            <h1 class="text-[28px] text-white leading-9">
                {{ $project->title }}
            </h1>
            <div class="text-[#8C8C9A] text-[14px] leading-6">
                Publicado {{ $project->created_at->diffForHumans() }}
            </div>
        </div>
        <div>
            <livewire:proposals.create :$project/>
            
            <livewire:projects.timer :$project />
        </div>
    </div>

    <div class="py-4 description">
        {{-- {!! $project->description !!}  --}}
        <div>
            Olá! Estamos em busca de um desenvolvedor talentoso para colaborar no desenvolvimento de uma landing page dedicada a promover os serviços do nosso Pet Shop. Somos uma empresa apaixonada por cuidar dos animais, oferecendo serviços de banho e tosa, consultas veterinárias, e uma loja completa com produtos de qualidade para pets.
        </div>
        <span>Sobre o projeto:</span>
        <ul>
            <li>Escopo: A landing page terá 10 seções, cobrindo desde a apresentação da empresa até os serviços oferecidos e uma área para agendamento online.</li>
            <li>Design: O design completo já está pronto e finalizado no Figma, garantindo uma base sólida para o desenvolvimento.</li>
            <li>Objetivo: Criar uma página rápida e responsiva que ajude a converter visitantes em clientes, destacando a confiança e carinho que temos pelos pets.</li>
        </ul>
        <span>O que estamos buscando:</span>
        <div>
            Um desenvolvedor competente e comprometido, com experiência em HTML, CSS, JavaScript e preferencialmente em React, que consiga transformar o design em uma landing page otimizada e funcional. Alguém que tenha um olhar crítico para detalhes e que possa colaborar para garantir a melhor performance e usabilidade.
        </div>
        <span>Estamos animados para trabalhar com alguém que compartilhe nossa paixão por criar experiências de qualidade!</span>
    </div>

    <div class="py-4 space-y-4">
        <div class="uppercase font-bold text-[#8C8C9A] text-[12px]">Tecnologias</div>
        <div class="flex gap-[8px] items-center pb-2">
            @foreach ($project->tech_stack as $tech)
            <x-ui.tech :icon="$tech" :text="$tech" />
            @endforeach
        </div>
    </div>

    <div class="pt-4 space-y-4">
        <div class="uppercase font-bold text-[#8C8C9A] text-[12px]">Publicado Por</div>
        <div class="flex gap-[8px] items-center">
            <div>
                <x-ui.avatar src="{{ $project->author->avatar }}" />
            </div>

            <div>
                <div class="text-white text-[14px] font-bold tracking-wide">
                    {{ $project->author->name }}
                </div>
                <div class="flex items-center space-x-[4px]">
                    @foreach (range(1, $project->author->stars) as $star)
                        <x-ui.icons.star class="h-[14px]" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-ui.card>
