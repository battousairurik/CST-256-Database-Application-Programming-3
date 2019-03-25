<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class OrderDAO{
    
    public function addOrder($product, $customerID){
        DB::table('product_table')->insert([
            'PRODUCT' => $product,
            'CUSTOMER_ID' => $customerID
        ]);
        
    }
}