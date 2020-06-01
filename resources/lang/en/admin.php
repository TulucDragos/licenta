<?php

return [
    'product' => [
        'title' => 'Products',

        'actions' => [
            'index' => 'Products',
            'create' => 'New Product',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'imagePath' => 'ImagePath',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];