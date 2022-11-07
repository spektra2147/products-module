<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VedatakdModuleProductsCreateProductsFields extends Migration
{
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
        ],
        'description' => [
            'type' => 'anomaly.field_type.wysiwyg',
            'config' => [
                'height' => 500,
            ],
        ],
        'cat1' => 'anomaly.field_type.integer',
        'cat2' => 'anomaly.field_type.integer',
        'cat3' => 'anomaly.field_type.integer',
        'cat4' => 'anomaly.field_type.integer',
        'cat5' => 'anomaly.field_type.integer',
        'cat6' => 'anomaly.field_type.integer',
        'cat7' => 'anomaly.field_type.integer',
        'cat8' => 'anomaly.field_type.integer',
        'cat9' => 'anomaly.field_type.integer',
        'price' => [
            'type' => 'anomaly.field_type.decimal',
            'config' => [
                'decimal' => 2
            ],
        ],
        'currency' => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'handler' => 'currencies',
            ],
        ],
        'foreign_currencies' => 'anomaly.field_type.textarea',
        'cover_photo' => 'anomaly.field_type.url',
        'images' => [
            'type' => 'anomaly.field_type.files',
            'config' => [
                'folders' => ["images"],
                'mode' => 'upload',
            ]
        ],
        'documents' => [
            'type' => 'anomaly.field_type.files',
            'config' => [
                'folders' => ["documents"],
                'mode' => 'upload',
            ]
        ],
        'country' => 'anomaly.field_type.integer',
        'city' => 'anomaly.field_type.integer',
        'district' => 'anomaly.field_type.integer',
        'neighborhood' => 'anomaly.field_type.integer',
        'village' => 'anomaly.field_type.integer',
        'coordinate' => "anomaly.field_type.text",
        'publish_at' => 'anomaly.field_type.datetime',
        'finish_at' => 'anomaly.field_type.datetime',
        'views' => 'anomaly.field_type.integer',
        'meta_title'       => 'anomaly.field_type.text',
        'meta_description' => 'anomaly.field_type.textarea',
        'meta_keywords'    => 'anomaly.field_type.tags',
    ];

}
