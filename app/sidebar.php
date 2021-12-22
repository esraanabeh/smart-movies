<?php
$menu = [
    'website'            => [
        'title' => trans('admin.website'),
        'url'   => url('/'),
        'icon'  => 'fa-home'
    ],
    'admin'           => [
        'title' => trans('admin.admin'),
        'url'   => url('admin'),
        'icon'  => 'fa-dashboard'
    ],
    'profile'         => [
        'title' => trans('admin.profile'),
        'url'   => url('admin/profile'),
        'icon'  => 'fa-user'
    ],

    'site'            => [
        'title' => trans('admin.site'),
        'url'   => url('admin/site'),
        'icon'  => 'fa-globe',
        'role'  => 'site_role'
    ],
    // 'locations' => [
    //     'title' => trans('admin.locations'),
    //     'url' => '#',
    //     'icon' => 'fa-files-o',
    //     'role' => 'locations_role',
    //     'childs' => [
    //         [
    //             'title' => trans('admin.show_all'),
    //             'url'   => url('admin/locations')
    //         ],
    //         [
    //             'title' => trans('admin.page_add'),
    //             'url'   => url('admin/locations/create')
    //         ],
    //     ]
    // ],
    
    'social_media'    => [
        'title' => trans('admin.social_media'),
        'url'   => url('admin/social_media'),
        'icon'  => 'fa-instagram',
        'role'  => 'social_media_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/social_media')
            ],
            [
                'title' => trans('admin.social_media_add'),
                'url'   => url('admin/social_media/create')
            ],
        ]

    ],
    'log'             => [
        'title' => trans('admin.log'),
        'url'   => url('admin/log'),
        'icon'  => 'fa-tasks',
        'role'  => 'log_role'
    ],
   
    'spliter'         => 'Draw spliter here',
    'groups'          => [
        'title'  => trans('admin.groups'),
        'url'    => '#',
        'icon'   => 'fa-key',
        'role'   => 'groups_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/groups')
            ],
            [
                'title' => trans('admin.group_add'),
                'url'   => url('admin/groups/create')
            ],
        ]
    ],
    'admins'          => [
        'title'  => trans('admin.admins'),
        'url'    => '#',
        'icon'   => 'fa-user-secret',
        'role'   => 'admins_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/admins')
            ],
            [
                'title' => trans('admin.admin_add'),
                'url'   => url('admin/admins/create')
            ],
        ]
    ],
    
   
    'spliter'         => 'Draw spliter here',
    'services' => [
        'title' => trans('admin.services'),
        'url' => '#',
        'icon' => 'fa-th-large',
        'role' => 'services_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/services')
            ],
            [
                'title' => trans('admin.service_add'),
                'url'   => url('admin/services/create')
            ],
        ]
    ],


    'clients' => [
        'title' => trans('admin.clients'),
        'url' => '#',
        'icon' => 'fa-user',
        'role' => 'clients_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/clients')
            ],
            [
                'title' => trans('admin.client_add'),
                'url'   => url('admin/clients/create')
            ],
        ]
    ],

    'teams' => [
        'title' => trans('admin.Our_Team'),
        'url' => '#',
        'icon' => 'fa-user',
        'role' => 'teams_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/teams')
            ],
            [
                'title' => trans('admin.member_add'),
                'url'   => url('admin/teams/create')
            ],
        ]
    ],
    
   
    
    'spliter'         => 'Draw spliter here',

    'gallery' => [
        'title' => trans('admin.videos'),
        'url' => '#',
        'icon' => 'fa-bar-chart',
        'role' => 'gallery_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/gallery')
            ],
            [
                'title' => trans('admin.gallery_add'),
                'url'   => url('admin/gallery/create')
            ],
        ]
    ],

    'photo' => [
        'title' => trans('admin.photo'),
        'url' => '#',
        'icon' => 'fa-bar-chart',
        'role' => 'photo_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/photo')
            ],
            [
                'title' => trans('admin.photo_add'),
                'url'   => url('admin/photo/create')
            ],
        ]
    ],
  
    'slider' => [
        'title' => trans('admin.slider'),
        'url' => '#',
        'icon' => 'fa-bar-chart',
        'role' => 'slider_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/slider')
            ],
            [
                'title' => trans('admin.slider_add'),
                'url'   => url('admin/slider/create')
            ],
        ]
    ],
    'pages' => [
        'title' => trans('admin.pages'),
        'url' => '#',
        'icon' => 'fa-files-o',
        'role' => 'pages_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/pages')
            ],
            [
                'title' => trans('admin.page_add'),
                'url'   => url('admin/pages/create')
            ],
        ]
    ],
    'spliter' => 'Draw spliter here',
    'consultant'         => [
        'title' => trans('admin.request_consultant'),
        'url'   => url('admin/consultant'),
        'icon'  => 'fa-envelope',
        'role'  => 'consultant_role'
    ],

    'contact'         => [
        'title' => trans('admin.contact'),
        'url'   => url('admin/contact'),
        'icon'  => 'fa-envelope',
        'role'  => 'contact_role'
    ],
];
?>
