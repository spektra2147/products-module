<?php namespace Vedatakd\ProductsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Vedatakd\ProductsModule\Product\Contract\ProductRepositoryInterface;
use Vedatakd\ProductsModule\Product\ProductRepository;
use Anomaly\Streams\Platform\Model\Products\ProductsProductsEntryModel;
use Vedatakd\ProductsModule\Product\ProductModel;
use Illuminate\Routing\Router;

class ProductsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/products'           => 'Vedatakd\ProductsModule\Http\Controller\Admin\ProductsController@index',
        'admin/products/create'    => 'Vedatakd\ProductsModule\Http\Controller\Admin\ProductsController@create',
        'admin/products/edit/{id}' => 'Vedatakd\ProductsModule\Http\Controller\Admin\ProductsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Vedatakd\ProductsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Vedatakd\ProductsModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Vedatakd\ProductsModule\Event\ExampleEvent::class => [
        //    Vedatakd\ProductsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Vedatakd\ProductsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        ProductsProductsEntryModel::class => ProductModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        ProductRepositoryInterface::class => ProductRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
