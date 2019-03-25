<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class CustomerDAO{
    
    
    public function addCustomer($firstName, $lastName){
        DB::table('customer_table')->insert([
            'FIRST_NAME' => $firstName,
            'LAST_NAME' => $lastName
        ]);
    }
}