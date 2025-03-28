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
                'large'  => ['max-w-7xl'],
                'compact' => ['max-w-4xl']
            ]
        ],

        'button' => [
            'base'   => [
                'duration-500 inline-flex outline-hidden items-center justify-center active:-trangray-y-px disabled:opacity-40',
                'px-4 py-2',
                'rounded-lg'
            ],
            'variants' => [
                'normal'      => 'bg-primary hover:bg-primary-200 text-white border border-white',
                'primary'     => 'bg-primary hover:bg-primary-200 text-white border border-white',
                'primary-400' => 'text-white bg-primary-400 border-2 border-transparent hover:bg-transparent hover:text-primary-200 hover:border-current',
                'small'       => 'text-xs px-2! py-1.5!',
                'large'       => 'text-lg px-6! py-2.5!'
            ]
        ],

        'select' => [
            // 'wrapper' => 'relative flex items-center',
            // 'arrow'   => 'absolute right-3 pointer-events-none dark:text-white text-gray-800',
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
                'normal'  => 'border-gray-300',
                'primary' => 'border-primary',
            ]
        ],

        'input' => [
            'base' => [
                'w-full border-[2px] px-4 py-2.5 inline-flex outline-hidden',
                'rounded-lg'
            ],
            'variants' => [
                'normal'  => 'border-gray-300 bg-gray-200 placeholder:text-gray-400',
                'primary' => 'border-primary'
            ]
        ],


        'textarea' => [
            'base' => [
                'w-full border-2 px-4 py-2 inline-flex outline-hidden',
                'rounded-lg'
            ],
            'variants' => [
                'normal'  => 'border-gray-300 bg-gray-200 placeholder:text-gray-400',
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
                'bg-gray-200',
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
                'gray'              => 'bg-gray-200',
                'gray-300'          => 'bg-gray-300',
                'primary-400'       => 'text-white bg-primary-400',
                'primary'           => 'text-white bg-primary-500',
                'primary-600'       => 'text-white bg-primary-600'
            ]
        ],

        'card' => [
            'base' => [ 'p-4', 'rounded-lg shadow'],
            'variants' => [
                'normal'        => 'bg-gray-200',
                'gray-200'      => 'bg-gray-200',
                'gray-300'      => 'bg-gray-300',
                'primary'       => ['bg-primary-500 text-white'],
                'bordered'      => ['border-2 border-primary-400'],
                'bordered-200'  => ['border border-primary-200'],
                'danger'        => ['bg-red-400 text-white']

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
                'normal'  => 'border-gray-500',
                'primary' => 'border-primary'
            ]
        ],


        'radio' => [
            'base' => [
                'appearance-none h-5 w-5 border-2',
                'rounded-full duration-200 checked:bg-blue-500 checked:border-transparent',
            ],
            'variants' => [
                'normal'  => 'border-gray-500',
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
                'normal' => 'text-gray-700 [&_.ui-navbar-logo]:text-primary-500'
            ]
        ],

        'hero' => [
            'base' => [],
            'variants' => [
                'normal' => ['lg:h-[28rem] h-[36rem]'],
                'large'  => ['lg:h-[38rem] h-[40rem]'],

                'metalic' => null,

                'primary' => 'text-white bg-primary bg-blend-multiply'
            ]
        ]

    ]
];
