<?php

 
return array(
    'url' => 'admin/',
    'uri' => 'admin',
    'name' => 'Admin Panel ',
    'char' => 'abcdefghijklmnopqrstuvwxyz',
    'upload_dir' => public_path('uploads'),
    // black, blue, green, purple, red, yellow
    'theme' => 'blue',
    'marker_import_format' => [
        "name",
        "phone",
        "email",
        "fax",
        "address",
        "url"
    ],

    'sidebar' => array(
        // 'marker' => array(
        //     'icon' => 'fa fa-location-arrow fa-fw',
        //     'label' => 'Location List',
        //     'route' => '#',
        //     'child' => array(
        //                     'all-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'Location List',
        //                         'route' => 'admin.marker.index',
        //                     ),
        //                     'new-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'New Location',
        //                         'route' => '#',
        //                     ),
        //                 ),
        //     ),

        'categories' => array(
            'icon' => 'fa fa-list fa-fw',
            'label' => 'Categories',
            'route' => 'admin.category.index',
            // 'child' => array(
            //                 'all-category' => array(
            //                     'icon'  => 'fa fa-fw',
            //                     'label' => 'All Category',
            //                     'route' => 'admin.category.index',
            //                 ),
            //                 'new-category' => array(
            //                     'icon'  => 'fa fa-fw',
            //                     'label' => 'New Category',
            //                     'route' => 'admin.category.create',
            //                 ),
            //             ),
            ),

        
        // 'groups' => array(
        //     'icon'  => 'fa fa-users fa-fw',
        //     'label' => 'Groups',
        //     'route' => '#',
        //     'child' => array(
        //         'all-groups' => array(
        //             'icon'  => 'fa fa-fw',
        //             'label' => 'All Users',
        //             'route' => '#',
        //         ),
        //         'new-groups' => array(
        //             'icon'  => 'fa fa-fw',
        //             'label' => 'New Groups',
        //             'route' => '#',
        //         ),
        //     ),
        // ),



        // 'activity' => array(
        //     'icon' => 'fa fa-motorcycle fa-fw',
        //     'label' => 'Activity',
        //     'route' => '#',
        //     'child' => array(
        //                     'all-activity' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'All activity',
        //                         'route' => '#',
        //                     ),
        //                     'new-activity' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'New activity',
        //                         'route' => '#',
        //                     ),
        //                 ),
        //     ),
        
        // 'comment' => array(
        //     'icon' => 'fa fa-comments fa-fw',
        //     'label' => 'Comment',
        //     'route' => 'admin.comment.index',
        //     ),
        // 'image' => array(
        //     'icon' => 'fa fa-image fa-fw',
        //     'label' => 'Image',
        //     'route' => 'admin.images.index',
        //     ),
        
        

        // 'module' => array(
        //     'icon' => 'fa fa-thumb-tack fa-fw',
        //     'label' => 'Module',
        //     'route' => '#',
        //     'child' => array(
        //                     'all-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'All Users',
        //                         'route' => '#',
        //                     ),
        //                     'new-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'New Groups',
        //                         'route' => '#',
        //                     ),
        //                 ),
        //     ),
        
        // 'rating' => array(
        //     'icon'  => 'fa fa-star-o fa-fw',
        //     'label' => 'Rating',
        //     'route' => '#',
        //     ),
        'sponsorLogo' => array(
            'icon'  => 'fa fa-apple fa-fw',
            'label' => 'Advertise images form',
            'route' => 'admin.sponsorLogo.index',
            // 'child' => array(
            //                 'all-groups' => array(
            //                     'icon'  => 'fa fa-fw',
            //                     'label' => 'All SponsorLogo',
            //                     'route' => 'admin.sponsarLogo.index',
            //                 ),
            //                 'new-groups' => array(
            //                     'icon'  => 'fa fa-fw',
            //                     'label' => 'New SponsorLogo',
            //                     'route' => 'admin.',
            //                 ),
            //             ),
            ),

        // 'taxonomyControl' => array(
        //     'icon' => 'fa fa-thumb-tack fa-fw',
        //     'label' => 'TaxonomyControl',
        //     'route' => '#',
        //     'child' => array(
        //                     'all-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'All TaxonomyControl',
        //                         'route' => '#',
        //                     ),
        //                     'new-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'New TaxonomyControl',
        //                         'route' => '#',
        //                     ),
        //                 ),
        //     ),

        'Keywords' => array(
            'icon'  => 'fa fa-thumb-tack fa-fw',
            'label' => 'Keywords',
            'route' => 'admin.taxonomy.index',
            // 'child' => array(
            //                 'all-groups' => array(
            //                     'icon'  => 'fa fa-fw',
            //                     'label' => 'All Taxonomy',
            //                     'route' => 'admin.taxonomy.index',
            //                 ),
            //                 'new-groups' => array(
            //                     'icon'  => 'fa fa-fw',
            //                     'label' => 'New Taxonomy',
            //                     'route' => 'admin.taxonomy.create',
            //                 ),
            //             ),
            ),
        
        'address' => array(
            'icon' => 'fa fa-location-arrow fa-fw',
            'label' => 'Address',
           'route' => 'admin.city.index',
            'child' => array( 
                 'City' => [
                    'icon' => 'fa fa-location-arrow fa-fw',
                    'label' => 'City',
                    'route' => 'admin.city.index'],
                  'ward' => [
                            'icon' => 'fa fa-bed fa-fw',
                            'label' => 'Ward',
                           'route' => 'admin.ward.index',
                        ],
                     'township' => array(
                    'icon' => 'fa fa-location-arrow fa-fw',
                    'label' => 'Township',
                    'route' => 'admin.township.index',
                    // 'child' => array(
                    //                 'all-groups' => array(
                    //                     'icon'  => 'fa fa-fw',
                    //                     'label' => 'All Township',
                    //                     'route' => 'admin.township.index',
                    //                 ),
                    //                 'new-groups' => array(
                    //                     'icon'  => 'fa fa-fw',
                    //                     'label' => 'New Township',
                    //                     'route' => 'admin.township.create',
                    //                 ),
                    //             ),
                    )
                    ),
            ),
        'notimsg' => array(
            'icon'  => 'fa fa-bell fa-fw',
            'label' => 'Push Notification',
            'route' => 'admin.notimsg.index'
        ),
        'allusers' => array(
            'icon'  => 'fa fa-user fa-fw',
            'label' => 'Admin',
            'route' => 'backend.user.list',
            // 'child' => array(
            //     'users' => array(
            //         'icon'  => 'fa fa-fw',
            //         'label' => 'All Users',
            //         'route' => 'backend.user.list',
            //     ),
            //     'new-users' => array(
            //         'icon'  => 'fa fa-fw',
            //         'label' => 'New User',
            //         'route' => 'admin.users.create',
            //     ),
                
            // ),
        ),
        // 'more' => array(
        //     'icon' => 'fa fa-thumb-tack fa-fw',
        //     'label' => 'More',
        //     'child' => array(
                // 'priceList' => [
                //     'icon' => 'fa fa-dollar fa-fw',
                //     'label' => 'PriceList',
                //     'route' => 'admin.pricelist.index'],
                // 'businesshours' => [
                //     'icon' => 'fa fa-clock-o fa-fw',
                //     'label' => 'Business Hours',
                //    'route' => 'admin.times.index',
                    // 'child' => array(
                    //                 'all-groups' => array(
                    //                     'icon'  => 'fa fa-fw',
                    //                     'label' => 'All Times',
                    //                     'route' => 'admin.times.index',
                    //                 ),
                    //                 'new-groups' => array(
                    //                     'icon'  => 'fa fa-fw',
                    //                     'label' => 'New Times',
                    //                     'route' => '#',
                    //                 ),
                    //             ),
                    // ],
                // ), // Child
        // ),
        'settings' => array(
            'icon' => 'fa fa-gears fa-fw',
            'label' => 'Settings',
            'child' => array(
                'language' => [
                    'icon' => 'fa fa-thumb-tack fa-fw',
                    'label' => 'Language',
                    'route' => 'admin.language.index'],
                'package' => [
                    'icon' => 'fa fa-archive fa-fw',
                    'label' => 'Package',
                    'route' => 'admin.package.index'],
                'app' => [
                    'icon' => 'fa fa-code-fork fa-fw',
                    'label' => 'API',
                    'route' => 'admin.apps.index']
                ),
            ),

         

        // 'package' => array(
        //     'icon' => 'fa fa-archive fa-fw',
        //     'label' => 'Package',
        //     'route' => '#',
        //     'child' => array(
        //                     'all-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'All Package',
        //                         'route' => 'admin.package.index',
        //                     ),
        //                     'new-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'New Package',
        //                         'route' => '#',
        //                     ),
        //                 ),
        //     ),
        // 'priceList' => array(
        //     'icon' => 'fa fa-dollar fa-fw',
        //     'label' => 'PriceList',
        //     'route' => '#',
        //     'child' => array(
        //                     'all-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'All Prices',
        //                         'route' => 'admin.priceList.index',
        //                     ),
        //                     'new-groups' => array(
        //                         'icon'  => 'fa fa-fw',
        //                         'label' => 'Add New Price',
        //                         'route' => '#',
        //                     ),
        //                 ),
        //     ),
    )


);
        
?>