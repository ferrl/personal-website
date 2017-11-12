<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Recommended text length.
    |--------------------------------------------------------------------------
    |
    | Title should be between 50 and 60 characters. Description somewhere
    | between 150 and 160 characters. The type parameter should follow
    | twitter's card types.
    |
    */

    'default' => [
        'show' => [
            'title' => 'Lucas Ferreira | Full Stack Developer',
            'description' => 'I am a full-stack web developer from Brazil. I\'ve had the opportunity to work with amazing clients across the country, check out my portfolio.',
            'type' => 'summary',
            'content' => [
                'contact' => 'Contact',
                'specialties' => 'Specialties',
                'skills' => 'Significant Skills',
                'about' => 'About',
                'work' => 'Work',
                'projects' => 'Recent Projects',
                'certificates' => 'Certifications',
            ],
            'terms' => [
                'present' => 'Present',
            ],
        ],
    ],
];
