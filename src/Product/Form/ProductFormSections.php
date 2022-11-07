<?php namespace Vedatakd\ProductsModule\Product\Form;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

class ProductFormSections
{

    /**
     * Handle the form sections.
     *
     * @param ProductFormBuilder $builder
     */
    public function handle(ProductFormBuilder $builder)
    {
        $builder->setSections(
            [
                'product'   => [
                    'tabs' => [
                        'general' => [
                            'title'  => 'vedatakd.module.products::tab.general',
                            'fields' => [
                                'name',
                                'slug',
                                'price',
                                'currency',
                            ],
                        ],
                        'details' => [
                            'title'  => 'vedatakd.module.products::tab.details',
                            'fields' => [
                                'cat1',
                                'description',
                            ],
                        ],
                        'files' => [
                            'title'  => 'vedatakd.module.products::tab.files',
                            'fields' => [
                                'images',
                                'documents'
                            ],
                        ],
                        'location' => [
                            'title'  => 'vedatakd.module.products::tab.location',
                            'fields' => [
                                'country',
                                'city',
                                'district',
                                'neighborhood',
                                'village',
                            ],
                        ],
                        'seo'     => [
                            'title'  => 'vedatakd.module.products::tab.seo',
                            'fields' => [
                                'meta_title',
                                'meta_description',
                                'meta_keywords',
                            ],
                        ],
                        'options' => [
                            'title'  => 'vedatakd.module.products::tab.options',
                            'fields' => [
                                'publish_at',
                                'finish_at',
                            ],
                        ],
                    ],
                ],
            ]
        );
    }
}
