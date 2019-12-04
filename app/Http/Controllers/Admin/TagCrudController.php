<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TagRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TagCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TagCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Tag');
        $this->crud->setModel('App\Product');
        $this->crud->setModel('App\Category');
        $this->crud->setModel('App\Image');
        $this->crud->setModel('App\Order');
        $this->crud->setModel('App\OrderedProduct');
        $this->crud->setModel('App\Payment');
        $this->crud->setModel('App\PaymentMethod');
        $this->crud->setModel('App\Tag');


        $this->crud->setRoute(config('backpack.base.route_prefix') . '/tag');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/product');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/category');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/order');

        $this->crud->setEntityNameStrings('tag', 'tags');
        $this->crud->setEntityNameStrings('product', 'products');
        $this->crud->setEntityNameStrings('category', 'categories');
        $this->crud->setEntityNameStrings('order', 'orders');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TagRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
