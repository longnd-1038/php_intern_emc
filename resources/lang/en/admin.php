<?php

return [
    'footer' => [
        'title' => 'Ebook Shop Management',
    ],
    'head' => [
        'title' => 'Ebook Shop Management',
    ],
    'navbar' => [
        'logout' => 'Logout',
        'activity' => 'Activity Log',
        'full_name' => ':full_name',
        'read_more' => 'Read More Messages',
        'message' => ':message',
        'full_name' => ':full_name',
        'title_message' => 'Message Center',
    ],
    'sidebar' => [
        'dashboard' => 'Dashboard',
        'title' => 'Ebook shop',
        'category' => 'Category',
        'product' => 'Product',
        'request_product' => 'Request Product',
        'order' => 'Order',
        'user' => 'User',
    ],
    'dashboard' => [
        'title' => 'Dashboard',
        'new_order' => 'New Order',
        'earning' => 'Earnings (Monthly)',
        'deliver' => 'Success Deliver',
        'request_product' => 'Pending Requests',
    ],
    'notify' => [
        'order' => [
            'update' => [
                'success' => 'Your order was updated successfully',
                'fail' => 'Your order was not updated successfully',
            ],
            'delete' => [
                'success' => 'This order was deleted.',
                'fail' => 'This order was deleted fail.',
            ],
        ],
        'product' => [
            'create' => [
                'success' => 'This product has been created.',
                'fail' => 'Import list product failed',
                'import_success' => 'Import list product success',
                'import_fail' => 'Import list product failed',
                'request_success' => 'Request product success',
                'request_false' => 'Request product failed',
            ],
            'update' => [
                'success' => 'Your product was updated successfully',
                'fail' => 'Your product was not updated successfully',
            ],
            'delete' => [
                'success' => 'This product was deleted.',
            ],
            'find' => [
                'fail' => 'Cannot find this product',
            ],
        ]
    ],
    'table' => [
        'product' => [
            'action' => 'Action',
            'add_title' => 'Add Product',
            'edit_title' => 'Edit Product',
        ]
    ],
    'product' => [
        'add_title' => 'ADD PRODUCT',
        'name' => 'Name',
        'description' => 'Description',
        'information' => 'Information',
        'amount' => 'Stock Amount',
        'price' => 'Price',
        'discount' => 'Discount',
        'category' => 'Category',
        'image' => 'Image',
        'btn_close' => 'Close',
        'title' => 'Product Management',
        'add_cart' => 'Add To Cart',
    ],
    'comments' => [
        'all' => 'All Comments',
        'rate_btn' => 'Rate and Review',
        'out_of' => 'out of 5',
        'review' => 'Review',
        'submit_btn' => 'Submit Comment',
        'star1' => '1',
        'star2' => '2',
        'star3' => '3',
        'star4' => '4',
        'star5' => '5',
    ],
    'product_request' => [
        'add_request' => 'Add Product From Request',
        'username' => 'Full Name',
        'product' => 'Product Name',
        'description' => 'Description',
        'image' => 'Image',
        'action' => 'Action',
        'status' => 'Status',
    ],
    'enum' => [
        'request_status' => [
            0 => 'Pending',
            1 => 'Success',
            2 => 'Cancel',
        ],
    ],
    'status_request' => [
        'pending' => 'Pending',
        'success' => 'Success',
        'cancel' => 'Cancel',
    ],
    'order' => [
        'total_price' => 'Total',
        'full_name' => 'Full Name',
        'address' => 'Address',
        'phone_number' => 'Phone Number',
        'status' => 'Status',
        'action' => 'Action',
    ],
    'filter' => [
        'price_title' => 'Filter by Price',
        'category_title' => 'Filter by Category',
        'decrease_price' => 'Giá tăng dần',
        'increase_price' => 'Giá giảm dần',
        'search' => 'Search',
        'all' => 'Tất cả',
    ]
];
