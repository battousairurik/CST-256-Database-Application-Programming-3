<?php

namespace App\Services\Business;

use mysqli;
use App\Models\CustomerDAO;
use App\Models\OrderDAO;
use Illuminate\Support\Facades\DB;

class OrderService{
    
    public function createOrder($firstName, $lastName, $product){
        //mysqli::autocommit(false);
        //mysqli::begin_transaction();
        $customer = new CustomerDAO();
        $customer->addCustomer($firstName, $lastName);
        $customerID = $this->getCustomerID($firstName);
        $num = (int)$customerID;
        $order = new OrderDAO();
        $order->addOrder($product, $num);
        //mysqli::commit();
    }
    public function getCustomerID($customer){
        
        $ID = DB::table('customer_table')->where('FIRST_NAME', $customer)->pluck('ID');
        return $ID;
    }
}