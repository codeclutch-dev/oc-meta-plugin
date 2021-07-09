<?php return [
    'plugin' => [
        'name' => 'Meta',
        'description' => 'Meta information about website',
        'author' => 'codeclutch',
    ],
    'settings' => [
        'page_information' => 'Page Information',
        'icon' => 'Icon',
        'logo' => 'Logo',
        'page_title' => 'Page title',
        'copyright' => 'Copyright',
        'meta_tags' => 'Meta Tags',
        'keywords' => 'Keywords',
        'keywords_placeholder' => 'write, after, commas',
        'theme_color' => 'Main color',
        'og_tags' => 'OG Tags',
        'og_image' => 'OG Image',
        'og_image_width' => 'OG Image width',
        'og_image_height' => 'OG Image height',
        'author' => 'Author',
        'link' => 'Link',
        'author_logo' => 'Author logo',
        'realisation_year' => 'Realisation year',
    ],
    'components' => [
        'copyright' => [
            'name' => 'Copyright',
            'description' => 'Displays copyright of website owner',
            'display_name' => [
                'name' => 'Display name',
                'description' => 'Uncheck to hide website owner\'s name in copyright',
            ],
            'header_size' => [
                'name' => 'Header size',
                'description' => 'Size of header element in copyright',
            ],
        ],
        'head' => [
            'name' => 'Head',
            'description' => 'Fills <head>',
        ],
        'logo' => [
            'name' => 'Logo',
            'description' => 'Displays logo',
            'height' => [
                'name' => 'Height',
                'description' => 'Height of logo',
            ],
            'width' => [
                'name' => 'Width',
                'description' => 'Width of logo',
            ],
        ],
        'signature' => [
            'name' => 'Signature',
            'description' => 'Displays signature of website author',
            'text' => [
                'name' => 'Signature text',
                'description' => 'Content of signature',
            ],
        ],
    ],
];
