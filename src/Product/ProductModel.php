<?php namespace Vedatakd\ProductsModule\Product;

use Vedatakd\ProductsModule\Product\Contract\ProductInterface;
use Anomaly\Streams\Platform\Model\Products\ProductsProductsEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductModel extends ProductsProductsEntryModel implements ProductInterface
{
    use HasFactory;

    /**
     * @return ProductFactory
     */
    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
