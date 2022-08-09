<?php
    return [ 
        'title' => 'Larastart',

        'sidebar' => [
            [
                'type'  => 'link',
                'title' => 'Dashboard',
                'url'   => '/home',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>'
            ],
            [
                'type'  => 'link',
                'title' => 'Typography',
                'url'   => '',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="17.5" cy="15.5" r="3.5" />
                                <path d="M3 19v-10.5a3.5 3.5 0 0 1 7 0v10.5" />
                                <path d="M3 13h7" />
                                <path d="M21 12v7" />
                            </svg>'
            ],
            [
                'type'  => 'link',
                'title' => 'Forms',
                'url'   => '',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <rect x="9" y="3" width="6" height="4" rx="2" />
                                <line x1="9" y1="12" x2="9.01" y2="12" />
                                <line x1="13" y1="12" x2="15" y2="12" />
                                <line x1="9" y1="16" x2="9.01" y2="16" />
                                <line x1="13" y1="16" x2="15" y2="16" />
                            </svg>'
            ],
            [
                'type'  => 'link',
                'title' => 'Buttons',
                'url'   => '',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="3" y1="12" x2="6" y2="12" />
                                <line x1="12" y1="3" x2="12" y2="6" />
                                <line x1="7.8" y1="7.8" x2="5.6" y2="5.6" />
                                <line x1="16.2" y1="7.8" x2="18.4" y2="5.6" />
                                <line x1="7.8" y1="16.2" x2="5.6" y2="18.4" />
                                <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                            </svg>'
            ],
            [
                'type'  => 'collapse',
                'id'    => 'componentCollapse',
                'title' => 'Components',
                'url'   => '',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="4" y="4" width="6" height="6" rx="1" />
                                <rect x="14" y="4" width="6" height="6" rx="1" />
                                <rect x="4" y="14" width="6" height="6" rx="1" />
                                <rect x="14" y="14" width="6" height="6" rx="1" />
                            </svg>',
                'content' => [
                    [
                        'title' => 'Dashboard',
                        'url'   => '/home',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>'
                    ],        
                ]
            ]
        ],

        'menu' => [
            [
                'url'   => 'https://mkfizi.github.io/',
                'title' => 'Profile',
            ],
            [
                'url'   => '',
                'title' => 'Settings',
            ],
        ]
    ];