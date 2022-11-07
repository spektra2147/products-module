<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VedatakdModuleProductsCreateProductsStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = false;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'products',
        'title_column' => 'name',
        'translatable' => true,
        'versionable' => false,
        'trashable' => true,
        'searchable' => true,
        'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'translatable' => true,
            'required' => true,
        ],
        'description' => [
            'translatable' => true,
        ],
        'cat1',
        'cat2',
        'cat3',
        'cat4',
        'cat5',
        'cat6',
        'cat7',
        'cat8',
        'cat9',
        'price',
        'currency',
        'foreign_currencies',
        'cover_photo',
        'images',
        'documents' => [
            'translatable' => true,
        ],
        'country',
        'city',
        'district',
        'neighborhood',
        'village',
        'coordinate',
        'publish_at',
        'finish_at',
        'views',
        'meta_title'       => [
            'translatable' => true,
        ],
        'meta_description' => [
            'translatable' => true,
        ],
        'meta_keywords'    => [
            'translatable' => true,
        ],
    ];

}
