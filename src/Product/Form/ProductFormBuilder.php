<?php namespace Vedatakd\ProductsModule\Product\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class ProductFormBuilder extends FormBuilder
{
    /**
     * Skip these fields.
     *
     * @var array
     */
    protected $skips = [
        'views',
    ];

//    /**
//     * Fired just before saving the form.
//     */
//    public function onSaving()
//    {
//        $entry  = $this->getFormEntry();
//    }
}
