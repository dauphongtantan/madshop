<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    use App\Models\Order_detail;
    use Illuminate\Http\Request;
    use App\Mail\OrderSendmail;
    /**
     * 
     */
    class Order_detailController extends Controller
    {
        public function view()
        {
            $order_detail=Order_detail::all();
            return view('admin.order_detail.index',[
                'order_detail'=>$order_detail
            ]);
        }
    }
 ?>