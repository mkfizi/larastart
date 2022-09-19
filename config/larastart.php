<?php
    return [ 
        /*
        |--------------------------------------------------------------------------
        | Application Name
        |--------------------------------------------------------------------------
        |
        | This value is the name of your application displayed inside dashboard
        | sidebar.
        |
        */

        'name' => 'Larastart',

        /*
        |--------------------------------------------------------------------------
        | Dashboard Sidebar Content
        |--------------------------------------------------------------------------
        |
        | The array listed here will be displayed as dashboard sidebar items. Refer
        | << insert documentation link >> for more details on how to configure
        | sidebar items.
        |
        */

        'sidebar' => [
            [
                'type'  => 'link',
                'title' => 'Dashboard',
                'url'   => '/dashboard',
                'icon'  => '<svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>'
            ],
            [
                'type'  => 'link',
                'title' => 'Typography',
                'url'   => '/typography',
                'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                'url'   => '/forms',
                'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                'url'   => '/buttons',
                'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                'type'      => 'collapse',
                'title'     => 'Components',
                'url'       => '/components',
                'icon'      => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <rect x="4" y="4" width="6" height="6" rx="1" />
                                    <rect x="14" y="4" width="6" height="6" rx="1" />
                                    <rect x="4" y="14" width="6" height="6" rx="1" />
                                    <rect x="14" y="14" width="6" height="6" rx="1" />
                                </svg>',
                'id'        => 'componentCollapse',
                'subitems'  => [
                    [
                        'title' => 'Alerts',
                        'url'   => '/components/alerts',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M10 6h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                        <circle cx="17" cy="7" r="3" />
                                    </svg>'
                    ],  
                    [
                        'title' => 'Collapse',
                        'url'   => '/components/collapse',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="4" y="4" width="16" height="16" rx="2" />
                                        <line x1="4" y1="12" x2="20" y2="12" />
                                    </svg>'
                    ],  
                    [
                        'title' => 'Dropdown',
                        'url'   => '',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="4" y="4" width="16" height="6" rx="2" />
                                        <rect x="4" y="14" width="16" height="6" rx="2" />
                                    </svg>'
                    ],  
                    [
                        'title' => 'Modals',
                        'url'   => '',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="7" y="3" width="14" height="14" rx="2" />
                                        <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                                    </svg>'
                    ],  
                    [
                        'title' => 'Sidebar',
                        'url'   => '',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="4" y="4" width="16" height="16" rx="2" />
                                        <line x1="9" y1="4" x2="9" y2="20" />
                                    </svg>'
                    ],        
                ]
            ],
            [
                'type'      => 'collapse',
                'title'     => 'Pages',
                'url'       => '',
                'icon'      => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <rect x="4" y="4" width="16" height="16" rx="2" />
                                    <path d="M4 9h8" />
                                    <path d="M12 15h8" />
                                    <path d="M12 4v16" />
                                </svg>',
                'id'        => 'pagesCollapse',
                'subitems'  => [
                    [
                        'title' => 'Login',
                        'url'   => '',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                                    </svg>'
                    ],  
                    [
                        'title' => 'Sign Up',
                        'url'   => '',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        <path d="M16 11h6m-3 -3v6" />
                                    </svg>'
                    ],  
                    [
                        'title' => 'Forgot Password',
                        'url'   => '',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="3" y1="3" x2="21" y2="21" />
                                        <path d="M19 19a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h4m4 0h2a2 2 0 0 1 2 2v2" />
                                        <circle cx="12" cy="16" r="1" />
                                        <path d="M8 11v-3m.712 -3.278a4 4 0 0 1 7.288 2.278v4" />
                                    </svg>'
                    ],  
                    [
                        'title' => '404',
                        'url'   => '/404',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12 9v2m0 4v.01" />
                                        <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                    </svg>'
                    ],  
                    [
                        'title' => 'Blank',
                        'url'   => '',
                        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="4" y="4" width="16" height="16" rx="2" />
                                    </svg>'
                    ],        
                ]
            ]
        ],

        /*
        |--------------------------------------------------------------------------
        | Navbar Menu
        |--------------------------------------------------------------------------
        |
        | The array listed here will be displayed as navbar menu items. Refer
        | << insert documentation link >> for more details on how to configure
        | menu items.
        |
        */

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