<?php return [
    'plugin' => [
        'name' => 'Meta',
        'description' => 'Meta informacje o stronie internetowej',
        'author' => 'codeclutch',
        'model' => [
            'information' => 'O stronie',
            'title' => 'Tytuł strony',
            'logo' => 'Logo',
            'icon' => 'Ikona',
            'meta' => 'Meta tagi',
            'description' => 'Opis strony',
            'keywords' => 'Słowa kluczowe',
            'color' => 'Kolor główny',
            'og' => 'Tagi OG',
            'og_image' => 'OG Image',
            'copyright' => 'Copyright',
            'link' => 'Link',
            'author_logo' => 'Logo autora',
            'author' => 'Autor',
            'realisation_year' => 'Rok realizacji',
            'keywords_placeholder' => 'pisz, po, przecinkach',
        ],
        'components' => [
            'copyright' => [
                'name' => 'Copyright',
                'description' => 'Wyświetla copyright właściciela strony',
                'display_name' => [
                    'name' => 'Wyświetl nazwę',
                    'description' => 'Odznacz aby ukryć nazwę własciciela strony w copyright',
                ],
                'header_size' => [
                    'name' => 'Rozmiar nagłówka',
                    'description' => 'Rozmiar elementu nagłówka w copyright',
                ],
            ],
            'head' => [
                'name' => 'Head',
                'description' => 'Wypełnia <head>',
            ],
            'logo' => [
                'name' => 'Logo',
                'description' => 'Wyświetla logo',
                'height' => [
                    'name' => 'Height',
                    'description' => 'Wysokość logo',
                ],
                'width' => [
                    'name' => 'Width',
                    'description' => 'Długość logo',
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
    ],
];
