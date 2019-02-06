<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class DataController extends Controller
{
    public function index() {
    	$result = DB::select('
    		SELECT sales.sale_date, users.name as user_name, stores.name as store_name, products.name as product_name, detail.qty, products.price, (products.price * detail.qty) as sub_total
			FROM sales_details as detail
			INNER JOIN sales sales on sales.id = detail.sales_id
			INNER JOIN products products on detail.product_id = products.id
			INNER JOIN stores stores on stores.id = products.store_id
			INNER JOIN users users on users.id = stores.user_id
    		');
    	return response()->json($result);
    }
}
