<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1509556270,
    'checksum' => 'cf2214182d338118c8c4919385ca5e79',
    'files' => [
        'templates/g5_helium/custom/config/9' => [
            'index' => [
                'file' => 'templates/g5_helium/custom/config/9/index.yaml',
                'modified' => 1509556231
            ],
            'layout' => [
                'file' => 'templates/g5_helium/custom/config/9/layout.yaml',
                'modified' => 1509556231
            ]
        ],
        'templates/g5_helium/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_helium/custom/config/default/index.yaml',
                'modified' => 1509556231
            ],
            'layout' => [
                'file' => 'templates/g5_helium/custom/config/default/layout.yaml',
                'modified' => 1509556231
            ],
            'page/assets' => [
                'file' => 'templates/g5_helium/custom/config/default/page/assets.yaml',
                'modified' => 1506810777
            ],
            'page/body' => [
                'file' => 'templates/g5_helium/custom/config/default/page/body.yaml',
                'modified' => 1506810777
            ],
            'page/head' => [
                'file' => 'templates/g5_helium/custom/config/default/page/head.yaml',
                'modified' => 1506810777
            ],
            'styles' => [
                'file' => 'templates/g5_helium/custom/config/default/styles.yaml',
                'modified' => 1508279675
            ]
        ],
        'templates/g5_helium/config/default' => [
            'page/body' => [
                'file' => 'templates/g5_helium/config/default/page/body.yaml',
                'modified' => 1508357921
            ],
            'particles/branding' => [
                'file' => 'templates/g5_helium/config/default/particles/branding.yaml',
                'modified' => 1508357921
            ],
            'particles/copyright' => [
                'file' => 'templates/g5_helium/config/default/particles/copyright.yaml',
                'modified' => 1508357921
            ],
            'particles/logo' => [
                'file' => 'templates/g5_helium/config/default/particles/logo.yaml',
                'modified' => 1508357921
            ],
            'particles/social' => [
                'file' => 'templates/g5_helium/config/default/particles/social.yaml',
                'modified' => 1508357921
            ],
            'particles/totop' => [
                'file' => 'templates/g5_helium/config/default/particles/totop.yaml',
                'modified' => 1508357921
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'contentcubes' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'contenttabs' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'animation' => 'slide'
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => '2016',
                    'end' => 'now'
                ],
                'target' => '_blank',
                'owner' => 'Gantry Framework',
                'link' => '',
                'additional' => [
                    'text' => 'Developed by RocketTheme exclusively<br />for Gantry 5.'
                ],
                'css' => [
                    'class' => ''
                ]
            ],
            'horizontalmenu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'target' => '_blank'
            ],
            'owlcarousel' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'nav' => 'disable',
                'dots' => 'enable',
                'autoplay' => 'disable',
                'imageOverlay' => 'enable'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry<span class="hidden-tablet"> Framework</span></a>',
                'css' => [
                    'class' => 'g-branding'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => '',
                'svg' => '<svg width="100%" height="100%" viewBox="0 0 67 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><path id="logo" d="M16.508,3.838l14.882,7.044l0,18.089l-14.882,7.044l-14.883,-7.044l0,-18.089l14.883,-7.044l0,0ZM26.983,21.828c0.024,-0.138 0.046,-0.324 0.064,-0.556c0.018,-0.233 0.027,-0.469 0.027,-0.708c0,-0.654 -0.091,-1.267 -0.275,-1.839c-0.183,-0.572 -0.455,-1.066 -0.815,-1.481c-0.361,-0.414 -0.797,-0.741 -1.311,-0.98c-0.513,-0.239 -1.099,-0.359 -1.759,-0.359c-0.758,0 -1.421,0.135 -1.989,0.406c-0.568,0.27 -1.045,0.638 -1.43,1.103c-0.384,0.466 -0.675,1.013 -0.87,1.641c-0.196,0.629 -0.293,1.302 -0.293,2.019c0,0.729 0.094,1.402 0.284,2.018c0.189,0.616 0.482,1.147 0.879,1.594c0.398,0.446 0.911,0.795 1.54,1.047c0.629,0.251 1.384,0.377 2.264,0.377c1.197,0 2.272,-0.189 3.226,-0.566c-0.013,-0.402 -0.068,-0.779 -0.165,-1.132c-0.098,-0.352 -0.214,-0.654 -0.349,-0.905c-0.391,0.151 -0.803,0.267 -1.237,0.349c-0.434,0.082 -0.858,0.123 -1.274,0.123c-0.757,0 -1.368,-0.17 -1.833,-0.51c-0.464,-0.339 -0.721,-0.886 -0.769,-1.641l6.085,0ZM44.956,17.583c0.384,-0.064 0.763,-0.096 1.136,-0.096c0.373,0 0.752,0.032 1.136,0.096l0,4.384c0,0.438 0.035,0.798 0.104,1.08c0.069,0.283 0.176,0.507 0.32,0.672c0.144,0.166 0.323,0.283 0.536,0.352c0.213,0.07 0.464,0.104 0.752,0.104c0.395,0 0.725,-0.037 0.992,-0.112l0,-6.48c0.384,-0.064 0.757,-0.096 1.12,-0.096c0.373,0 0.752,0.032 1.136,0.096l0,7.952c-0.341,0.118 -0.792,0.232 -1.352,0.344c-0.56,0.112 -1.144,0.168 -1.752,0.168c-0.544,0 -1.067,-0.042 -1.568,-0.128c-0.501,-0.085 -0.941,-0.266 -1.32,-0.544c-0.379,-0.277 -0.68,-0.682 -0.904,-1.216c-0.224,-0.533 -0.336,-1.242 -0.336,-2.128l0,-4.448l0,0ZM13.566,20.017l0,5.867c0.452,0.075 0.904,0.113 1.356,0.113c0.428,0 0.874,-0.038 1.338,-0.113l0,-13.563c-0.464,-0.075 -0.916,-0.113 -1.356,-0.113c-0.44,0 -0.886,0.038 -1.338,0.113l0,5.32l-4.417,0l0,-5.32c-0.465,-0.075 -0.917,-0.113 -1.357,-0.113c-0.439,0 -0.885,0.038 -1.338,0.113l0,13.563c0.453,0.075 0.905,0.113 1.357,0.113c0.427,0 0.873,-0.038 1.338,-0.113l0,-5.867l4.417,0ZM36.11,14.063c0.352,0.002 0.714,0.034 1.086,0.096l0,8.4c0,0.331 0.019,0.598 0.056,0.8c0.037,0.203 0.096,0.36 0.176,0.472c0.08,0.112 0.184,0.19 0.312,0.232c0.128,0.043 0.288,0.064 0.48,0.064c0.085,0 0.179,-0.005 0.28,-0.016c0.101,-0.01 0.2,-0.026 0.296,-0.048c0.117,0.438 0.176,0.864 0.176,1.28c0,0.086 0,0.163 0,0.232c0,0.07 -0.011,0.147 -0.032,0.232c-0.171,0.054 -0.376,0.091 -0.616,0.112c-0.24,0.022 -0.461,0.032 -0.664,0.032c-0.821,0 -1.48,-0.226 -1.976,-0.68c-0.496,-0.453 -0.744,-1.192 -0.744,-2.216l0,-8.896c0.384,-0.064 0.763,-0.096 1.136,-0.096l0.034,0ZM40.636,19.311l-1.072,0c-0.032,-0.138 -0.056,-0.285 -0.072,-0.44c-0.016,-0.154 -0.024,-0.301 -0.024,-0.44c0,-0.288 0.032,-0.57 0.096,-0.848l3.296,0l0,8.272c-0.384,0.064 -0.757,0.096 -1.12,0.096c-0.352,0 -0.72,-0.032 -1.104,-0.096l0,-6.544l0,0ZM63.538,17.391c0.928,0.004 1.61,0.263 2.05,0.776c0.443,0.518 0.664,1.326 0.664,2.424l0,5.264c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-4.672c0,-0.576 -0.072,-1.018 -0.216,-1.328c-0.144,-0.309 -0.435,-0.464 -0.872,-0.464c-0.181,0 -0.36,0.027 -0.536,0.08c-0.176,0.054 -0.336,0.152 -0.48,0.296c-0.144,0.144 -0.261,0.347 -0.352,0.608c-0.091,0.262 -0.136,0.6 -0.136,1.016l0,4.464c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-4.672c0,-0.576 -0.072,-1.018 -0.216,-1.328c-0.144,-0.309 -0.435,-0.464 -0.872,-0.464c-0.181,0 -0.363,0.027 -0.544,0.08c-0.181,0.054 -0.344,0.158 -0.488,0.312c-0.144,0.155 -0.259,0.371 -0.344,0.648c-0.085,0.278 -0.128,0.64 -0.128,1.088l0,4.336c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-8.272c0.149,-0.032 0.299,-0.056 0.448,-0.072c0.149,-0.016 0.315,-0.024 0.496,-0.024c0.181,0 0.341,0.008 0.48,0.024c0.139,0.016 0.283,0.04 0.432,0.072c0.032,0.054 0.061,0.131 0.088,0.232c0.027,0.102 0.051,0.208 0.072,0.32c0.021,0.112 0.04,0.222 0.056,0.328c0.016,0.107 0.029,0.198 0.04,0.272c0.085,-0.16 0.197,-0.32 0.336,-0.48c0.139,-0.16 0.304,-0.304 0.496,-0.432c0.192,-0.128 0.408,-0.232 0.648,-0.312c0.24,-0.08 0.509,-0.12 0.808,-0.12c1.291,0 2.117,0.491 2.48,1.472c0.213,-0.394 0.515,-0.738 0.904,-1.032c0.389,-0.293 0.883,-0.44 1.48,-0.44l0.022,0ZM24.618,19.961l-3.702,0c0.061,-0.642 0.25,-1.138 0.568,-1.49c0.318,-0.353 0.782,-0.529 1.393,-0.529c0.538,0 0.956,0.186 1.256,0.557c0.299,0.371 0.461,0.858 0.485,1.462ZM40.3,16.191c-0.064,-0.362 -0.096,-0.72 -0.096,-1.072c0,-0.341 0.032,-0.698 0.096,-1.072c0.181,-0.032 0.376,-0.056 0.584,-0.072c0.208,-0.016 0.397,-0.024 0.568,-0.024c0.181,0 0.379,0.008 0.592,0.024c0.213,0.016 0.411,0.04 0.592,0.072c0.032,0.182 0.053,0.36 0.064,0.536c0.011,0.176 0.016,0.355 0.016,0.536c0,0.171 -0.005,0.347 -0.016,0.528c-0.011,0.182 -0.032,0.363 -0.064,0.544c-0.181,0.032 -0.376,0.054 -0.584,0.064c-0.208,0.011 -0.403,0.016 -0.584,0.016c-0.171,0 -0.363,-0.005 -0.576,-0.016c-0.213,-0.01 -0.411,-0.032 -0.592,-0.064l0,0Z"/></svg>',
                'text' => '',
                'class' => 'g-logo g-logo-helium'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'target' => '_blank',
                'display' => 'both',
                'title' => '',
                'items' => [
                    0 => [
                        'icon' => 'fa fa-twitter fa-fw',
                        'text' => '',
                        'link' => 'http://www.twitter.com/rockettheme',
                        'name' => 'Twitter'
                    ],
                    1 => [
                        'icon' => 'fa fa-facebook fa-fw',
                        'text' => '',
                        'link' => 'http://www.facebook.com/RocketTheme',
                        'name' => 'Facebook'
                    ],
                    2 => [
                        'icon' => 'fa fa-google-plus fa-fw',
                        'text' => '',
                        'link' => 'https://plus.google.com/+rockettheme',
                        'name' => 'Google+'
                    ]
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'icon' => 'fa fa-chevron-up fa-fw',
                'content' => 'Back to top'
            ],
            'fixed-header' => [
                'enabled' => true,
                'mobile' => 'disable',
                'secondtrigger' => false
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'styles' => [
            'above' => [
                'background' => '#f4f5f7',
                'text-color' => '#424753'
            ],
            'accent' => [
                'color-1' => '#0c4365',
                'color-2' => '#0c4365'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#444444'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'expanded' => [
                'background' => '#ffffff',
                'text-color' => '#424753'
            ],
            'features' => [
                'background' => '#ffffff',
                'text-color' => '#424753'
            ],
            'font' => [
                'family-default' => 'Helvetica',
                'family-title' => 'Helvetica'
            ],
            'footer' => [
                'background' => '#312f38',
                'text-color' => '#ffffff'
            ],
            'header' => [
                'background' => '#312f38',
                'background-image' => 'gantry-media://header/img01.jpg',
                'background-overlay' => 'enabled',
                'text-color' => '#eceeef'
            ],
            'intro' => [
                'background' => '#f4f5f7',
                'text-color' => '#424753'
            ],
            'link' => [
                'regular' => '#0c4365',
                'hover' => '#999999'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade'
            ],
            'navigation' => [
                'background' => '#ffffff',
                'text-color' => '#0c4365'
            ],
            'offcanvas' => [
                'background' => '#0c4365',
                'text-color' => '#ffffff',
                'toggle-color' => '#0c4365',
                'toggle-visibility' => '1',
                'width' => '12rem'
            ],
            'testimonials' => [
                'background' => '#8f4dae',
                'background-image' => 'gantry-media://testimonials/img01.jpg',
                'background-overlay' => 'enabled',
                'text-color' => '#eceeef'
            ],
            'utility' => [
                'background' => '#ffffff',
                'text-color' => '#444444'
            ],
            'preset' => 'preset1'
        ],
        'page' => [
            'body' => [
                'attribs' => [
                    'class' => '',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'doctype' => 'html',
                'body_top' => '',
                'body_bottom' => ''
            ],
            'assets' => [
                'favicon' => '',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    0 => [
                        'id' => 'fixed-header-7725',
                        'type' => 'fixed-header',
                        'title' => 'Fixed Header',
                        'attributes' => [
                            'enabled' => '1',
                            'cssselector' => '#g-navigation',
                            'mobile' => 'enable',
                            'secondtrigger' => '0',
                            'secondoffset' => ''
                        ]
                    ]
                ]
            ]
        ],
        'index' => [
            'name' => 9,
            'timestamp' => 1509556231,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1506808777
            ],
            'positions' => [
                
            ],
            'sections' => [
                'navigation' => 'Navigation',
                'intro' => 'Intro',
                'features' => 'Features',
                'utility' => 'Utility',
                'above' => 'Above',
                'testimonials' => 'Testimonials',
                'expanded' => 'Expanded',
                'header' => 'Header',
                'aside' => 'Aside',
                'sidebar' => 'Sidebar',
                'mainbar' => 'Mainbar',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-9608' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-6409' => 'Menu'
                ],
                'messages' => [
                    'system-messages-7972' => 'System Messages'
                ],
                'content' => [
                    'system-content-1587' => 'Page Content'
                ],
                'mobile-menu' => [
                    'mobile-menu-5697' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'navigation' => 'navigation',
                    'header' => 'header',
                    'intro' => 'intro',
                    'features' => 'features',
                    'utility' => 'utility',
                    'above' => 'above',
                    'testimonials' => 'testimonials',
                    'expanded' => 'expanded',
                    'aside' => 'aside',
                    'mainbar' => 'mainbar',
                    'sidebar' => 'sidebar',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'logo-9608' => 'logo-9608',
                    'menu-6409' => 'menu-6409',
                    'system-messages-7972' => 'system-messages-7972',
                    'system-content-1587' => 'system-content-1587',
                    'mobile-menu-5697' => 'mobile-menu-5697'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1506808777
            ],
            'layout' => [
                'navigation' => [
                    
                ],
                'header' => [
                    
                ],
                'intro' => [
                    
                ],
                'features' => [
                    
                ],
                'utility' => [
                    
                ],
                'above' => [
                    
                ],
                'testimonials' => [
                    
                ],
                'expanded' => [
                    
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'aside 25' => [
                                
                            ]
                        ],
                        1 => [
                            'mainbar 50' => [
                                
                            ]
                        ],
                        2 => [
                            'sidebar 25' => [
                                
                            ]
                        ]
                    ]
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'intro' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'features' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'testimonials' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'expanded' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'aside' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ],
                    'block' => [
                        'fixed' => '1'
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'subtype' => 'main',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'sidebar' => [
                    'type' => 'section',
                    'subtype' => 'aside',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ],
                    'block' => [
                        'fixed' => '1'
                    ]
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'logo-9608' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="125" height="41" viewBox="0 0 1000 327">
  <metadata><?xpacket begin="﻿" id="W5M0MpCehiHzreSzNTczkc9d"?>
<x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c138 79.159824, 2016/09/14-01:09:01        ">
   <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
      <rdf:Description rdf:about=""/>
   </rdf:RDF>
</x:xmpmeta>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                           
<?xpacket end="w"?></metadata>
<image id="Layer_0" data-name="Layer 0" width="1000" height="327" xlink:href="data:img/png;base64,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"/>
</svg>
',
                        'class' => ''
                    ],
                    'block' => [
                        'id' => 'site-logo'
                    ]
                ],
                'position-position-7516' => [
                    'title' => 'Sidebar',
                    'attributes' => [
                        'key' => 'sidebar'
                    ],
                    'block' => [
                        'class' => 'sidebar'
                    ]
                ]
            ]
        ]
    ]
];
