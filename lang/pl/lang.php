<?php return [
    'plugin' => [
        'name' => 'Meta',
        'description' => 'Meta informacje o stronie internetowej',
        'author' => 'codeclutch',
    ],
    'settings' => [
        'page_information' => 'Informacje o stronie',
        'icon' => 'Ikona',
        'logo' => 'Logo',
        'page_title' => 'Tytuł strony',
        'copyright' => 'Prawa autorskie',
        'meta_tags' => 'Meta Tagi',
        'keywords' => 'Słowa kluczowe',
        'keywords_placeholder' => 'pisz, po, przecinkach',
        'theme_color' => 'Główny kolor',
        'og_tags' => 'Tagi OG',
        'og_image' => 'OG Image',
        'og_image_width' => 'Długość OG Image',
        'og_image_height' => 'Wysokość OG Image',
        'author' => 'Autor',
        'link' => 'Link',
        'author_logo' => 'Logo autora',
        'realisation_year' => 'Rok realizacji',
    ],
    'components' => [
        'copyright' => [
            'name' => 'Prawa autorskie',
            'description' => 'Wyświetla prawa autorskie właściciela witryny',
            'display_name' => [
                'name' => 'Wyświetl nazwę',
                'description' => 'Odznacz aby ukryć nazwę właściciela witryny w prawach autorskich',
            ],
            'header_size' => [
                'name' => 'Rozmiar nagłówka',
                'description' => 'Rozmiar elementu nagłówka w prawach autorskich',
            ],
        ],
        'head' => [
            'name' => 'Nagłówek',
            'description' => 'Wypełnia <head>',
        ],
        'logo' => [
            'name' => 'Logo',
            'description' => 'Wyświetla logo',
            'height' => [
                'name' => 'Wysokość',
                'description' => 'Wysokość logo',
            ],
            'width' => [
                'name' => 'Szerokość',
                'description' => 'Szerokość logo',
            ],
        ],
        'signature' => [
            'name' => 'Stopka',
            'description' => 'Wyświetla stopkę o autorze strony',
            'text' => [
                'name' => 'Tekst stopki',
                'description' => 'Zawartość stopki',
            ],
        ],
    ],
];
