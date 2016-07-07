<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin1/user/config/plugins/archives.yaml',
    'modified' => 1467876351,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'date_display_format' => 'F jS Y',
        'show_count' => true,
        'limit' => 12,
        'order' => [
            'by' => 'date',
            'dir' => 'asc'
        ],
        'filter_combinator' => 'and',
        'filters' => [
            'category' => [
                0 => 'blog'
            ]
        ]
    ]
];
