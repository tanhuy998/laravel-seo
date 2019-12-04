<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OrderCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Order');

        $this->crud->setRoute(config('backpack.base.route_prefix') . '/order');

        $this->crud->setEntityNameStrings('order', 'orders');
        $this->crud->setEntityNameStrings('payment','payments');

        $this->crud->addField([
            'label' => 'Payment', // Label for HTML form field
            'type'  => 'select',  // HTML element which displaying transactions
            'name'  => 'id', // Table column which is FK for Customer table
            'entity'=> 'Order', // Function (method) in Customer model which return transactions
            'attribute' => 'name', // Column which user see in select box
            'model' => 'App\Payment' // Model which contain FK
         ]);

        //  $this->crud->addColumn([
        //     'label' => "payment",
        //     'name' => 'order_id',
        //     'entity' => 'payment',
        //     'attribute' => 'payment',
        //     'model' => 'App\Payment',
        //     'type' => 'select'
        // ]);
        
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
        // $this->crud->addColumns([
        //     [
        //     'label' => "Customer Name",
        //     'name' => 'customer_name',
        //     'type' => 'text'
        // ]
        // ,
        // [
        //     'label' => "Payment", // Table column heading
        //     'type' => "select",
        //     'name' => 'order_id', // the column that contains the ID of that connected entity;
        //     'entity' => 'order', // the method that defines the relationship in your Model
        //     'attribute' => "confirm", // foreign key attribute that is shown to user
        //     'model' => "App\Payment", // foreign key model
        // ]
        // ,
        // [
        //     'label' => 'Phone',
        //     'name' => 'phone',
        //     'type' => 'text'
        // ]
        // ]
        // );
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(OrderRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
