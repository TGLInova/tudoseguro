<?php

$shadow  = 'shadow-md';
$rounded = 'rounded-xs';
$duration = 'duration-200';

return [

    'namespace' => 'ui',

    'prefix'    => 'ui-',

    'components' => [

        'container' => [
            'base'   => 'px-5 lg:px-0 mx-auto w-full',
            'variants' => [
                'normal' => ['max-w-6xl'],
                'compact' => ['max-w-4xl']
            ]
        ],

        'button' => [
            'base'   => [
                'duration-500 inline-flex outline-hidden items-center justify-center active:-translate-y-px disabled:opacity-40',
                'px-4 py-2',
                'rounded-sm'
            ],
            'variants' => [
                'normal'      => 'text-base',
                'primary'     => 'bg-primary hover:bg-primary-200 text-white border border-white',
                'primary-400' => 'text-white bg-primary-400 border-2 border-transparent hover:bg-transparent hovertext-primary-200 hover:border-current',
                'small'       => 'text-xs px-2! py-1.5!',
                'large'       => 'text-lg px-6! py-2.5!'
            ]
        ],

        'select' => [
            // 'wrapper' => 'relative flex items-center',
            // 'arrow'   => 'absolute right-3 pointer-events-none dark:text-white text-neutral-800',
            'base' => [
                'relative',
                'w-full',
                'inline-flex items-center',
                'bg-white',
                'outline-hidden font-sans border-2',
                '[&>select]:appearance-none [&>select]:bg-transparent [&>select]:outline-hidden',
                '[&>select]:text-lg [&>select]:w-full',
                '[&>select]:border-none [&>select]:px-4 [&>select]:py-3',
                '[&>svg]:right-2 [&>svg]:absolute [&>svg]:pointer-events-none'
            ],
            'variants' => [
                'normal'  => 'border-neutral-300',
                'primary' => 'border-primary',
            ]
        ],

        'input' => [
            'base' => [
                'w-full border-2 px-4 py-2 inline-flex outline-hidden',
                'rounded-lg'
            ],
            'variants' => [
                'normal'  => 'border-neutral-300 bg-neutral-200',
                'primary' => 'border-primary'
            ]
        ],


        'textarea' => [
            'base' => [
                'w-full border-2 px-4 py-2 inline-flex outline-hidden',
                'rounded-lg'
            ],
            'variants' => [
                'normal'  => 'border-neutral-300 bg-neutral-200',
                'primary' => 'border-primary'
            ]
        ],


        'label' => [
            'base' => [],
            'variants' => [
                'normal'   => 'block',
                'checkbox' => 'inline-flex items-center space-x-2 cursor-pointer select-none'
            ]
        ],


        'avatar'    => [
            'base' => [
                'rounded-full',
                'aspect-square',
                'bg-neutral-200',
                'flex items-center justify-center',
                'overflow-hidden',
                $shadow,

                '[&>img]:h-full [&>img]:w-full',
                '[&>img]:object-cover [&>img]:object-center',
            ],
            'variants' => [
                'normal' => []
            ]
        ],


        'section' => [
            'base' => 'py-12 lg:py-20',
            'variants' => [
                'normal' => '',
                'neutral'  => 'bg-zinc-100',
                'grey'     => 'bg-zinc-300',
                'primary-400' => 'text-white bg-primary-400',
                'primary' => 'text-white bg-primary-500',
                'primary-600' => 'text-white bg-primary-600'
            ]
        ],

        'card' => [
            'base' => [ 'p-6', 'rounded-lg shadow'],
            'variants' => [
                'normal'  => [],
                'neutral' => 'bg-zinc-200',
                'grey'    => 'bg-zinc-300 shadow-sm',
                'primary' => ['bg-primary-500 text-white'],
                'bordered' => ['border-2 border-primary-400'],
                'bordered-200' => ['border border-primary-200'],
                'danger'       => ['bg-red-400 text-white']

            ]
        ],

        'checkbox' => [
            'base' => [
                'appearance-none',
                'h-5 w-5 flex-none',
                'border-2',
                'rotate-90',
                'rounded-xs',
                'checked:border-none',
                'checked:before:border-blue-500 checked:duration-200',
                'checked:before:h-5 checked:before:w-4',
                'checked:before:border-b-4 checked:before:border-r-4',
                'checked:before:block checked:rotate-45'
            ],
            'variants' => [
                'normal'  => 'border-neutral-500',
                'primary' => 'border-primary'
            ]
        ],


        'radio' => [
            'base' => [
                'appearance-none h-5 w-5 border-2',
                'rounded-full duration-200 checked:bg-blue-500 checked:border-transparent',
            ],
            'variants' => [
                'normal'  => 'border-neutral-500',
                'primary' => 'border-primary'
            ]
        ],

        'h1' => [
            'base' => [
                'text-4xl',
            ],
            'variants' => [
                'normal' => ''
            ]
        ],
        'h2' => [
            'base' => [
                'text-3xl',
            ],
            'variants' => [
                // 'normal' => 'font-semibold'
            ]
        ],

        'h3' => [
            'base' => 'text-2xl',
            'variants' => [
                // 'normal' => 'font-semibold'
            ]
        ],

        'h4' => [
            'base'   => 'text-xl',
            'variants' => []
        ],

        'h5' => [
            'base' => 'text-2xl',
            'variants' => []
        ],

        'h6' => [
            'base' => 'text-xl',
            'variants' => []
        ],


        'navbar' => [

            'base' => [
                'ui-navbar flex items-center w-full justify-between py-4',
            ],

            'variants' => [
                'normal' => 'text-neutral-700 [&_.ui-navbar-logo]:text-primary-500'
            ]
        ],

        'hero' => [
            'base' => [],
            'variants' => [
                'normal' => ['lg:h-[28rem] h-[36rem]'],
                'large'  => ['lg:h-[38rem] h-[40rem]'],

                'metalic' => null,

                'primary' => 'bg-primary bg-blend-multiply text-white'
            ]
        ]

    ]
];
