<?php

/**
 * Structure of Config file: 'models' > 'image_type' > 'configuration'a
 *
 * If 'models' key is not found, '_default' settings are applied.
 * If 'image_type' is not found, image of such type is not stored (null in DB)
 * If 'image_type' is set to true, '_default' type settings are applied
 * If 'image_type' does not overwrite dimensions (width, height), '_default' dimensions are applied
 * If 'image_type' sets 'transformation' to false or is not found, no transformation is applied
 */

return [
    'models' => [
        // 'image_type_1' missing -> this type is not stored
        'image_type_2' => true, // 'image_type_2' is set to true -> '_default' type settings are applied
        'image_type_3' => [ // 'image_type_3' overwrites dimensions, transformations are not applied from '_default'
            'width' => 400,
            'height' => 400,
        ],
        'image_type_4' => [ // 'image_type_4' overwrites transformation, dimensions are applied from '_default'
            'transformation' => 'scale',

        ],
    ],

    'examples' => [
        'stay_1' => [
            'width' => 400,
            'height' => 300,
            'transformation' => 'stay',
        ],
        'stay_2' => [
            'width' => 300,
            'height' => 200,
            'transformation' => 'stay',
        ],
        'stay_3' => [
            'width' => 200,
            'height' => 100,
            'transformation' => 'stay',
        ],
        'scale_1' => [
            'width' => 400,
            'height' => 300,
            'transformation' => 'scale',
        ],
        'scale_2' => [
            'width' => 300,
            'height' => 200,
            'transformation' => 'scale',
        ],
        'scale_3' => [
            'width' => 200,
            'height' => 100,
            'transformation' => 'scale',
        ],
        'crop_1' => [
            'width' => 400,
            'height' => 300,
            'transformation' => 'crop',
        ],
        'crop_2' => [
            'width' => 300,
            'height' => 200,
            'transformation' => 'crop',
        ],
        'crop_3' => [
            'width' => 200,
            'height' => 100,
            'transformation' => 'crop',
        ],
        'none_1' => [
            'width' => 400,
            'height' => 300,
        ],
        'none_2' => [
            'width' => 300,
            'height' => 200,
        ],
        'none_3' => [
            'width' => 200,
            'height' => 100,
        ],
    ],

    // Default settings
    '_default' => [
        'image' => [
            'width' => 1200,
            'height' => 800,
            'transformation' => 'scale'
        ],
        'thumb' => [
            'width' => 400,
            'height' => 400,
            'transformation' => 'crop'
        ],
    ],
];
