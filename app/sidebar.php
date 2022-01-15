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

    'movies' => [
        'title' => trans('admin.movie'),
        'url' => '#',
        'icon' => 'fa-user',
        'role' => 'movies_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/movies')
            ],
            [
                'title' => trans('admin.member_add'),
                'url'   => url('admin/movies/create')
            ],
        ]
    ],
   
    'packages' => [
        'title' => trans('admin.package'),
        'url' => '#',
        'icon' => 'fa-user',
        'role' => 'packages_role',
        'childs' => [
            [
                'title' => trans('admin.show_all'),
                'url'   => url('admin/packages')
            ],
            [
                'title' => trans('admin.member_add'),
                'url'   => url('admin/packages/create')
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
