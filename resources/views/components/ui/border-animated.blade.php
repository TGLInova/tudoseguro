<div {{ $attributes->class('group/animatedborder relative [--border-animated-delay:250ms]') }}>

    <span
        class="ui-border-animated-line absolute left-0 top-0
            group-hover/animatedborder:delay-0 delay-[calc(var(--border-animated-delay)*3)]
            w-0 group-hover/animatedborder:w-full
            block"></span>

    <span
        class="ui-border-animated-line absolute right-0 top-0
            group-hover/animatedborder:delay-(--border-animated-delay) delay-[calc(var(--border-animated-delay)*2)]
             h-0 group-hover/animatedborder:h-full
            block"></span>


    <span
        class="ui-border-animated-line absolute right-0 bottom-0
            group-hover/animatedborder:delay-[calc(var(--border-animated-delay)*2)] delay-(--border-animated-delay)
            w-0 group-hover/animatedborder:w-full
            block"></span>


    <span
        class="ui-border-animated-line absolute left-0 bottom-0
        group-hover/animatedborder:delay-[calc(var(--border-animated-delay)*3)] delay-0
         h-0 group-hover/animatedborder:h-full
        block"></span>


    {{ $slot }}
</div>
