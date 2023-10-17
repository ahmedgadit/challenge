<?php 

return [

    /*
    |--------------------------------------------------------------------------
    | System Models
    |--------------------------------------------------------------------------
    |
    | Models can be added here to so that the permissions get inserted while seeding
    |
    */

    'models' => [
        'county',
        'domesday',
        'edition',
        'entry',
        'name',
        'person',
        'alias',
        'provenance',
        'reference',
        'source',
        'statuses',
        'tenant',
        'user',
        'family'
    ],


    /*
    |--------------------------------------------------------------------------
    | Standard Permissions
    |--------------------------------------------------------------------------
    |
    | List of all the System Standard permissions for all CRUD operations
    |
    */

    'permissions'  => [
        'create',
        'list',
        'edit',
        'delete',
    ],


    /*
    |--------------------------------------------------------------------------
    | Model Sections
    |--------------------------------------------------------------------------
    |
    | List of all the Sections that are linked to the models/entities
    |
    */

    'sections'  => [
        // 'warehouse' => ['products', 'carrier'],
        // 'order' => ['products', 'lineitems'],
        // 'inventory' => ['transfer'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Probability Enumeration
    |--------------------------------------------------------------------------
    |
    | List of all the Probability
    */
    'probabilities'  => [
        ['name' => 'likely', 'value' => '1'],
        ['name' => 'probable', 'value' => '2'],
        ['name' => 'possible', 'value' => '3'],
    ],

];