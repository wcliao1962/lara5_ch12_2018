<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'       => 'HelloPackages', // set false to total remove
            'description' => 'Laravel範例', // set false to total remove
            'separator'   => ' - ',
            'keywords'    => ['Laravel','HelloPackages'],
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'HelloPackages', // set false to total remove
            'description' => 'Laravel範例', // set false to total remove
            'url'         => env('APP_URL'),
            'type'        => false,
            'site_name'   => 'HelloPackages',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
