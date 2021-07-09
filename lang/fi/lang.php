<?php return [
    'plugin' => [
        'name' => 'Meta',
        'description' => 'Meta information about website',
        'author' => 'codeclutch',
        'model' => [
            'information' => 'Page information',
            'title' => 'Page title',
            'logo' => 'Logo',
            'icon' => 'Icon',
            'meta' => 'Meta tags',
            'description' => 'Page description',
            'keywords' => 'Keywords',
            'color' => 'Main color',
            'og' => 'OG tags',
            'og_image' => 'OG Image',
            'copyright' => 'Copyright',
            'link' => 'Link',
            'author_logo' => 'Author logo',
            'author' => 'Author',
            'realisation_year' => 'Realisation year',
            'keywords_placeholder' => 'write, after, commas',
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
    ],
];
