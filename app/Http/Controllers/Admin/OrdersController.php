<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    use App\Models\Orders;
    use Illuminate\Http\Request;
    use App\Mail\OrderSendmail;
    /**
     * 
     */
    class OrdersController extends Controller
    {
        public function orders()
        {
            $orders=Orders::paginate(5);
            return view('admin.orders.index',[
                'orders'=>$orders
            ]);
        }
        
    }
 ?>