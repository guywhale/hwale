<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Field Type Settings
    |--------------------------------------------------------------------------
    |
    | Here you can set default field group and field type configuration that
    | is then merged with your field groups when they are composed.
    |
    | This allows you to avoid the repetitive process of setting common field
    | configuration such as `ui` on every `trueFalse` field or your
    | preferred `instruction_placement` on every `fieldGroup`.
    |
    */

    'defaults' => [
        'group' => ['layout' => 'table'],
        'postObject' => ['ui' => 1, 'return_format' => 'object'],
        'repeater' => ['layout' => 'block'],
        'select' => ['ui' => 1],
        'tab' => ['placement' => 'left'],
        'trueFalse' => ['ui' => 1],
    ],
];
